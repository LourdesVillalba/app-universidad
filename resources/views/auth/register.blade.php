@extends('layouts.app')

@section('title', 'Registrar')

@section('content')
<div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-6 text-center text-blue-700">Registrar Cuenta</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        {{-- Nombre --}}
        <div class="mb-4">
            <label for="name" class="block mb-1 font-medium text-gray-700">Nombre completo</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('name') border-red-500 @enderror">
            @error('name')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Email --}}
        <div class="mb-4">
            <label for="email" class="block mb-1 font-medium text-gray-700">Correo electrónico</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required
                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror">
            @error('email')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Contraseña --}}
        <div class="mb-4">
            <label for="password" class="block mb-1 font-medium text-gray-700">Contraseña</label>
            <input id="password" type="password" name="password" required
                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('password') border-red-500 @enderror">
            @error('password')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Confirmar Contraseña --}}
        <div class="mb-6">
            <label for="password_confirmation" class="block mb-1 font-medium text-gray-700">Confirmar contraseña</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required
                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        {{-- Submit --}}
        <button type="submit"
            class="w-full bg-blue-700 hover:bg-blue-800 text-white font-semibold py-2 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-300">
            Registrar
        </button>
    </form>
</div>
@endsection
