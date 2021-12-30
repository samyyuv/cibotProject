<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Type;
use App\Models\Artwork;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Collection extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function artwork()
    {
        return $this->belongsTo(Artwork::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
