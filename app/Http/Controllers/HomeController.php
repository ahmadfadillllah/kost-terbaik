<?php

namespace App\Http\Controllers;

use App\Models\Borda;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $kost = Borda::all();
        $kost2 = Borda::skip(0)->take(1)->get();
        return view('landing-page.index', compact('kost', 'kost2'));
    }

    public function about()
    {
        return view('landing-page.about');
    }
    public function contact()
    {
        return view('landing-page.contact');
    }
}
