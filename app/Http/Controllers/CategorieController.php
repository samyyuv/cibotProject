<?php

namespace App\Http\Controllers;

use App\Models\Oeuvre;
use App\Models\Categorie;
use App\Models\Photo;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::all();

        return view('public.categorie.index', compact('categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorie = Categorie::find($id);
        $oeuvres = Oeuvre::all();
        $photos = Photo::all();

        return view('partialsFront.worksCategories', compact('categorie', 'oeuvres', 'photos'));
    }
}
