

<?php $__env->startSection('title', 'Edit Data Penulis'); ?>

<?php $__env->startSection('content'); ?>
<div class="mb-3">
    <h6 class="fw-semibold mb-0" style="color: #333333;">Edit Data Penulis</h6>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body p-4">
        <form action="<?php echo e(route('penulis.update', $penulis->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="nama_depan" class="form-label" style="font-size: 13px; color: #555555;">Nama Depan</label>
                    <input type="text" class="form-control <?php $__errorArgs = ['nama_depan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="nama_depan" name="nama_depan" value="<?php echo e(old('nama_depan', $penulis->nama_depan)); ?>" required>
                    <?php $__errorArgs = ['nama_depan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="nama_belakang" class="form-label" style="font-size: 13px; color: #555555;">Nama Belakang</label>
                    <input type="text" class="form-control" id="nama_belakang" name="nama_belakang" value="<?php echo e(old('nama_belakang', $penulis->nama_belakang)); ?>">
                </div>
            </div>

            <div class="mb-3">
                <label for="user_name" class="form-label" style="font-size: 13px; color: #555555;">Username</label>
                <input type="text" class="form-control <?php $__errorArgs = ['user_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="user_name" name="user_name" value="<?php echo e(old('user_name', $penulis->user_name)); ?>" required>
                <?php $__errorArgs = ['user_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label" style="font-size: 13px; color: #555555;">Password Baru</label>
                <input type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="password" name="password" placeholder="Kosongkan jika tidak ingin mengubah password">
                <small class="text-muted" style="font-size: 11px;">*Isi minimal 8 karakter jika ingin mengganti password lama.</small>
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-4">
                <label for="foto" class="form-label" style="font-size: 13px; color: #555555;">Foto Profil</label>
                <?php if($penulis->foto && $penulis->foto !== 'default.png'): ?>
                    <div class="mb-2">
                        <img src="<?php echo e(asset('storage/foto/' . $penulis->foto)); ?>"
                             alt="Foto Profil"
                             style="width: 60px; height: 60px; object-fit: cover; border-radius: 8px; border: 1px solid #e9ecef;">
                    </div>
                <?php endif; ?>
                <input type="file" class="form-control <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="foto" name="foto" accept="image/jpg,image/jpeg,image/png">
                <small class="text-muted" style="font-size: 11px;">Format: JPG, JPEG, PNG. Maks 2MB. Kosongkan jika tidak ingin mengubah foto.</small>
                <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-sm btn-primary px-3">Perbarui</button>
                <a href="<?php echo e(route('penulis.index')); ?>" class="btn btn-sm btn-light px-3" style="color: #666666;">Batal</a>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xamppp\htdocs\aplikasi-blog\resources\views/penulis/edit.blade.php ENDPATH**/ ?>