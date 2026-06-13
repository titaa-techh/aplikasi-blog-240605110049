@extends('layouts.publik')

@section('title', 'Beranda - Blog Kami')

@section('content')
<div class="row">
    <div class="col-lg-8">
        @forelse($artikel as $item)
        <div class="card card-artikel border-0 shadow-sm mb-4">
            <img src="{{ asset('storage/gambar/' . $item->gambar) }}" alt="{{ $item->judul }}">
            <div class="card-body">
                <span class="badge-kategori mb-2">
                    {{ $item->kategori->nama_kategori ?? 'Tanpa Kategori' }}
                </span>
                <h5 class="fw-bold mt-2" style="color: #2c3e50;">{{ $item->judul }}</h5>

                <div class="d-flex align-items-center gap-2 mb-2">
                    <div class="avatar-circle">
                        {{ strtoupper(substr($item->penulis->nama_depan ?? 'A', 0, 1)) }}
                    </div>
                    <span style="font-size: 13px; color: #555;">
                        {{ $item->penulis->nama_depan ?? '' }} {{ $item->penulis->nama_belakang ?? '' }}
                    </span>
                    <span style="font-size: 12px; color: #999;">
                        &bull; {{ $item->hari_tanggal }}
                    </span>
                </div>

                <p style="font-size: 14px; color: #666;">
                    {{ \Illuminate\Support\Str::limit(strip_tags($item->isi), 180) }}
                </p>

                <a href="{{ route('artikel.show', $item->id) }}" class="btn-baca">
                    Baca Selengkapnya &rarr;
                </a>
            </div>
        </div>
        @empty
        <div class="alert alert-light border text-center text-muted">
            Belum ada artikel untuk kategori ini.
        </div>
        @endforelse
    </div>

    <div class="col-lg-4">
        <div class="card border-0 shadow-sm p-3">
            <h6 class="fw-bold mb-3" style="color: #2c3e50;">Kategori Artikel</h6>
            <div class="kategori-list">
                <a href="{{ route('beranda') }}" class="{{ !$idKategori ? 'active' : '' }}">
                    Semua Artikel
                    <span class="badge-count">{{ $totalArtikel }}</span>
                </a>
                @foreach($kategori as $item)
                <a href="{{ route('beranda', ['kategori' => $item->id]) }}"
                   class="{{ (string)$idKategori === (string)$item->id ? 'active' : '' }}">
                    {{ $item->nama_kategori }}
                    <span class="badge-count">{{ $item->artikel_count }}</span>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection