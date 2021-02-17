@extends('layouts/master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h5><b>Menampilkan Data Kelurahan</b></h5></div>
                <div class="card-body">

                    <form action="{{route('kelurahan.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Kelurahan</label>
                            <input type="text" name="nama_kelurahan" value="{{$kelurahan->nama_kelurahan}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Kecamatan</label>
                            <input type="text" name="nama_kecamatan" value="{{$kelurahan->kecamatan->nama_kecamatan}}" class="form-control" required>
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