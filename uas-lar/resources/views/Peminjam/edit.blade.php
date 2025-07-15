@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Tambah Data</div>

                <div class="card-body">
                    <form method="post" action="/peminjam/{{$peminjam->id}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama Buku</label>
                            <select name="perpuses" id="" class="form-control">
                                <option value="">-Pilih Buku-</option>
                                @foreach ($perpus as $item)
                                    {{-- <option value="{{$item->id}}">{{$item->judul}}</option> --}}
                                    <option {{$peminjam->perpuses_id == $item->id ? 'selected' :''}} value="{{$item->id}}">{{$item->judul}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama Anggota</label>
                            <select name="anggotas" id="" class="form-control">
                                <option value="">-Pilih Anggota-</option>
                                @foreach ($anggota as $item2)
                                    {{-- <option value="{{$item2->id}}">{{$item2->nama_anggota}}</option> --}}
                                    <option {{$peminjam->anggotas_id == $item2->id ? 'selected' :''}} value="{{$item2->id}}">{{$item2->nama_anggota}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tanggal Pinjam</label>
                            <input type="date" value={{$peminjam->tgl_pinjam}} name="tgl_pinjam" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                         <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tanggal Kembali</label>
                            <input type="date" value={{$peminjam->tgl_kembali}} name="tgl_kembali" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Status</label>
                            <input type="text" value={{$peminjam->status}} name="status" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
