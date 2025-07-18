<?php $__env->startSection('extra_css'); ?>
    <style>
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header float-right">
                            <h4>Order Detail List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-striped" id="detail">
                                    <thead>
                                        <tr>
                                             <th>Product Name</th>
                                             <th>Base Price</th>
                                             <th>Size</th>
                                             <th>Quantity</th>
                                             <th>Type</th>
                                             <th>Product Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($dat->product_name); ?></td>
                                            <td><?php echo e($dat->price); ?></td>
                                            <td></td>
                                            <td><?php echo e($dat->order_qty); ?></td>
                                            <td><?php echo e($dat->type); ?></td>
                                            <td></td>
                                        </tr>
                                            
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                              </table>
                              <?php echo e($data->links()); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
 
   <?php $__env->startSection('extra_js'); ?>
   
   <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>













<?php echo $__env->make('website.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/restaurant-pos-backend/resources/views/website/order_detail.blade.php ENDPATH**/ ?>