<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('commercial_map_areas', function (Blueprint $table) {
            $table->id();
            $table->string('region'); // Norte, Nordeste, etc.
            $table->string('consultant'); // Nome do consultor
            $table->text('states')->nullable(); // Estados abrangidos (ex: MG, RJ, ES)
            $table->string('color')->nullable(); // Cor para o mapa (opcional)
            $table->json('coordinates')->nullable(); // Coordenadas geográficas (ex: [lat, lng] para polígonos)
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('commercial_map_areas');
    }
};