@extends('layaouts.app')

@section('title','Registrarse')

@section('content')
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
    <h1 class="text-3xl font-bold text-center">Registrarse</h1> 
    <form class="mt-4" action="" method="post">

        @csrf <!-- esto se poner en un formulario por seguridad-->
        <input type="text" class="border border-gray-200 rounded-md-bg-gray-200 w-full texxt-lg p-2 my-2 focus:bg-white placeholder-gray-900" placeholder="Nombres" name="name" id="nombre">
        @error('name')
            <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>
        @enderror
        <input type="email" class="border border-gray-200 rounded-md-bg-gray-200 w-full texxt-lg p-2 my-2 focus:bg-white placeholder-gray-900" placeholder="Email" name="email" id="email">
        @error('email')
            <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>
        @enderror
        <input type="password" class="border border-gray-200 rounded-md-bg-gray-200 w-full texxt-lg p-2 my-2 focus:bg-white placeholder-gray-900" placeholder="Contraseña" name="password" id="password">
        @error('password')
            <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>
        @enderror
        <input type="password" class="border border-gray-200 rounded-md-bg-gray-200 w-full texxt-lg p-2 my-2 focus:bg-white placeholder-gray-900" placeholder="Confirmar Contraseña" name="password_confirmation" id="password_confirmation">
        <button type="submit" class="rounded-md bg-blue-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-blue-600">Registrarse</button>
    </form>
</div>

@endsection