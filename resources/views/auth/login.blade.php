@extends('layaouts.app')

@section('title','Login')

@section('content')

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
    <h1 class="text-3xl font-bold text-center">Login</h1> 
    <form class="mt-4" action="" method="post">
        @csrf
        <input type="email" class="border border-gray-200 rounded-md-bg-gray-200 w-full texxt-lg p-2 my-2 focus:bg-white placeholder-gray-900" placeholder="Email" name="email" id="email">
        <input type="password" class="border border-gray-200 rounded-md-bg-gray-200 w-full texxt-lg p-2 my-2 focus:bg-white placeholder-gray-900" placeholder="Contraseña" name="password" id="password">
        
        @error('message')
            <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}} </p>
        @enderror
        <button type="submit" class="rounded-md bg-blue-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-blue-600">Ingresar</button>
    </form>
</div>
   

@endsection