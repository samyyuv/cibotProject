<?php

namespace App\Models;

use App\Models\Oeuvre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photo extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function oeuvre()
    {
        return $this->belongsTo(Oeuvre::class);
    }
}
