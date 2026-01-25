<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use App\Models\Promo;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $wisataList = Wisata::where('is_active', true)->take(3)->get();
        return view('beranda', compact('wisataList'));
    }

    public function wisata()
    {
        $wisataList = Wisata::where('is_active', true)->get();
        return view('wisata', compact('wisataList'));
    }

    public function show(Wisata $wisata)
    {
        $remainingQuota = $wisata->getRemainingQuota(date('Y-m-d'));
        return view('wisata.show', compact('wisata', 'remainingQuota'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function guide()
    {
        return view('guide');
    }

    public function terms()
    {
        return view('terms');
    }

    public function privacy()
    {
        return view('privacy');
    }
}
