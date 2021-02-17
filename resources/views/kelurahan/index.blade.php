@extends('layouts.master')
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
                    <h3>Data Kelurahan</h3>
                    <a href="{{route('kelurahan.create')}}" class="btn btn-outline-dark float-right">
                        Tambah Data</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kelurahan</th>
                                    <th>Nama Kecamatan</th>
                                    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($kelurahan as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->nama_kelurahan}}</td>
                                    <td>{{$data->kecamatan->nama_kecamatan}}</td>
                                    <td>
                                        <form action="{{ route('kelurahan.destroy',$data->id)}}" method="POST">
                                            @csrf 
                                            @method('DELETE')
                                            <a href="{{ route('kelurahan.edit', $data->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="{{ route('kelurahan.show', $data->id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> </a>
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