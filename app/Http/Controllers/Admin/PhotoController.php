<?php

namespace App\Http\Controllers\Admin;

use App\Models\Photo;
use App\Models\Oeuvre;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorePhotoRequest;

class PhotoController extends Controller
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
        dd($request->photo);
        $clientFile = $request->photo;
        $ouvreTitle = Str::slug($request->titre);
        $fileName = $ouvreTitle . '.' . $clientFile->getClientOriginalExtension();
        $clientFile->storeAs('admin', $fileName);

        Photo::create([
            'photo' => "admin/" . $fileName,
        ]);

        return redirect()->route('dashboard')->with('success', __('Your photo has been created'));
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

        return redirect()->route('dashboard')->with('success', __('Your photo has been updated'));
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
        return back()->with('success', __('Your photo has been deleted'));
    }
}
