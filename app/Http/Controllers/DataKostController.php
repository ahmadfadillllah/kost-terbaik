<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataKostController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.datakost.index');
    }
}
