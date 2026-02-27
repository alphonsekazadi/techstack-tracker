<?php

namespace App\Http\Controllers;

use App\Models\Techno;
use Illuminate\Http\Request;

class TechnoController extends Controller
{
    //1. Show all technos
    public function index()
    {
        $total = Techno::count();
        $mastered = Techno::where('maitrise', true)->count();
        $inProgress = Techno::where('maitrise', false)->count();
        $recentTechnos = Techno::latest()->take(5)->get();

        return view('home', compact('total', 'mastered', 'inProgress', 'recentTechnos'));
    }

    //2. Add a new techno
    public function store(Request $request)
    {
        // Validate input
        $request->validate(['nom' => 'required|max:255']);

        // Create new techno with default maitrise = false
        Techno::create([
            'nom' => $request->nom,
            'maitrise' => false
        ]);

        return redirect()->back();
    }

    //3. Update techno name
    public function update(Request $request, Techno $techno)
    {
        $request->validate(['nom' => 'required|max:255']);
        $techno->update(['nom' => $request->nom]);
        return redirect()->back();
    }

    //4. Toggle maitrise status
    public function toggleMaitrise(Techno $techno)
    {
        $techno->update(['maitrise' => !$techno->maitrise]);
        return redirect()->back();
    }

    //5. Delete a techno
    public function destroy(Techno $techno)
    {
        $techno->delete();
        return redirect()->back();
    }

    //6. Technologies page
    public function technologies()
    {
        $technos = Techno::all();
        return view('technologies', compact('technos'));
    }

    //7. Progress page
    public function progress()
    {
        $total = Techno::count();
        $mastered = Techno::where('maitrise', true)->count();
        $inProgress = Techno::where('maitrise', false)->count();
        $masteredTechnos = Techno::where('maitrise', true)->get();
        $learningTechnos = Techno::where('maitrise', false)->get();

        return view('progress', compact('total', 'mastered', 'inProgress', 'masteredTechnos', 'learningTechnos'));
    }
}
