<?php

namespace App\Http\Controllers;

use App\Models\Techno;
use Illuminate\Http\Request;

class TechnoController extends Controller
{
    //1. Show all technos
    public function index()
    {
        $technos = Techno::all();
        return view('welcome', compact('technos'));
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
}
