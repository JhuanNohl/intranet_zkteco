<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compatibilidade extends Model
{
    use HasFactory;
    
    protected $fillable = ['sistema_id', 'equipamento_id', 'observacao'];
    
    public function sistema()
    {
        return $this->belongsTo(Sistema::class);
    }
    
    public function equipamento()
    {
        return $this->belongsTo(Equipamento::class);
    }
}