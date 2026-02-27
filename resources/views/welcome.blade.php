@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6 text-blue-400">Ma Veille Techno</h1>

    <form action="{{ route('technos.store') }}" method="POST" class="flex gap-2 mb-8">
        @csrf
        <input type="text" name="nom" class="flex-1 border rounded p-2 outline-none focus:ring-2 focus:ring-indigo-400" placeholder="Ex: React JS">
        <button type="submit" class="bg-blue-400 text-white px-4 py-2 rounded hover:bg-indigo-700 transition">Ajouter</button>
    </form>

    <div class="space-y-3 px-40">
        @foreach($technos as $techno)
            <div class="flex items-center justify-between p-3 bg-gray-50 rounded border gap-3">
                <form action="{{ route('technos.update', $techno->id) }}" method="POST" class="flex-1">
                    @csrf
                    @method('PUT')
                    <input type="text" name="nom" value="{{ $techno->nom }}" class="w-full border-0 bg-transparent outline-none focus:ring-2 focus:ring-blue-400 rounded px-2 {{ $techno->maitrise ? 'line-through text-gray-400' : 'text-gray-800' }}">
                </form>
                
                <div class="flex gap-2">
                    <form action="{{ route('technos.toggle', $techno->id) }}" method="POST" class="inline">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="{{ $techno->maitrise ? 'text-green-500 hover:text-green-700' : 'text-gray-400 hover:text-gray-600' }}">
                            {{ $techno->maitrise ? '✓' : '○' }}
                        </button>
                    </form>
                    
                    <form action="{{ route('technos.destroy', $techno->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-700">×</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection