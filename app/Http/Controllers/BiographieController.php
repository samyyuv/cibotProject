<?php

namespace App\Http\Controllers;

use App\Models\Oeuvre;
use App\Models\Categorie;
use App\Models\Collection;
use Illuminate\Http\Request;

class BiographieController extends Controller
{
    public function index()
    {
        $oeuvres = Oeuvre::where('active', 1)->latest()->take(5)->get();
        $oeuvresImg = Oeuvre::where('active', 1)->inRandomOrder()->limit(8)->get();

        return view('biographie.biographie', compact(
            'oeuvres',
            'oeuvresImg'
        ));
    }
    public function awards()
    {
        $oeuvres = Oeuvre::where('active', 1)->latest()->take(5)->get();
        $oeuvresImg = Oeuvre::where('active', 1)->inRandomOrder()->limit(8)->get();

        return view('biographie.distinctions', compact(
            'oeuvres',
            'oeuvresImg'
        ));
    }
    public function monuments()
    {
        $oeuvres = Oeuvre::where('active', 1)->latest()->take(5)->get();
        $oeuvresImg = Oeuvre::where('active', 1)->inRandomOrder()->limit(8)->get();

        return view('biographie.monuments', compact(
            'oeuvres',
            'oeuvresImg'
        ));
    }
    public function personal()
    {
        $oeuvres = Oeuvre::where('active', 1)->latest()->take(5)->get();
        $oeuvresImg = Oeuvre::where('active', 1)->inRandomOrder()->limit(8)->get();

        return view('biographie.personal', compact(
            'oeuvres',
            'oeuvresImg'
        ));
    }
    public function collectives()
    {
        $oeuvres = Oeuvre::where('active', 1)->latest()->take(5)->get();
        $oeuvresImg = Oeuvre::where('active', 1)->inRandomOrder()->limit(8)->get();

        return view('biographie.collectives', compact(
            'oeuvres',
            'oeuvresImg'
        ));
    }
    public function evenements()
    {
        $oeuvres = Oeuvre::where('active', 1)->latest()->take(5)->get();
        $oeuvresImg = Oeuvre::where('active', 1)->inRandomOrder()->limit(8)->get();

        return view('biographie.evenements', compact(
            'oeuvres',
            'oeuvresImg'
        ));
    }
    public function permanence()
    {
        $oeuvres = Oeuvre::where('active', 1)->latest()->take(5)->get();
        $oeuvresImg = Oeuvre::where('active', 1)->inRandomOrder()->limit(8)->get();

        return view('biographie.permanence', compact(
            'oeuvres',
            'oeuvresImg'
        ));
    }
    public function critics()
    {
        $oeuvres = Oeuvre::where('active', 1)->latest()->take(5)->get();
        $oeuvresImg = Oeuvre::where('active', 1)->inRandomOrder()->limit(8)->get();

        return view('biographie.critics', compact(
            'oeuvres',
            'oeuvresImg'
        ));
    }
    public function video()
    {
        $oeuvres = Oeuvre::where('active', 1)->latest()->take(5)->get();
        $oeuvresImg = Oeuvre::where('active', 1)->inRandomOrder()->limit(8)->get();

        return view('biographie.video', compact(
            'oeuvres',
            'oeuvresImg'
        ));
    }
}
