<?php

namespace App\Models;

use App\Models\Type;
use App\Models\Artwork;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Collection extends Model
{
    use HasFactory;

    public function artworks()
    {
        return $this->hasMany(Artwork::class);
    }

    public function types()
    {
        return $this->hasMany(Type::class);
    }
}
