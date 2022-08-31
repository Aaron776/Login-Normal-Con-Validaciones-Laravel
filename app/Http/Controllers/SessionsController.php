<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionsController extends Controller
{
    public function create(){ // creamos la funcion correspondiente que sera usado en la vista y esta no retornara una vista que es el login.blade.php dentro de la capeta auth
        return view('auth.login');
    }

    public function store(){ // esta funcion es para iniciar session en el login
        if(auth()->attempt(request(['email','password']))==false){
            return back()->withErrors([
                'message'=>'El email o contraseña son incorrectos'
            ]);
        }
        return redirect()->to('/');
    }

    public function destroy() { // esta funcion es para cerrar la sesion del usuario logeado
        auth()->logout();
        return redirect()->to('/');
    }
}
