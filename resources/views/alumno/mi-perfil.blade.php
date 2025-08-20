@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto bg-white shadow-xl rounded-lg overflow-hidden">
    <div class="bg-gradient-to-r from-indigo-600 to-purple-600 px-6 py-8 text-white">
        <div class="flex items-center space-x-6">
            {{-- Foto del perfil --}}
            @if($perfil->foto)
                <img src="{{ asset('storage/' . $perfil->foto) }}" alt="Foto de perfil"
                     class="w-28 h-28 rounded-full object-cover ring-4 ring-white">
            @else
                <div class="w-28 h-28 rounded-full bg-white text-gray-500 flex items-center justify-center text-sm font-medium">
                    Sin foto
                </div>
            @endif

            <div>
                <h2 class="text-3xl font-bold">{{ $perfil->nombre }} {{ $perfil->apellido }}</h2>
                <p class="text-sm text-indigo-100 mt-1">DNI: {{ $perfil->dni }}</p>
            </div>
        </div>
    </div>

    <div class="px-6 py-6 grid grid-cols-1 md:grid-cols-2 gap-6 bg-gray-50">
        <div>
            <h4 class="text-lg font-semibold mb-2">Información académica</h4>
            <p><strong>Carrera:</strong> {{ $perfil->carrera }}</p>
            <p><strong>Comisión:</strong> {{ $perfil->comision }}</p>
        </div>
        <div>
            <h4 class="text-lg font-semibold mb-2">Contacto</h4>
            <p><strong>WhatsApp:</strong>
                @if($perfil->telefono)
                    <a href="https://wa.me/{{ preg_replace('/\D/', '', $perfil->telefono) }}"
                       class="text-indigo-600 hover:underline" target="_blank">
                        {{ $perfil->telefono }}
                    </a>
                @else
                    No cargado
                @endif
            </p>
            <p><strong>LinkedIn:</strong>
                @if($perfil->linkedin)
                    <a href="{{ $perfil->linkedin }}" class="text-indigo-600 hover:underline" target="_blank">
                        Ver perfil
                    </a>
                @else
                    No cargado
                @endif
            </p>
            <p><strong>GitHub:</strong>
                @if($perfil->github)
                    <a href="https://github.com/{{ $perfil->github }}" class="text-indigo-600 hover:underline" target="_blank">
                        Ver perfil
                    </a>
                @else
                    No cargado
                @endif
            </p>
        </div>
    </div>

    <div class="px-6 py-6">
        <h4 class="text-lg font-semibold mb-2">Sobre mí</h4>
        <p class="text-gray-700">
            {{ $perfil->descripcion ?? 'No se ha agregado una descripción.' }}
        </p>
    </div>



    <div class="bg-gray-100 px-6 py-4 text-right">
        <a href="{{ route('perfil.edit') }}"
           class="inline-block bg-indigo-600 text-white font-semibold px-4 py-2 rounded hover:bg-indigo-700 transition">
            Editar perfil
        </a>
    </div>
</div>


@endsection
