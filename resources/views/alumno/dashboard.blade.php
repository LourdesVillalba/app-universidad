@extends('layouts.app')

@section('title', 'Dashboard Alumno')

@section('content')
<div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md text-center">
    @auth
        <h1 class="text-4xl font-bold mb-6 text-blue-700">¡Bienvenido, {{ auth()->user()->name }}!</h1>
        <p class="text-gray-700 text-lg mb-6">Este es tu panel de alumno. Desde aquí podés acceder a tu información personal y académica.</p>

        {{-- Botón para ver su perfil --}}
        <a href="{{ route('perfil.show') }}" 
           class="inline-block mt-4 px-6 py-3 text-white bg-blue-700 rounded-lg hover:bg-blue-800 
                  focus:outline-none focus:ring-4 focus:ring-blue-300 transition">
            Ver mi perfil
        </a>
    @else
        <h1 class="text-4xl font-bold mb-6 text-blue-700">¡Bienvenido!</h1>
        <p class="text-gray-700 mb-8">
            Por favor, inicia sesión como alumno para continuar.
        </p>

        <div class="flex justify-center space-x-4">
            <a href="{{ route('login') }}" 
               class="px-6 py-3 text-white bg-blue-700 rounded-lg hover:bg-blue-800 
                      focus:outline-none focus:ring-4 focus:ring-blue-300">
                Iniciar Sesión
            </a>

            <a href="{{ route('register') }}" 
               class="px-6 py-3 text-blue-700 bg-blue-100 rounded-lg hover:bg-blue-200 
                      focus:outline-none focus:ring-4 focus:ring-blue-300">
                Registrar
            </a>
        </div>
    @endauth
</div>
@endsection
