@extends('layouts.app')

@section('title', 'Technologies - TechStack Tracker')
@section('page-title', 'Technologies')

@section('content')
    <div class="mb-6">
        <form action="{{ route('technos.store') }}" method="POST" class="flex gap-2">
            @csrf
            <input type="text" name="nom" class="flex-1 border rounded-lg px-4 py-2 outline-none focus:ring-2 focus:ring-blue-400" placeholder="Add new technology..." required>
            <button type="submit" class="bg-blue-400 text-white px-6 py-2 rounded-lg hover:bg-blue-500 transition">Add</button>
        </form>
    </div>

    <div class="bg-white rounded-lg shadow">
        <div class="px-6 py-4 border-b">
            <h2 class="text-lg font-semibold text-gray-800">All Technologies</h2>
        </div>
        <div class="divide-y">
            @forelse($technos as $techno)
                <div class="flex items-center justify-between p-4 hover:bg-gray-50">
                    <form action="{{ route('technos.update', $techno->id) }}" method="POST" class="flex-1">
                        @csrf
                        @method('PUT')
                        <input type="text" name="nom" value="{{ $techno->nom }}" class="w-full border-0 bg-transparent outline-none focus:ring-2 focus:ring-blue-400 rounded px-2 {{ $techno->maitrise ? 'line-through text-gray-400' : 'text-gray-800' }}">
                    </form>
                    
                    <div class="flex items-center gap-3">
                        <span class="text-xs px-2 py-1 rounded {{ $techno->maitrise ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-600' }}">
                            {{ $techno->maitrise ? 'Mastered' : 'Learning' }}
                        </span>
                        
                        <form action="{{ route('technos.toggle', $techno->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="text-2xl {{ $techno->maitrise ? 'text-green-500 hover:text-green-700' : 'text-gray-400 hover:text-gray-600' }}">
                                {{ $techno->maitrise ? '✓' : '○' }}
                            </button>
                        </form>
                        
                        <form action="{{ route('technos.destroy', $techno->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700 text-xl">×</button>
                        </form>
                    </div>
                </div>
            @empty
                <div class="p-6 text-center text-gray-500">
                    No technologies added yet.
                </div>
            @endforelse
        </div>
    </div>
@endsection
