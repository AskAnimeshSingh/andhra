
<?php $__env->startSection('extra_css'); ?>
    <style>
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header float-right">
                            <h4>Fill Your Details</h4>
                        </div>
                        <div class="card-body">
                            <form class="addhelp">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control"
                                        name="name" id="" placeholder="Enter Your Name">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control"
                                        name="email" id="" placeholder="Enter Your Email">
                                </div>
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input type="text" class="form-control"
                                        name="phone" id=""
                                        placeholder="Enter Your Phone Number">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description" id="summernote" cols="30" rows="15" placeholder="Describe Yourself"></textarea>
                                </div>

                                <div class="mt-4 mb-4"><button type="submit"
                                        class="btn btn-primary btn-lg btn-block">Save</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>


    </section>
<?php $__env->startSection('extra_js'); ?>
    <script src="<?php echo e(asset('texteditor/summernote.min.js')); ?>"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 150,
                focus: true
            });

        });

        $("body").on("submit", ".addhelp", function(e) {
            e.preventDefault()
            let fd = new FormData(this)
            fd.append('_token', "<?php echo e(csrf_token()); ?>");
            $.ajax({
                url: "<?php echo e(route('admin.help.store')); ?>",
                type: "POST",
                data: fd,
                dataType: 'json',
                processData: false,
                contentType: false,

                success: function(result) {
                    if (result.status) {
                        iziToast.success({
                            title: '',
                            message: result.msg,
                            position: 'topRight'
                        });
                        setTimeout(function() {
                            window.location.href = "<?php echo e(route('admin.help.index')); ?>"
                        }, 1500);

                    } else {
                        iziToast.error({
                            title: '',
                            message: result.msg,
                            position: 'topRight'
                        });
                    }
                },

                error: function(jqXHR, exception) {
                    console.log('bye');
                    console.log(jqXHR.responseText);
                }
            });
        })
    </script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u700657081/domains/xcrinogroup.com/public_html/andhra/resources/views/admin/help/index.blade.php ENDPATH**/ ?>