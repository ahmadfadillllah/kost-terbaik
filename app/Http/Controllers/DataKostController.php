<?php

namespace App\Http\Controllers;

use App\Models\DataKost;
use App\Models\Kost;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DataKostController extends Controller
{
    //
    public function index()
    {
        $datakost = Kost::all();
        return view('dashboard.datakost.index', compact('datakost'));
    }

    public function insert(Request $request)
    {
        $request->validate([
            'gambar' => ['required', 'mimes:png,jpg'],
            'namakost' => ['required'],
            'alamat' => ['required'],
            'harga' => ['required'],
            'fasilitas' => ['required'],
            'tipekost' => ['required'],
            'sistemkontrak' => ['required'],
        ]);

        $harga1 = Str::replace('Rp', '', $request->harga);
        $harga2 = Str::replace('.', '', $harga1);

        $datakost = new DataKost;

        $datakost->namakost = $request->namakost;
        $datakost->alamat = $request->alamat;
        $datakost->harga = $harga2;
        $datakost->fasilitas = $request->fasilitas;
        $datakost->tipekost = $request->tipekost;
        $datakost->sistemkontrak = $request->sistemkontrak;
        $date = date('Ymd His gis');

        if($request->hasFile('gambar')){
            $request->file('gambar')->move('admin/demo/app/images/', $date.$request->file('gambar')->getClientOriginalName());
            $datakost->gambar = $date.$request->file('gambar')->getClientOriginalName();
            $datakost->save();

            return redirect()->back()->with('success', 'Kost telah ditambahkan');
        }

        return redirect()->back()->with('info', 'Kost gagal ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $datakost = DataKost::where('id', $id)->update([
            'harga' => $request->harga,
            'fasilitas' => $request->fasilitas,
            'tipekost' => $request->tipekost,
            'sistemkontrak' => $request->sistemkontrak,
        ]);

        if($datakost){
            return redirect()->back()->with('success', 'Kost berhasil diubah');
        }

        return redirect()->back()->with('info', 'Kost gagal diubah');
    }

    public function delete($id)
    {
        $datakost = DataKost::where('id', $id)->delete();

        if($datakost){
            return redirect()->back()->with('success', 'Kost berhasil dihapus');
        }

        return redirect()->back()->with('info', 'Kost gagal dihapus');
    }
}
