<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sistema;
use App\Models\Equipamento;
use App\Models\Compatibilidade;
use Illuminate\Support\Facades\DB;

class IntegracaoSeeder extends Seeder
{
    public function run(): void
    {
        // Limpar tabelas existentes
        DB::statement('TRUNCATE TABLE compatibilidades RESTART IDENTITY CASCADE;');
        DB::statement('TRUNCATE TABLE sistemas RESTART IDENTITY CASCADE;');
        DB::statement('TRUNCATE TABLE equipamentos RESTART IDENTITY CASCADE;');
        
        // Caminho do CSV
        $csvPath = storage_path('app/Integracoes.csv');
        
        if (!file_exists($csvPath)) {
            echo "ERRO: Arquivo CSV não encontrado em: {$csvPath}\n";
            return;
        }
        
        echo "Lendo arquivo CSV: {$csvPath}\n";
        
        // Detectar encoding do arquivo
        $content = file_get_contents($csvPath);
        $encoding = mb_detect_encoding($content, ['UTF-8', 'ISO-8859-1', 'WINDOWS-1252'], true);
        
        if ($encoding === false) {
            $encoding = 'ISO-8859-1';
        }
        
        echo "Encoding detectado: {$encoding}\n";
        
        // Converter para UTF-8 se necessário
        if ($encoding !== 'UTF-8') {
            $content = mb_convert_encoding($content, 'UTF-8', $encoding);
            echo "Convertido de {$encoding} para UTF-8\n";
        }
        
        // Salvar conteúdo convertido temporariamente
        $tempPath = storage_path('app/temp_' . uniqid() . '.csv');
        file_put_contents($tempPath, $content);
        
        // Ler o arquivo convertido
        $handle = fopen($tempPath, 'r');
        if ($handle === false) {
            echo "ERRO: Não foi possível abrir o arquivo CSV\n";
            return;
        }
        
        $linhas = [];
        while (($data = fgetcsv($handle, 0, ',', '"', '\\')) !== false) {
            // Limpar caracteres especiais e espaços
            $data = array_map(function($item) {
                // Remover BOM se existir
                $item = preg_replace('/^\xEF\xBB\xBF/', '', $item);
                // Remover caracteres de controle
                $item = preg_replace('/[\x00-\x1F\x7F]/u', '', $item);
                // Trim normal
                return trim($item);
            }, $data);
            
            // Filtrar linhas completamente vazias
            if (count($data) > 0 && !empty($data[0])) {
                $linhas[] = $data;
            }
        }
        fclose($handle);
        
        // Remover arquivo temporário
        unlink($tempPath);
        
        echo "Total de linhas lidas: " . count($linhas) . "\n";
        
        if (count($linhas) < 3) {
            echo "ERRO: CSV com poucas linhas\n";
            return;
        }
        
        // Mostrar primeiras linhas para debug
        echo "\nPrimeiras linhas do CSV (primeiros 5 campos):\n";
        for ($i = 0; $i < min(3, count($linhas)); $i++) {
            $amostra = array_slice($linhas[$i], 0, 5);
            echo "Linha " . ($i+1) . ": " . json_encode($amostra, JSON_UNESCAPED_UNICODE) . "\n";
        }
        
        // A segunda linha contém os nomes dos sistemas (linha 1 é "CONTROLE DE ACESSO")
        $sistemasNomes = $linhas[1];
        
        // Remover primeiro elemento se estiver vazio ou for "CONTROLE DE ACESSO"
        if (empty($sistemasNomes[0]) || stripos($sistemasNomes[0], 'CONTROLE') !== false) {
            array_shift($sistemasNomes);
        }
        
        // Filtrar valores vazios
        $sistemasNomes = array_filter($sistemasNomes, function($nome) {
            $nome = trim($nome);
            return !empty($nome) && $nome !== '';
        });
        
        $sistemasNomes = array_values($sistemasNomes);
        
        echo "\nEncontrados " . count($sistemasNomes) . " sistemas:\n";
        foreach (array_slice($sistemasNomes, 0, 10) as $idx => $nome) {
            echo "  " . ($idx+1) . ". {$nome}\n";
        }
        if (count($sistemasNomes) > 10) {
            echo "  ... e mais " . (count($sistemasNomes) - 10) . " sistemas\n";
        }
        
        // Inserir sistemas no banco (com tratamento de caracteres especiais)
        $sistemas = [];
        $sistemasPorNome = [];
        
        foreach ($sistemasNomes as $nome) {
            $nome = trim($nome);
            // Limpar caracteres problemáticos
            $nome = preg_replace('/[^\p{L}\p{N}\s\-\*\(\)\.]/u', '', $nome);
            $nome = preg_replace('/\s+/', ' ', $nome);
            
            if (!empty($nome)) {
                try {
                    $sistema = Sistema::firstOrCreate(['nome' => $nome]);
                    $sistemas[] = $sistema;
                    $sistemasPorNome[$nome] = $sistema;
                    echo "  ✓ Sistema: {$nome}\n";
                } catch (\Exception $e) {
                    echo "  ✗ Erro ao inserir sistema '{$nome}': " . $e->getMessage() . "\n";
                }
            }
        }
        
        echo "\n✅ Sistemas cadastrados: " . count($sistemas) . "\n";
        
        // Processar equipamentos (linhas 3 em diante)
        $equipamentosCount = 0;
        $compatibilidadesCount = 0;
        $errosCount = 0;
        
        echo "\nProcessando equipamentos...\n";
        
        for ($i = 2; $i < count($linhas); $i++) {
            $linha = $linhas[$i];
            
            if (empty($linha) || empty($linha[0])) {
                continue;
            }
            
            $modelo = trim($linha[0]);
            $modelo = preg_replace('/[^\p{L}\p{N}\s\-\*\(\)\[\]\.]/u', '', $modelo);
            $modelo = preg_replace('/\s+/', ' ', $modelo);
            
            if (empty($modelo)) {
                continue;
            }
            
            try {
                // Criar equipamento
                $equipamento = Equipamento::firstOrCreate(['modelo' => $modelo]);
                $equipamentosCount++;
                
                if ($equipamentosCount % 20 == 0) {
                    echo "  Processados {$equipamentosCount} equipamentos...\n";
                }
                
                // Processar compatibilidades para cada sistema
                for ($j = 0; $j < count($sistemasNomes); $j++) {
                    $colunaIndex = $j + 1; // +1 porque coluna 0 é o modelo
                    
                    if ($colunaIndex < count($linha)) {
                        $observacao = trim($linha[$colunaIndex]);
                        // Limpar caracteres problemáticos
                        $observacao = preg_replace('/[^\p{L}\p{N}\p{P}\s]/u', '', $observacao);
                        $observacao = preg_replace('/\s+/', ' ', $observacao);
                        
                        if (!empty($observacao)) {
                            $sistemaNome = $sistemasNomes[$j];
                            $sistemaNome = preg_replace('/[^\p{L}\p{N}\s\-\*\(\)\.]/u', '', $sistemaNome);
                            
                            if (isset($sistemasPorNome[$sistemaNome])) {
                                $sistema = $sistemasPorNome[$sistemaNome];
                                
                                Compatibilidade::updateOrCreate(
                                    [
                                        'sistema_id' => $sistema->id,
                                        'equipamento_id' => $equipamento->id
                                    ],
                                    ['observacao' => $observacao]
                                );
                                $compatibilidadesCount++;
                            }
                        }
                    }
                }
            } catch (\Exception $e) {
                $errosCount++;
                echo "  ✗ Erro ao processar equipamento '{$modelo}': " . $e->getMessage() . "\n";
                if ($errosCount >= 10) {
                    echo "  Muitos erros. Abortando...\n";
                    break;
                }
            }
        }
        
        echo "\n✅ IMPORTACAO CONCLUÍDA!\n";
        echo "📊 Estatísticas:\n";
        echo "   - Sistemas: " . count($sistemas) . "\n";
        echo "   - Equipamentos: {$equipamentosCount}\n";
        echo "   - Compatibilidades: {$compatibilidadesCount}\n";
        if ($errosCount > 0) {
            echo "   - Erros: {$errosCount}\n";
        }
    }
}