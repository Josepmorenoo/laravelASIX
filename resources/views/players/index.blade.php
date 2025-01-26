@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg text-center" style="background-color: #f2f2f2; background-image: url('https://example.com/futbol-camp-image.jpg'); background-size: cover;">
        <h2 class="text-4xl font-bold text-green-600 mb-4">{{ __('Llista de Jugadors') }}</h2>

        <p class="text-lg text-gray-700 mb-6">{{ __('Aquesta aplicació et permet gestionar jugadors de futbol. Fes clic a continuació per afegir nous jugadors o editar-ne els existents.') }}</p>

        <!-- Botó per afegir un nou jugador -->
        <div class="text-right mb-4">
            <a href="{{ route('players.create') }}" class="bg-green-600 text-white px-6 py-3 rounded-md text-lg hover:bg-green-700 transition duration-300">
                {{ __('Afegir Nou Jugador') }}
            </a>
        </div>

        <!-- Comprovació si hi ha jugadors -->
        @if($players->isEmpty())
            <p class="text-center text-gray-600">{{ __('Encara no hi ha jugadors.') }}</p>
        @else
            <!-- Taula de jugadors -->
            <table class="min-w-full table-auto">
                <thead>
                <tr>
                    <th class="px-4 py-2 text-left">{{ __('Nom') }}</th>
                    <th class="px-4 py-2 text-left">{{ __('Posició') }}</th>
                    <th class="px-4 py-2 text-left">{{ __('Edat') }}</th>
                    <th class="px-4 py-2 text-left">{{ __('Equip') }}</th>
                    <th class="px-4 py-2 text-left">{{ __('Nacionalitat') }}</th>
                    <th class="px-4 py-2 text-left">{{ __('Accions') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($players as $player)
                    <tr>
                        <td class="px-4 py-2">{{ $player->name }}</td>
                        <td class="px-4 py-2">{{ $player->position }}</td>
                        <td class="px-4 py-2">{{ $player->age }}</td>
                        <td class="px-4 py-2">{{ $player->team }}</td>
                        <td class="px-4 py-2">{{ $player->nationality }}</td> <!-- Aquí es mostra la nacionalitat -->
                        <td class="px-4 py-2">
                            <a href="{{ route('players.edit', $player->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition duration-300">
                                {{ __('Editar') }}
                            </a>

                            <form action="{{ route('players.destroy', $player->id) }}" method="POST" class="inline-block ml-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 transition duration-300">
                                    {{ __('Eliminar') }}
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
