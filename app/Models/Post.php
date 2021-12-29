<?php

namespace App\Models;

use App\Models\Artwork;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    public function artworks()
    {
        return $this->hasMany(Artwork::class);
    }
}
