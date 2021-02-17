<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kota;
use App\Http\Controller\DB;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kecamatan = Kecamatan::with('kota')->get();
        return view('kecamatan.index',compact('kecamatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kota = Kota::all();
        return view('kecamatan.create',compact('kota'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validasi
        $request->validate([
            'kode_kecamatan' => 'required|max:5|unique:kecamatans',
            'nama_kecamatan' => 'required|unique:kecamatans',
        ], [
            'kode_kecamatan.required' => 'Kode Harus Di Isi',
            'kode_kecamatan.max' => 'Kode Maksimal 5 Nomer',
            'kode_kecamatan.unique' => 'Kode Sudah Dipakai',
            'nama_kecamatan.required' => 'Nama Kecamatan Harus Di Isi',
            'nama_kecamatan.unique' => 'Nama Sudah Dipakai',
        ]);

        $kecamatan = new Kecamatan();
        $kecamatan->kode_kecamatan=$request->kode_kecamatan;
        $kecamatan->nama_kecamatan=$request->nama_kecamatan;
        $kecamatan->id_kota=$request->id_kota;
        $kecamatan->save();
        return redirect()->route('kecamatan.index')->with(['message'=>'Data berhasil dibuat!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kecamatan = Kecamatan::findOrFail($id);
        return view('kecamatan.show', compact('kecamatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kecamatan = Kecamatan::findOrFail($id);
        $kota = Kota::all();
        return view('kecamatan.edit',compact('kecamatan','kota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kecamatan = Kecamatan::findOrFail($id);
        $kecamatan->kode_kecamatan=$request->kode_kecamatan;
        $kecamatan->nama_kecamatan=$request->nama_kecamatan;
        $kecamatan->id_kota=$request->id_kota;
        $kecamatan->save();
        return redirect()->route('kecamatan.index')->with(['message'=>'Data berhasil di edit!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kecamatan = Kecamatan::findOrFail($id);
        $kecamatan->delete();
        return redirect()->route('kecamatan.index')->with(['message'=>'Data berhasil dihapus!']);
    }
}