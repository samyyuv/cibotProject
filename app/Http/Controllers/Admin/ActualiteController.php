<?php

namespace App\Http\Controllers\Admin;

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

        Actualite::create([
            'titre' => $request->titre,
            'description' => $request->description,
            'titl_seo' => $request->titl_seo,
            'description_seo' => $request->description_seo,
            'position' => $newPos,
            'active' => $active,
            'photo' => "actualites/" . $fileName,
        ]);

        return redirect()->route('admin.actualites.index')->with('success', 'Votre actualité a été créé');
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
            Storage::delete('actualites/' . $actualite->photo);
            $clientFile = $request->photo;
            $postTitle = Str::slug($request->titre);
            $fileName = $postTitle . '.' . $clientFile->getClientOriginalExtension();
            $clientFile->storeAs('actualites', $fileName);
            $actualite->update([
                'photo' => "actualites/" . $fileName,
            ]);
        };

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
        ]);

        return redirect()->route('admin.actualites.index')->with('success', 'Votre actualité a été updaté');
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

        //Repositioning others after delete
        $toDelete = Actualite::select('position')->where('id', $id)->first();
        $postUp = Actualite::where('position', '>', $toDelete->position)->orderBy('position', 'asc')->get();
        $actualite->delete();
        foreach ($postUp as $post) {
            $post->update([
                'position' => $post->position - 1,
            ]);
        };

        return redirect()->route('admin.actualites.index')->with('success', 'Votre actualité a été supprimé');
    }
}
