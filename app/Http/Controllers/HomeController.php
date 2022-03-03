<?php

namespace App\Http\Controllers;

use App\Models\Oeuvre;
use App\Models\Actualite;
use App\Models\Categorie;
use App\Models\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        $collections = Collection::all();
        $oeuvres = Oeuvre::where('active', 1)->latest()->take(5)->get();
        $actualite = Actualite::where('active', 1)->latest()->first();

        return view('partialsFront.home', compact(
            'categories',
            'collections',
            'actualite',
            'oeuvres'
        ));
    }
}
