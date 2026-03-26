<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles; // Adicione esta linha

// Adicione os novos campos no Fillable
#[Fillable([
    'name',
    'email',
    'password',
    'registration',
    'position',
    'sector',
    'phone',
    'is_active',
    'created_by'
])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable, HasRoles; // Adicione HasRoles aqui

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'is_active' => 'boolean', // Adicione esta linha
        ];
    }

    /**
     * Relacionamento: usuário que criou este usuário
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * Relacionamento: usuários criados por este usuário
     */
    public function createdUsers()
    {
        return $this->hasMany(User::class, 'created_by');
    }
}
