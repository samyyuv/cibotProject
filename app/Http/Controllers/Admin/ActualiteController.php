<?php

namespace App\Http\Controllers\Admin;

use App\Models\Photo;
use App\Models\Actualite;
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
        $actualites = Actualite::sortable()->paginate(15);

        return view('admin.actualite.index')->with('actualites', $actualites);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $totalActualites = Actualite::count();

        return view('admin.actualite.create', compact('totalActualites'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreActualiteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActualiteRequest $request)
    {
        $clientFile = $request->photo;
        $postTitle = Str::slug($request->titre);
        $fileName = $postTitle . '.' . $clientFile->getClientOriginalExtension();
        $clientFile->storeAs('actualites', $fileName);

        $active = $request->active ? 1 : 0;

        //Repositioning others after create
        $newPos = $request->position;
        $postUp = Actualite::where('position', '>=', $newPos)->orderByDesc('position')->get();
        foreach ($postUp as $post) {
            $post->update([
                'position' => $post->position + 1,
            ]);
        };

        $actualite = Actualite::create([
            'titre' => $request->titre,
            'description' => $request->description,
            'titre_en' => $request->titre_en,
            'description_en' => $request->description_en,
            'titl_seo' => $request->titl_seo,
            'description_seo' => $request->description_seo,
            'position' => $newPos,
            'active' => $active,
            'photo' => "actualites/" . $fileName,
        ]);

        //extra photos
        $i = 1;
        foreach ($request->extraPhotos as $photo) {
            $actualiteTitle = Str::slug($request->titre);
            $fileName = $actualiteTitle . $i . '.' . $photo->getClientOriginalExtension();
            $photo->storeAs('actualites/extra', $fileName);
            Photo::create([
                'photo' => "actualites/extra/" . $fileName,
                'actualite_id' => $actualite->id,
            ]);
            $i++;
        }

        return redirect()->route('admin.actualites.index')->with('success', __('Your news has been created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actualite $actualite
     * @return \Illuminate\Http\Response
     */
    public function show(Actualite $actualite)
    {
        return view('admin.actualite.show', compact('actualite'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actualite $actualite
     * @return \Illuminate\Http\Response
     */
    public function edit(Actualite $actualite)
    {
        $totalActualites = Actualite::count();
        $actualites = Actualite::all();

        return view('admin.actualite.edit', compact('actualite', 'actualites', 'totalActualites'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StoreActualiteRequest  $request
     * @param  \App\Models\Actualite $actualite
     * @return \Illuminate\Http\Response
     */
    public function update(StoreActualiteRequest $request, Actualite $actualite)
    {
        if ($request->hasFile('photo')) {
            Storage::disk('public')->delete($actualite->photo);
            $clientFile = $request->photo;
            $postTitle = Str::slug($request->titre);
            $fileName = $postTitle . '.' . $clientFile->getClientOriginalExtension();
            $clientFile->storeAs('actualites', $fileName);
            $actualite->update([
                'photo' => "actualites/" . $fileName,
            ]);
        };

        // get ids and positions of photos in oeuvres 
        $photosId = Photo::where('actualite_id', $actualite->id)->pluck('id')->toArray();

        foreach ($photosId as $id) {
            $delete = "delete" . "-" . $id;
            $photoName = Photo::find($id);
            if ($request->$delete == $delete) {
                Photo::where('id', $id)->delete();
                Storage::disk('public')->delete($photoName->photo);
            }
        }

        $active = $request->active ? 1 : 0;

        //Repositioning others after update
        $previousPos = $actualite->position;
        $newPos = $request->position;

        if ($newPos != $previousPos) {
            $actualite->update([
                'position' => Actualite::count() + 1,
            ]);
            if ($newPos > $previousPos) {
                $posDown = Actualite::where('position', '>', $previousPos)
                    ->where('position', '<=', $newPos)->orderBy('position', 'asc')->get();
                foreach ($posDown as $post) {
                    $post->update([
                        'position' => $post->position - 1,
                    ]);
                }
            } else {
                $posUp = Actualite::where('position', '<', $previousPos)
                    ->where('position', '>=', $newPos)->orderByDesc('position')->get();
                foreach ($posUp as $post) {
                    $post->update([
                        'position' => $post->position + 1,
                    ]);
                }
            }
        }

        $actualite->update([
            'titre' => $request->titre,
            'description' => $request->description,
            'titl_seo' => $request->titl_seo,
            'description_seo' => $request->description_seo,
            'position' => $newPos,
            'active' => $active,
            'titre_en' => $request->titre_en,
            'description_en' => $request->description_en,
        ]);

        return redirect()->route('admin.actualites.index')->with('success', __('Your news has been updated'));
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

        //Deleting photos
        Storage::disk('public')->delete($actualite->photo);
        $photosName = Photo::where('actualite_id', $actualite->id)->pluck('photo')->toArray();
        foreach ($photosName as $name) {
            Storage::disk('public')->delete($name);
        }

        //Repositioning others after delete
        $toDelete = Actualite::select('position')->where('id', $id)->first();
        $postUp = Actualite::where('position', '>', $toDelete->position)->orderBy('position', 'asc')->get();
        $actualite->delete();
        foreach ($postUp as $post) {
            $post->update([
                'position' => $post->position - 1,
            ]);
        };

        return redirect()->route('admin.actualites.index')->with('success', __('Your news has been deleted'));
    }
}
