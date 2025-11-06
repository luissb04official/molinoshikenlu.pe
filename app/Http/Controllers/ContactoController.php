<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index()
    {
        return view('contacto');
    }

    public function enviar(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'mensaje' => 'required|string|max:2000',
        ]);

        // Aquí podríamos enviar un correo o guardar en DB. Por ahora, solo simulamos éxito.

        return back()->with('success', 'Gracias por tu mensaje. Nos comunicaremos pronto.');
    }
}
