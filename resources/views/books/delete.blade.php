@extends('layouts.layout')

@section('content')
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="p-6 bg-white border-b border-gray-200">
            <h2 class="text-2xl font-bold mb-4">Delete Book</h2>
            <p class="mb-4 text-gray-700">Segur que vols eliminar el llibre: <strong>{{ $book->name }}</strong>?</p>
            <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="flex justify-end space-x-2">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded">Eliminar</button>
                <a href="{{ route('books.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded">Back to List</a>
            </form>
        </div>
    </div>
</div>
@endsection


