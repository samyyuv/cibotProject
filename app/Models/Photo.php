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
        });
    }

    public function oeuvre()
    {
        return $this->belongsTo(Oeuvre::class);
    }

    public function collections()
    {
        return $this->belongsTo(Oeuvre::class);
    }

    public function categories()
    {
        return $this->belongsTo(Categorie::class);
    }
}
