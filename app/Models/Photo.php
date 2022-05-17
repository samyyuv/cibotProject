<?php

namespace App\Models;

use App\Models\Oeuvre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photo extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        self::creating(function ($photo) {
            if (request()->oeuvre && !request()->routeIs('oeuvres.*'))
                $photo->oeuvre()->associate(Oeuvre::find(request()->oeuvre));
            // elseif (request()->actualite && !request()->routeIs('actualites.*'))
            // $photo->actualite()->associate(Actualite::find(request()->actualite))
        });
    }

    public function oeuvre()
    {
        return $this->belongsTo(Oeuvre::class);
    }

    public function collection()
    {
        return $this->belongsTo(Oeuvre::class);
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function actualite()
    {
        return $this->belongsTo(Oeuvre::class);
    }
}
