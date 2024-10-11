<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *///Made by: Riko Gunawan
    public function index()
    {
        $pokemon = Pokemon::all();
        $pokemon = Pokemon::paginate(9); //Untuk membagi penampilan data
        return view('pokemons.index', compact('pokemons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pokemons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'species' => 'required|string|max:100',
            'primary_type' => 'required|string|max:50',
            'weight' => 'numeric',
            'height' => 'numeric',
            'hp' => 'integer',
            'attack' => 'integer',
            'defense' => 'integer',
            'is_legendary' => 'required|boolean',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $pokemon = Pokemon::create($request->all());

        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $fileName = $file->hashName();
            $filePath = $file->storeAs('public', $fileName); //Simpan file di server
            $pokemon->update([
                'photo'=> $filePath
            ]);
        }

        return redirect()->route('pokemons.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pokemon $pokemon)
    {
        return view('pokemons.show', compact('pokemon'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pokemon $pokemon)
    {
        return view('pokemons.edit', compact('pokemon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pokemon $pokemon)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'species' => 'required|string|max:100',
            'primary_type' => 'required|string|max:50',
            'weight' => 'numeric',
            'height' => 'numeric',
            'hp' => 'integer',
            'attack' => 'integer',
            'defense' => 'integer',
            'is_legendary' => 'required|boolean',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $pokemon = Pokemon::where('id', $pokemon->id);
        $pokemon->update($request->except(['_token', '_method']) );

        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $fileName = $file->hashName();
            $filePath = $file->storeAs('public', $fileName); //Simpan file di server
            $pokemon->update([
                'photo'=> $filePath
            ]);
        }

        return redirect()->route('pokemons.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pokemon $pokemon)
    {
        $pokemon->delete();
        return redirect()->route('pokemons.index');
    }
}
