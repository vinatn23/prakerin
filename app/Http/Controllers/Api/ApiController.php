<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kasus2;
use App\Models\Rw;
use App\Models\provinsi;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\kelurahan;
use Carbon\Carbon;
use GuzzleHttp\Client;


class ApiController extends Controller
{
    public $data = [];
    public function global()
    {
        
        $response = Http::get( 'https://api.kawalcorona.com/global/' )->json();
        foreach ($response as $data => $val){
            $raw =$val['attributes'];
            $res = [
                'Negara' => $raw['Country_Region'],
                'Positif' => $raw ['Confirmed'],
                'Sembuh' => $raw ['Recovered'],
                'meninggal' => $raw ['Deaths']
            ];
            array_push($this->data, $res);
         }
            $data = [
                'success' => true,
                'data' => $this->data,
                'message' => 'berhasil'
            ];
            return response()->json($data,200);

    }

    public function index()
    {
        $positif = DB::table('rws')
            ->select('kasus2s.jml_positif', 'kasus2s.jml_sembuh', 'kasus2s.jml_meninggal')
            ->join('kasus2s', 'rws.id', '=', 'kasus2s.id_rw')
            ->sum('kasus2s.jml_positif');

        $sembuh = DB::table('rws')
            ->select('kasus2s.jml_positif', 'kasus2s.jml_sembuh', 'kasus2s.jml_meninggal')
            ->join('kasus2s', 'rws.id', '=', 'kasus2s.id_rw')
            ->sum('kasus2s.jml_sembuh');

        $meninggal = DB::table('rws')
            ->select('kasus2s.jml_positif', 'kasus2s.jml_sembuh', 'kasus2s.jml_meninggal')
            ->join('kasus2s', 'rws.id', '=', 'kasus2s.id_rw')
            ->sum('kasus2s.jml_meninggal');

        $res = [
            'Success'           => true,
            'Data'              => 'Data Kasus Di Indonesia',
            'Jumlah Positif'    => $positif,
            'Jumlah Sembuh'     => $sembuh,
            'Jumlah Meninngal'  => $meninggal,
            'Message'           => 'Data Kasus di Tampilkan'
        ];
        return response()->json($res, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function provin()
    {
        $tampil = DB::table('kasus2s')
        ->select(DB::raw('provinsis.nama_provinsi as provinsi'),
                 DB::raw('SUM(kasus2s.jml_positif) as positif'), 
                 DB::raw('SUM(kasus2s.jml_sembuh) as sembuh'),
                 DB::raw('SUM(kasus2s.jml_meninggal) as meninggal'))
        ->join('rws','rws.id','=','kasus2s.id_rw')
        ->join('kelurahans','kelurahans.id','=','rws.id_kelurahan')
        ->join('kecamatans','kecamatans.id','=','kelurahans.id_kecamatan')
        ->join('kotas','kotas.id','=','kecamatans.id_kota')
        ->join('provinsis','provinsis.id','=','kotas.id_provinsi')
        ->groupBy('provinsis.nama_provinsi')
        ->get();

        $res = [
            'Success'   => true,
            'Data'      => $tampil,
            'Message'   => 'Berhasil Menampilkan Berdasarkan Provinsi!'
        ];
        return response()->json($res, 200);
    }

    public function kota()
    {
        $tampil = DB::table('kasus2s')
            ->select(
                DB::raw('kotas.nama_kota as kota'),
                DB::raw('SUM(kasus2s.jml_positif) as positif'),
                DB::raw('SUM(kasus2s.jml_sembuh) as sembuh'),
                DB::raw('SUM(kasus2s.jml_meninggal) as meninggal')
            )
            ->join('rws', 'rws.id', '=', 'kasus2s.id_rw')
            ->join('kelurahans', 'kelurahans.id', '=', 'rws.id_kelurahan')
            ->join('kecamatans', 'kecamatans.id', '=', 'kelurahans.id_kecamatan')
            ->join('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
            ->groupBy('kotas.nama_kota')
            ->get();

        $res = [
            // 'success'   => true,
            'data'      => $tampil,
            'message'   =>  'Berhasil Menampilkan Berdasarkan Kota!'
        ];
        return response()->json($res, 200);
    }

    public function kecamatan()
    {
        $tampil = DB::table('kasus2s')
            ->select(
                DB::raw('kecamatans.nama_kecamatan as kecamatan'),
                DB::raw('SUM(kasus2s.jml_positif) as positif'),
                DB::raw('SUM(kasus2s.jml_sembuh) as sembuh'),
                DB::raw('SUM(kasus2s.jml_meninggal) as meninggal')
            )
            ->join('rws', 'rws.id', '=', 'kasus2s.id_rw')
            ->join('kelurahans', 'kelurahans.id', '=', 'rws.id_kelurahan')
            ->join('kecamatans', 'kecamatans.id', '=', 'kelurahans.id_kecamatan')
            ->groupBy('kecamatans.nama_kecamatan')
            ->get();

        $res = [
            // 'success'   => true,
            'data'      => $tampil,
            'message'   =>  'Berhasil Menampilkan Berdasarkan Kecamatan!'
        ];
        return response()->json($res, 200);
    }


    public function kelurahan()
    {
        $tampil = DB::table('kasus2s')
            ->select(
                DB::raw('kelurahans.nama_kelurahan as kelurahan'),
                DB::raw('SUM(kasus2s.jml_positif) as positif'),
                DB::raw('SUM(kasus2s.jml_sembuh) as sembuh'),
                DB::raw('SUM(kasus2s.jml_meninggal) as meninggal')
            )
            ->join('rws', 'rws.id', '=', 'kasus2s.id_rw')
            ->join('kelurahans', 'kelurahans.id', '=', 'rws.id_kelurahan')
            ->groupBy('kelurahans.nama_kelurahan')
            ->get();

        $res = [
            // 'success'   => true,
            'data'      => $tampil,
            'message'   =>  'Berhasil Menampilkan Berdasarkan Kelurahan!'
        ];
        return response()->json($res, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function provinsi($id)
    {
        $positif = DB::table('provinsis')
            ->join('kotas', 'kotas.id_provinsi', '=', 'provinsis.id')
            ->join('kecamatans', 'kecamatans.id_kota', '=', 'kotas.id')
            ->join('kelurahans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
            ->join('rws', 'rws.id_kelurahan', '=', 'kelurahans.id')
            ->join('kasus2s', 'kasus2s.id_rw', '=', 'rws.id')
            ->select('kasus2s.jml_positif')
            ->where('provinsis.id', $id)
            ->sum('kasus2s.jml_positif');

            $sembuh = DB::table('provinsis')
            ->join('kotas', 'kotas.id_provinsi', '=', 'provinsis.id')
            ->join('kecamatans', 'kecamatans.id_kota', '=', 'kotas.id')
            ->join('kelurahans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
            ->join('rws', 'rws.id_kelurahan', '=', 'kelurahans.id')
            ->join('kasus2s', 'kasus2s.id_rw', '=', 'rws.id')
            ->select('kasus2s.jml_sembuh')
            ->where('provinsis.id', $id)
            ->sum('kasus2s.jml_sembuh');

            $meninggal = DB::table('provinsis')
            ->join('kotas', 'kotas.id_provinsi', '=', 'provinsis.id')
            ->join('kecamatans', 'kecamatans.id_kota', '=', 'kotas.id')
            ->join('kelurahans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
            ->join('rws', 'rws.id_kelurahan', '=', 'kelurahans.id')
            ->join('kasus2s', 'kasus2s.id_rw', '=', 'rws.id')
            ->select('kasus2s.jml_meninggal')
            ->where('provinsis.id', $id)
            ->sum('kasus2s.jml_meninggal');


            $provinsi = Provinsi::whereId($id)->first();
                        
        $res = [
            'success'           => true,
            'Data'              => 'Data Kasus Berdasarkan Id',
            'Kode Provinsi'     => $provinsi ['kode_provinsi'],
            'Provinsi'          => $provinsi ['nama_provinsi'], 
            'Jumlah Positif'    => $positif,
            'Jumlah Sembuh'     => $sembuh,
            'Jumlah Meninngal'  => $meninggal,
            'message'           => 'Data Kasus di Tampilkan'
        ];
        return response()->json($res, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}