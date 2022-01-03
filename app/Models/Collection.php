<?php

namespace App\Models;

use App\Models\Oeuvre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Collection extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function oeuvres()
    {
        return $this->hasMany(Oeuvre::class);
    }
}
