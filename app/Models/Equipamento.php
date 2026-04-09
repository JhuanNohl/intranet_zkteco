<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    use HasFactory;
    
    protected $fillable = ['modelo'];
    
    public function compatibilidades()
    {
        return $this->hasMany(Compatibilidade::class);
    }
    
    public function sistemas()
    {
        return $this->belongsToMany(Sistema::class, 'compatibilidades')
                    ->withPivot('observacao')
                    ->withTimestamps();
    }
}