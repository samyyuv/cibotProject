<?php

namespace App\Models;

use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    use HasFactory, Sortable;

    protected $fillable = ['prenom', 'nom', 'email', 'telephone', 'message', 'sujet'];
    public $sortable = ['created_at', 'name', 'email', 'active', 'sujet'];
}
