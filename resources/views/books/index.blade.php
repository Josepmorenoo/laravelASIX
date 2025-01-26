@extends('layouts.layout')

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-6 bg-white border-b border-gray-200">
                <h2 class="text-2xl font-bold mb-4">CRUD de Books</h2>
                <div class="flex justify-end mb-4">
                    <a class="bg-green-500 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded" href="{{ route('books.create') }}">Add Book</a>
                </div>
                <div class="overflow-x-auto">
                    <div class="hidden md:block">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Autor</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Any de publicació</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Genere</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Preu</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            @forelse($books as $book)
                                <tr class="hover:bg-gray-100">
                                    <td class="px-6 py-4 text-sm text-gray-900"><a class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-1 px-2 rounded" href="{{ route('books.show', $book->id) }}">{{ $book->id }}</a></td>
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ $book->title }}</td> <!-- Canviat de "name" a "title" -->
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ $book->author }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ $book->published_year }}</td> <!-- Canviat de "releaseYear" a "published_year" -->
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ $book->genre }}</td> <!--  -->
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ $book->price }}</td> <!--  -->
                                    <td class="px-6 py-4 text-sm flex space-x-2">
                                        <a class="bg-yellow-500 hover:bg-yellow-700 text-white font-semibold py-1 px-2 rounded" href="{{ route('books.edit', $book->id) }}">Edit</a>
                                        <a class="ml-2 bg-red-500 hover:bg-red-700 text-white font-semibold py-1 px-2 rounded" href="{{ route('books.delete', $book->id) }}">Delete</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-4 text-center text-sm text-gray-500">No hi han dades a la Base de dades!</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="block md:hidden">
                        <ul class="divide-y divide-gray-200">
                            @forelse($books as $book)
                                <li class="py-4 flex flex-col">
                                    <div class="flex justify-between items-center">
                                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-1 px-2 rounded" href="{{ route('books.show', $book->id) }}">ID: {{ $book->id }}</a>
                                        <div class="flex space-x-2">
                                            <a class="bg-yellow-500 hover:bg-yellow-700 text-white font-semibold py-1 px-2 rounded" href="{{ route('books.edit', $book->id) }}">Edit</a>
                                            <a class="bg-red-500 hover:bg-red-700 text-white font-semibold py-1 px-2 rounded" href="{{ route('books.delete', $book->id) }}">Delete</a>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <p class="text-sm text-gray-900"><strong>Nom:</strong> {{ $book->name }}</p>
                                        <p class="text-sm text-gray-900"><strong>Autor:</strong> {{ $book->author }}</p>
                                        <p class="text-sm text-gray-900"><strong>Any de publicació:</strong> {{ $book->releaseYear }}</p>
                                        <p class="text-sm text-gray-900"><strong>genere:</strong> {{ $book->genre }}</p>
                                        <p class="text-sm text-gray-900"><strong>preu:</strong> {{ $book->price }}</p>

                                    </div>
                                </li>
                            @empty
                                <li class="py-4 text-center text-sm text-gray-500">No hi han dades a la Base de dades!</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
