<?php

namespace Database\Seeders;

use App\Models\Comunicado;
use Illuminate\Database\Seeder;

class ComunicadoSeeder extends Seeder
{
    public function run(): void
    {
        Comunicado::create([
            'titulo' => 'Novo sistema de ponto eletrônico',
            'conteudo' => 'A partir do próximo mês, teremos um novo sistema de ponto eletrônico. Treinamentos serão realizados na próxima semana.',
            'autor' => 'RH',
            'ativo' => true,
            'ordem' => 1
        ]);

        Comunicado::create([
            'titulo' => 'Feriado do dia do Trabalhador',
            'conteudo' => 'Informamos que não haverá expediente no dia 1º de maio, em comemoração ao Dia do Trabalhador.',
            'autor' => 'RH',
            'ativo' => true,
            'ordem' => 2
        ]);

        Comunicado::create([
            'titulo' => 'Atualização do sistema de controle de acesso',
            'conteudo' => 'O sistema de controle de acesso será atualizado no sábado. Poderá haver instabilidade entre 10h e 12h.',
            'autor' => 'TI',
            'ativo' => true,
            'ordem' => 3
        ]);
    }
}
