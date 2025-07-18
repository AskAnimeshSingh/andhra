
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
                            <h4>Ready Orders</h4> <!-- Updated title to reflect only READY orders -->
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>User Name</th>
                                            <th>Cooking Time</th>
                                            <th>Delivery Time</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                $startCooking = \Carbon\Carbon::parse($order->cookingstart);
                                                $endCooking = \Carbon\Carbon::parse($order->endcooking);
                                                $timeDifference = $startCooking->diff($endCooking)->format('%HH:%IM:%SS');
                                                
                                                $endCooking = \Carbon\Carbon::parse($order->endcooking);
                                                $deliveryTime = \Carbon\Carbon::parse($order->delivery_time);
                                                $deliveryDifference = $endCooking->diff($deliveryTime)->format('%HH:%IM:%SS');
                                            ?>
                                            <tr>
                                                <td><?php echo e(date('d-m-Y', strtotime($order->created_at))); ?></td>
                                                <td><?php echo e($order->uname); ?></td>
                                                <td><?php echo e($timeDifference); ?></td> <!-- Simplified as all orders are READY -->
                                                <td>--</td> <!-- Delivery time will be -- as it's not yet delivered -->
                                                <td><badge class="badge badge-sm badge-warning w-100">Cooking Complete</badge></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <?php echo e($orders->links()); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal remains the same -->
    <div class="modal fade" id="chefclick" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Assign Chef</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="<?php echo e(route('kitchen.assign.chef')); ?>" method="POST" class="submitchef">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <input type="hidden" name="weborder_id" id="weborder_id">
                        <div class="form-group">
                            <label for="chef_id">Select Chef</label>
                            <select class="form-control show-tick ms select2" name="chef_id">
                                <?php $__currentLoopData = $chefs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chef): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($chef->id); ?>"><?php echo e($chef->first_name . ' ' . $chef->last_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra_js'); ?>
    <script>
        $("body").on("click", ".chefmodal", function(e) {
            var id = $(this).data('id'); // Fixed syntax error here
            $('#weborder_id').val(id)
;
            $('#chefclick').modal('toggle');
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('kitchen.layout.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\andhra\resources\views/kitchen/order/completeorderlist.blade.php ENDPATH**/ ?>