<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Type;
use App\Models\Photo;
use App\Models\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artwork extends Model
{
    use HasFactory;

    public function artworkPost()
    {
        return $this->belongsTo(Post::class);
    }

    public function artworkCollection()
    {
        return $this->belongsTo(Collection::class);
    }

    public function artworkType()
    {
        return $this->belongsTo(Type::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
