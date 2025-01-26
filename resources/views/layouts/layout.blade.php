<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Gestió Jugadors') }}</title>
    @vite('resources/css/app.css')
</head>
<body>
<!-- Navbar -->
<nav class="bg-green-600 text-white p-4">
    <div class="container mx-auto">
        <ul class="flex space-x-6">
            <li><a href="{{ route('welcome') }}" class="hover:underline">{{ __('Inici') }}</a></li>
            <li><a href="{{ route('books.index') }}" class="hover:underline">{{ __('Llibres') }}</a></li>
            <li><a href="{{ route('players.index') }}" class="hover:underline">{{ __('Jugadors') }}</a></li>
        </ul>
    </div>
</nav>

<!-- Contingut de la vista -->
<div class="container mx-auto mt-6">
    @yield('content')
</div>

<!-- Footer -->
<footer class="bg-green-600 text-white p-4 mt-8">
    <div class="container mx-auto text-center">
        <p>{{ __('© 2025 Gestió Jugadors. Tots els drets reservats.') }}</p>
    </div>
</footer>
</body>
</html>
