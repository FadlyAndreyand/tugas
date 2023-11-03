@extends('buku.layouts.app')
 
@section('content')
    <div class="container">
        <h2>Data Buku</h2>
        <a href="{{ route('buku.create') }}" class="btn btn-primary">Tambah Buku</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Kode Buku</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bukus as $buku)
                    <tr>
                        <td>{{ $buku->kode_buku }}</td>
                        <td>{{ $buku->judul }}</td>
                        <td>{{ $buku->penulis }}</td>
                        <td>{{ $buku->harga }}</td>
                        <td>
                            <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection