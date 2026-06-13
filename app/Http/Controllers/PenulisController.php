<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penulis;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class PenulisController extends Controller
{
    public function index()
    {
        $penulis = Penulis::orderBy('nama_depan', 'asc')->get();
        return view('penulis.index', compact('penulis'));
    }

    public function create()
    {
        return view('penulis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_depan' => 'required|string|max:255',
            'user_name'  => 'required|string|unique:penulis,user_name|max:255',
            'password'   => 'required|string|min:6',
            'foto'       => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $namaFoto = 'default.png';

        if ($request->hasFile('foto')) {
            $file     = $request->file('foto');
            $namaFoto = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('foto', $namaFoto, 'public');
        }

        Penulis::create([
            'nama_depan'    => $request->nama_depan,
            'nama_belakang' => $request->nama_belakang,
            'user_name'     => $request->user_name,
            'password'      => bcrypt($request->password),
            'foto'          => $namaFoto,
        ]);

        return redirect()->route('penulis.index')->with('sukses', 'Data penulis berhasil ditambahkan!');
    }

    public function edit(string $id)
    {
        $penulis = Penulis::findOrFail($id);
        return view('penulis.edit', compact('penulis'));
    }

    public function update(Request $request, string $id)
    {
        $penulis = Penulis::findOrFail($id);

        $request->validate([
            'nama_depan'    => 'required|max:50',
            'nama_belakang' => 'nullable|max:50',
            'user_name'     => 'required|max:50|unique:penulis,user_name,' . $penulis->id,
            'password'      => 'nullable|min:6',
            'foto'          => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = [
            'nama_depan'    => $request->nama_depan,
            'nama_belakang' => $request->nama_belakang,
            'user_name'     => $request->user_name,
        ];

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika bukan default
            if ($penulis->foto && $penulis->foto !== 'default.png') {
                Storage::disk('public')->delete('foto/' . $penulis->foto);
            }

            $file     = $request->file('foto');
            $namaFoto = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('foto', $namaFoto, 'public');
            $data['foto'] = $namaFoto;
        }

        $penulis->update($data);

        return redirect()->route('penulis.index')->with('sukses', 'Data penulis berhasil diperbarui!');
    }

    public function destroy(string $id)
    {
        $penulis = Penulis::findOrFail($id);

        if ($penulis->foto && $penulis->foto !== 'default.png') {
            Storage::disk('public')->delete('foto/' . $penulis->foto);
        }

        $penulis->delete();

        return redirect()->route('penulis.index')->with('sukses', 'Penulis berhasil dihapus!');
    }
}