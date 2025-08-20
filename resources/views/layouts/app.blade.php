<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Mi Aplicación')</title>

    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">

    <!-- Flowbite CSS CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />

</head>
<body class="bg-gray-100 text-gray-900">

<header class="bg-white shadow">
    <div class="container mx-auto flex justify-between items-center p-4">
        <a href="#" class="text-xl font-bold text-blue-700">EduView</a>

        <nav>
            @auth
                <span class="mr-4">Hola, <strong>{{ auth()->user()->name }}</strong></span>

                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit"
                        class="text-white bg-red-600 hover:bg-red-700 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500">
                        Cerrar Sesión
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" class="mr-4 text-blue-700 hover:underline">Iniciar Sesión</a>
                <a href="{{ route('register') }}" class="text-blue-700 hover:underline">Registrar</a>
            @endauth
        </nav>
    </div>
</header>

<main class="container mx-auto mt-6 px-4">
    @yield('content')
</main>

<!-- Flowbite JS CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>

</body>
</html>
