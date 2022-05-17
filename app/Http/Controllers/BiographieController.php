<?php

namespace App\Http\Controllers;

use App\Models\Oeuvre;
use App\Models\Categorie;
use App\Models\Collection;
use Illuminate\Http\Request;

class BiographieController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        $collections = Collection::all();
        $oeuvres = Oeuvre::where('active', 1)->latest()->take(5)->get();
        $oeuvresImg = Oeuvre::where('active', 1)->inRandomOrder()->limit(8)->get();

        return view('partialsFront.biographie', compact(
            'categories',
            'collections',
            'oeuvres',
            'oeuvresImg'
        ));
    }
}
