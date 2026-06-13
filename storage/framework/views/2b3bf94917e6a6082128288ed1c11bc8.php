 
 
<?php $__env->startSection('title', 'Tambah Data Penulis'); ?> 
 
<?php $__env->startSection('content'); ?> 
<div class="mb-3"> 
    <h6 class="fw-semibold mb-0" style="color: #333333;">Tambah Data Penulis</h6> 
</div> 
 
<div class="card border-0 shadow-sm"> 
    <div class="card-body p-4"> 
        <form action="<?php echo e(route('penulis.store')); ?>" method="POST" enctype="multipart/form-data"> 
            <?php echo csrf_field(); ?> 
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
unset($__errorArgs, $__bag); ?>" id="nama_depan" name="nama_depan" value="<?php echo e(old('nama_depan')); ?>" required placeholder="Masukkan nama depan"> 
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
                    <input type="text" class="form-control" id="nama_belakang" name="nama_belakang" value="<?php echo e(old('nama_belakang')); ?>" placeholder="Masukkan nama belakang (opsional)"> 
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
unset($__errorArgs, $__bag); ?>" id="user_name" name="user_name" value="<?php echo e(old('user_name')); ?>" required placeholder="Masukkan username untuk login"> 
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
                <label for="password" class="form-label" style="font-size: 13px; color: #555555;">Password</label> 
                <input type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="password" name="password" required placeholder="Masukkan password minimal 6 karakter"> 
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

            <div class="mb-3"> 
                <label for="foto" class="form-label" style="font-size: 13px; color: #555555;">Foto Profil (Wajib)</label> 
                <input type="file" class="form-control <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="foto" name="foto" required> 
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
                <button type="submit" class="btn btn-sm btn-success px-3">Simpan</button> 
                <a href="<?php echo e(route('penulis.index')); ?>" class="btn btn-sm btn-light px-3" style="color: #666666;">Batal</a> 
            </div> 
        </form> 
    </div> 
</div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xamppp\htdocs\aplikasi-blog\resources\views/penulis/create.blade.php ENDPATH**/ ?>