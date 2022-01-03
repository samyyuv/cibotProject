<?php

namespace App\Http\Controllers\Admin;

use App\Models\Actualite;
use App\Models\Collection;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreActualiteRequest;

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

        return view('admin.actualite.index', compact('actualites', 'collections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.actualite.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActualiteRequest $request)
    {
        $clientFile = $request->photo;
        $postTitle = Str::slug($request->titre);
        $fileName = $postTitle . '.' . $clientFile->getClientOriginalExtension();
        $clientFile->storeAs('actualites', $fileName);

        Actualite::create([
            'titre' => $request->titre,
            'description' => $request->description,
            'titl_seo' => $request->titl_seo,
            'description_seo' => $request->description_seo,
            'active' => $request->active,
            'photo' => "actualites/" . $fileName,
        ]);

        return redirect()->route('dashboard')->with('success', 'Votre actualité a été créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Actualite $actualite)
    {
        return view('admin.actualite.show', compact('actualite'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Actualite $actualite)
    {
        return view('admin.actualite.edit', compact('actualite'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreActualiteRequest $request, Actualite $actualite)
    {
        if ($request->hasFile('photo')) {
            Storage::delete('actualites/' . $actualite->photo);
            $clientFile = $request->photo;
            $postTitle = Str::slug($request->titre);
            $fileName = $postTitle . '.' . $clientFile->getClientOriginalExtension();
            $clientFile->storeAs('actualites', $fileName);
            $actualite->update([
                'photo' => "actualites/" . $fileName,
            ]);
        };

        $actualite->update([
            'titre' => $request->titre,
            'description' => $request->description,
            'titl_seo' => $request->titl_seo,
            'description_seo' => $request->description_seo,
            'active' => $request->active,
        ]);

        return redirect()->route('dashboard')->with('success', 'Votre actualité a été updaté');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actualite = Actualite::find($id);
        $actualite->delete();

        return redirect()->route('dashboard')->with('success', 'Votre actualité a été supprimé');
    }
}
