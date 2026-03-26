<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Adicionar os campos extras
            $table->string('registration')->unique()->nullable()->after('email'); // matrícula
            $table->string('position')->nullable()->after('registration'); // cargo
            $table->string('sector')->nullable()->after('position'); // setor
            $table->string('phone')->nullable()->after('sector'); // telefone/ramal
            $table->boolean('is_active')->default(true)->after('phone'); // status
            $table->foreignId('created_by')->nullable()->after('is_active')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Remover os campos
            $table->dropForeign(['created_by']);
            $table->dropColumn([
                'registration',
                'position',
                'sector',
                'phone',
                'is_active',
                'created_by'
            ]);
        });
    }
};
