<?php

namespace App\Models;

use App\Models\Categorie;
use App\Models\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Oeuvre extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        self::creating(function ($oeuvre) {
            if (request()->categorie && !request()->routeIs('categories.*'))
                $oeuvre->categorie()->associate(Categorie::find(request()->categorie));
            if (request()->collection && !request()->routeIs('collection.*'))
                $oeuvre->collection()->associate(Collection::find(request()->collection));
        });
    }

    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
