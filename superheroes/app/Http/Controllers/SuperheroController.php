<?php

namespace App\Http\Controllers;

use App\Models\Superhero;
use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    public function index()
    {
        $superheroes = Superhero::all();
        return view('superheroes.index', compact('superheroes'));
    }

    public function create()
    {
        return view('superheroes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'real_name' => 'required|max:255',
            'hero_name' => 'required|max:255',
            'photo_url' => 'required|url',
            'description' => 'nullable',
        ]);

        Superhero::create($request->all());

        return redirect()->route('superheroes.index')
            ->with('success', 'Superhero created successfully.');
    }

    public function show(Superhero $superhero)
    {
        return view('superheroes.show', compact('superhero'));
    }

    public function edit(Superhero $superhero)
    {
        return view('superheroes.edit', compact('superhero'));
    }

    public function update(Request $request, Superhero $superhero)
    {
        $request->validate([
            'real_name' => 'required|max:255',
            'hero_name' => 'required|max:255',
            'photo_url' => 'required|url',
            'description' => 'nullable',
        ]);

        $superhero->update($request->all());

        return redirect()->route('superheroes.index')
            ->with('success', 'Superhero updated successfully.');
    }

    public function destroy(Superhero $superhero)
    {
        $superhero->delete();

        return redirect()->route('superheroes.index')
            ->with('success', 'Superhero deleted successfully.');
    }
}
