<?php

namespace App\Http\Controllers\Admin;

use App\Models\Photo;
use App\Models\Oeuvre;
use App\Models\Collection;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreCollectionRequest;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collections = Collection::sortable()->paginate(15);

        return view('admin.collection.index')->with('collections', $collections);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.collection.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCollectionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCollectionRequest $request)
    {
        $collection = Collection::create([
            'titre' => $request->titre,
            'sous_titre' => $request->sous_titre,
            'description' => $request->description,
        ]);

        $photo = $request->photo;
        $collectionTitle = Str::slug($request->titre);
        $fileName = $collectionTitle . '.' . $photo->getClientOriginalExtension();
        $photo->storeAs('collections', $fileName);
        Photo::create([
            'photo' => "collections/" . $fileName,
            'collection_id' => $collection->id,
        ]);

        return redirect()->route('admin.collections.index')->with('success', 'Votre collection a été créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function show(Collection $collection)
    {
        $oeuvres = Oeuvre::all();
        $photos = Photo::all();
        return view('admin.collection.show', compact('collection', 'oeuvres', 'photos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function edit(Collection $collection)
    {
        return view('admin.collection.edit', compact('collection'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StoreCollectionRequest  $request
     * @param  \App\Models\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCollectionRequest $request, Collection $collection)
    {
        $collection->update([
            'titre' => $request->titre,
            'description' => $request->description,
            'sous_titre' => $request->sous_titre,
        ]);

        if ($request->hasFile('photo')) {
            $id = $collection->id;
            $fileExName = Photo::where('collection_id', $id)->value('photo');
            $cuttedName = substr(strstr($fileExName, '/'), 1);
            Storage::delete($cuttedName);
            $clientFile = $request->photo;
            $collectionTitle = Str::slug($request->titre);
            $fileName = $collectionTitle . '.' . $clientFile->getClientOriginalExtension();
            $clientFile->storeAs('collections', $fileName);
            Photo::where('photo', $cuttedName)
                ->update([
                    'photo' => "collections/" . $fileName,
                ]);
        };

        return redirect()->route('admin.collections.index')->with('success', 'Votre collection a été updaté');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $collection = Collection::find($id);
        $collection->delete();

        return redirect()->route('admin.collections.index')->with('success', 'Votre collection a été supprimé');
    }
}
