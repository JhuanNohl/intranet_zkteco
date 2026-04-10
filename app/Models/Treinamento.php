<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treinamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descricao',
        'url',
        'categoria',
        'icone',
        'abrir_nova_aba',
        'ativo',
        'ordem'
    ];

    protected $casts = [
        'abrir_nova_aba' => 'boolean',
        'ativo' => 'boolean',
    ];

    // Relacionamento com conclusões
    public function concluidoPor()
    {
        return $this->belongsToMany(User::class, 'treinamentos_concluidos', 'treinamento_id', 'user_id')
                    ->withTimestamps();
    }

    public function isConcluido($userId = null)
    {
        $userId = $userId ?? auth()->id();
        return $this->concluidoPor()->where('user_id', $userId)->exists();
    }

    // Relacionamento com favoritos
    public function favoritoPor()
    {
        return $this->belongsToMany(User::class, 'treinamentos_favoritos', 'treinamento_id', 'user_id')
                    ->withTimestamps();
    }

    public function isFavorito($userId = null)
    {
        $userId = $userId ?? auth()->id();
        return $this->favoritoPor()->where('user_id', $userId)->exists();
    }
}