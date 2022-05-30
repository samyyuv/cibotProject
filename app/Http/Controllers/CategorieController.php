<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Oeuvre;
use App\Models\Categorie;
use App\Models\Collection;
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
     * @param  \App\Models\Categorie
     * @return \Illuminate\Http\Response
     */
    public function show($collectionId, $categoryId)
    {
        $categorie = Categorie::find($categoryId);
        $collection = Collection::find($collectionId);
        $oeuvresByCategorie = Oeuvre::where("categorie_id", "=", $categoryId)->get();
        $categorieByCollection = $this->categories($collection->oeuvres);

        return view('partialsFront.worksList', compact('categorie', 'collection', 'categorieByCollection'));
    }

    private function categories($arts)
    {
        foreach ($arts as $art) {
            $x[] = array($art->categorie->titre, $art->categorie->id);
        }
        $unique = array_unique($x, SORT_REGULAR);
        return $unique;
    }
}
