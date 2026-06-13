

<?php $__env->startSection('title', 'Kelola Penulis'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <h5 class="fw-semibold m-0 text-dark">Data Penulis</h5>
    <a href="<?php echo e(route('penulis.create')); ?>" class="btn btn-sm btn-success px-3" style="background-color: #198754; border-color: #198754;">+ Tambah Penulis</a>
</div>

<div class="card border-0 shadow-sm" style="border-radius: 8px;">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0" style="font-size: 14px;">
                <thead class="table-light text-uppercase" style="font-size: 12px; color: #6c757d;">
                    <tr>
                        <th class="ps-4" style="width: 80px;">Foto</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th class="text-center" style="width: 150px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $penulis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td class="ps-4">
                            <?php if($p->foto): ?>
                                <img src="<?php echo e(asset('storage/foto/' . $p->foto)); ?>"
                                     alt="Foto"
                                     style="width: 40px; height: 40px; object-fit: cover; border-radius: 6px; border: 1px solid #e9ecef;">
                            <?php else: ?>
                                <img src="https://ui-avatars.com/api/?name=<?php echo e(urlencode($p->nama_depan)); ?>&background=random"
                                     alt="Foto"
                                     style="width: 40px; height: 40px; object-fit: cover; border-radius: 6px;">
                            <?php endif; ?>
                        </td>
                        <td class="fw-semibold text-dark"><?php echo e($p->nama_depan); ?> <?php echo e($p->nama_belakang); ?></td>
                        <td class="text-muted"><?php echo e($p->user_name); ?></td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-2">
                                <a href="<?php echo e(route('penulis.edit', $p->id)); ?>" class="btn btn-sm btn-outline-primary py-1 px-3" style="font-size: 12px;">Edit</a>
                                <form action="<?php echo e(route('penulis.destroy', $p->id)); ?>" method="POST" onsubmit="return confirm('Yakin ingin menghapus penulis ini?')" class="d-inline">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-sm btn-danger bg-opacity-10 text-danger border-0 py-1 px-3" style="font-size: 12px; background-color: #f8d7da;">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="4" class="text-center py-4 text-muted">Belum ada data penulis.</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xamppp\htdocs\aplikasi-blog\resources\views/penulis/index.blade.php ENDPATH**/ ?>