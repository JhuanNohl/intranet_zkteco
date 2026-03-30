<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommercialDocument extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'category', 'file_path', 'external_url', 'type', 'created_by', 'updated_by'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Relacionamento com o usuário que criou
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    // Relacionamento com o usuário que atualizou
    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    // Acessor para obter o link ou caminho do arquivo
    public function getUrlAttribute()
    {
        if ($this->type === 'file' && $this->file_path) {
            return asset('storage/' . $this->file_path);
        } elseif ($this->type === 'link' && $this->external_url) {
            return $this->external_url;
        }
        return null;
    }
}