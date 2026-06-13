

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-center align-items-center" style="min-height: calc(100vh - 160px);">
    <div class="card border-0 shadow-sm" style="max-width: 480px; width: 100%; border-radius: 12px;">
        <div class="card-body p-4 p-md-5 text-center">
            <div class="mb-4">
                <div style="width: 64px; height: 64px; border-radius: 50%;
                            background-color: #e8f5e9; display: flex;
                            align-items: center; justify-content: center;
                            margin: 0 auto 16px;">
                    <i class="fa-solid fa-house" style="color: #2e7d32; font-size: 24px;"></i>
                </div>
                <h5 class="fw-semibold mb-1">
                    Selamat datang, <span style="color: #2e7d32;"><?php echo e($nama_lengkap); ?></span>
                </h5>
                <p class="text-muted small mb-0">
                    Silakan pilih menu di sebelah kiri untuk mulai mengelola konten blog.
                </p>
            </div>

            <hr class="my-3">

            <div class="row g-3 text-start">
                <div class="col-6">
                    <div class="p-3 rounded" style="background-color: #f8f9fa;">
                        <div class="text-uppercase fw-semibold mb-1"
                             style="font-size: 10px; color: #adb5bd; letter-spacing: 0.05em;">
                            Login sebagai
                        </div>
                        <div style="font-size: 12px; font-weight: 500; color: #212529;">
                            <?php echo e($nama_lengkap); ?>

                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="p-3 rounded" style="background-color: #f8f9fa;">
                        <div class="text-uppercase fw-semibold mb-1"
                             style="font-size: 10px; color: #adb5bd; letter-spacing: 0.05em;">
                            Waktu login
                        </div>
                        <div style="font-size: 12px; font-weight: 500; color: #212529;">
                            <?php echo e($waktu_login); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xamppp\htdocs\aplikasi-blog\resources\views/dashboard.blade.php ENDPATH**/ ?>