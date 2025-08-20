@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-4">Editar perfil</h2>
    <form action="{{ route('perfil.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @foreach (['nombre', 'apellido', 'dni', 'carrera', 'comision', 'descripcion', 'telefono'] as $campo)
            <div class="mb-3">
                <label class="capitalize">{{ $campo }}</label>
                @if($campo === 'descripcion')
                    <textarea name="{{ $campo }}" class="w-full border p-2">{{ old($campo, $perfil->$campo) }}</textarea>
                @else
                    <input type="text" name="{{ $campo }}" class="w-full border p-2" value="{{ old($campo, $perfil->$campo) }}">
                @endif
            </div>
        @endforeach

        {{-- Campos de redes sociales --}}
        <div class="mb-3">
            <label>LinkedIn / Red profesional</label>
            <input type="url" name="linkedin" class="w-full border p-2" value="{{ old('linkedin', $perfil->linkedin) }}">
        </div>

        <div class="mb-3">
            <label>Perfil de GitHub</label>
            <input type="text" name="github" class="w-full border p-2" value="{{ old('github', $perfil->github) }}">
        </div>

        <div class="mb-4">
            <label>Foto de perfil</label>
            <input type="file" name="foto" class="w-full border p-2">

            @if($perfil->foto)
                <div class="mt-2">
                    <p class="text-sm">Foto actual:</p>
                    <img src="{{ asset('storage/' . $perfil->foto) }}" alt="Foto actual" class="w-24 h-24 rounded">
                </div>

                <div class="mt-2">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="eliminar_foto" class="mr-2">
                        <span class="text-sm text-red-600">Eliminar foto actual</span>
                    </label>
                </div>
            @endif
        </div>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Guardar cambios</button>
    </form>
</div>
@endsection