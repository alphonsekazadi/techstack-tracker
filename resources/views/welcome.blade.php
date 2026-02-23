<form action="{{ route('techno.store') }}" method="POST" class="mb-4">
    @csrf <input type="text" name="nom" placeholder="Ex: React, Laravel..." class="border p-2">
    <button type="submit" class="bg-blue-500 text-white p-2">Ajouter</button>
</form>

<hr>

<ul>
    @foreach($technos as $techno)
        <li class="p-2 border-b">
            {{ $techno->nom }} 
            @if($techno->maitrise) ✅ @else ⏳ @endif
        </li>
    @endforeach
</ul>