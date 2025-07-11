@extends('layouts.template')

@section('title')
    Data Buku
@endsection

@section('content')
<div class="card mt-5"> {{-- Tambah jarak ke bawah --}}
    <div class="card-header">
        <h3 class="card-title">
            <a href="/perpus/tambah" class="btn btn-primary btn-sm">
                <i class="fa fa-user-plus"></i> Tambah Data Buku
            </a>
        </h3>
    </div>

    <div class="card-body">
        <table class="table table-hover">
            <thead >
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Tahun Terbit</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($perpus as $data)
                    <tr>
                        <th scope="row">{{ $nomor++ }}</th>
                        <td>{{ $data->judul }}</td>
                        <td>{{ $data->penulis }}</td>
                        <td>{{ $data->tahunterbit }}</td>
                        <td>{{ $data->penerbit }}</td>
                        <td>{{ $data->kategori }}</td>
                        <td>

                             <a href="{{ route('perpus.edit', $data->id) }}" class="btn btn-info btn-sm">
                                <i class="fa fa-pen"></i>
                             </a>


                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $data->id }}">
                                <i class="fa fa-trash"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modalDelete{{ $data->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $data->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalLabel{{ $data->id }}">Konfirmasi Hapus</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Yakin ingin menghapus buku berjudul <strong>{{ $data->judul }}</strong>?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <form action="/perpus/{{ $data->id }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted">Data Tidak Ada</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
