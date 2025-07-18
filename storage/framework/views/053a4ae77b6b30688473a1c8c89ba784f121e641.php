
<?php $__env->startSection('extra_css'); ?>
    <style>
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section body">
            <div class="card">
                <div class="card-header justify-content-between">
                    <div class="">Add Chef</div>
                    <div class=""><a href="<?php echo e(route('admin.list.chef')); ?>" class="btn btn-primary btn-sm">Chef List</a></div>
                </div>
                <div class="card-body">
                    <form class="addchef" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Name" name="first_name">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Name" name="last_name">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Profile Pic</label>
                                    <input type="file" class="form-control" placeholder="Enter Name" name="image">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" placeholder="Enter Email" name="email">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Branch</label>
                                    <select name="branch" id="branch" class="form-control">
                                        <option value="">Select a Branch</option>
                                        <?php $__currentLoopData = $branch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            
                                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </div>



                          <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Status*</label>
                                    <select class="form-control show-tick ms select2" data-placeholder="Select" name="status">
                                        <option value="0">Active</option>
                                        <option value="1">Inactive</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phone</label>
                                    <input type="number" class="form-control" placeholder="Enter Phone" name="phone">
                                </div>
                            </div>
                          </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>


    </section>




<?php $__env->startSection('extra_js'); ?>
    <script>
$(function() {

$('.addchef').on('submit', function(e) {
    e.preventDefault()

    let fd = new FormData(this)
    fd.append('_token', "<?php echo e(csrf_token()); ?>");
    $.ajax({
        url: "<?php echo e(route('admin.add.chef')); ?>",
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
                setTimeout(function() {
                    window.location.href = result.location;
                }, 500);
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
});


    </script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u700657081/domains/xcrinogroup.com/public_html/andhra/resources/views/admin/chef/index.blade.php ENDPATH**/ ?>