@extends('layouts.master')
@section('judul')
 Kasus
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                <h5><b>Tambah Data Kasus</b></h5>
                <div class="card-body">
                    <form action="{{route('kasus2.store')}}" method="post">
                        @csrf
                        <div class="mb-5">
                            @livewire('select')
                        </div>
                        <div class="form-group">
                            <label for="">Positif</label>
                            <input type="text" name="jml_positif" class="form-control">
                            @if($errors->has('jml_positif'))
                                <span class="text-danger">{{ $errors->first('jml_positif') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Sembuh</label>
                            <input type="text" name="jml_sembuh" class="form-control">
                            @if($errors->has('jml_sembuh'))
                                <span class="text-danger">{{ $errors->first('jml_sembuh') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Meninggal</label>
                            <input type="text" name="jml_meninggal" class="form-control">
                            @if($errors->has('jml_meninggal'))
                                <span class="text-danger">{{ $errors->first('jml_meninggal') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal</label>
                            <input type="date" name="tanggal" class="form-control">
                            @if($errors->has('tanggal'))
                                <span class="text-danger">{{ $errors->first('tanggal') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="far fa-save btn btn-outline-primary float-right"> Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection