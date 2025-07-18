<?php $__env->startSection('extra_css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<section class="contactus py-80 pb-0">
   <div class="container">
       <div class="row">
           <div class="col-lg-12">
            <h4><?php echo e($terms->heading1); ?></h4>
            <p><?php echo $terms->answer1; ?></p>
            <h4><?php echo e($terms->heading2); ?></h4>
            <p><?php echo $terms->answer2; ?></p>
            <h4><?php echo e($terms->heading3); ?></h4>
            <p><?php echo $terms->answer3; ?></p>
            <h4><?php echo e($terms->heading4); ?></h4>
            <p><?php echo $terms->answer4; ?></p>
       </div>
   </div>
</section>
<?php $__env->startSection('extra_js'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/restaurant-pos-backend/resources/views/website/term.blade.php ENDPATH**/ ?>