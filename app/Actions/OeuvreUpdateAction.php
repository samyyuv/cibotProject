<?php

namespace App\Actions;

use App\Models\Photo;
use App\Models\Oeuvre;
use App\Models\Categorie;
use App\Models\Collection;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreOeuvreRequest;
use Illuminate\Support\Facades\Validator;

class OeuvreUpdateAction
{
  public function handle(StoreOeuvreRequest $request, Oeuvre $oeuvre)
  {
    //dd($request);
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


    if ($request->hasFile('photos')) {
      $id = $oeuvre->id;
      $fileExName = Photo::where('oeuvre_id', $id)->value('photo');
      Storage::delete($fileExName);
      Photo::where('oeuvre_id', $id)->delete();

      $i = 1;
      //remove photo where oeuvre_id = oeuvre_id
      foreach ($request->photos as $photo) {
        $oeuvreTitle = Str::slug($request->titre);
        $fileName = $oeuvreTitle . $i . '.' . $photo->getClientOriginalExtension();
        $photo->storeAs('oeuvres', $fileName);
        Photo::create([
          'photo' => "oeuvres/" . $fileName,
          'oeuvre_id' => $oeuvre->id
        ]);
        //insert photo
        Photo::where('photo', $fileExName)
          ->update([
            'photo' => "oeuvres/" . $fileName,
          ]);
        $id = Photo::where('photo', 'oeuvres/' . $fileName)->value('id');
        $arrayUpdate = array_merge($arrayUpdate, [
          'photo_id' => $id,
        ]);
        $i++;
      }
    };

    // get ids and positions of photos in oeuvres 
    $photosId = Photo::where('oeuvre_id', $oeuvre->id)->pluck('id')->toArray();

    foreach ($photosId as $key => $photo) {
      $x = "position" . "-" . $photo;
      $id2b = $request->$x;
      $allIds[] = $request->$x;
      $delete = "delete" . "-" . $photo;

      if (count($allIds) === count(array_unique($allIds))) {
        Photo::where('id', $photo)
          ->update([
            'position' => $id2b,
          ]);
      }

      if ($request->$delete == $delete) {
        Photo::where('id', $photo)
          ->delete();
      }
    }

    //check positions don't repeat
    foreach ($photosId as $key => $photo) {
      $x = "position" . "-" . $photo;
      $y[] = $request->$x;
      unset($y[$key]);
      $request->validate([
        $x => [
          'required',
          Rule::notIn($y),
        ],
      ]);
    }

    //delete photos 

    $oeuvre->update($arrayUpdate);
  }
}
// /!\ TODO /!\
