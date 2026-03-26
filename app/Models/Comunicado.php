<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comunicado extends Model
{
    protected $fillable = [
        'titulo',
        'conteudo',
        'autor',
        'ativo',
        'data_validade',
        'ordem'
    ];

    protected $casts = [
        'ativo' => 'boolean',
        'data_validade' => 'date'
    ];

    // Scope para comunicados ativos
    public function scopeAtivos($query)
    {
        return $query->where('ativo', true)
            ->where(function ($q) {
                $q->whereNull('data_validade')
                    ->orWhere('data_validade', '>=', now());
            });
    }
}
