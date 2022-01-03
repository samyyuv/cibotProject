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


    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
