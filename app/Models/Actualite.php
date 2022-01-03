<?php

namespace App\Models;

use App\Models\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Actualite extends Model
{
    use HasFactory;

    protected $guarded = [];

    // public static function boot()
    // {
    //     parent::boot();
    //     self::creating(function ($actualite) {
    //         $actualite->collection()->associate(request()->collection);
    //     });
    // }

    // public function collection()
    // {
    //     return $this->belongsTo(Collection::class);
    // }
}
