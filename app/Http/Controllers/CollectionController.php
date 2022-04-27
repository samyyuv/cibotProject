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
        $oeuvres = Oeuvre::all();
        $photos = Photo::all();
        $hola = $collection->oeuvres;
        $slugedNames = $this->sluging($hola);
        //dd($slugedNames);

        return view('partialsFront.worksCategories', compact('collection', 'oeuvres', 'photos', 'slugedNames'));
    }

    private function sluging($collection)
    {
        $i = 0;
        foreach ($collection as $oeuvre) {
            $hello[$oeuvre->id] = Str::slug($oeuvre->categorie->titre);
            $i++;
        }
        return $hello;
    }
}
