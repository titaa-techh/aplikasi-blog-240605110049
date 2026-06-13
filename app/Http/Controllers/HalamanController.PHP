<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\KategoriArtikel;
use Illuminate\Http\Request;

class HalamanController extends Controller
{
    /**
     * Halaman utama: 5 artikel terbaru + widget kategori
     */
    public function index(Request $request)
    {
        $idKategori = $request->query('kategori');

        $query = Artikel::with('penulis', 'kategori')
                    ->orderBy('id', 'desc');

        if ($idKategori) {
            $query->where('id_kategori', $idKategori);
        }

        $artikel = $query->take(5)->get();

        $kategori = KategoriArtikel::withCount('artikel')
                        ->orderBy('nama_kategori', 'asc')
                        ->get();

        $totalArtikel = Artikel::count();

        return view('publik.index', compact('artikel', 'kategori', 'totalArtikel', 'idKategori'));
    }

    /**
     * Halaman detail artikel + 5 artikel terkait dari kategori yang sama
     */
    public function show(string $id)
    {
        $artikel = Artikel::with('penulis', 'kategori')->findOrFail($id);

        $terkait = Artikel::with('kategori')
                    ->where('id_kategori', $artikel->id_kategori)
                    ->where('id', '!=', $artikel->id)
                    ->orderBy('id', 'desc')
                    ->take(5)
                    ->get();

        return view('publik.detail', compact('artikel', 'terkait'));
    }
}