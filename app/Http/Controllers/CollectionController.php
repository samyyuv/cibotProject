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
     * Display the specified resource.
     *
     * @param  \App\Models\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $collection = Collection::find($id);
        $oeuvresByCategorie = Oeuvre::all()->groupBy("categorie_id");
        $categoriesQuery = $this->categories($collection->oeuvres);
        $categoriesId = array_map(fn ($el) => $el[1], $categoriesQuery);
        $categories = Categorie::whereIn('id', $categoriesId)->get();
        //dd($collection);

        return view(
            'partialsFront.worksCategories',
            compact('collection', 'categories', 'oeuvresByCategorie')
        );
    }

    public static function getPhotosByOeuvreSortedByPosition($oeuvreId)
    {
        return Photo::where('oeuvre_id', $oeuvreId)->orderBy('position')->get();
    }

    public function showCategory($collectionId, $categoryId)
    {
        $collection = Collection::find($collectionId);
        $oeuvres = Oeuvre::where("categorie_id", "=", $categoryId)->get();
        $categoriesQuery = $this->categories($collection->oeuvres);
        $categoriesId = array_map(fn ($el) => $el[1], $categoriesQuery);
        $categories = Categorie::whereIn('id', $categoriesId)->get();

        return view(
            'partialsFront.worksCategories',
            compact('collection', 'categories', 'oeuvres')
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
}
