<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Sistem Manajemen Blog'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { background-color: #f4f6f9; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .cms-header { background-color: #2c3e50; color: white; padding: 12px 20px; }
        .cms-header h5 { margin: 0; font-size: 16px; font-weight: 600; }
        .cms-header p { margin: 0; font-size: 11px; color: #bdc3c7; }
        .sidebar { background-color: white; min-height: calc(100vh - 65px); border-right: 1px solid #e0e0e0; padding-top: 20px; position: relative; }
        .profile-section { padding: 0 20px 20px 20px; border-bottom: 1px solid #f0f0f0; }
        .profile-img { width: 45px; height: 45px; border-radius: 50%; }
        .menu-title { font-size: 11px; color: #bdc3c7; font-weight: bold; text-transform: uppercase; padding: 15px 20px 5px 20px; margin: 0; }
        .nav-link-cms { display: block; padding: 10px 20px; color: #555; text-decoration: none; font-size: 14px; transition: 0.2s; }
        .nav-link-cms:hover { background-color: #f8f9fa; color: #2c3e50; }
        .nav-link-cms.active { background-color: #e8f5e9; color: #2e7d32; font-weight: 600; border-right: 4px solid #2e7d32; }
        .logout-box { position: absolute; bottom: 20px; left: 0; right: 0; padding: 0 15px; }
        .btn-logout { background-color: #ffebee; color: #c62828; border: none; width: 100%; padding: 8px; border-radius: 5px; font-size: 14px; text-align: center; display: block; text-decoration: none; }
        .btn-logout:hover { background-color: #ffcdd2; }
        .main-content { padding: 30px; }
    </style>
</head>
<body>

<div class="cms-header">
    <h5>Sistem Manajemen Blog (CMS)</h5>
    <p>db_blog</p>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 sidebar px-0">
            <div class="profile-section pt-3">
                <img src="<?php echo e(asset('storage/foto/' . Auth::user()->foto)); ?>"
                     alt="Foto"
                     class="profile-img"
                     style="object-fit:cover; border:2px solid #eee;">
                <div style="margin-top:8px;">
                    <span style="font-size:11px; color:#95a5a6;">Halo,</span><br>
                    <strong style="font-size:14px; color:#2c3e50;">
                        <?php echo e(Auth::user()->nama_depan); ?> <?php echo e(Auth::user()->nama_belakang); ?>

                    </strong>
                </div>
            </div>

            <p class="menu-title">Menu Utama</p>
            <a href="<?php echo e(route('dashboard')); ?>"
               class="nav-link-cms <?php echo e(request()->routeIs('dashboard') ? 'active' : ''); ?>">
               Dashboard
            </a>
            <a href="<?php echo e(route('artikel.index')); ?>"
               class="nav-link-cms <?php echo e(request()->routeIs('artikel.*') ? 'active' : ''); ?>">
               Kelola Artikel
            </a>
            <a href="<?php echo e(route('penulis.index')); ?>"
               class="nav-link-cms <?php echo e(request()->routeIs('penulis.*') ? 'active' : ''); ?>">
               Kelola Penulis
            </a>
            <a href="<?php echo e(route('kategori.index')); ?>"
               class="nav-link-cms <?php echo e(request()->routeIs('kategori.*') ? 'active' : ''); ?>">
               Kelola Kategori
            </a>

            <div class="logout-box">
                <form action="<?php echo e(route('logout')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn-logout">Keluar</button>
                </form>
            </div>
        </div>

        <div class="col-md-10 main-content">
            <?php if(session('sukses')): ?>
                <div class="alert alert-success alert-dismissible fade show">
                    <?php echo e(session('sukses')); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>
            <?php if(session('gagal')): ?>
                <div class="alert alert-danger alert-dismissible fade show">
                    <?php echo e(session('gagal')); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>

            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<?php echo $__env->yieldContent('scripts'); ?>
</body>
</html><?php /**PATH C:\xamppp\htdocs\aplikasi-blog\resources\views/layouts/app.blade.php ENDPATH**/ ?>