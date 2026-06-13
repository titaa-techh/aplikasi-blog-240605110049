@extends('layouts.app')

@section('title', 'Tambah Artikel')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h6 class="fw-semibold mb-0" style="color: #333333;">Tambah Artikel</h6>
    <a href="{{ route('artikel.index') }}" class="btn btn-sm" 
       style="background-color: #f0f0f0; color: #555555;">Kembali</a>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body p-4">
        <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="judul" class="form-label" style="font-size: 13px; color: #555555;">
                    Judul <span class="text-danger">*</span>
                </label>
                <input type="text"
                       class="form-control @error('judul') is-invalid @enderror"
                       id="judul" name="judul"
                       value="{{ old('judul') }}"
                       placeholder="Masukkan judul artikel">
                @error('judul')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="id_kategori" class="form-label" style="font-size: 13px; color: #555555;">
                    Kategori <span class="text-danger">*</span>
                </label>
                <select class="form-select @error('id_kategori') is-invalid @enderror"
                        id="id_kategori" name="id_kategori">
                    <option value="">Pilih Kategori</option>
                    @foreach($kategori as $item)
                        <option value="{{ $item->id }}"
                            {{ old('id_kategori') == $item->id ? 'selected' : '' }}>
                            {{ $item->nama_kategori }}
                        </option>
                    @endforeach
                </select>
                @error('id_kategori')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="isi" class="form-label" style="font-size: 13px; color: #555555;">
                    Isi Artikel <span class="text-danger">*</span>
                </label>
                <textarea class="form-control @error('isi') is-invalid @enderror"
                          id="isi" name="isi" rows="6"
                          placeholder="Masukkan isi artikel">{{ old('isi') }}</textarea>
                @error('isi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="gambar" class="form-label" style="font-size: 13px; color: #555555;">
                    Gambar <span class="text-danger">*</span>
                </label>
                <input type="file"
                       class="form-control @error('gambar') is-invalid @enderror"
                       id="gambar" name="gambar"
                       accept="image/jpg,image/jpeg,image/png">
                <small class="text-muted" style="font-size: 11px;">
                    Format: JPG, JPEG, PNG. Maks 2MB.
                </small>
                @error('gambar')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex gap-2 justify-content-end">
                <a href="{{ route('artikel.index') }}" class="btn btn-sm btn-light px-3"
                   style="color: #666666;">Batal</a>
                <button type="submit" class="btn btn-sm btn-success px-3">Simpan Data</button>
            </div>
        </form>
    </div>
</div>
@endsection