<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('matricula')->nullable()->after('email');
            $table->string('cargo')->nullable()->after('matricula');
            $table->string('setor')->nullable()->after('cargo');
            $table->string('telefone')->nullable()->after('setor');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['matricula', 'cargo', 'setor', 'telefone']);
        });
    }
};
