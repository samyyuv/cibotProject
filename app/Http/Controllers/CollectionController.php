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
        $arts = $collection->oeuvres;
        $oeuvresByCategorie = Oeuvre::all()->groupBy("categorie_id");
        $photos = Photo::all();
        $categoriesQuery = $this->categories($arts);
        $categoriesId = $this->categorieQuery($categoriesQuery);
        $categories = Categorie::whereIn('id', $categoriesId)->get();
        return view(
            'partialsFront.worksCategories',
            compact('collection', 'categories', 'arts', 'photos', 'oeuvresByCategorie')
        );
    }

    private function categories($arts)
    {
        foreach ($arts as $art) {
            $x[] = array($art->categorie->titre, $art->categorie->id);
        }
        $unique = array_unique($x, SORT_REGULAR);
        return $unique;
    }

    private function categorieQuery($categories)
    {
        foreach ($categories as $cat) {
            $x[] = $cat[1];
        }
        return $x;
    }
}
