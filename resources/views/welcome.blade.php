@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg text-center" style="background-color: #f2f2f2; background-image: url('https://example.com/futbol-camp-image.jpg'); background-size: cover;">
        <h2 class="text-4xl font-bold text-green-600 mb-4">{{ __('Benvingut a la nostra aplicació de gestió de jugadors i llibres!') }}</h2>

        <p class="text-lg text-gray-700 mb-6">{{ __('Aquesta aplicació et permet gestionar llibres i jugadors de futbol. Fes clic a continuació per començar!') }}</p>

        <!-- Botons de navegació -->
        <div class="space-x-4">
            <a href="{{ route('books.index') }}" class="bg-blue-600 text-white px-6 py-3 rounded-md text-xl hover:bg-blue-700 transition duration-300">
                {{ __('Gestionar Llibres') }}
            </a>
            <a href="{{ route('players.index') }}" class="bg-green-600 text-white px-6 py-3 rounded-md text-xl hover:bg-green-700 transition duration-300">
                {{ __('Gestionar Jugadors') }}
            </a>
        </div>
    </div>
@endsection
