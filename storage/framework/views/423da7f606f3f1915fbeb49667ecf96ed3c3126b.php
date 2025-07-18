
<?php $__env->startSection('extra_css'); ?>
<style>
    .timer-container {
        display: flex;
        align-items: center;
        flex-direction: column;
        text-align: center;
    }

    .timer-values {
        display: flex;
        justify-content: center;
        margin-top: 10px;
        font-size: 28px;
        gap: 35px;
    }

    .timer-value {
        margin: 0 10px;
    }

    .timer-labels {
        display: flex;
        justify-content: center;
        margin-top: 5px;
        font-size: 15px;
    }

    .timer-label {
        margin: 0 10px;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="section">
    <div class="section body" style="display: flex; flex-direction: column; gap: 15px;">
        
        <div class="card">
            <div class="card-header">
                <h5>Dispatched Orders List</h5>
            </div>
        </div>
        <br><br>
        <div class="col-12">
            <div class="row">
                <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php

                ?>
                <div class="col-lg-4 col-sm-12 col-md-6" style="margin:10px;">
                    <div class="card">


                        

                        <div class="card-body">

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
                                    <span>Customer Name :</span>
                                </div>
                                <div class="col-7">

                                    <strong><?php echo e($order->uname); ?></strong>
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
                            <?php if(!empty($order->chef_id)): ?>
                            <?php if($order->delivery_user_id == ''): ?>
                            <div class="mb-2"><button class="btn btn-warning btn-sm w-100 dboymodal" data-id="<?php echo e($order->id); ?>" style="width: 120px">Assign Delivery Boy+
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
                            <div class=""><a href="<?php echo e(url('kitchen/order-details', $order->id)); ?>" class="btn btn-warning btn-sm w-100" style="width: 120px">View Order Details
                                </a></div>
                            <?php if($order->status == 'COOKING' && $order->delivery_user_id != ''): ?>
                            <button class="statusrdispatch btn btn-sm btn-primary w-100 mt-2" data-status="DISPATCHED" data-id=<?php echo e($order->id); ?>>Make Ready For
                                Handover</button>
                            <?php endif; ?>


                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        
    </div>


</section>

<!-- Modal -->
<div class="modal fade" id="chefclick" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Assign Chef</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" class="submitchef">
                <div class="modal-body">
                    <input type="hidden" name="weborder_id" id="weborder_id">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Select Chef</label>
                        <select class="form-control show-tick ms select2" data-placeholder="Select" name="chef_id">
                            <?php $__currentLoopData = $chefs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chef): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($chef->id); ?>"><?php echo e($chef->first_name . ' ' . $chef->last_name); ?>

                            </option>
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


<!--Delevery Boy Modal -->
<div class="modal fade" id="dboyclick" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Assign Delivery Boy</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" class="submitdboy">
                <div class="modal-body">
                    <input type="hidden" name="order_id" id="order_id">
                    <div class="form-group">
                        <label>Select Delivery Boy</label>
                        <select class="form-control show-tick ms select2" data-placeholder="Select" name="delivery_user_id">
                            <?php $__currentLoopData = $dboys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dboy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($dboy->id); ?>"><?php echo e($dboy->name); ?>

                            </option>
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


