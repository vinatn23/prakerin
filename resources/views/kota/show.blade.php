@extends('layouts/master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h5><b>Menampilkan Data Kota</b></h5></div>
                <div class="card-body">

                    <form action="{{route('kota.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Kode Kota</label>
                            <input type="text" name="kode_kota" value="{{$kota->kode_kota}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Kota</label>
                            <input type="text" name="nama_kota" value="{{$kota->nama_kota}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Provinsi</label>
                            <input type="text" name="id_provinsi" value="{{$kota->provinsi->nama_provinsi}}" class="form-control" required>
                        </div> 
                        <div class="form-group">           
                        <a href="{{url()->previous()}}" class="btn btn-outline-secondary">Kembali</a>
                        </div>
                    </form>                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection