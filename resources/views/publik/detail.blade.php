@extends('layouts.publik')

@section('title', $artikel->judul . ' - Blog Kami')

@section('content')
<div class="breadcrumb-blog mb-3" style="font-size: 13px; color: #999;">
    <a href="{{ route('beranda') }}">Beranda</a> /
    <a href="{{ route('beranda', ['kategori' => $artikel->id_kategori]) }}">
        {{ $artikel->kategori->nama_kategori ?? 'Tanpa Kategori' }}
    </a> /
    {{ \Illuminate\Support\Str::limit($artikel->judul, 40) }}
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="card border-0 shadow-sm p-3">
            <img src="{{ asset('storage/gambar/' . $artikel->gambar) }}"
                 alt="{{ $artikel->judul }}" class="img-detail mb-3">

            <span class="badge-kategori mb-2" style="width: fit-content;">
                {{ $artikel->kategori->nama_kategori ?? 'Tanpa Kategori' }}
            </span>

            <h3 class="fw-bold mt-2" style="color: #2c3e50;">{{ $artikel->judul }}</h3>

            <div class="d-flex align-items-center gap-2 mb-3 pb-3 border-bottom">
                <div class="avatar-circle">
                    {{ strtoupper(substr($artikel->penulis->nama_depan ?? 'A', 0, 1)) }}
                </div>
                <div>
                    <div style="font-size: 14px; font-weight: 600; color: #2c3e50;">
                        {{ $artikel->penulis->nama_depan ?? '' }} {{ $artikel->penulis->nama_belakang ?? '' }}
                    </div>
                    <div style="font-size: 12px; color: #999;">
                        {{ $artikel->hari_tanggal }}
                    </div>
                </div>
            </div>

            <div style="font-size: 15px; color: #444; line-height: 1.8;">
                @foreach(explode("\n", $artikel->isi) as $paragraf)
                    @if(trim($paragraf) !== '')
                        <p>{{ $paragraf }}</p>
                    @endif
                @endforeach
            </div>
        </div>

        <div class="mt-3">
            <a href="{{ route('beranda') }}" class="btn-baca">
                &larr; Kembali ke Beranda
            </a>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card border-0 shadow-sm p-3">
            <h6 class="fw-bold mb-3" style="color: #2c3e50;">Artikel Terkait</h6>

            @forelse($terkait as $item)
            <a href="{{ route('artikel.show', $item->id) }}"
               class="d-flex gap-2 mb-3 text-decoration-none">
                <img src="{{ asset('storage/gambar/' . $item->gambar) }}"
                     alt="{{ $item->judul }}" class="thumb-terkait">
                <div>
                    <div style="font-size: 13px; font-weight: 600; color: #2c3e50;">
                        {{ \Illuminate\Support\Str::limit($item->judul, 45) }}
                    </div>
                    <div style="font-size: 11px; color: #999;">
                        {{ $item->hari_tanggal }}
                    </div>
                </div>
            </a>
            @empty
            <p class="text-muted" style="font-size: 13px;">Belum ada artikel terkait.</p>
            @endforelse
        </div>
    </div>
</div>
@endsection