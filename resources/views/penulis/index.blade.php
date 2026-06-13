@extends('layouts.app')

@section('title', 'Kelola Penulis')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h5 class="fw-semibold m-0 text-dark">Data Penulis</h5>
    <a href="{{ route('penulis.create') }}" class="btn btn-sm btn-success px-3" style="background-color: #198754; border-color: #198754;">+ Tambah Penulis</a>
</div>

<div class="card border-0 shadow-sm" style="border-radius: 8px;">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0" style="font-size: 14px;">
                <thead class="table-light text-uppercase" style="font-size: 12px; color: #6c757d;">
                    <tr>
                        <th class="ps-4" style="width: 80px;">Foto</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th class="text-center" style="width: 150px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($penulis as $p)
                    <tr>
                        <td class="ps-4">
                            @if($p->foto)
                                <img src="{{ asset('storage/foto/' . $p->foto) }}"
                                     alt="Foto"
                                     style="width: 40px; height: 40px; object-fit: cover; border-radius: 6px; border: 1px solid #e9ecef;">
                            @else
                                <img src="https://ui-avatars.com/api/?name={{ urlencode($p->nama_depan) }}&background=random"
                                     alt="Foto"
                                     style="width: 40px; height: 40px; object-fit: cover; border-radius: 6px;">
                            @endif
                        </td>
                        <td class="fw-semibold text-dark">{{ $p->nama_depan }} {{ $p->nama_belakang }}</td>
                        <td class="text-muted">{{ $p->user_name }}</td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('penulis.edit', $p->id) }}" class="btn btn-sm btn-outline-primary py-1 px-3" style="font-size: 12px;">Edit</a>
                                <form action="{{ route('penulis.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus penulis ini?')" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger bg-opacity-10 text-danger border-0 py-1 px-3" style="font-size: 12px; background-color: #f8d7da;">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center py-4 text-muted">Belum ada data penulis.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection