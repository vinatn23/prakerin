@extends('layouts.master')
@section('judul')
 Kasus
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                <h3>Data Kasus</h3>
                    <a href="{{route('kasus2.create')}}" class="btn btn-outline-dark float-right">
                        Tambah Data
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No </th>
                                    <th scope="col">Lokasi</th>
                                    <th scope="col">Rw</th>
                                    <th scope="col">Positif</th>
                                    <th scope="col">Sembuh</th>
                                    <th scope="col">Meninggal</th>
                                    <th scope="col">Tanggal</th>
                                    <th>&nbsp; Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($kasus2 as $data)
                                <tr>
                                    <td scope="row">{{$no++}}</td>
                                    <td>
                                    PROVINSI : {{$data->rw->kelurahan->kecamatan->kota->provinsi->nama_provinsi}}<br>
                                    KOTA : {{$data->rw->kelurahan->kecamatan->kota->nama_kota}}<br>
                                    KECAMATAN : {{$data->rw->kelurahan->kecamatan->nama_kecamatan}}<br>
                                    KELURAHAN : {{$data->rw->kelurahan->nama_kelurahan}}
                                    </td>

                                    <td>{{$data->rw->nama_rw}}</td>
                                    <td>{{$data->jml_positif}}</td>
                                    <td>{{$data->jml_sembuh}}</td>
                                    <td>{{$data->jml_meninggal}}</td>
                                    <td>{{date('d-m-Y', strtotime($data->tanggal))}}</td>
                                    <td>
                                        <form action="{{ route('kasus2.destroy',$data->id)}}" method="POST">
                                            @csrf 
                                            @method('DELETE')
                                            <a href="{{ route('kasus2.edit', $data->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection