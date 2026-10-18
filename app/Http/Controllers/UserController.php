<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    // ACTIVIDAD 2: relación 1:1 (usuario -> teléfono). Se muestra el usuario con id 2
    public function actividad2()
    {
        $user = User::findOrFail(2);
        return view('actividad2', compact('user'));
    }

    // ACTIVIDAD 3: relación 1:N (usuario -> varios teléfonos). Usuario con id 1
    public function actividad3()
    {
        $user = User::findOrFail(1);
        return view('actividad3', compact('user'));
    }

    // ACTIVIDAD 4: relación N:N (usuario -> roles) + teléfonos. Usuario con id 1
    public function index()
    {
        $user = User::findOrFail(1);
        return view('index', compact('user'));
    }
}
