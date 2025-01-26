@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold text-center text-red-600">{{ __('Confirmar Esborrat') }}</h2>

        <p class="text-lg mt-4">{{ __('Estàs segur que vols esborrar aquest jugador?') }}</p>

        <form method="POST" action="{{ route('players.destroy', $player->id) }}" class="mt-6">
            @csrf
            @method('DELETE')
            <button type="submit" class="w-full bg-red-600 text-white px-6 py-3 rounded-md text-xl hover:bg-red-700">
                {{ __('Esborrar Jugador') }}
            </button>
        </form>

        <div class="flex justify-center mt-4">
            <a href="{{ route('players.index') }}" class="text-blue-600 hover:text-blue-800">
                {{ __('Cancel·lar') }}
            </a>
        </div>
    </div>
@endsection
