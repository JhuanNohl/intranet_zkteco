<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('manutencao_equipamentos', function (Blueprint $table) {
            $table->id();
            $table->string('cliente');
            $table->string('equipamento');
            $table->string('modelo');
            $table->string('numero_serie')->nullable();
            $table->string('rma')->unique();
            $table->enum('status', [
                'aguardando_recebimento',
                'em_analise',
                'em_garantia',
                'orcamento_enviado',
                'aguardando_pagamento',
                'em_manutencao',
                'concluido',
                'cancelado'
            ])->default('aguardando_recebimento');
            $table->boolean('garantia')->default(false);
            $table->decimal('valor_orcamento', 10, 2)->nullable();
            $table->text('laudo_tecnico')->nullable();
            $table->date('data_entrada');
            $table->date('data_saida')->nullable();
            $table->text('observacoes')->nullable();
            $table->foreignId('user_id')->constrained(); // quem registrou
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('manutencao_equipamentos');
    }
};