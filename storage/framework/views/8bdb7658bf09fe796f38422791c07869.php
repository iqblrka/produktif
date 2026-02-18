<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?php echo e(config('app.name', 'Butterfly')); ?></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Favicons -->
    <link href="<?php echo e(asset('frontend/assets/img/favicon.png')); ?>" rel="icon">
    <link href="<?php echo e(asset('frontend/assets/img/apple-touch-icon.png')); ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo e(asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/assets/vendor/aos/aos.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="<?php echo e(asset('frontend/assets/css/main.css')); ?>" rel="stylesheet">
</head>

<body class="index-page">

    <!-- ======= Header ======= -->
    <?php echo $__env->make('frontend.layouts.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <!-- End Header -->

    <!-- ======= Main Content ======= -->
    <main class="main">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <!-- End Main Content -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Butterfly</strong> <span>All Rights Reserved</span></p>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo e(asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/vendor/aos/aos.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/vendor/purecounter/purecounter_vanilla.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')); ?>"></script>

    <!-- Main JS File -->
    <script src="<?php echo e(asset('frontend/assets/js/main.js')); ?>"></script>

</body>
</html><?php /**PATH D:\Projek\Projek\resources\views/frontend/template.blade.php ENDPATH**/ ?>