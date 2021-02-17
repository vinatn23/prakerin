<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use DB;
use App\Http\Models\Provinsi;
use App\Http\Models\Kota;
use App\Http\Models\Kecamatan;
use App\Http\Models\Kelurahan;
use App\Http\Models\Rw;
use App\Http\Models\Kasus2;
use Illuminate\Support\Carbon;

class FrontendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
            
        $global = file_get_contents('https://api.kawalcorona.com/positif');
        $posglobal = json_decode($global, TRUE);

        // Date
        $tanggal = Carbon::now()->format('D d-M-Y');

        // Table Provinsi
        $tampil = DB::table('provinsis')
                    ->join('kotas','kotas.id_provinsi','=','provinsis.id')
                    ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
                    ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
                    ->join('rws','rws.id_kelurahan','=','kelurahans.id')
                    ->join('kasus2s','kasus2s.id_rw','=','rws.id')
                    ->select('nama_provinsi',
                            DB::raw('sum(kasus2s.jml_positif) as positif'),
                            DB::raw('sum(kasus2s.jml_sembuh) as sembuh'),
                            DB::raw('sum(kasus2s.jml_meninggal) as meninggal'))
                    ->groupBy('nama_provinsi')->orderBy('nama_provinsi','ASC')
                    ->get();

        // Table Global
        $datadunia= file_get_contents("https://api.kawalcorona.com/");
        $dunia = json_decode($datadunia, TRUE);

        return view('frontend.index',compact('positif','sembuh','meninggal','posglobal', 'tanggal','tampil','dunia'));
    }

    
}
