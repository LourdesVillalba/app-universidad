@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-4">Completar perfil</h2>
    <form action="{{ route('perfil.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="nombre" class="w-full border p-2" required>
        </div>

        <div class="mb-3">
            <label>Apellido</label>
            <input type="text" name="apellido" class="w-full border p-2" required>
        </div>

        <div class="mb-3">
            <label>DNI</label>
            <input type="text" name="dni" class="w-full border p-2" required>
        </div>

        <div class="mb-3">
            <label>Carrera</label>
            <input type="text" name="carrera" class="w-full border p-2" required>
        </div>

        <div class="mb-3">
            <label>Comisión</label>
            <input type="text" name="comision" class="w-full border p-2">
        </div>

        <div class="mb-3">
            <label>Descripción</label>
            <textarea name="descripcion" class="w-full border p-2"></textarea>
        </div>

        <div class="mb-3">
            <label>WhatsApp</label>
            <input type="text" name="telefono" class="w-full border p-2">
        </div>

        <div class="mb-3">
            <label>LinkedIn / Red profesional</label>
            <input type="url" name="linkedin" class="w-full border p-2">
        </div>

        <div class="mb-3">
            <label>Perfil de GitHub</label>
            <input type="text" name="github" class="w-full border p-2">
        </div>

        <div class="mb-3">
            <label>Foto de perfil</label>
            <input type="file" name="foto" class="w-full border p-2">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Guardar</button>
    </form>
</div>
@endsection
