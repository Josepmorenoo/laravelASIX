@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg" style="background-color: #f2f2f2; background-image: url('https://example.com/futbol-camp-image.jpg'); background-size: cover;">
        <h2 class="text-2xl font-bold text-center text-green-600">{{ __('Contractar Nou Jugador') }}</h2>

        <form method="POST" action="{{ route('players.store') }}" class="space-y-6">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Nom del Jugador -->
                <div class="flex flex-col">
                    <label for="name" class="text-gray-700 font-semibold">{{ __('Nom del Jugador') }}</label>
                    <input type="text" name="name" id="name" class="mt-2 px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required>
                </div>

                <!-- Posició -->
                <div class="flex flex-col">
                    <label for="position" class="text-gray-700 font-semibold">{{ __('Posició') }}</label>
                    <select name="position" id="position" class="mt-2 px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required>
                        <option value="porter">{{ __('Porter') }}</option>
                        <option value="central">{{ __('Central') }}</option>
                        <option value="lateral">{{ __('Lateral') }}</option>
                        <option value="migcampista">{{ __('Migcampista') }}</option>
                        <option value="mitjapunta">{{ __('Mitjapunta') }}</option>
                        <option value="extrem">{{ __('Extrem') }}</option>
                        <option value="delanter">{{ __('Delanter') }}</option>
                    </select>
                </div>

                <!-- Edat del Jugador -->
                <div class="flex flex-col">
                    <label for="age" class="text-gray-700 font-semibold">{{ __('Edat del Jugador') }}</label>
                    <input type="number" name="age" id="age" class="mt-2 px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" min="1" value="18" required>
                </div>
            </div>

            <!-- Nou camp "team" -->
            <div class="flex flex-col">
                <label for="team" class="text-gray-700 font-semibold">{{ __('Equip') }}</label>
                <input type="text" name="team" id="team" class="mt-2 px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <!-- Nou camp "nationality" -->
            <div class="flex flex-col">
                <label for="nationality" class="text-gray-700 font-semibold">{{ __('Nacionalitat') }}</label>
                <input type="text" name="nationality" id="nationality" class="mt-2 px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <!-- Botó per crear el jugador -->
            <div class="text-center">
                <button type="submit" class="bg-green-600 text-white px-8 py-4 rounded-md text-xl hover:bg-green-700 transition duration-300">
                    <i class="fas fa-futbol"></i> {{ __('Afegir Jugador') }}
                </button>
            </div>
        </form>

        <!-- Botó per tornar a la llista de jugadors -->
        <div class="text-right mt-6">
            <a href="{{ route('players.index') }}" class="bg-blue-600 text-white px-8 py-4 rounded-md text-xl hover:bg-blue-700 transition duration-300">
                <i class="fas fa-arrow-left"></i> {{ __('Tornar a la Llista de Jugadors') }}
            </a>
        </div>
    </div>
@endsection
