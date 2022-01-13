<?php

namespace App\Models;

use App\Models\Photo;
use App\Models\Oeuvre;
use Illuminate\Support\Str;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Collection extends Model
{
    use HasFactory, Sortable;

    protected $fillable = ['description', 'titre', 'sous_titre'];
    public $sortable = ['created_at', 'titre'];

    public function oeuvres()
    {
        return $this->hasMany(Oeuvre::class);
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
