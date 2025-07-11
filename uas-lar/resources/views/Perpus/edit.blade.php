@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Edit Data Buku</div>

                <div class="card-body">
                        <form method="post" action="/perpus/{{$perpus->id}}">
                            @csrf
                            @method('PUT')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Judul</label>
                            <input type="text" value="{{$perpus->judul}}" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Penulis</label>
                            <input type="text" value="{{$perpus->penulis}}" name="penulis" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tahun Terbit</label>
                            <input type="number" value="{{$perpus->tahunterbit}}" name="tahunterbit" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Penerbit</label>
                            <input type="text" name="penerbit" value="{{$perpus->penerbit}}" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Kategori</label>
                            <input type="text" name="kategori" value="{{$perpus->kategori}}" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Foto</label>
                            <input type="file" name="foto" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
