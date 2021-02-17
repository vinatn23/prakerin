@extends('layouts/master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <h5><b>Tambah Data Rw</b></h5>
                </div>
                <div class="card-body">

                    <form action="{{route('rw.store')}}" method="POST">
                        @csrf
                        <div class="form-grup">
                            <label for="">Nama Kelurahan</label>
                            <select name="id_kelurahan" class="form-control" required>
                                @foreach($kelurahan as $data)
                                <option value="{{$data->id}}">{{$data->nama_kelurahan}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-grup">
                            <label for="">Rw</label>
                            <input type="text" name="nama_rw" class="form-control">
                            @if($errors->has('nama_rw'))
                                <span class="text-danger">{{ $errors->first('nama_rw') }}</span>
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