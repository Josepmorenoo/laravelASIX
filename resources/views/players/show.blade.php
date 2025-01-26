<!-- resources/views/players/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold text-center text-green-600">{{ __('Detalls del Jugador') }}</h2>

        <div class="mt-6">
            <h3 class="text-xl font-semibold">{{ __('Nom') }}: {{ $player->name }}</h3>
            <h3 class="text-xl font-semibold">{{ __('Posició') }}: {{ $player->position }}</h3>
        </div>

        <div class="mt-6 text-right">
            <a href="{{ route('players.edit', $player->id) }}" class="bg-yellow-600 text-white px-6 py-3 rounded-md text-lg">
                {{ __('Editar Jugador') }}
            </a>
        </div>
    </div>
@endsection
