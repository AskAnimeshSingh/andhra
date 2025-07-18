<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <title>Xcrino</title>
        <!-- General CSS Files -->
        <link rel="stylesheet" href="<?php echo e(asset('assets/admin/assets/css/app.min.css')); ?>">
        <!-- Template CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets/admin/assets/css/style.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/admin/assets/css/components.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/admin/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')); ?>">
        <!-- Custom style CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets/admin/assets/css/custom.css')); ?>">
        <link rel='shortcut icon' type='image/x-icon' href='<?php echo e(asset('assets/admin/assets/img/favicon.ico')); ?>' />
        <link rel="stylesheet" href="<?php echo e(asset('assets/admin/assets/bundles/izitoast/css/iziToast.min.css')); ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

        <!--Summernote-->
        <link rel="stylesheet" href="<?php echo e(asset('assets/admin/assets/bundles/summernote/summernote-bs4.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/admin/assets/bundles/codemirror/lib/codemirror.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/admin/assets/bundles/codemirror/theme/duotone-dark.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/admin/assets/bundles/jquery-selectric/selectric.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/admin/assets/bundles/select2/dist/css/select2.min.css')); ?>">

        <?php echo $__env->yieldContent('extra_css'); ?>
      </head>
</head>
<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>

            <!-- include Navbar-->
            <?php echo $__env->make('admin.include.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- include sidebar-->
            <?php echo $__env->make('admin.include.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


            <!-- content--->
            <div class="main-content">
                <?php echo $__env->yieldContent('content'); ?>
            </div>

             <!-- include footer-->
             <?php echo $__env->make('admin.include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        </div>
    </div>

</body>
 <!-- General JS Scripts -->
 <script src="<?php echo e(asset('assets/admin/assets/js/app.min.js')); ?>"></script>
 <!-- JS Libraies -->
 <script src="<?php echo e(asset('assets/admin/assets/bundles/apexcharts/apexcharts.min.js')); ?>"></script>
 <!-- Page Specific JS File -->
 <script src="<?php echo e(asset('assets/admin/assets/js/page/index.js')); ?>"></script>
 <!-- Template JS File -->
 <script src="<?php echo e(asset('assets/admin/assets/js/scripts.js')); ?>"></script>
 <!-- Custom JS File -->
 <script src="<?php echo e(asset('assets/admin/assets/js/custom.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/admin/assets/bundles/izitoast/js/iziToast.min.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/admin/assets/js/page/toastr.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/admin/assets/js/page/sweetalert.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/admin/assets/bundles/datatables/datatables.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/admin/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/admin/assets/js/page/datatables.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/admin/assets/bundles/sweetalert/sweetalert.min.js')); ?>"></script>
  <!-- Page Specific JS File -->
  <script src="<?php echo e(asset('assets/admin/assets/js/page/sweetalert.js')); ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>


  <script src="<?php echo e(asset('assets/admin/assets/bundles/summernote/summernote-bs4.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/admin/assets/bundles/codemirror/lib/codemirror.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/admin/assets/bundles/codemirror/mode/javascript/javascript.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/admin/assets/bundles/jquery-selectric/jquery.selectric.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/admin/assets/bundles/ckeditor/ckeditor.js')); ?>"></script>
  <!-- Page Specific JS File -->
  <script src="<?php echo e(asset('assets/admin/assets/js/page/ckeditor.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/admin/assets/bundles/select2/dist/js/select2.full.min.js')); ?>"></script>
 <?php echo $__env->yieldContent('extra_js'); ?>
</html>
<?php /**PATH /var/www/html/restaurant-pos-backend/resources/views/admin/layout/layouts.blade.php ENDPATH**/ ?>