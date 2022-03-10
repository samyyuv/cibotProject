<?php

namespace App\Http\Controllers;

use App\Models\Oeuvre;
use App\Models\Contact;
use App\Models\Message;
use App\Models\Actualite;
use App\Models\Categorie;
use App\Models\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StoreMessageRequest;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        $collections = Collection::all();
        $oeuvres = Oeuvre::where('active', 1)->latest()->take(5)->get();
        $actualite = Actualite::where('active', 1)->latest()->first();

        return view('partialsFront.home', compact(
            'categories',
            'collections',
            'actualite',
            'oeuvres'
        ));
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {

    //     return view('partialsFront.home#contactMe');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMessageRequest $request)
    {
        Message::create([
            'prenom' => $request->prenom,
            'nom' => $request->nom,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'message' => $request->message,
            'sujet' => $request->sujet,
        ]);

        return redirect()->route('index')->with('success', __('Your message has been send'));
    }
}
