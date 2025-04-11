<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CustomPasswordResetController extends Controller
{
    public function showResetForm()
    {
        return view('layouts/restablecer'); // Reemplaza 'auth.reset' con la vista que deseas mostrar
    }

    public function reset(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        // Lógica de restablecimiento de contraseña sin token

        return redirect('/login'); // Puedes redirigir a donde desees después de restablecer la contraseña
    }
}
