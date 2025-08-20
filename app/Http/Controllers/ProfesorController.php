<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Perfil;

class ProfesorController extends Controller
{
    public function verAlumnos()
    {
        $alumnos = User::with('perfil')->where('role', 'alumno')->paginate(10);
        return view('profesor.lista-alumnos', compact('alumnos'));
    }

    public function verPerfilAlumno($id)
    {
        $perfil = \App\Models\Perfil::with('user')->where('user_id', $id)->firstOrFail();

        return view('profesor.perfil-alumno', compact('perfil'));
    }

}
