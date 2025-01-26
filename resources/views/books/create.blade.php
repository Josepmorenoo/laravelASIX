@extends('layouts.layout')

@section('content')
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="p-6 bg-white border-b border-gray-200">
            <h2 class="text-2xl font-bold mb-4">Add New Book</h2>
            <form action="{{ route('books.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Nom:</label>
                    <input type="text" name="name" id="name" placeholder="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div class="mb-4">
                    <label for="author" class="block text-gray-700">Autor:</label>
                    <input type="text" name="author" id="author" placeholder="author" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div class="mb-4">
                    <label for="releaseYear" class="block text-gray-700">Any de publicació:</label>
                    <input type="number" name="releaseYear" id="releaseYear" placeholder="releaseYear" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div class="mb-4">
                    <label for="genre" class="block text-gray-700">Gènere:</label>
                    <input type="text" name="genre" id="genre" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Exemple: Ficció, Història">
                </div>
                <div class="mb-4">
                    <label for="price" class="block text-gray-700">Preu (€):</label>
                    <input type="number" step="0.01" name="price" id="price" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Exemple: 19.99">
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded">Add Book</button>
                    <a href="{{ route('books.index') }}" class="ml-2 bg-indigo-500 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded">Back to List</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

