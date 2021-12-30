<?php

namespace App\Models;

use App\Models\Artwork;
use App\Models\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function artworks()
    {
        return $this->hasMany(Artwork::class);
    }

    public function collections()
    {
        return $this->hasMany(Collection::class);
    }
}
