@extends('layouts.app') 
 
@section('title', 'Tambah Data Penulis') 
 
@section('content') 
<div class="mb-3"> 
    <h6 class="fw-semibold mb-0" style="color: #333333;">Tambah Data Penulis</h6> 
</div> 
 
<div class="card border-0 shadow-sm"> 
    <div class="card-body p-4"> 
        <form action="{{ route('penulis.store') }}" method="POST" enctype="multipart/form-data"> 
            @csrf 
            <div class="row">
                <div class="col-md-6 mb-3"> 
                    <label for="nama_depan" class="form-label" style="font-size: 13px; color: #555555;">Nama Depan</label> 
                    <input type="text" class="form-control @error('nama_depan') is-invalid @enderror" id="nama_depan" name="nama_depan" value="{{ old('nama_depan') }}" required placeholder="Masukkan nama depan"> 
                    @error('nama_depan') 
                        <div class="invalid-feedback">{{ $message }}</div> 
                    @enderror 
                </div> 
                <div class="col-md-6 mb-3"> 
                    <label for="nama_belakang" class="form-label" style="font-size: 13px; color: #555555;">Nama Belakang</label> 
                    <input type="text" class="form-control" id="nama_belakang" name="nama_belakang" value="{{ old('nama_belakang') }}" placeholder="Masukkan nama belakang (opsional)"> 
                </div> 
            </div>

            <div class="mb-3"> 
                <label for="user_name" class="form-label" style="font-size: 13px; color: #555555;">Username</label> 
                <input type="text" class="form-control @error('user_name') is-invalid @enderror" id="user_name" name="user_name" value="{{ old('user_name') }}" required placeholder="Masukkan username untuk login"> 
                @error('user_name') 
                    <div class="invalid-feedback">{{ $message }}</div> 
                @enderror 
            </div> 

            <div class="mb-3"> 
                <label for="password" class="form-label" style="font-size: 13px; color: #555555;">Password</label> 
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required placeholder="Masukkan password minimal 6 karakter"> 
                @error('password') 
                    <div class="invalid-feedback">{{ $message }}</div> 
                @enderror 
            </div> 

            <div class="mb-3"> 
                <label for="foto" class="form-label" style="font-size: 13px; color: #555555;">Foto Profil (Wajib)</label> 
                <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto" required> 
                @error('foto') 
                    <div class="invalid-feedback">{{ $message }}</div> 
                @enderror 
            </div> 

            <div class="d-flex gap-2"> 
                <button type="submit" class="btn btn-sm btn-success px-3">Simpan</button> 
                <a href="{{ route('penulis.index') }}" class="btn btn-sm btn-light px-3" style="color: #666666;">Batal</a> 
            </div> 
        </form> 
    </div> 
</div> 
@endsection