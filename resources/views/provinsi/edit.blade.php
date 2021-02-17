@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Provinsi</div>
                <div class="card-body">
                    <form action="{{route('provinsi.update', $provinsi->id)}}" method="POST">
                        @csrf 
                        @method("PUT")

                        <div class="form-grup">
                        <label for="">Kode Provinsi</label>
                            <input type="number" name="kode_provinsi" class="form-control" value="{{$provinsi->kode_provinsi}}" required>
                        </div>
                        <div class="form-grup">
                        <label for="">Nama Provinsi</label>
                            <input type="text" name="nama_provinsi" class="form-control" value="{{$provinsi->nama_provinsi}}" required>
                        <div class="form-group">           
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{url()->previous()}}" class="btn btn-outline-secondary">Kembali</a>
                        </div>
                    </form>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection