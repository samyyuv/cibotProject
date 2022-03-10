<?php

namespace App\Http\Controllers\Admin;

use App\Actions\OeuvreUpdateAction;
use App\Models\Photo;
use App\Models\Oeuvre;
use App\Models\Categorie;
use App\Models\Collection;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreOeuvreRequest;

class OeuvreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oeuvres = Oeuvre::sortable()->paginate(15);
        return view('admin.oeuvre.index')->with('oeuvres', $oeuvres);
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
     * @param  \App\Http\Requests\StoreOeuvreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOeuvreRequest $request)
    {
        $active = $request->active ? 1 : 0;

        $oeuvre = Oeuvre::create([
            'titre' => $request->titre,
            'sous_titre' => $request->sous_titre,
            'description' => $request->description,
            'date' => $request->date,
            'active' => $active,
        ]);

        $i = 1;
        foreach ($request->photos as $photo) {
            $ouvreTitle = Str::slug($request->titre);
            $fileName = $ouvreTitle . $i . '.' . $photo->getClientOriginalExtension();
            $photo->storeAs('oeuvres', $fileName);
            Photo::create([
                'photo' => "oeuvres/" . $fileName,
                'oeuvre_id' => $oeuvre->id,
            ]);
            $i++;
        }


        return redirect()->route('admin.oeuvres.index')->with('success', __('Your artwork has been created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Oeuvre $oeuvre
     * @return \Illuminate\Http\Response
     */
    public function show(Oeuvre $oeuvre)
    {
        $collection = Collection::all();

        return view('admin.oeuvre.show', compact('oeuvre', 'collection'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Oeuvre $oeuvre
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
     * @param  \App\Http\Requests\StoreOeuvreRequest  $request
     * @param  \App\Models\Oeuvre $oeuvre
     * @return \Illuminate\Http\Response
     */
    public function update(StoreOeuvreRequest $request, Oeuvre $oeuvre, OeuvreUpdateAction $oeuvreUpdateAction)
    {
        $oeuvreUpdateAction->handle($request, $oeuvre);
        return redirect()->route('admin.oeuvres.index')->with('success', __('Your artwork has been updated'));
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

        return redirect()->route('admin.oeuvres.index')->with('success', __('Your artwork has been deleted'));
    }
}
