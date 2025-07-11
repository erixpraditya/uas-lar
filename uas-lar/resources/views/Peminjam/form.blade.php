@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-5">
                <div class="card-header">Form Tambah Data Peminjam</div>

                <div class="card-body">
                    <form method="post" action="/peminjam" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama Buku</label>
                            <select name="perpuses_id" id="" class="form-control">
                                <option value="">-Pilih Buku-</option>
                                @foreach ($perpus as $item)
                                    <option value="{{$item->id}}">{{$item->judul}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama Anggota</label>
                            <select name="anggotas_id" id="" class="form-control">
                                <option value="">-Pilih Anggota-</option>
                                @foreach ($anggota as $item)
                                    <option value="{{$item->id}}">{{$item->nama_anggota}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tanggal Pinjam</label>
                            <input type="date" name="tgl_pinjam" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tanggal Kembali</label>
                            <input type="date" name="tgl_kembali" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Status</label>
                            <input type="text" name="status" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
