@extends('layouts.app')

@section('title', 'Edit Data Penulis')

@section('content')
<div class="mb-3">
    <h6 class="fw-semibold mb-0" style="color: #333333;">Edit Data Penulis</h6>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body p-4">
        <form action="{{ route('penulis.update', $penulis->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="nama_depan" class="form-label" style="font-size: 13px; color: #555555;">Nama Depan</label>
                    <input type="text" class="form-control @error('nama_depan') is-invalid @enderror" id="nama_depan" name="nama_depan" value="{{ old('nama_depan', $penulis->nama_depan) }}" required>
                    @error('nama_depan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="nama_belakang" class="form-label" style="font-size: 13px; color: #555555;">Nama Belakang</label>
                    <input type="text" class="form-control" id="nama_belakang" name="nama_belakang" value="{{ old('nama_belakang', $penulis->nama_belakang) }}">
                </div>
            </div>

            <div class="mb-3">
                <label for="user_name" class="form-label" style="font-size: 13px; color: #555555;">Username</label>
                <input type="text" class="form-control @error('user_name') is-invalid @enderror" id="user_name" name="user_name" value="{{ old('user_name', $penulis->user_name) }}" required>
                @error('user_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label" style="font-size: 13px; color: #555555;">Password Baru</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Kosongkan jika tidak ingin mengubah password">
                <small class="text-muted" style="font-size: 11px;">*Isi minimal 8 karakter jika ingin mengganti password lama.</small>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="foto" class="form-label" style="font-size: 13px; color: #555555;">Foto Profil</label>
                @if($penulis->foto && $penulis->foto !== 'default.png')
                    <div class="mb-2">
                        <img src="{{ asset('storage/foto/' . $penulis->foto) }}"
                             alt="Foto Profil"
                             style="width: 60px; height: 60px; object-fit: cover; border-radius: 8px; border: 1px solid #e9ecef;">
                    </div>
                @endif
                <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto" accept="image/jpg,image/jpeg,image/png">
                <small class="text-muted" style="font-size: 11px;">Format: JPG, JPEG, PNG. Maks 2MB. Kosongkan jika tidak ingin mengubah foto.</small>
                @error('foto')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-sm btn-primary px-3">Perbarui</button>
                <a href="{{ route('penulis.index') }}" class="btn btn-sm btn-light px-3" style="color: #666666;">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection