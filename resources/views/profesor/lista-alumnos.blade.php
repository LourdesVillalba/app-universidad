@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-6">Lista de Alumnos</h2>

    <table class="w-full table-auto border border-gray-300">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 border">ID</th>
                <th class="px-4 py-2 border">Nombre completo</th>
                <th class="px-4 py-2 border">DNI</th>
            </tr>
        </thead>
        <tbody>

    @forelse($alumnos as $alumno)
    
        <tr class="cursor-pointer hover:bg-gray-100" onclick="window.location='{{ route('profesor.alumno.perfil', ['id' => $alumno->id]) }}'">

            <td class="px-4 py-2 border text-center">{{ $alumno->id }}</td>
            <td class="px-4 py-2 border">
                {{ optional($alumno->perfil)->nombre }} {{ optional($alumno->perfil)->apellido }}
            </td>
            <td class="px-4 py-2 border text-center">
                {{ optional($alumno->perfil)->dni ?? 'Sin datos' }}
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="3" class="px-4 py-4 text-center text-gray-500">No hay alumnos registrados.</td>
        </tr>
    @endforelse
</tbody>
    </table>

    <div class="mt-4">
        {{ $alumnos->links() }} {{-- paginación --}}
    </div>

    {{-- Botón Atrás --}}
    <div class="mt-6 text-left">
        <a href="{{ route('profesor.dashboard') }}" 
        class="inline-block px-5 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400 transition">
            ← Volver
        </a>
    </div>
</div>
@endsection
