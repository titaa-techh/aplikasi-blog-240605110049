<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Penulis extends Authenticatable
{
    // Ini adalah kunci agar Laravel tidak eror mencari kolom waktu
    public $timestamps = false;
    
    // Memberitahu nama tabel yang asli
    protected $table = 'penulis';

    // Kolom yang boleh diisi
    protected $fillable = ['nama_depan', 'nama_belakang', 'user_name', 'password', 'foto'];
}