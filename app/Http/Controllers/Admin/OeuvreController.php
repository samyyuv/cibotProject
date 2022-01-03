<?php

namespace App\Http\Controllers\Admin;

use App\Models\Oeuvre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOeuvreRequest;
use App\Models\Categorie;
use App\Models\Collection;

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

        return view('admin.oeuvre.index', compact('oeuvres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        $collections = Collection::all();

        return view('admin.oeuvre.create', compact('categories', 'collections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOeuvreRequest $request)
    {
        Oeuvre::create([
            'titre' => $request->titre,
            'sous_titre' => $request->sous_titre,
            'description' => $request->description,
            'date' => $request->date,
            'active' => $request->active
        ]);

        return redirect()->route('dashboard')->with('success', 'Votre oeuvre a été créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Oeuvre $oeuvre)
    {
        return view('admin.oeuvre.show', compact('oeuvre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Oeuvre $oeuvre)
    {
        $categories = Categorie::all();
        $collections = Collection::all();

        return view('admin.oeuvre.edit', compact('oeuvre', 'categories', 'collections'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreOeuvreRequest $request, Oeuvre $oeuvre)
    {
        $oeuvre->update([
            'titre' => $request->titre,
            'description' => $request->description,
            'sous_titre' => $request->sous_titre,
            'date' => $request->date,
            'active' => $request->active
        ]);

        return redirect()->route('dashboard')->with('success', 'Votre oeuvre a été updaté');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $oeuvre = Oeuvre::find($id);
        $oeuvre->delete();

        return redirect()->route('dashboard')->with('success', 'Votre oeuvre a été supprimé');
    }
}
