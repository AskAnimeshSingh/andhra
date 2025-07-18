<?php $__env->startSection('extra_css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/admin/assets/bundles/select2/dist/css/select2.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/admin/assets/bundles/jquery-selectric/selectric.css')); ?>">
<style>
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="section">
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h5>Add New Purchase</h5>
            </div>
            <div class="card-body">
                <form class="store_food_purchase" method="POST">
                    <div class="row">
                        <div class="col-lg-4 pl-lg-4">
                            <label>Branch</label>
                            <div class="form-group">
                                <select name="branch" required id="branch_id" class="form-control form-control-lg">
                                    <option value="">Select Branch</option>
                                    <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4 pl-lg-4">
                            <label>Supplier</label>
                            <div class="form-group">
                                <select name="supplier" required id="supplier" class="form-control form-control-lg">
                                    <option value="">Select Supplier</option>
                                    <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4 pl-lg-4">
                            <label>Invoice</label>
                            <div class="form-group">
                                <input type="text" name="invoice" required id="invoice" class="form-control" placeholder="Invoice">
                            </div>
                        </div>

                        <div class="col-lg-4 pl-lg-4">
                            <label>Purchase Date</label>
                            <div class="form-group">
                                <input type="date" name="purchase_date" required id="purchase_date" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-4 pl-lg-4">
                            <label>Payment Type</label>
                            <div class="form-group">
                                <select name="payment_type" required id="payment_type" class="form-control form-control-lg">
                                    <option value="">Select Payment Type</option>
                                    <?php $__currentLoopData = $payment_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 pl-lg-4">
                            <label>Descriptiom</label>
                            <div class="form-group">
                                <textarea name="description" required id="description" class="form-control form-control-lg" cols="10" role="8"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <label>Food Item</label>
                            <div class="form-group">
                                <select name="food[]" required id="food_id" class="form-control form-control-lg select2 food-setup" multiple="">
                                    <option value="">Select Food</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="table-responsive show_food_list" id="show_food">
                                
                            </div>
                        </div>
                        <button type="submit" name="button" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

<input type="hidden" id="get_paid" >
</section>
<?php $__env->startSection('extra_js'); ?>
<script src="<?php echo e(asset('assets/admin/assets/bundles/select2/dist/js/select2.full.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/assets/bundles/jquery-selectric/jquery.selectric.min.js')); ?>"></script>
<script>
    // Category Store



    $(function() {
        $(".food-setup").select2({
            placeholder: "Select Food",
            allowClear: true
        });

        $("body").on("submit", ".store_food_purchase", function(e) {
            e.preventDefault()
            let fd          = new FormData(this)
            var dueAmnt     = $(".due").val();
            var totalAmnt   = $(".paid").val();
            fd.append('_token', "<?php echo e(csrf_token()); ?>");
            fd.append('dueAmnt', dueAmnt);
            fd.append('totalAmnt', totalAmnt);
            $.ajax({
                url: "<?php echo e(route('admin.food_purchase.store')); ?>",
                type: "POST",
                data: fd,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $('#login-button').prop('disabled', true);
                    $('.loader').show();
                },
                success: function(result) {
                    if (result.status) {
                        iziToast.success({
                            title: '',
                            message: result.msg,
                            position: 'topRight'
                        });
                        $(".store_food_purchase")[0].reset();
                        $("#exampleModal").modal("toggle");
                        $('#staff').DataTable().ajax.reload(null, false);

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

        // Get Product when change branch
        $('#branch_id').on('change', function(e) {
            let fd = new FormData();
            var cateid = $(this).val();
            fd.append('_token', "<?php echo e(csrf_token()); ?>");
            $.ajax({
                url: "<?php echo e(route('common.get_product')); ?>",
                type: "POST",
                data: fd,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: function() {
                    // $('.loader').show();
                },
                success: function(result) {
                    var datas = '';

                    if (result.data.length > 0) {
                        let j = 1;
                        datas += '<option value="">Please Select Food</option>';
                        $.each(result.data, function(i, val) {
                            datas += '<option value="' + val.id + '">' + val.product_name + '</option>';
                            j++;
                        });
                    } else {
                        datas += '<option value="">Food Not Found</option>';
                    }
                    $('#food_id').html(datas);
                },
                complete: function() {
                    // $("#sub_category").hide()
                    $('.loader').hide();
                },
                error: function(jqXHR, exception) {
                    console.log(jqXHR.responseText);
                    $('.loader').hide();
                }
            });
        })

        // Show Food Data
        $(".food-setup").on("change" , function(e) {
            e.preventDefault();
            showlist();
        })

        // Change Qty
        $("body").on("blur" , ".changeQty" , function(e) {
            e.preventDefault();
            var fd = new FormData();
            var id = $(this).data('id');
            var qty = $("#getQty"+id).val();
            fd.append('_token', "<?php echo e(csrf_token()); ?>");
            fd.append('qty', qty);
            fd.append('id', id);
            $.ajax({
                url: "<?php echo e(route('admin.food_purchase.update_qty')); ?>",
                type: "POST",
                data: fd,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $('.loader').show();
                },
                success: function(result) {
                    if (result.status) {
                        iziToast.success({
                            title: '',
                            message: result.msg,
                            position: 'topRight'
                        });
                        showlist()

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
                    console.log(jqXHR.responseText);
                    $('.loader').hide();
                }
            });
        })

        // Update price
        $("body").on("blur" , ".changePrice" , function(e) {
            e.preventDefault();
            var fd = new FormData();
            var id = $(this).data('id');
            var price = $("#getPrice"+id).val();
            fd.append('_token', "<?php echo e(csrf_token()); ?>");
            fd.append('price', price);
            fd.append('id', id);
            $.ajax({
                url: "<?php echo e(route('admin.food_purchase.update_price')); ?>",
                type: "POST",
                data: fd,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $('.loader').show();
                },
                success: function(result) {
                    if (result.status) {
                        iziToast.success({
                            title: '',
                            message: result.msg,
                            position: 'topRight'
                        });
                        showlist()

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
                    console.log(jqXHR.responseText);
                    $('.loader').hide();
                }
            });
        })

        // Function call;

        function showlist(){
        var fd = new FormData();
            var food_id = $("#food_id").val();
            var branch_id = $("#branch_id").val();
            fd.append('_token', "<?php echo e(csrf_token()); ?>");
            fd.append('food_id', food_id);
            fd.append('branch_id', branch_id);
            $.ajax({
                url: "<?php echo e(route('admin.show_food.show_food')); ?>",
                type: "POST",
                data: fd,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: function() {
                    // $('.loader').show();
                },
                success: function(result) {
                    var datas = '';
                    // console.log(result.html)
                    
                    if (result.data.length > 0) {
                        $('.show_food_list').html(result.html);
                    } else {
                        $('.show_food_list').html('');
                    }
                    $("#get_paid").val(result.total);
                    
                },
                complete: function() {
                    // $("#sub_category").hide()
                    $('.loader').hide();
                },
                error: function(jqXHR, exception) {
                    console.log(jqXHR.responseText);
                    $('.loader').hide();
                }
            });
        }

        // Due Price Manage
        $("body").on("blur" , ".paid" , function() {
            var price = $(this).val();
            var total_price = $("#get_paid").val();
            console.log(parseInt(total_price) - parseInt(price));
            $(".due").val(parseInt(total_price) - parseInt(price));
        })
    })
</script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/restaurant-pos-backend/resources/views/admin/food_purchase/index.blade.php ENDPATH**/ ?>