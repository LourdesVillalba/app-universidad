@extends('layouts.app')

@section('title', 'Completar Perfil')

@section('content')
<div class="h-full flex items-center justify-center px-4 py-8">
    <div class="w-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-md p-6">
        {{-- Logo --}}
        <div class="flex justify-center mb-6">
            <img class="w-auto h-16" src="{{ asset('images/utn_logo.jpg') }}" alt="Logo">
        </div>

        <h3 class="text-xl font-bold text-center text-gray-700 mb-2">
            Completa tu perfil
        </h3>
        <p class="text-center text-gray-600 text-sm mb-6">
            Ingresa tus datos para que tu perfil quede completo
        </p>

        <form action="{{ route('perfil.store') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @csrf

            {{-- Columna Izquierda --}}
            <div class="space-y-4">
                <input type="text" name="nombre" placeholder="Nombre" required
                    class="block w-full px-4 py-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg 
                           focus:border-teal-400 focus:ring focus:ring-teal-300 focus:ring-opacity-40 focus:outline-none">

                <input type="text" name="apellido" placeholder="Apellido" required
                    class="block w-full px-4 py-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg 
                           focus:border-teal-400 focus:ring focus:ring-teal-300 focus:ring-opacity-40 focus:outline-none">

                <input type="text" name="dni" placeholder="DNI" required
                    class="block w-full px-4 py-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg 
                           focus:border-teal-400 focus:ring focus:ring-teal-300 focus:ring-opacity-40 focus:outline-none">

                <input type="text" name="carrera" placeholder="Carrera" required
                    class="block w-full px-4 py-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg 
                           focus:border-teal-400 focus:ring focus:ring-teal-300 focus:ring-opacity-40 focus:outline-none">

                <input type="text" name="comision" placeholder="Comisión"
                    class="block w-full px-4 py-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg 
                           focus:border-teal-400 focus:ring focus:ring-teal-300 focus:ring-opacity-40 focus:outline-none">

                <textarea name="descripcion" placeholder="Descripción"
                    class="block w-full px-4 py-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg 
                           focus:border-teal-400 focus:ring focus:ring-teal-300 focus:ring-opacity-40 focus:outline-none"></textarea>
            </div>

            {{-- Columna Derecha --}}
            <div class="space-y-4">
                {{-- WhatsApp --}}
                <div class="flex items-center">
                    <span class="mr-2 text-green-500"><i class="fab fa-whatsapp"></i></span>
                    <input type="text" name="telefono" placeholder="WhatsApp"
                        class="flex-1 block w-full px-4 py-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg 
                               focus:border-teal-400 focus:ring focus:ring-teal-300 focus:ring-opacity-40 focus:outline-none">
                </div>

                {{-- LinkedIn --}}
                <div class="flex items-center">
                    <span class="mr-2 text-blue-700"><i class="fab fa-linkedin"></i></span>
                    <input type="url" name="linkedin" placeholder="LinkedIn"
                        class="flex-1 block w-full px-4 py-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg 
                               focus:border-teal-400 focus:ring focus:ring-teal-300 focus:ring-opacity-40 focus:outline-none">
                </div>

                {{-- GitHub --}}
                <div class="flex items-center">
                    <span class="mr-2 text-gray-800"><i class="fab fa-github"></i></span>
                    <input type="text" name="github" placeholder="GitHub"
                        class="flex-1 block w-full px-4 py-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg 
                               focus:border-teal-400 focus:ring focus:ring-teal-300 focus:ring-opacity-40 focus:outline-none">
                </div>

                {{-- Dropzone --}}
                <h2>Foto perfil</h2>
                <div class="flex flex-col items-center justify-center w-full">
                    <label id="dropzone-label" for="dropzone-perfil" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500">SVG, PNG, JPG o GIF (MAX. 800x400px)</p>
                        </div>
                        <input id="dropzone-perfil" type="file" name="foto" class="hidden" />
                    </label>

                    {{-- Preview --}}
                    <img id="foto-preview" class="mt-4 w-64 h-64 object-cover rounded hidden">
                </div>

            {{-- Botón Guardar full width --}}
            <div class="md:col-span-2">
                <button type="submit"
                    class="w-full px-4 py-2 font-semibold text-white transition-colors duration-300 transform bg-teal-500 rounded-lg hover:bg-teal-400 focus:outline-none focus:ring focus:ring-teal-300 focus:ring-opacity-50">
                    Guardar Perfil
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    const inputFile = document.getElementById('dropzone-perfil');
    const previewImg = document.getElementById('foto-preview');
    const dropzoneLabel = document.getElementById('dropzone-label');

    inputFile.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImg.src = e.target.result;
                previewImg.classList.remove('hidden');
                dropzoneLabel.classList.add('hidden'); // Oculta el Dropzone
            }
            reader.readAsDataURL(file);
        }
    });
</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
@endsection
