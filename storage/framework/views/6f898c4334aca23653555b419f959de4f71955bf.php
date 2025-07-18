
<?php $__env->startSection('extra_css'); ?>
    <style>
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section body">
            <div class="card">
                <div class="card-header">
                    Add Chef
                </div>
                <div class="card-body">
                    <form class="editchef" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Name" name="first_name" value="<?php echo e($chef->first_name); ?>">
                                    <input type="hidden" name="id" value="<?php echo e($chef->id); ?>">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Name" name="last_name" value="<?php echo e($chef->last_name); ?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Profile Pic</label>
                                    <input type="file" class="form-control" name="image" onchange="stocks(this);">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="row justify-content-left">
                                    <div class="col-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <img class="img-thumbnail image-width mt-4 mb-3" id="previewImage"
                                                src="<?php echo e(url($chef->image)); ?>" width="150px;" alt="your image" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Branch</label>
                                    
                                    <select name="branch" id="branch" class="form-control">
                                        <option value="">Select a Branch</option>
                                        <?php $__currentLoopData = $branch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            
                                        <option value="<?php echo e($data->id); ?>" <?php if($data->id == $chef->branch_id): ?> selected <?php endif; ?>><?php echo e($data->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>
                                </div>
                            </div>

                        </div>



                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" placeholder="Enter Email" name="email" value="<?php echo e($chef->email); ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Status*</label>
                                    <select class="form-control show-tick ms select2" data-placeholder="Select"
                                        name="status">
                                        <option value="0" <?php echo e($chef->status == '0' ? 'selected' : ''); ?>>Active</option>
                                        <option value="1" <?php echo e($chef->status == '1' ? 'selected' : ''); ?>>Inactive</option>

                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phone</label>
                                    <input type="number" class="form-control" placeholder="Enter Phone" name="phone" value="<?php echo e($chef->phone); ?>">
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
        function stocks(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#previewImage').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(function() {

            $('.editchef').on('submit', function(e) {
                e.preventDefault()

                let fd = new FormData(this)
                fd.append('_token', "<?php echo e(csrf_token()); ?>");
                $.ajax({
                    url: "<?php echo e(route('admin.update.chef')); ?>",
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

<?php echo $__env->make('admin.layout.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u700657081/domains/xcrinogroup.com/public_html/andhra/resources/views/admin/chef/edit_chef.blade.php ENDPATH**/ ?>