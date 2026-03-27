<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comunicado;

class ComunicadosSeeder extends Seeder
{
    public function run()
    {
        Comunicado::create([
            'titulo' => 'Novo horário de funcionamento',
            'conteudo' => 'A partir do dia 01/04/2026, o horário de funcionamento será das 8h às 18h.',
            'autor' => 'RH',
            'ativo' => true,
            'ordem' => 1
        ]);

        Comunicado::create([
            'titulo' => 'Manutenção programada',
            'conteudo' => 'O sistema estará indisponível no domingo das 22h às 02h para manutenção.',
            'autor' => 'TI',
            'ativo' => true,
            'ordem' => 2
        ]);

        Comunicado::create([
            'titulo' => 'Novo benefício',
            'conteudo' => 'A partir deste mês, todos os colaboradores terão direito ao vale alimentação.',
            'autor' => 'DP',
            'ativo' => true,
            'ordem' => 3
        ]);
    }
}
