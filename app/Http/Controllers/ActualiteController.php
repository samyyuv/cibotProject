<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Oeuvre;
use App\Models\Actualite;
use App\Models\Collection;
use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actualites = Actualite::where('active', 1)->orderBy('position', 'asc')->get();
        $lastestActualites = Actualite::where('active', 1)->orderBy('created_at', 'desc')->take(15)->get();
        return view('partialsFront.newsList', compact('actualites', 'lastestActualites'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function show(Actualite $actualite)
    {
        $oeuvres = Oeuvre::where('active', 1)->latest()->take(5)->get();
        $actualites = Actualite::where('active', 1)->latest()->take(3)->get();

        return view('partialsFront.newsArticle', compact('actualite', 'oeuvres', 'actualites'));
    }
}
