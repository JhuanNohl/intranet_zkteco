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
        // Permite usuários com permissão 'gerenciar_documentos' OU admin
        return $user->hasPermissionTo('gerenciar_documentos') || $user->hasRole('admin');
    }

    public function update(User $user, CommercialDocument $commercialDocument): bool
    {
        // Permite o criador ou admin do documento
        return $user->id === $commercialDocument->created_by || $user->hasRole('admin');
    }

    public function delete(User $user, CommercialDocument $commercialDocument): bool
    {
        // Permite o criador ou admin do documento
        return $user->id === $commercialDocument->created_by || $user->hasRole('admin');
    }
}