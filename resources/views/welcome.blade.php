@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6 text-indigo-600">Ma Veille Techno</h1>

    <form action="{{ route('techno.store') }}" method="POST" class="flex gap-2 mb-8">
        @csrf
        <input type="text" name="nom" class="flex-1 border rounded p-2 outline-none focus:ring-2 focus:ring-indigo-400" placeholder="Ex: React JS">
        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700 transition">Ajouter</button>
    </form>

    <div class="space-y-3">
        @foreach($technos as $techno)
            <div class="flex items-center justify-between p-3 bg-gray-50 rounded border">
                <span class="{{ $techno->maitrise ? 'line-through text-gray-400' : 'text-gray-800' }}">
                    {{ $techno->nom }}
                </span>
                
                <button class="text-red-500 hover:text-red-700">Supprimer</button>
            </div>
        @endforeach
    </div>
@endsection