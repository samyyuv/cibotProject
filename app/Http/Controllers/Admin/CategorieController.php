<?php

namespace App\Http\Controllers\Admin;

use App\Models\Photo;
use App\Models\Oeuvre;
use App\Models\Categorie;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
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
        $categories = Categorie::sortable()->paginate(15);

        return view('admin.categorie.index')->with('categories', $categories);
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
        $categorie = Categorie::create([
            'titre' => $request->titre,
            'sous_titre' => $request->sous_titre,
            'description' => $request->description,
        ]);

        $photo = $request->photo;
        $categorieTitle = Str::slug($request->titre);
        $fileName = $categorieTitle . '.' . $photo->getClientOriginalExtension();
        $photo->storeAs('categories', $fileName);
        Photo::create([
            'photo' => "categories/" . $fileName,
            'categorie_id' => $categorie->id,
        ]);

        return redirect()->route('admin.categories.index')->with('success', __('Your category has been created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorie = Categorie::find($id);
        $photos = Photo::all();
        $oeuvres = Oeuvre::all();

        return view('admin.categorie.show', compact('categorie', 'oeuvres', 'photos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie = Categorie::find($id);

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
        $categorie = Categorie::find($id);

        $categorie->update([
            'titre' => $request->titre,
            'description' => $request->description,
            'sous_titre' => $request->sous_titre,
        ]);

        if ($request->hasFile('photo')) {
            $id = $categorie->id;
            $fileExName = Photo::where('categorie_id', $id)->value('photo');
            $cuttedName = substr(strstr($fileExName, '/'), 1);
            Storage::disk('public')->delete('categories/' . $cuttedName);
            $clientFile = $request->photo;
            $categorieTitle = Str::slug($request->titre);
            $fileName = $categorieTitle . '.' . $clientFile->getClientOriginalExtension();
            $clientFile->storeAs('categories', $fileName);
            Photo::where('photo', 'categories/' . $cuttedName)
                ->update([
                    'photo' => "categories/" . $fileName,
                ]);
        };

        return redirect()->route('admin.categories.index')->with('success', __('Your category has been updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorie = Categorie::find($id);

        //Deleting photos
        $photoName = Photo::where('categorie_id', $categorie->id)->first();
        Storage::disk('public')->delete($photoName->photo);

        $categorie->delete();

        return redirect()->route('admin.categories.index')->with('success', __('Your category has been deleted'));
    }
}
