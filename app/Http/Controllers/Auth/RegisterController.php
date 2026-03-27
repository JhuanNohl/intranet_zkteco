<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        auth()->login($user);

        return redirect()->route('home')->with('success', 'Bem-vindo à Intranet ZKTeco!');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'matricula' => ['nullable', 'string', 'max:50'],
            'cargo' => ['nullable', 'string', 'max:100'],
            'setor' => ['nullable', 'string', 'max:100'],
            'telefone' => ['nullable', 'string', 'max:20'],
            'password' => ['required', 'string', 'confirmed', Password::min(8)],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'matricula' => $data['matricula'] ?? null,
            'cargo' => $data['cargo'] ?? null,
            'setor' => $data['setor'] ?? null,
            'telefone' => $data['telefone'] ?? null,
            'password' => Hash::make($data['password']),
            'role' => 'user', // Define o papel padrão como 'user'
        ]);
    }
}
