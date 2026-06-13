<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blog Kami')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navbar-blog {
            background-color: #2c3e50;
            padding: 14px 0;
        }
        .navbar-blog .brand-title {
            color: #ffffff;
            font-size: 20px;
            font-weight: 700;
            margin: 0;
        }
        .navbar-blog .brand-sub {
            color: #bdc3c7;
            font-size: 12px;
            margin: 0;
        }
        .navbar-blog .nav-link {
            color: #ecf0f1;
            font-size: 14px;
            margin-left: 18px;
        }
        .navbar-blog .nav-link:hover {
            color: #2ecc71;
        }
        .footer-blog {
            background-color: #2c3e50;
            color: #bdc3c7;
            text-align: center;
            padding: 16px 0;
            font-size: 13px;
            margin-top: 40px;
        }
        .badge-kategori {
            background-color: #e8f8f0;
            color: #16a085;
            font-size: 12px;
            font-weight: 600;
            padding: 4px 10px;
            border-radius: 4px;
            display: inline-block;
        }
        .btn-baca {
            background-color: #16a085;
            color: #ffffff;
            border: none;
            font-size: 13px;
            padding: 6px 16px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
        }
        .btn-baca:hover {
            background-color: #138a72;
            color: #ffffff;
        }
        .avatar-circle {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background-color: #2980b9;
            color: #ffffff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            font-weight: 600;
        }
        .kategori-list a {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px 12px;
            border-radius: 6px;
            color: #555555;
            text-decoration: none;
            font-size: 14px;
            margin-bottom: 4px;
        }
        .kategori-list a:hover {
            background-color: #f4f6f9;
        }
        .kategori-list a.active {
            background-color: #16a085;
            color: #ffffff;
            font-weight: 600;
        }
        .kategori-list .badge-count {
            background-color: #ecf0f1;
            color: #555555;
            border-radius: 50%;
            font-size: 12px;
            padding: 2px 8px;
        }
        .kategori-list a.active .badge-count {
            background-color: rgba(255,255,255,0.25);
            color: #ffffff;
        }
        .card-artikel img,
        .img-detail {
            width: 100%;
            object-fit: cover;
        }
        .card-artikel img {
            height: 220px;
        }
        .img-detail {
            height: 320px;
            border-radius: 6px;
        }
        .breadcrumb-blog a {
            color: #16a085;
            text-decoration: none;
        }
        .thumb-terkait {
            width: 60px;
            height: 50px;
            object-fit: cover;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<nav class="navbar-blog">
    <div class="container d-flex justify-content-between align-items-center">
        <div>
            <p class="brand-title">Blog Kami</p>
            <p class="brand-sub">Artikel terbaru seputar teknologi dan pemrograman</p>
        </div>
        <div>
            <a href="{{ route('beranda') }}" class="nav-link d-inline">Beranda</a>
            <a href="{{ route('beranda') }}" class="nav-link d-inline">Artikel</a>
            <a href="{{ route('beranda') }}" class="nav-link d-inline">Kategori</a>
            <a href="#" class="nav-link d-inline">Tentang</a>
        </div>
    </div>
</nav>

<div class="container py-4">
    @yield('content')
</div>

<footer class="footer-blog">
    &copy; {{ date('Y') }} Blog Kami. Seluruh hak cipta dilindungi.
</footer>

</body>
</html>