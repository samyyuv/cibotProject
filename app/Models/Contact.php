<?php

namespace App\Models;

use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory, Sortable;

    protected $fillable = ['name', 'email', 'telephone', 'active'];
    public $sortable = ['created_at', 'name', 'email', 'active'];
}
