@extends('layouts.master')
@section('judul')
 Kasus
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Edit Kasus</div>
                <div class="card-body">
                    <form action="{{route('kasus2.update',$kasus2->id)}}" method="post">
                     <!-- <input type="hidden" name="_method" value="PUT"> -->
                        @csrf
                        @method('PUT')
                        <div class="mb-5">
                            @livewire('select',['selectedRw' => $kasus2->id_rw])
                        </div>
                        <div class="form-group">
                            <label for="">Positif</label>
                            <input type="text" name="jml_positif" value="{{$kasus2->jml_positif}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Sembuh</label>
                            <input type="text" name="jml_sembuh" value="{{$kasus2->jml_sembuh}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Meninggal</label>
                            <input type="text" name="jml_meninggal" value="{{$kasus2->jml_meninggal}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal</label>
                            <input type="date" name="tanggal" value="{{$kasus2->tanggal}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <a href="{{url()->previous()}}" class="fas fa-arrow-alt-circle-left btn btn-outline-secondary"> Kembali</a>
                            <button type="submit" class="far fa-save btn btn-outline-primary float-right"> Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection