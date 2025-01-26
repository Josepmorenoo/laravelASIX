@extends('layouts.layout')

@section('content')
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="p-6 bg-white border-b border-gray-200">
            <h2 class="text-2xl font-bold mb-4">Book Details</h2>
            <div class="mb-4">
                <p class="text-gray-700"><strong>Nom:</strong> {{ $book->name }}</p>
            </div>
            <div class="mb-4">
                <p class="text-gray-700"><strong>Autor:</strong> {{ $book->author }}</p>
            </div>
            <div class="mb-4">
                <p class="text-gray-700"><strong>Any de publicació:</strong> {{ $book->releaseYear }}</p>
            </div>
            <div class="flex justify-end">
                <a class="bg-indigo-500 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded" href="{{ route('books.index') }}">Back to List</a>
            </div>
        </div>
    </div>
</div>
@endsection

