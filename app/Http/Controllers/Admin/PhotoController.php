<?php

namespace App\Http\Controllers\Admin;

use App\Models\Photo;
use App\Models\Oeuvre;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorePhotoRequest;

class photoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::all();

        return view('admin.photo.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $oeuvres = Oeuvre::all();

        return view('admin.photo.create', compact('oeuvres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePhotoRequest $request)
    {
        $clientFile = $request->photo;
        $ouvreTitle = Str::slug($request->titre);
        $fileName = $ouvreTitle . '.' . $clientFile->getClientOriginalExtension();
        $clientFile->storeAs('oeuvres', $fileName);

        photo::create([
            'photo' => "oeuvres/" . $fileName,
        ]);

        return redirect()->route('dashboard')->with('success', 'Votre photo a été créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        return view('admin.photo.show', compact('photo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        $oeuvres = Oeuvre::all();

        return view('admin.photo.edit', compact('photo', 'oeuvres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePhotoRequest $request, Photo $photo)
    {
        if ($request->hasFile('photo')) {
            Storage::delete('oeuvres/' . $photo->photo);
            $clientFile = $request->photo;
            $ouvreTitle = Str::slug($request->titre);
            $fileName = $ouvreTitle . '.' . $clientFile->getClientOriginalExtension();
            $clientFile->storeAs('oeuvres', $fileName);
            $photo->update([
                'photo' => "oeuvres/" . $fileName,
            ]);
        };

        $photo->update([
            'photo' => "oeuvres/" . $fileName,
        ]);

        return redirect()->route('dashboard')->with('success', 'Votre photo a été updaté');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = Photo::find($id);
        $photo->delete();

        return redirect()->route('dashboard')->with('success', 'Votre photo a été supprimé');
    }
}