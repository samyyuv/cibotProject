<?php

namespace App\Http\Controllers;

use App\Models\Photo;
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
        $actualites = Actualite::all();
        $collections = Collection::all();

        return view('public.post.index', compact('actualites', 'collections'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function show(Actualite $actualite)
    {
        return view('public.post.show', compact('actualite'));
    }
}
// <!-- @foreach ($photos as $photo)
// @if ($photo->artwork == $actualite->artwork)
// <img src="{{ $photo->photo }}" alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
// @endif
// @endforeach
// -->