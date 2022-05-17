<?php

namespace App\Models;

use Illuminate\Support\Str;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Actualite extends Model
{
    use HasFactory, Sortable;

    protected $fillable = ['titre', 'description', 'active', 'titl_seo', 'description_seo', 'titre_en', 'description_en', 'photo', 'position'];
    public $sortable = ['created_at', 'titre', 'active', 'position'];

    public function getTitreAttribute($attribute)
    {
        return Str::ucfirst($attribute);
    }
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
