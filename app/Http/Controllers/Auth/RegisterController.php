<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'registration' => 'nullable|string|unique:users',
            'position' => 'nullable|string|max:255',
            'sector' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'registration' => $request->registration,
            'position' => $request->position,
            'sector' => $request->sector,
            'phone' => $request->phone,
            'is_active' => true,
            'created_by' => Auth::id(),
        ]);

        // Atribuir role padrão (exemplo)
        $user->assignRole('user');

        Auth::login($user);

        return redirect()->route('home')->with('success', 'Cadastro realizado com sucesso!');
    }
}
