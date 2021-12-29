<?php

namespace App\Models;

use App\Models\Artwork;
use App\Models\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Type extends Model
{
    use HasFactory;

    public function type()
    {
        return $this->belongsTo(Collection::class);
    }

    public function artworks()
    {
        return $this->hasMany(Artwork::class);
    }
}
