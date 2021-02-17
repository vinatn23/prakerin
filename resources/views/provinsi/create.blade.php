@extends('layouts/master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <h5><b>Tambah Data Provinsi</b></h5>
                </div>
                <div class="card-body">

                    <form action="{{route('provinsi.store')}}" method="POST">
                        @csrf
                        <div class="form-grup">
                            <label for="">Kode Provinsi</label>
                            <input type="text" name="kode_provinsi" class="form-control">
                            @if($errors->has('kode_provinsi'))
                                <span class="text-danger">{{ $errors->first('kode_provinsi') }}</span>
                            @endif
                        </div>
                        <div class="form-grup">
                            <label for="">Provinsi</label>
                            <input type="text" name="nama_provinsi" class="form-control">
                            @if($errors->has('nama_provinsi'))
                                <span class="text-danger">{{ $errors->first('nama_provinsi') }}</span>
                            @endif
                        </div> 
                        <div class="form-grup">             
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection