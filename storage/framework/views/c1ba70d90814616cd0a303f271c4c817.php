

<?php $__env->startSection('title', 'Beranda - Blog Kami'); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-8">
        <?php $__empty_1 = true; $__currentLoopData = $artikel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="card card-artikel border-0 shadow-sm mb-4">
            <img src="<?php echo e(asset('storage/gambar/' . $item->gambar)); ?>" alt="<?php echo e($item->judul); ?>">
            <div class="card-body">
                <span class="badge-kategori mb-2">
                    <?php echo e($item->kategori->nama_kategori ?? 'Tanpa Kategori'); ?>

                </span>
                <h5 class="fw-bold mt-2" style="color: #2c3e50;"><?php echo e($item->judul); ?></h5>

                <div class="d-flex align-items-center gap-2 mb-2">
                    <div class="avatar-circle">
                        <?php echo e(strtoupper(substr($item->penulis->nama_depan ?? 'A', 0, 1))); ?>

                    </div>
                    <span style="font-size: 13px; color: #555;">
                        <?php echo e($item->penulis->nama_depan ?? ''); ?> <?php echo e($item->penulis->nama_belakang ?? ''); ?>

                    </span>
                    <span style="font-size: 12px; color: #999;">
                        &bull; <?php echo e($item->hari_tanggal); ?>

                    </span>
                </div>

                <p style="font-size: 14px; color: #666;">
                    <?php echo e(\Illuminate\Support\Str::limit(strip_tags($item->isi), 180)); ?>

                </p>

                <a href="<?php echo e(route('artikel.show', $item->id)); ?>" class="btn-baca">
                    Baca Selengkapnya &rarr;
                </a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="alert alert-light border text-center text-muted">
            Belum ada artikel untuk kategori ini.
        </div>
        <?php endif; ?>
    </div>

    <div class="col-lg-4">
        <div class="card border-0 shadow-sm p-3">
            <h6 class="fw-bold mb-3" style="color: #2c3e50;">Kategori Artikel</h6>
            <div class="kategori-list">
                <a href="<?php echo e(route('beranda')); ?>" class="<?php echo e(!$idKategori ? 'active' : ''); ?>">
                    Semua Artikel
                    <span class="badge-count"><?php echo e($totalArtikel); ?></span>
                </a>
                <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('beranda', ['kategori' => $item->id])); ?>"
                   class="<?php echo e((string)$idKategori === (string)$item->id ? 'active' : ''); ?>">
                    <?php echo e($item->nama_kategori); ?>

                    <span class="badge-count"><?php echo e($item->artikel_count); ?></span>
                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.publik', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xamppp\htdocs\aplikasi-blog\resources\views/publik/index.blade.php ENDPATH**/ ?>