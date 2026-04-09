<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('compatibilidades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sistema_id')->constrained()->onDelete('cascade');
            $table->foreignId('equipamento_id')->constrained()->onDelete('cascade');
            $table->text('observacao')->nullable();
            $table->timestamps();
            
            $table->unique(['sistema_id', 'equipamento_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('compatibilidades');
    }
};