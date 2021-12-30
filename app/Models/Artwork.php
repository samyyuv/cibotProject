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

    protected $guarded = [];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function collections()
    {
        return $this->hasMany(Collection::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
