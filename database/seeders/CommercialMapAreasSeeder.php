<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CommercialMapArea;

class CommercialMapAreasSeeder extends Seeder
{
    public function run(): void
    {
        $areas = [
            ['region' => 'Norte', 'consultant' => 'Ronaldo Lima', 'states' => 'AC, AM, AP, PA, RO, RR, TO'],
            ['region' => 'Nordeste', 'consultant' => 'Ronaldo Lima', 'states' => 'AL, BA, CE, MA, PB, PE, PI, RN, SE'],
            ['region' => 'Sudeste (MG)', 'consultant' => 'Magna e Ronaldo', 'states' => 'MG'],
            ['region' => 'Sudeste (RJ e ES)', 'consultant' => 'Magna Silva', 'states' => 'RJ, ES'],
            ['region' => 'Sudeste (SP)', 'consultant' => 'Nilce/Lucas e Magna Silva', 'states' => 'SP'],
            ['region' => 'Sul', 'consultant' => 'Bruno Martins', 'states' => 'PR, SC, RS'],
            ['region' => 'Centro Oeste', 'consultant' => 'Bruno Martins', 'states' => 'DF, GO, MT, MS'],
        ];

        foreach ($areas as $area) {
            CommercialMapArea::create($area);
        }
    }
}