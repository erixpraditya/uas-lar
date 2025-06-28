@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">Form Edit Data Anggpta</div>

                <div class="card-body">
                        <form method="post" action="/anggota/{{$anggota->id}}">
                            @csrf
                            @method('PUT')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Anggota</label>
                            <input type="text" value="{{$anggota->nama_anggota}}" name="nama_anggota" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Alamat</label>
                            <input type="text" value="{{$anggota->alamat}}" name="alamat" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">No HP</label>
                            <input type="number" value="{{$anggota->nohp}}" name="nohp" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tanggal Daftar</label>
                            <input type="date" name="tgl_daftar" value="{{$anggota->tgl_daftar}}" class="form-control" id="exampleInputPassword1">
                        </div>

                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
