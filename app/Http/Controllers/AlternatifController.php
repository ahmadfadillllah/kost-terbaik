<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    //
    public function index()
    {

        $alternatif = Alternatif::all();
        return view('dashboard.alternatif.index', compact('alternatif'));
    }

    public function insert(Request $request)
    {

        $request->validate([
            'kode' => ['required', 'unique:alternatif,kode'],
            'namaalternatif' => ['required'],
        ],
        [
            'kode.unique' => 'Kode Alternatif sudah ada'
        ]);

        $alternatif = Alternatif::insert([
            'kode' => $request->kode,
            'namaalternatif' => $request->namaalternatif
        ]);

        if($alternatif){
            return redirect()->back()->with('success', 'Alternatif berhasil ditambahkan');
        }

        return redirect()->back()->with('info', 'Alternatif gagal ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $alternatif = Alternatif::where('id', $id)->update([
            'kode' => $request->kode,
            'namaalternatif' =>$request->namaalternatif
        ]);

        if($alternatif){
            return redirect()->back()->with('success', 'Alternatif berhasil diubah');
        }

        return redirect()->back()->with('info', 'Alternatif gagal diubah');
    }

    public function delete($id)
    {
        $alternatif = Alternatif::where('id', $id)->delete();

        if($alternatif){
            return redirect()->back()->with('success', 'Alternatif berhasil dihapus');
        }

        return redirect()->back()->with('info', 'Alternatif gagal dihapus');
    }
}
