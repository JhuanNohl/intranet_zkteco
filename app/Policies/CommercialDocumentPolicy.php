<?php

namespace App\Policies;

use App\Models\User;
use App\Models\CommercialDocument;

class CommercialDocumentPolicy
{
    public function viewAny(User $user): bool
    {
        return true; // Todos os usuários autenticados podem visualizar a lista
    }

    public function view(User $user, CommercialDocument $commercialDocument): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        // Permite usuários do setor comercial OU admin
        return $user->setor === 'comercial' || $user->setor === 'admin';
    }

    public function update(User $user, CommercialDocument $commercialDocument): bool
    {
        // Permite usuários do setor comercial OU admin
        return $user->setor === 'comercial' || $user->setor === 'admin';
    }

    public function delete(User $user, CommercialDocument $commercialDocument): bool
    {
        // Permite usuários do setor comercial OU admin
        return $user->setor === 'comercial' || $user->setor === 'admin';
    }
}