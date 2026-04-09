<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sistema extends Model
{
    use HasFactory;
    
    protected $fillable = ['nome'];
    
    public function compatibilidades()
    {
        return $this->hasMany(Compatibilidade::class);
    }
    
    public function equipamentos()
    {
        return $this->belongsToMany(Equipamento::class, 'compatibilidades')
                    ->withPivot('observacao')
                    ->withTimestamps();
    }
}