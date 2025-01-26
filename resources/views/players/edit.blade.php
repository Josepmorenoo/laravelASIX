@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold text-center text-yellow-600">{{ __('Editar Jugador') }}</h2>

        <form method="POST" action="{{ route('players.update', $player->id) }}" class="space-y-4">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Nom -->
                <div class="flex flex-col">
                    <label for="name" class="text-gray-700">{{ __('Nom del Jugador') }}</label>
                    <input type="text" name="name" id="name" class="mt-2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" value="{{ $player->name }}" required>
                </div>

                <!-- Posició -->
                <div class="flex flex-col">
                    <label for="position" class="text-gray-700">{{ __('Posició') }}</label>
                    <select name="position" id="position" class="mt-2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
                        <option value="porter" {{ $player->position == 'porter' ? 'selected' : '' }}>{{ __('Porter') }}</option>
                        <option value="central" {{ $player->position == 'central' ? 'selected' : '' }}>{{ __('Central') }}</option>
                        <option value="lateral" {{ $player->position == 'lateral' ? 'selected' : '' }}>{{ __('Lateral') }}</option>
                        <option value="migcampista" {{ $player->position == 'migcampista' ? 'selected' : '' }}>{{ __('Migcampista') }}</option>
                        <option value="mitjapunta" {{ $player->position == 'mitjapunta' ? 'selected' : '' }}>{{ __('Mitjapunta') }}</option>
                        <option value="extrem" {{ $player->position == 'extrem' ? 'selected' : '' }}>{{ __('Extrem') }}</option>
                        <option value="delanter" {{ $player->position == 'delanter' ? 'selected' : '' }}>{{ __('Delanter') }}</option>
                    </select>
                </div>

                <!-- Edat -->
                <div class="flex flex-col">
                    <label for="age" class="text-gray-700">{{ __('Edat del Jugador') }}</label>
                    <input type="number" name="age" id="age" class="mt-2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" value="{{ $player->age }}" min="1" required>
                </div>
            </div>

            <!-- Camp "team" -->
            <div class="flex flex-col">
                <label for="team" class="text-gray-700">{{ __('Equip') }}</label>
                <input type="text" name="team" id="team" class="mt-2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" value="{{ $player->team }}">
            </div>

            <!-- Camp "nationality" -->
            <div class="flex flex-col">
                <label for="nationality" class="text-gray-700">{{ __('Nacionalitat') }}</label>
                <input type="text" name="nationality" id="nationality" class="mt-2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" value="{{ $player->nationality }}">
            </div>

            <!-- Botó per guardar els canvis -->
            <button type="submit" class="mt-6 w-full bg-yellow-600 text-white px-6 py-3 rounded-md text-xl">
                {{ __('Guardar Canvis') }}
            </button>
        </form>

        <!-- Botons Editar i Eliminar (fora del formulari) -->
        <div class="flex justify-between mt-8">
            <a href="{{ route('players.index') }}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
                {{ __('Tornar a la llista') }}
            </a>
            <form action="{{ route('players.destroy', $player->id) }}" method="POST" onsubmit="return confirm('Estàs segur que vols eliminar aquest jugador?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">
                    {{ __('Eliminar Jugador') }}
                </button>
            </form>
        </div>
    </div>
@endsection
