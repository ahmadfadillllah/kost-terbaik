<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    //
    public function index()
    {

        $kriteria = Kriteria::all();
        return view('dashboard.kriteria.index', compact('kriteria'));
    }

    public function insert(Request $request)
    {

        $request->validate([
            'kode' => ['required', 'unique:kriteria,kode'],
            'namakriteria' => ['required'],
        ],
        [
            'kode.unique' => 'Kode Kriteria sudah ada'
        ]);

        $kriteria = Kriteria::insert([
            'kode' => $request->kode,
            'namakriteria' => $request->namakriteria
        ]);

        if($kriteria){
            return redirect()->back()->with('success', 'Kriteria berhasil ditambahkan');
        }

        return redirect()->back()->with('info', 'Kriteria gagal ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $kriteria = Kriteria::where('id', $id)->update([
            'kode' => $request->kode,
            'namakriteria' =>$request->namakriteria
        ]);

        if($kriteria){
            return redirect()->back()->with('success', 'Kriteria berhasil diubah');
        }

        return redirect()->back()->with('info', 'Kriteria gagal diubah');
    }

    public function delete($id)
    {
        $kriteria = Kriteria::where('id', $id)->delete();

        if($kriteria){
            return redirect()->back()->with('success', 'Kriteria berhasil dihapus');
        }

        return redirect()->back()->with('info', 'Kriteria gagal dihapus');
    }
}
