@extends('layouts.app')

@section('title', 'Progress - TechStack Tracker')
@section('page-title', 'Progress')

@section('content')
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Learning Progress</h3>
            <div class="space-y-3">
                <div class="flex justify-between text-sm">
                    <span class="text-gray-600">Total Technologies</span>
                    <span class="font-semibold">{{ $total }}</span>
                </div>
                <div class="flex justify-between text-sm">
                    <span class="text-gray-600">Mastered</span>
                    <span class="font-semibold text-green-600">{{ $mastered }}</span>
                </div>
                <div class="flex justify-between text-sm">
                    <span class="text-gray-600">In Progress</span>
                    <span class="font-semibold text-yellow-600">{{ $inProgress }}</span>
                </div>
                <div class="pt-3 border-t">
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-600">Completion Rate</span>
                        <span class="font-semibold text-blue-400">{{ $total > 0 ? round(($mastered / $total) * 100) : 0 }}%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-blue-400 h-2 rounded-full" style="width: {{ $total > 0 ? ($mastered / $total) * 100 : 0 }}%"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Quick Stats</h3>
            <div class="grid grid-cols-2 gap-4">
                <div class="text-center p-4 bg-green-50 rounded-lg">
                    <div class="text-3xl font-bold text-green-600">{{ $mastered }}</div>
                    <div class="text-sm text-gray-600 mt-1">Mastered</div>
                </div>
                <div class="text-center p-4 bg-yellow-50 rounded-lg">
                    <div class="text-3xl font-bold text-yellow-600">{{ $inProgress }}</div>
                    <div class="text-sm text-gray-600 mt-1">Learning</div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-white rounded-lg shadow">
            <div class="px-6 py-4 border-b">
                <h3 class="text-lg font-semibold text-gray-800">Mastered Technologies</h3>
            </div>
            <div class="p-6">
                @forelse($masteredTechnos as $techno)
                    <div class="flex items-center gap-2 py-2">
                        <span class="text-green-500">✓</span>
                        <span class="text-gray-800">{{ $techno->nom }}</span>
                    </div>
                @empty
                    <p class="text-gray-500 text-sm">No mastered technologies yet.</p>
                @endforelse
            </div>
        </div>

        <div class="bg-white rounded-lg shadow">
            <div class="px-6 py-4 border-b">
                <h3 class="text-lg font-semibold text-gray-800">In Progress</h3>
            </div>
            <div class="p-6">
                @forelse($learningTechnos as $techno)
                    <div class="flex items-center gap-2 py-2">
                        <span class="text-gray-400">○</span>
                        <span class="text-gray-800">{{ $techno->nom }}</span>
                    </div>
                @empty
                    <p class="text-gray-500 text-sm">No technologies in progress.</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
