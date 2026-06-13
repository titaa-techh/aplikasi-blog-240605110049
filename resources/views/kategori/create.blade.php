@extends('layouts.app')

@section('title', 'Tambah Kategori Artikel')

@section('content')
<div class="mb-3">
    <h6 class="fw-semibold mb-0" style="color: #333333;">Tambah Kategori Artikel</h6>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body p-4">
        <form action="{{ route('kategori.store') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="nama_kategori" class="form-label" style="font-size: 13px; color: #555555;">Nama Kategori</label>
                <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror" id="nama_kategori" name="nama_kategori" value="{{ old('nama_kategori') }}" required placeholder="Masukkan nama kategori (contoh: Budaya, Wisata)">
                @error('nama_kategori')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="keterangan" class="form-label" style="font-size: 13px; color: #555555;">Keterangan</label>
                <textarea class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" rows="3" placeholder="Masukkan keterangan atau deskripsi kategori (opsional)">{{ old('keterangan') }}</textarea>
                @error('keterangan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-sm btn-success px-3">Simpan</button>
                <a href="{{ route('kategori.index') }}" class="btn btn-sm btn-light px-3" style="color: #666666;">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection