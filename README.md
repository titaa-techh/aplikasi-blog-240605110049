# Aplikasi Blog - Sistem Manajemen Blog (CMS)

## Identitas

- **Nama Lengkap:** [Nur Iftita Aulia]
- **NIM:** [240605110049]
- **Mata Kuliah:** Pemrograman Web
- **Semester:** Genap 2025/2026

## Deskripsi Aplikasi

Aplikasi ini adalah **Sistem Manajemen Blog (CMS)** yang dibangun menggunakan framework **Laravel**. 
Aplikasi terdiri dari dua bagian utama:

1. **Halaman Administrator (CMS)** — hanya dapat diakses setelah login, digunakan untuk mengelola:
   - Data **Artikel** (tambah, edit, hapus, upload gambar)
   - Data **Penulis** (tambah, edit, hapus, upload foto profil)
   - Data **Kategori Artikel** (tambah, edit, hapus)

2. **Halaman Pengunjung (Publik)** — dapat diakses oleh siapa saja tanpa login, menampilkan:
   - Halaman utama dengan 5 artikel terbaru beserta widget kategori
   - Halaman detail artikel beserta artikel terkait dari kategori yang sama

## Teknologi yang Digunakan

- Laravel 12
- PHP 8.2
- MySQL (database `db_blog`)
- Bootstrap 5
- Eloquent ORM

## Langkah-langkah Menjalankan Aplikasi Secara Lokal

1. **Clone repositori**
```bash
   git clone https://github.com/[username]/aplikasi-blog-[nim].git
   cd aplikasi-blog-[nim]
```

2. **Install dependency PHP**
```bash
   composer install
```

3. **Salin file environment**
```bash
   copy .env.example .env
```

4. **Generate application key**
```bash
   php artisan key:generate
```

5. **Buat database**
   - Buka phpMyAdmin atau MySQL client
   - Buat database baru dengan nama `db_blog`
   - Import file SQL `db_blog.sql` (jika disertakan) ke database tersebut

6. **Konfigurasi koneksi database**
   Edit file `.env` dan sesuaikan:
```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=db_blog
   DB_USERNAME=root
   DB_PASSWORD=
```

7. **Buat symbolic link untuk storage**
```bash
   php artisan storage:link
```

8. **Jalankan server lokal**
```bash
   php artisan serve
```

9. **Akses aplikasi**
   - Halaman Pengunjung (Publik): `http://localhost:8000/`
   - Halaman Login Admin: `http://localhost:8000/login`

## Akun Login Admin (Default)

| Username   | Password   |
|------------|------------|
| titaaulia  | tita123    |

## Tautan Video Demonstrasi

https://youtu.be/BxBWeME4iJ4?si=_2Wkn92VejrZS9Ng


## Struktur Halaman Pengunjung

- `/` — Halaman utama (5 artikel terbaru + widget kategori)
- `/?kategori={id}` — Filter artikel berdasarkan kategori
- `/artikel/{id}` — Halaman detail artikel + artikel terkait
