<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Treinamento;

class TreinamentoSeeder extends Seeder
{
    public function run(): void
    {
        $treinamentos = [
            // Técnico
            [
                'titulo' => 'ZKBioAccess IVS',
                'descricao' => 'Treinamento completo do software ZKBioAccess IVS',
                'url' => 'https://www.youtube.com/watch?v=exemplo',
                'categoria' => 'tecnico',
                'icone' => 'gear-fill',
                'ordem' => 1
            ],
            [
                'titulo' => 'SIP - Protocolo de Comunicação',
                'descricao' => 'Configuração e uso do SIP nos equipamentos ZKTeco',
                'url' => 'https://www.youtube.com/watch?v=exemplo',
                'categoria' => 'tecnico',
                'icone' => 'chat-dots-fill',
                'ordem' => 2
            ],
            [
                'titulo' => 'ZKBioCVSecurity - Melhorias',
                'descricao' => 'Novidades e melhorias do software ZKBioCVSecurity',
                'url' => 'https://www.youtube.com/watch?v=exemplo',
                'categoria' => 'tecnico',
                'icone' => 'cloud-upload-fill',
                'ordem' => 3
            ],
            [
                'titulo' => 'Noções básicas do ZKBioCVSecurity',
                'descricao' => 'Introdução ao ZKBioCVSecurity para iniciantes',
                'url' => 'https://www.youtube.com/watch?v=exemplo',
                'categoria' => 'tecnico',
                'icone' => 'book-fill',
                'ordem' => 4
            ],
            [
                'titulo' => 'Licenciamento do ZKBioCVSecurity',
                'descricao' => 'Como funciona o licenciamento do software',
                'url' => 'https://www.youtube.com/watch?v=exemplo',
                'categoria' => 'tecnico',
                'icone' => 'key-fill',
                'ordem' => 5
            ],
            [
                'titulo' => 'Linux - 20 comandos básicos',
                'descricao' => 'Comandos essenciais para trabalhar com Linux',
                'url' => 'https://www.youtube.com/watch?v=exemplo',
                'categoria' => 'tecnico',
                'icone' => 'terminal-fill',
                'ordem' => 6
            ],
            [
                'titulo' => 'CFTV IP - Fundamentos',
                'descricao' => 'Fundamentos de CFTV IP para segurança eletrônica',
                'url' => 'https://www.youtube.com/watch?v=exemplo',
                'categoria' => 'tecnico',
                'icone' => 'camera-fill',
                'ordem' => 7
            ],
            
            // Redes
            [
                'titulo' => 'Fundamentos de Rede pela Cisco',
                'descricao' => 'Curso completo com certificado de conclusão',
                'url' => 'https://www.netacad.com/',
                'categoria' => 'redes',
                'icone' => 'wifi',
                'ordem' => 10
            ],
            [
                'titulo' => 'Treinamento de Redes',
                'descricao' => 'Conceitos básicos e avançados de redes',
                'url' => 'https://www.youtube.com/watch?v=exemplo',
                'categoria' => 'redes',
                'icone' => 'hdd-network-fill',
                'ordem' => 11
            ],
            
            // Comercial
            [
                'titulo' => 'Treinamento Comercial - Julho/2024',
                'descricao' => 'Apresentação comercial e novos produtos',
                'url' => 'https://drive.google.com/...',
                'categoria' => 'comercial',
                'icone' => 'graph-up',
                'ordem' => 20
            ],
            [
                'titulo' => 'Treinamento Comercial - Agosto/2024',
                'descricao' => 'Atualizações e estratégias de vendas',
                'url' => 'https://drive.google.com/...',
                'categoria' => 'comercial',
                'icone' => 'bar-chart-fill',
                'ordem' => 21
            ],
            
            // Gestão
            [
                'titulo' => 'Treinamento PDCA',
                'descricao' => 'Metodologia PDCA para gestão da qualidade',
                'url' => 'https://www.youtube.com/watch?v=exemplo',
                'categoria' => 'gestao',
                'icone' => 'people-fill',
                'ordem' => 30
            ],
        ];

        foreach ($treinamentos as $item) {
            Treinamento::create($item);
        }
        
        echo "✅ " . count($treinamentos) . " treinamentos inseridos com sucesso!\n";
    }
}