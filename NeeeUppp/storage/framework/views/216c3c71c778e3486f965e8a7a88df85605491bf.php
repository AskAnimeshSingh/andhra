<?php $__env->startSection('extra_css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<section class="contactus py-80 pb-0">
   <div class="container">
       <div class="row">
           <div class="col-lg-12">
                <h4><?php echo e($privacy->heading1); ?></h4>
                <p><?php echo $privacy->answer1; ?></p>
                <h4><?php echo e($privacy->heading2); ?></h4>
                <p><?php echo $privacy->answer2; ?></p>
                <h4><?php echo e($privacy->heading3); ?></h4>
                <p><?php echo $privacy->answer3; ?></p>
                <h4><?php echo e($privacy->heading4); ?></h4>
                <p><?php echo $privacy->answer4; ?></p>
                <h4><?php echo e($privacy->heading5); ?></h4>
                <p><?php echo $privacy->answer5; ?></p>
                <h4><?php echo e($privacy->heading6); ?></h4>
                <p><?php echo $privacy->answer6; ?></p>
           </div>
       </div>
   </div>
</section>
<?php $__env->startSection('extra_js'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/restaurant-pos-backend/resources/views/website/privacy.blade.php ENDPATH**/ ?>