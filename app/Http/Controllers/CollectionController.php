<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Oeuvre;
use App\Models\Categorie;
use App\Models\Collection;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collections = Collection::all();

        return view('public.collection.index', compact('collections'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $collection = Collection::find($id);
        $btns = $collection->oeuvres;
        $oeuvres = Oeuvre::all();
        $photos = Photo::all();
        //dd($slugedNames);

        return view('partialsFront.worksCategories', compact('collection', 'btns', 'oeuvres', 'photos'));
    }
}
