<?php

namespace App\Models;

use App\Models\Artwork;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photo extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function artwork()
    {
        return $this->belongsTo(Artwork::class);
    }
}
