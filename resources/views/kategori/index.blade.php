@extends('layouts.app')

@section('title', 'Kelola Kategori Artikel')

@section('content')
<div class="container-fluid p-0">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="fw-bold" style="color: #333;">Data Kategori Artikel</h5>
        <a href="{{ route('kategori.create') }}" class="btn btn-sm btn-success">+ Tambah Kategori</a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <table class="table table-hover mb-0">
                <thead style="background-color: #f8f9fa;">
                    <tr>
                        <th class="px-3 py-2 text-uppercase" style="font-size: 12px; color: #666; width: 5%;">NO</th>
                        <th class="px-3 py-2 text-uppercase" style="font-size: 12px; color: #666;">NAMA KATEGORI</th>
                        <th class="px-3 py-2 text-uppercase" style="font-size: 12px; color: #666;">KETERANGAN</th>
                        <th class="px-3 py-2 text-uppercase text-center" style="font-size: 12px; color: #666; width: 15%;">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($kategori as $index => $item)
                    <tr>
                        <td class="px-3 py-2" style="font-size: 14px;">{{ $index + 1 }}</td>
                        <td class="px-3 py-2" style="font-size: 14px;">{{ $item->nama_kategori }}</td>
                        <td class="px-3 py-2" style="font-size: 14px; color: #555;">{{ $item->keterangan ?? '-' }}</td>
                        <td class="px-3 py-2 text-center">
                            <a href="{{ route('kategori.edit', $item->id) }}" 
                               class="btn btn-sm btn-link text-decoration-none" 
                               style="color: #0d6efd; font-size: 13px;">Edit</a>

                            <form action="{{ route('kategori.destroy', $item->id) }}" 
                                  method="POST" 
                                  onsubmit="return confirm('Hapus kategori ini?')"
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
                        <td colspan="4" class="text-center py-4 text-muted">Belum ada data kategori.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection