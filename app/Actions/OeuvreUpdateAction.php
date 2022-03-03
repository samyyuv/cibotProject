<?php

namespace App\Actions;

use App\Models\Photo;
use App\Models\Oeuvre;
use App\Models\Categorie;
use App\Models\Collection;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreOeuvreRequest;

class OeuvreUpdateAction
{
  public function handle(StoreOeuvreRequest $request, Oeuvre $oeuvre): void
  {
    $active = $request->active ? 1 : 0;
    $arrayUpdate = [
      'titre' => $request->titre,
      'description' => $request->description,
      'sous_titre' => $request->sous_titre,
      'date' => $request->date,
      'active' => $active,
    ];

    $oeuvre->categorie()->associate(Categorie::find($request->categorie));

    $oeuvre->collection()->associate(Collection::find($request->collection));


    if ($request->hasFile('photo')) {
      $fileExName = $oeuvre->photo->photo;
      Storage::delete($fileExName);
      $clientFile = $request->photo;
      $oeuvreTitle = Str::slug($request->titre);
      $fileName = $oeuvreTitle . '.' . $clientFile->getClientOriginalExtension();
      $clientFile->storeAs('oeuvres', $fileName);
      Photo::where('photo', $fileExName)
        ->update([
          'photo' => "oeuvres/" . $fileName,
        ]);
      $id = Photo::where('photo', 'oeuvres/' . $fileName)->value('id');
      $arrayUpdate = array_merge($arrayUpdate, [
        'photo_id' => $id,
      ]);
    };

    $oeuvre->update($arrayUpdate);
  }
}
