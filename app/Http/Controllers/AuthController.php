<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function acceder()
    {
        return view('auth.acceso');
    }

    public function autenticar(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        $credentials['activo'] = 1;

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('admin')->withSuccess('Bienvenido al panel de Administración');
        }
        else{
            echo "hola";
        }

        return back()->withErrors([
            'email' => 'El email no está registrado.',
        ]);
    }

    public function salir(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('admin');
    }
}
