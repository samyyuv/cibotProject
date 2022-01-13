<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Oeuvre;
use App\Models\Actualite;
use App\Models\Categorie;
use App\Models\Collection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        $collections = Collection::all();
        $actualites = Actualite::all();
        $oeuvres = Oeuvre::all();
        $users = User::all();

        $actualitesDernierMois = Actualite::whereMonth(
            'created_at',
            '=',
            Carbon::now()->subMonth()->month
        );

        $oeuvresDernierMois = Oeuvre::whereMonth(
            'created_at',
            '=',
            Carbon::now()->subMonth()->month
        );

        $usersDernierMois = User::whereMonth(
            'created_at',
            '=',
            Carbon::now()->subMonth()->month
        );

        return view('dashboard', compact('categories', 'collections', 'actualites', 'oeuvres', 'users', "actualitesDernierMois", 'oeuvresDernierMois', 'usersDernierMois'));
    }

    public function search(Request $request)
    {
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns
        $actualites = Actualite::query()
            ->where('titre', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->orWhere('titl_seo', 'LIKE', "%{$search}%")
            ->orWhere('description_seo', 'LIKE', "%{$search}%")
            ->get();

        $oeuvres = Oeuvre::query()
            ->where('titre', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->orwhere('sous_titre', 'LIKE', "%{$search}%")
            ->get();

        $categories = Categorie::query()
            ->where('titre', 'LIKE', "%{$search}%")
            ->orwhere('sous_titre', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->get();

        $collections = Collection::query()
            ->where('titre', 'LIKE', "%{$search}%")
            ->orwhere('sous_titre', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->get();

        // Return the search view with the results compacted
        return view('search', compact('actualites', 'collections', 'categories', 'oeuvres'));
    }
}
