

<?php $__env->startSection('title', 'Kelola Kategori Artikel'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid p-0">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="fw-bold" style="color: #333;">Data Kategori Artikel</h5>
        <a href="<?php echo e(route('kategori.create')); ?>" class="btn btn-sm btn-success">+ Tambah Kategori</a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <table class="table table-hover mb-0">
                <thead style="background-color: #f8f9fa;">
                    <tr>
                        <th class="px-3 py-2 text-uppercase" style="font-size: 12px; color: #666; width: 5%;">NO</th>
                        <th class="px-3 py-2 text-uppercase" style="font-size: 12px; color: #666;">NAMA KATEGORI</th>
                        <th class="px-3 py-2 text-uppercase" style="font-size: 12px; color: #666;">KETERANGAN</th>
                        <th class="px-3 py-2 text-uppercase text-center" style="font-size: 12px; color: #666; width: 15%;">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td class="px-3 py-2" style="font-size: 14px;"><?php echo e($index + 1); ?></td>
                        <td class="px-3 py-2" style="font-size: 14px;"><?php echo e($item->nama_kategori); ?></td>
                        <td class="px-3 py-2" style="font-size: 14px; color: #555;"><?php echo e($item->keterangan ?? '-'); ?></td>
                        <td class="px-3 py-2 text-center">
                            <a href="<?php echo e(route('kategori.edit', $item->id)); ?>" 
                               class="btn btn-sm btn-link text-decoration-none" 
                               style="color: #0d6efd; font-size: 13px;">Edit</a>

                            <form action="<?php echo e(route('kategori.destroy', $item->id)); ?>" 
                                  method="POST" 
                                  onsubmit="return confirm('Hapus kategori ini?')"
                                  class="d-inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" 
                                        class="btn btn-sm btn-link text-decoration-none text-danger" 
                                        style="font-size: 13px;">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="4" class="text-center py-4 text-muted">Belum ada data kategori.</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xamppp\htdocs\aplikasi-blog\resources\views/kategori/index.blade.php ENDPATH**/ ?>