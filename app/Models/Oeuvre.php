<?php

namespace App\Models;

use App\Models\Photo;
use App\Models\Categorie;
use App\Models\Collection;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Kyslik\ColumnSortable\Sortable;

class Oeuvre extends Model
{
    use HasFactory, Sortable;

    protected $fillable = ['description', 'titre', 'sous_titre', 'date', 'active'];
    public $sortable = ['date', 'titre', 'collection_id', 'categorie_id'];

    protected $dates = ['date'];

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

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function getTitreAttribute($attribute)
    {
        return Str::ucfirst($attribute);
    }
}
