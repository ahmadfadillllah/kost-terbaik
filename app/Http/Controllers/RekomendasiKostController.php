<?php

namespace App\Http\Controllers;

use App\Models\Borda;
use Illuminate\Http\Request;

class RekomendasiKostController extends Controller
{
    //
    public function index()
    {
        $datakost = Borda::join('users', 'id_user', 'users.id')->get()->sortBy('rank');

        return view('dashboard.rekomendasikost.index', compact('datakost'));
    }
}