<?php $__env->startSection('extra_js'); ?>
<script>
    function updateTimers() {
        const timerElements = document.getElementsByClassName('timer');
        for (let i = 0; i < timerElements.length; i++) {
            const timerElement = timerElements[i];
            const startTime = parseInt(timerElement.getAttribute('data-start-time'), 10);
            const currentTime = Math.floor(Date.now() / 1000);
            const elapsedSeconds = currentTime - startTime;
            const hours = Math.floor(elapsedSeconds / 3600);
            const minutes = Math.floor((elapsedSeconds % 3600) / 60);
            const seconds = elapsedSeconds % 60;
            timerElement.innerHTML = `
                        <div class="timer-values">
                            <div class="timer-value">${hours}</div>
                            <div class="timer-value">${minutes}</div>
                            <div class="timer-value">${seconds}</div>
                        </div>
                        <div class="timer-labels">
                            <div class="timer-label">HOURS</div>
                            <div class="timer-label">MINUTES</div>
                            <div class="timer-label">SECONDS</div>
                        </div>
                    `;
        }
    }


    updateTimers();


    setInterval(updateTimers, 1000);

    $(document).ready(function() {
        $("body").on("click", ".chefmodal", function(e) {
            // alert('hello');
            // var first_name = $(this).data('first_name');
            // var last_name = $(this).data('last_name');
            var id = $(this).data('id');
            // var datas =
            $('#weborder_id').val(id);
            $('#chefclick').modal('toggle')
        });

        $("body").on("click", ".dboymodal", function(e) {
            // alert('hello');
            // var first_name = $(this).data('first_name');
            // var last_name = $(this).data('last_name');
            var id = $(this).data('id');
            // var datas =
            $('#order_id').val(id);
            $('#dboyclick').modal('toggle')
        });
    });


    $("body").on("submit", ".submitchef", function(e) {
        e.preventDefault()
        let fd = new FormData(this)
        fd.append('_token', "<?php echo e(csrf_token()); ?>");
        $.ajax({
            url: "<?php echo e(route('kitchen.assign.chef')); ?>",
            type: "POST",
            data: fd,
            dataType: 'json',
            processData: false,
            contentType: false,
            beforeSend: function() {

            },
            success: function(result) {
                if (result.status) {
                    iziToast.success({
                        title: '',
                        message: result.msg,
                        position: 'topRight'
                    });
                    $(".submitchef")[0].reset();
                    $("#chefclick").modal("toggle");
                    setTimeout(function() {
                        window.location.reload();
                    }, 2000);

                } else {
                    iziToast.error({
                        title: '',
                        message: result.msg,
                        position: 'topRight'
                    });
                }
            },
            complete: function() {
                $('.loader').hide();
            },
            error: function(jqXHR, exception) {
                $('.loader').hide();
                console.log(jqXHR.responseText);
            }
        });

    })


    $("body").on("submit", ".submitdboy", function(e) {
        e.preventDefault()
        let fd = new FormData(this)
        fd.append('_token', "<?php echo e(csrf_token()); ?>");
        $.ajax({
            url: "<?php echo e(route('kitchen.order.store_delivery_boy')); ?>",
            type: "POST",
            data: fd,
            dataType: 'json',
            processData: false,
            contentType: false,
            beforeSend: function() {

            },
            success: function(result) {
                if (result.status) {
                    iziToast.success({
                        title: '',
                        message: result.msg,
                        position: 'topRight'
                    });
                    $(".submitdboy")[0].reset();
                    $("#dboyclick").modal("toggle");
                    setTimeout(function() {
                        window.location.reload();
                    }, 2000);

                } else {
                    iziToast.error({
                        title: '',
                        message: result.msg,
                        position: 'topRight'
                    });
                }
            },
            complete: function() {
                $('.loader').hide();
            },
            error: function(jqXHR, exception) {
                $('.loader').hide();
                console.log(jqXHR.responseText);
            }
        });

    })


    $("body").on("click", ".statuscooking,.statusrdispatch", function(e) {
        e.preventDefault();
        var id = $(this).attr('data-id');
        var status = $(this).attr('data-status');

        let fd = new FormData()
        fd.append('_token', "<?php echo e(csrf_token()); ?>");
        fd.append('status', status);
        fd.append('id', id);

        $.confirm({
            title: 'Confirm!',
            content: 'Sure you want to change status?',
            buttons: {
                yes: function() {
                    $.ajax({
                            url: "<?php echo e(route('kitchen.update.order.status.dispatch')); ?>",
                            type: 'POST',
                            data: fd,
                            dataType: "JSON",
                            contentType: false,
                            processData: false,
                        })
                        .done(function(result) {
                            if (result.status) {
                                iziToast.success({
                                    title: '',
                                    message: result.msg,
                                    position: 'topRight'
                                });


                                setTimeout(function() {
                                    window.location.reload();
                                }, 2000);

                            } else {
                                iziToast.error({
                                    title: '',
                                    message: result.msg,
                                    position: 'topRight'
                                });
                            }
                        })
                        .fail(function(jqXHR, exception) {
                            console.log(jqXHR.responseText);
                        })


                },
                no: function() {},
            }
        })
    })
</script>

<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('kitchen.layout.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\andhra\resources\views/kitchen/order/order_cooked_list.blade.php ENDPATH**/ ?>