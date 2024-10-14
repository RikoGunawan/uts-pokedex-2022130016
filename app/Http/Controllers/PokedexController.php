<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokedexController extends Controller
{
    /**
     * Display a listing of the resource.
     *///Made by: Riko Gunawan

    public function index()
    {
        // $pokemon = Pokemon::all();
        $pokemons = Pokemon::paginate(9); //Untuk membagi penampilan data
        return view('pokedex', compact('pokemons'));

    }

}
