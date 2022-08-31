<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create(){ // creamos la funcion correspondiente que sera usado en la vista y esta no retornara una vista que es el register.blade.php dentro de la capeta auth
        return view('auth.register');
    }

    public function store(){ // con esta funcion vamos a validar los datos del formulario de registro de usuario
        $this->validate(request(),[ // aqui estoy validadndo los campos del formulkario registro que cumpla con los requisitos como que sean obligatorios o sean de algun tipó en especifico
            'name'=> 'required',
            'email'=> 'required|email',
            'password'=> 'required|confirmed',
        ]);
        
        $usuario_nuevo=User::create(request(['name','email','password']));

        auth()->login($usuario_nuevo);
        return redirect()->to('/'); // una vez que nos registramos esto nos redirige a la pagina principal
    }
}
