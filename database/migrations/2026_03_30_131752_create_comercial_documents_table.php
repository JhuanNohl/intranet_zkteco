<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('commercial_documents', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Título do documento
            $table->text('description')->nullable(); // Descrição opcional
            $table->string('category'); // Categoria (ex: Processos e Fluxos, Formulários, Manuais, etc.)
            $table->string('file_path')->nullable(); // Caminho do arquivo (se for documento)
            $table->string('external_url')->nullable(); // Link externo (se for link)
            $table->enum('type', ['file', 'link'])->default('file'); // Tipo
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('commercial_documents');
    }
};