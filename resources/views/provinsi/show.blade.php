@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h5><b>Menampilkan Data Provinsi</b></h5></div>
                <div class="card-body">
                <form action="{{route('provinsi.show', $provinsi->id)}}" method="POST">
                    @csrf 
                    
                    <div class="form-grup">
                        <label for="">Kode Provinsi</label>
                        <input type="number" value="{{$provinsi->kode_provinsi}}" name="kode_provinsi"  readonly>
                    </div>
                    <div class="form-grup">
                        <label for="">Nama Provinsi</label>
                        <input type="text" value="{{$provinsi->nama_provinsi}}" name="nama_provinsi"  readonly>
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