<?php $__env->startSection('extra_css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="section">
    <div class="flex flex-col sm:flex-col md:flex-col lg:flex-row justify-evenly items-center gap-4" style="width:100%; height:120px;">
        <div class="w-full h-full">
            <a href="<?php echo e(route('kitchen.order_list')); ?>" class="text-decoration-none">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0">
                                    <div class="card-content">
                                        <h5 class="font-15">Total Orders</h5>
                                        <h2 class="mb-3 font-18"><?php echo e($status->where('status', '!=','CANCELLED')->count()); ?></h2>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img  mr-5 mt-2">
                                        <img src="<?php echo e(asset('assets/kitchen/assets/img/dashboard/order.png')); ?>" alt="" width="40px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="w-full h-full">
            <a href="<?php echo e(route('kitchen.order_pending_list')); ?>" class="text-decoration-none">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">New Orders</h5>
                                        <h2 class="mb-3 font-18"><?php echo e($status->where('status', 'PENDING')->count()); ?></h2>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img  mr-5 mt-2">
                                        <img src="<?php echo e(asset('assets/kitchen/assets/img/dashboard/delivery-service.png')); ?>" alt="" width="40px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="w-full h-full">
            <a href="<?php echo e(route('kitchen.order_cooking_list')); ?>" class="text-decoration-none">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15"> Cooking</h5>
                                        <h2 class="mb-3 font-18"><?php echo e($status->where('status', 'COOKING')->count()); ?></h2>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img  mr-5 mt-2">
                                        <img src="<?php echo e(asset('assets/kitchen/assets/img/dashboard/cooking.png')); ?>" alt="" width="40px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="w-full h-full">
            <a href="<?php echo e(route('kitchen.completed_order_list')); ?>" class="text-decoration-none">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Orders Ready</h5>
                                        <h2 class="mb-3 font-18"><?php echo e($status->where('status', 'READY')->count()); ?></h2>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img  mr-5 mt-2">
                                        <img src="<?php echo e(asset('assets/kitchen/assets/img/dashboard/checked.png')); ?>" alt="" width="40px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        

        <div class="w-full h-full">
            <a href="#" class="text-decoration-none">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Cancelled Order</h5>
                                        <h2 class="mb-3 font-18"><?php echo e($status->where('status', 'CANCELLED')->count()); ?></h2>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img mr-5 mt-2">
                                        <img src="<?php echo e(asset('assets/kitchen/assets/img/dashboard/cancelled.png')); ?>" alt="" width="40px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>


</section>

    <section class="section">
        <div class="section body">
            
                <div class="card my-3">
                    <div class="card-header">
                        <h5>New Orders List</h5>
                    </div>
                </div>
            <div class="col-12">
                <div class="row">
                    
                    <?php if(count($groups) > 0): ?>
                        <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php

                            ?>
                            <div class="col-lg-4 col-sm-12 col-md-6" style="    padding: 7px !important;
}">
                                <div class="card">
                                    <?php if($order->status == 'PENDING'): ?>
                                    <button class="btn btn-primary btn-sm" style="float: right; width:100px; font-weight:700;">New Order</button>

                                    <?php elseif($order->status == 'COOKING'): ?>
                                    <button class="btn btn-success btn-sm" style="float: right; width:100px; font-weight:700;">Cooking</button>
                                    <?php endif; ?>
                                    

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-5 mb-2">
                                                <span>Date :</span>
                                            </div>
                                            <div class="col-7">

                                                <strong><?php echo e(date('d-m-y, h:i a', strtotime($order->created_at))); ?></strong>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-5 mb-2">
                                                <span>Order Number :</span>
                                            </div>
                                            <div class="col-7">

                                                <strong><?php echo e($order->id); ?></strong>
                                            </div>
                                        </div>

                                        
                                        <div class="row">
                                            <div class="col-5 mb-2">
                                                <span>Branch :</span>
                                            </div>
                                            <div class="col-7">

                                                <strong><?php echo e($branch->name); ?></strong>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-5 mb-2">
                                                <span>Table Number :</span>
                                            </div>
                                            <div class="col-7">

                                                <strong><?php echo e($order->table_no); ?></strong>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-5 mb-2">
                                                <span>Delivery Type :</span>
                                            </div>
                                            <div class="col-7">

                                                <strong><?php echo e($order->delivery_type); ?></strong>
                                            </div>
                                        </div>

                                        <?php if($order->delivery_type == 'Home Delivery'): ?>
                                                <?php if(!empty($order->chef_id)): ?>
                                                    <?php if($order->delivery_user_id == ''): ?>
                                                        <div class="mb-2"><button class="btn btn-warning btn-sm w-100 dboymodal"
                                                                data-id="<?php echo e($order->id); ?>" style="width: 120px">Assign Delivery
                                                                Boy+
                                                            </button></div>
                                                    <?php elseif($order->delivery_user_id != ''): ?>
                                                        <div class="row">
                                                            <div class="col-5 mb-2">
                                                                <span>Delivery Boy:</span>
                                                            </div>
                                                            <div class="col-7">
                                                                <strong><?php echo e($order->name); ?></strong>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                               <?php endif; ?>
                                        <?php endif; ?>
                                        <div class=""><a href="<?php echo e(url('kitchen/order-details', $order->id)); ?>"
                                                class="btn btn-warning btn-sm w-100">View Order Details
                                            </a></div>
                                        <?php if($order->status == 'COOKING' && $order->delivery_user_id != ''): ?>
                                            <button class="statusrdispatch btn btn-sm btn-primary w-100 mt-2"
                                                data-status="DISPATCHED" data-id=<?php echo e($order->id); ?>>Make Ready For
                                                Handover</button>
                                        <?php elseif(($order->status == 'COOKING') && ($order->delivery_type == 'Take Away')): ?>
                                                <button class="statusrdispatch btn btn-sm btn-primary w-100 mt-2"
                                                data-status="DISPATCHED" data-id=<?php echo e($order->id); ?>>Make Ready For
                                                Handover</button>
                                        <?php endif; ?>


                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    <?php else: ?>
                    
                        <div class="col-12">
                            <div class="justify-content-center" style="text-align: center; font-size:24px;">No Record Found</div>
                        </div>
                    
                    <?php endif; ?>
                </div>
                
            </div>
            

        </div>


    </section>
<?php $__env->startSection('extra_js'); ?>
<script></script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('kitchen.layout.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\andhra\resources\views/kitchen/dashboard.blade.php ENDPATH**/ ?>