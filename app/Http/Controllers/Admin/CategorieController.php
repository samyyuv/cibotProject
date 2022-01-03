<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategorieRequest;

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

        return view('admin.categorie.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categorie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategorieRequest $request)
    {
        Categorie::create([
            'titre' => $request->titre,
            'sous_titre' => $request->sous_titre,
            'description' => $request->description,
        ]);

        return redirect()->route('dashboard')->with('success', 'Votre categorie a été créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorie = Categorie::find($id)->where('id', $id)->first();

        return view('admin.categorie.show', compact('categorie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie = Categorie::find($id)->where('id', $id)->first();

        return view('admin.categorie.edit', compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategorieRequest $request, $id)
    {
        $categorie = Categorie::find($id)->where('id', $id)->first();

        $categorie->update([
            'titre' => $request->titre,
            'description' => $request->description,
            'sous_titre' => $request->sous_titre,
        ]);

        return redirect()->route('dashboard')->with('success', 'Votre categorie a été updaté');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorie = Categorie::find($id)->where('id', $id)->first();
        $categorie->delete();

        return redirect()->route('dashboard')->with('success', 'Votre categorie a été supprimé');
    }
}
