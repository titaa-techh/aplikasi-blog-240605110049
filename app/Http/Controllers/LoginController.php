<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Penulis;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Menampilkan halaman form login
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Memproses data form saat tombol "Masuk" diklik
     */
    public function authenticate(Request $request)
    {
        // 1. Validasi input
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $loginInput = $request->input('username');
        $passwordInput = $request->input('password');

        // 2. Mencari user berdasarkan kolom 'user_name'
        // Karena di database kamu kolomnya adalah 'user_name'
        $user = Penulis::where('user_name', $loginInput)->first();

        // 3. Verifikasi apakah user ditemukan dan password-nya cocok
        // Menggunakan Hash::check karena password di database sudah di-hash
        if ($user && Hash::check($passwordInput, $user->password)) {
            
            // Mengunci sesi login
            Auth::login($user);
            
            $request->session()->regenerate();
            
            // Alihkan ke dashboard
            return redirect()->intended('dashboard');
        }

        // 4. Jika gagal, kembalikan ke halaman login dengan pesan eror
        return back()->with('loginError', 'Username atau password Anda salah!');
    }

    /**
     * Memproses fungsi keluar sistem (Logout)
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}