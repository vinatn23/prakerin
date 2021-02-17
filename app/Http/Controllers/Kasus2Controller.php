<?php

namespace App\Http\Controllers;

use App\Models\Kasus2;
use App\Models\Rw;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class Kasus2Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kasus2 = Kasus2::all();
        return view('kasus2.index',compact('kasus2'));
    }

    public function create()
    {
        $rw = Rw::all();
        return view('kasus2.create',compact('rw'));
    }

    public function store(Request $request)
    {
        // validasi
        $request->validate([
            'jml_positif' => 'required:kasus2s',
            'jml_sembuh' => 'required:kasus2s',
            'jml_meninggal' => 'required:kasus2s',
            'tanggal' => 'required:kasus2s'
        ], [
            'jml_positif.required' => 'Jumlah Positif Harus Di Isi',
            'jml_sembuh.required' => 'Jumlah Sembuh Harus Di Isi',
            'jml_meninggal.required' => 'Jumlah Meninggal Harus Di Isi',
            'tanggal.required' => 'Tanggal Harus Di Isi',
        ]);

        $kasus2 = new Kasus2();
        $kasus2->jml_positif = $request->jml_positif;
        $kasus2->jml_sembuh = $request->jml_sembuh;
        $kasus2->jml_meninggal = $request->jml_meninggal;
        $kasus2->tanggal = $request->tanggal;
        $kasus2->id_rw = $request->id_rw;
        $kasus2->save();
        return redirect()->route('kasus2.index')->with('toast_success', 'Kasus berhasil dibuat!');
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $kasus2 = Kasus2::findOrFail($id);
        $rw = rw::all();
        return view('kasus2.edit',compact('kasus2','rw'));
    }

    public function update(Request $request, $id)
    {
        $kasus2 = Kasus2::findOrFail($id);
        $kasus2->jml_positif = $request->jml_positif;
        $kasus2->jml_sembuh = $request->jml_sembuh;
        $kasus2->jml_meninggal = $request->jml_meninggal;
        $kasus2->tanggal = $request->tanggal;
        $kasus2->id_rw = $request->id_rw;
        $kasus2->save();
        return redirect()->route('kasus2.index')->with('toast_success', 'Kasus berhasil diedit!');
    }

    public function destroy($id)
    {
        $kasus2 = Kasus2::findOrFail($id)->delete();
        return redirect()->route('kasus2.index')->with('success', 'Kasus berhasil dihapus!');
    }
}