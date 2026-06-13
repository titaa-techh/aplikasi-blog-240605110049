@extends('layouts.app')

@section('title', 'Kelola Artikel')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="fw-bold" style="color: #333;">Data Artikel</h5>
    <a href="{{ route('artikel.create') }}" class="btn btn-sm btn-success">+ Tambah Artikel</a>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body p-0">
        <table class="table table-hover mb-0">
            <thead style="background-color: #f8f9fa;">
                <tr>
                    <th class="px-3 py-2 text-uppercase" style="font-size: 12px; color: #666; width: 10%;">GAMBAR</th>
                    <th class="px-3 py-2 text-uppercase" style="font-size: 12px; color: #666;">JUDUL</th>
                    <th class="px-3 py-2 text-uppercase" style="font-size: 12px; color: #666;">KATEGORI</th>
                    <th class="px-3 py-2 text-uppercase" style="font-size: 12px; color: #666;">PENULIS</th>
                    <th class="px-3 py-2 text-uppercase" style="font-size: 12px; color: #666;">TANGGAL</th>
                    <th class="px-3 py-2 text-uppercase text-center" style="font-size: 12px; color: #666; width: 15%;">AKSI</th>
                </tr>
            </thead>
            <tbody>
                @forelse($artikel as $item)
                <tr>
                    <td class="px-3 py-2">
                        <img src="{{ asset('storage/gambar/' . $item->gambar) }}"
                             alt="Gambar"
                             style="width: 50px; height: 50px; object-fit: cover;
                                    border-radius: 6px; border: 1px solid #e9ecef;">
                    </td>
                    <td class="px-3 py-2" style="font-size: 14px;">{{ $item->judul }}</td>
                    <td class="px-3 py-2" style="font-size: 14px;">
                        {{ $item->kategori->nama_kategori ?? '-' }}
                    </td>
                    <td class="px-3 py-2" style="font-size: 14px;">
                        {{ $item->penulis->nama_depan ?? '' }} {{ $item->penulis->nama_belakang ?? '-' }}
                    </td>
                    <td class="px-3 py-2" style="font-size: 13px; color: #999;">
                        {{ $item->hari_tanggal ?? '-' }}
                    </td>
                    <td class="px-3 py-2 text-center">
                        <a href="{{ route('artikel.edit', $item->id) }}"
                           class="btn btn-sm btn-link text-decoration-none"
                           style="color: #0d6efd; font-size: 13px;">Edit</a>

                        <form action="{{ route('artikel.destroy', $item->id) }}"
                              method="POST"
                              onsubmit="return confirm('Hapus artikel ini?')"
                              class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="btn btn-sm btn-link text-decoration-none text-danger"
                                    style="font-size: 13px;">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center py-4 text-muted">Belum ada data artikel.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection