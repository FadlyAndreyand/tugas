@extends('buku.layouts.app')
 
@section('content')
    <div class="container">
        <h2>Edit Buku</h2>
        <form action="{{ route('buku.update', $buku->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="kode_buku">Kode Buku</label>
                <input type="text" name="kode_buku" class="form-control" value="{{ $buku->kode_buku }}" required>
            </div>
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control" value="{{ $buku->judul }}" required>
            </div>
            <div class="form-group">
                <label for="penulis">Penulis</label>
                <input type="text" name="penulis" class="form-control" value="{{ $buku->penulis }}" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" name="harga" class="form-control" value="{{ $buku->harga }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection