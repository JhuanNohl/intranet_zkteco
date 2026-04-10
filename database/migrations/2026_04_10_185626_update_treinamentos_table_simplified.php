<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Se a tabela já existe, recriar
        Schema::dropIfExists('treinamentos_acessos');
        Schema::dropIfExists('treinamentos_favoritos');
        Schema::dropIfExists('treinamentos_concluidos');
        Schema::dropIfExists('treinamentos');
        
        Schema::create('treinamentos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descricao')->nullable();
            $table->string('url');
            $table->string('categoria')->default('geral');
            $table->string('icone')->default('link-45deg');
            $table->boolean('abrir_nova_aba')->default(true);
            $table->boolean('ativo')->default(true);
            $table->integer('ordem')->default(0);
            $table->timestamps();
        });

        // Tabela de conclusões
        Schema::create('treinamentos_concluidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('treinamento_id')->constrained()->onDelete('cascade');
            $table->timestamp('concluido_em');
            $table->unique(['user_id', 'treinamento_id']);
            $table->timestamps();
        });

        // Tabela de favoritos
        Schema::create('treinamentos_favoritos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('treinamento_id')->constrained()->onDelete('cascade');
            $table->unique(['user_id', 'treinamento_id']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('treinamentos_favoritos');
        Schema::dropIfExists('treinamentos_concluidos');
        Schema::dropIfExists('treinamentos');
    }
};