<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManutencaoEquipamento extends Model
{
    use HasFactory;

    protected $table = 'manutencao_equipamentos';

    protected $fillable = [
        'cliente',
        'equipamento',
        'modelo',
        'numero_serie',
        'rma',
        'status',
        'valor_orcamento',
        'laudo_tecnico',
        'data_entrada',
        'data_saida',
        'observacoes',
        'user_id'
    ];

    protected $casts = [
        'data_entrada' => 'date',
        'data_saida' => 'date',
        'valor_orcamento' => 'decimal:2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}