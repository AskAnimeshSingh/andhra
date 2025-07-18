
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
                            <h4>Order Description</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-striped" id="detail">
                                    <thead>
                                        <tr>
                                             <th>Product Name</th>
                                             <th>Package Type</th>
                                             <th>Base Price</th>
                                             <th>Size</th>
                                             <th>Quantity</th>
                                             <th>Extra</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <?php if($dat->type == "combo"): ?>  
                                            <td><?php echo e($dat->package_name); ?></td>
                                            <?php else: ?>
                                            <td><?php echo e($dat->product_name); ?></td>
                                            <?php endif; ?>

                                            <?php if($dat->type == "combo"): ?>  
                                            <td><?php echo e($dat->type); ?></td>
                                            <?php else: ?>
                                            <td><?php echo e($dat->product_type); ?></td>
                                            <?php endif; ?>
                                            <td><?php echo e($dat->base_price); ?></td>  
                                            <td><?php echo e($dat->size); ?></td> 
                                            <td><?php echo e($dat->pro_qty); ?></td>  
                                            <td><?php echo e($dat->extra); ?></td>   
                                            
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                              </table>
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








<?php echo $__env->make('admin.layout.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u700657081/domains/xcrinogroup.com/public_html/andhra/resources/views/admin/order/detail.blade.php ENDPATH**/ ?>