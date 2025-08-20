@extends('layouts.app')

@section('title', 'Dashboard Profesor')

@section('content')
<div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md text-center">
    @auth
        <h1 class="text-4xl font-bold mb-6 text-purple-700">¡Bienvenido, Profesor {{ auth()->user()->name }}!</h1>
        <p class="text-gray-700 text-lg mb-6">Este es tu panel de profesor. Desde aquí podés acceder a tus funcionalidades.</p>

        {{-- Botón para ver la lista de alumnos --}}
        <a href="{{ route('profesor.alumnos') }}" 
           class="inline-block mt-4 px-6 py-3 text-white bg-purple-700 rounded-lg hover:bg-purple-800 
                  focus:outline-none focus:ring-4 focus:ring-purple-300 transition">
            Ver lista de alumnos
        </a>
    @else
        <h1 class="text-4xl font-bold mb-6 text-purple-700">¡Bienvenido!</h1>
        <p class="text-gray-700 mb-8">
            Por favor, inicia sesión como profesor para continuar.
        </p>

        <div class="flex justify-center space-x-4">
            <a href="{{ route('login') }}" 
               class="px-6 py-3 text-white bg-purple-700 rounded-lg hover:bg-purple-800 
                      focus:outline-none focus:ring-4 focus:ring-purple-300">
                Iniciar Sesión
            </a>

            <a href="{{ route('register') }}" 
               class="px-6 py-3 text-purple-700 bg-purple-100 rounded-lg hover:bg-purple-200 
                      focus:outline-none focus:ring-4 focus:ring-purple-300">
                Registrar
            </a>
        </div>
    @endauth
</div>
@endsection
