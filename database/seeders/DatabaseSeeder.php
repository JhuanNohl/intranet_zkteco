<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Comentar ou remover a linha que cria o usuário
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        // Adicionar seu seeder de integrações
        $this->call(IntegracaoSeeder::class);
    }
}