<?php

namespace App\Http\Controllers;

use App\Models\Oeuvre;
use App\Models\Contact;
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
        $oeuvres = Oeuvre::all();

        return view('partialsFront.worksList', compact('oeuvres'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Oeuvre  $oeuvre
     * @return \Illuminate\Http\Response
     */
    public function show(Oeuvre $oeuvre)
    {
        return view('partialsFront.workIndividual', compact('oeuvre'));
    }
}
