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

        return view(
            'partialsFront.worksCategories',
            compact('collection', 'categories', 'oeuvresByCategorie')
        );
    }

    public static function getPhotosByOeuvreSortedByPosition($oeuvreId)
    {
        return Photo::where('oeuvre_id', $oeuvreId)->orderBy('position')->get();
    }
}
