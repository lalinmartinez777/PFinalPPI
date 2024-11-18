<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the appropriate dashboard based on user role.
     */
    public function index()
    {
        // Verifica el rol del usuario autenticado
        if (Auth::user()->perfil == 0) {
            // Si es admin, retorna la vista del administrador
            return view('admin.dashboard');
        } else {
            // Si es usuario normal, retorna la vista del usuario
            return view('user.dashboard');
        }
    }
}
