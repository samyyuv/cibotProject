<?php

namespace App\Http\Controllers;

use App\Models\Oeuvre;
use Illuminate\Http\Request;

class OeuvreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collections = Oeuvre::all();

        return view('public.oeuvre.index', compact('oeuvre'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Oeuvre  $oeuvre
     * @return \Illuminate\Http\Response
     */
    public function show(Oeuvre $oeuvre)
    {
        return view('public.oeuvre.show', compact('oeuvre'));
    }
}
