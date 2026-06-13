

<?php $__env->startSection('title', $artikel->judul . ' - Blog Kami'); ?>

<?php $__env->startSection('content'); ?>
<div class="breadcrumb-blog mb-3" style="font-size: 13px; color: #999;">
    <a href="<?php echo e(route('beranda')); ?>">Beranda</a> /
    <a href="<?php echo e(route('beranda', ['kategori' => $artikel->id_kategori])); ?>">
        <?php echo e($artikel->kategori->nama_kategori ?? 'Tanpa Kategori'); ?>

    </a> /
    <?php echo e(\Illuminate\Support\Str::limit($artikel->judul, 40)); ?>

</div>

<div class="row">
    <div class="col-lg-8">
        <div class="card border-0 shadow-sm p-3">
            <img src="<?php echo e(asset('storage/gambar/' . $artikel->gambar)); ?>"
                 alt="<?php echo e($artikel->judul); ?>" class="img-detail mb-3">

            <span class="badge-kategori mb-2" style="width: fit-content;">
                <?php echo e($artikel->kategori->nama_kategori ?? 'Tanpa Kategori'); ?>

            </span>

            <h3 class="fw-bold mt-2" style="color: #2c3e50;"><?php echo e($artikel->judul); ?></h3>

            <div class="d-flex align-items-center gap-2 mb-3 pb-3 border-bottom">
                <div class="avatar-circle">
                    <?php echo e(strtoupper(substr($artikel->penulis->nama_depan ?? 'A', 0, 1))); ?>

                </div>
                <div>
                    <div style="font-size: 14px; font-weight: 600; color: #2c3e50;">
                        <?php echo e($artikel->penulis->nama_depan ?? ''); ?> <?php echo e($artikel->penulis->nama_belakang ?? ''); ?>

                    </div>
                    <div style="font-size: 12px; color: #999;">
                        <?php echo e($artikel->hari_tanggal); ?>

                    </div>
                </div>
            </div>

            <div style="font-size: 15px; color: #444; line-height: 1.8;">
                <?php $__currentLoopData = explode("\n", $artikel->isi); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paragraf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(trim($paragraf) !== ''): ?>
                        <p><?php echo e($paragraf); ?></p>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <div class="mt-3">
            <a href="<?php echo e(route('beranda')); ?>" class="btn-baca">
                &larr; Kembali ke Beranda
            </a>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card border-0 shadow-sm p-3">
            <h6 class="fw-bold mb-3" style="color: #2c3e50;">Artikel Terkait</h6>

            <?php $__empty_1 = true; $__currentLoopData = $terkait; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <a href="<?php echo e(route('artikel.show', $item->id)); ?>"
               class="d-flex gap-2 mb-3 text-decoration-none">
                <img src="<?php echo e(asset('storage/gambar/' . $item->gambar)); ?>"
                     alt="<?php echo e($item->judul); ?>" class="thumb-terkait">
                <div>
                    <div style="font-size: 13px; font-weight: 600; color: #2c3e50;">
                        <?php echo e(\Illuminate\Support\Str::limit($item->judul, 45)); ?>

                    </div>
                    <div style="font-size: 11px; color: #999;">
                        <?php echo e($item->hari_tanggal); ?>

                    </div>
                </div>
            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p class="text-muted" style="font-size: 13px;">Belum ada artikel terkait.</p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.publik', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xamppp\htdocs\aplikasi-blog\resources\views/publik/detail.blade.php ENDPATH**/ ?>