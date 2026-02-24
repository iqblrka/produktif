

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <h1 class="display-1">404</h1>
            <h2>Page Not Found</h2>
            <p>Halaman yang Anda cari tidak ditemukan.</p>
            <a href="<?php echo e(route('home')); ?>" class="btn btn-primary">Kembali ke Home</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Projek\Projek\resources\views/errors/404.blade.php ENDPATH**/ ?>