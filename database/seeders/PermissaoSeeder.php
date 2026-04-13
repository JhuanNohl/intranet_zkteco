<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class PermissaoSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // ========== 1. DEFINIR PERMISSÕES ==========
        $permissoes = [
            // Setores (acesso básico)
            'ver_comercial',
            'ver_departamento_pessoal',
            'ver_financeiro',
            'ver_importacao',
            'ver_desenvolvimento',
            'ver_suporte',
            'ver_ti',
            'ver_treinamentos',
            'ver_expedicao',
            'ver_fabrica',
            'ver_manutencao',
            'ver_produtos',

            //Departamento Pessoal
            'gerenciar_dp',
            
            // Integrações
            'ver_integracoes',
            'editar_integracoes',
            'exportar_integracoes',
            
            // Manutenção
            'criar_rma',
            'editar_rma',
            'cancelar_rma',
            'dar_baixa_rma',
            
            // Fábrica
            'gerenciar_fabrica',

            // Treinamentos
            'gerenciar_treinamentos',
            'concluir_treinamentos',
            'favoritar_treinamentos',
            'criar_treinamentos',
            
            // Comercial
            'gerenciar_documentos',
            'gerenciar_mapa',
            
            //Suporte
            'gerenciar_suporte',

            // Comunicados
            'ver_comunicados',
            'criar_comunicados',
            'editar_comunicados',
            'excluir_comunicados',
            
            // Usuários e Permissões (Apenas Super Admin)
            'ver_usuarios',
            'criar_usuarios',
            'editar_usuarios',
            'excluir_usuarios',
            'gerenciar_permissoes',
        ];

        foreach ($permissoes as $permissao) {
            Permission::firstOrCreate(['name' => $permissao, 'guard_name' => 'web']);
        }

        // ========== 2. CRIAR ROLES ==========
        
        // SUPER ADMIN (acesso total)
        $superAdmin = Role::firstOrCreate(['name' => 'super_admin', 'guard_name' => 'web']);
        $superAdmin->syncPermissions(Permission::all());

        // ADMIN (acesso administrativo, sem gerenciar permissões)
        $admin = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);
        $admin->syncPermissions(
            Permission::whereNotIn('name', ['gerenciar_permissoes', 'excluir_usuarios'])->get()
        );

        // COMERCIAL
        $comercial = Role::firstOrCreate(['name' => 'comercial', 'guard_name' => 'web']);
        $comercial->syncPermissions([
            'ver_comercial',
            'gerenciar_documentos',
            'gerenciar_mapa',
            'ver_comunicados',
        ]);

        // MANUTENÇÃO
        $manutencao = Role::firstOrCreate(['name' => 'manutencao', 'guard_name' => 'web']);
        $manutencao->syncPermissions([
            'ver_manutencao',
            'criar_rma',
            'editar_rma',
            'cancelar_rma',
            'dar_baixa_rma',
            'ver_comunicados',
        ]);

        // DESENVOLVIMENTO (acesso às integrações)
        $desenvolvimento = Role::firstOrCreate(['name' => 'desenvolvimento', 'guard_name' => 'web']);
        $desenvolvimento->syncPermissions([
            'ver_desenvolvimento',
            'ver_integracoes',
            'editar_integracoes',
            'exportar_integracoes',
            'ver_comunicados',
        ]);

        // TREINAMENTOS (gestão de links)
        $treinamentosRole = Role::firstOrCreate(['name' => 'treinamentos', 'guard_name' => 'web']);
        $treinamentosRole->syncPermissions([
            'ver_treinamentos',
            'gerenciar_treinamentos',
            'concluir_treinamentos',
            'favoritar_treinamentos',
            'ver_comunicados',
        ]);

        // USUÁRIO BASE (acesso mínimo)
        $usuarioBase = Role::firstOrCreate(['name' => 'usuario_base', 'guard_name' => 'web']);
        $usuarioBase->syncPermissions([
            'ver_comunicados',
            'ver_treinamentos',
            'concluir_treinamentos',
            'favoritar_treinamentos',
        ]);

        // ========== 3. ATRIBUIR AO ADMIN EXISTENTE ==========
        $adminUser = User::where('email', 'admin@zkteco.com.br')->first();
        if ($adminUser) {
            $adminUser->assignRole('super_admin');
            $this->command->info('✅ Super Admin configurado: ' . $adminUser->email);
        } else {
            $this->command->warn('⚠️ Usuário admin@zkteco.com.br não encontrado. Crie-o primeiro.');
        }

        // ========== 4. CRIAR USUÁRIOS DE TESTE POR SETOR ==========
        $this->criarUsuariosTeste();
        
        $this->command->info("\n✅ Permissões e Roles criadas com sucesso!");
        $this->command->info("📋 Total de permissões: " . Permission::count());
        $this->command->info("👥 Total de roles: " . Role::count());
    }

    private function criarUsuariosTeste(): void
    {
        $roles = [
            'comercial' => 'comercial@zkteco.com.br',
            'manutencao' => 'manutencao@zkteco.com.br',
            'desenvolvimento' => 'desenvolvimento@zkteco.com.br',
            'treinamentos' => 'treinamentos@zkteco.com.br',
            'usuario_base' => 'usuario_base@zkteco.com.br',
        ];
        
        foreach ($roles as $role => $email) {
            $user = User::firstOrCreate(
                ['email' => $email],
                [
                    'name' => ucfirst($role),
                    'password' => bcrypt('12345678'),
                    'email_verified_at' => now(),
                ]
            );
            $user->syncRoles([$role]);
            $this->command->info("  - Usuário {$role}: {$email} / senha: 12345678");
        }
    }
}