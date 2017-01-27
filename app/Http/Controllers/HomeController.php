<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Styde\Html\Facades\Alert;

class HomeController extends Controller
{
    public function index()
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        if($usuario->role == 'supervisor') return view('home.supervisor', compact('person', 'usuario'));
        if($usuario->role == 'user') return view('home.user', compact('person', 'usuario'));
        if($usuario->role == 'admin') return view('home.admin', compact('person', 'usuario'));
    }

    public function cambiarPassword()
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        return view('auth.cambiarPassword', compact('usuario', 'person'));
    }

    public function cambiadoPassword(Request $request)
    {
        $usuario = Auth::user();
        $person = $usuario->person;

        if($usuario->id != $request->id) abort('404');
        $rules = [
            'id'        => 'required',
            'password'  => 'required|confirmed|min:6',
        ];

        $this->validate($request, $rules);
        $usuario->password = bcrypt($request->password);
        $usuario->save();

        Alert::message('Contraseña cambiada exitósamente', 'success');

        return view('auth.cambiarPassword', compact('usuario', 'person'));
    }
}
