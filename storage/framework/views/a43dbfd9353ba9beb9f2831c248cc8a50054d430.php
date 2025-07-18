
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
                    <div class="card-header justify-content-between">
                        <h4>Information</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('admin.points.store')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="infoInput" >Yen:</label>
                                    <input type="text" class="form-control" id="yen" name="yen" value="<?php if(isset($data->yen)): ?> <?php echo e($data->yen); ?> <?php endif; ?>">
                                    <?php $__errorArgs = ['yen'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="" style="color:red">
                                            <?php echo e($message); ?>

                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-md-6">
                                    <label for="infoTextArea">Points:</label>
                                    <input type="text" class="form-control" id="points" name="points" value="<?php if(isset($data->points)): ?> <?php echo e($data->points); ?> <?php endif; ?>">
                                    <?php $__errorArgs = ['points'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="" style="color:red">
                                            <?php echo e($message); ?>

                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                               
                                <div class="col-md-6">
                                    <label for="infoTextArea">Limit:</label>
                                    <input type="text" class="form-control" id="limit" name="limit" value="<?php if(isset($data->limit)): ?> <?php echo e($data->limit); ?> <?php endif; ?>">
                                    <?php $__errorArgs = ['limit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="" style="color:red">
                                            <?php echo e($message); ?>

                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            
                        </div>
                            <div style="display:flex;justify-content:end;padding:42px;">
                                <Button type="submit" class="btn btn-primary" >Store</Button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

    <!-- Modal with form -->
    
        <!-- Modal Edit form -->
        
    </section>
<?php $__env->startSection('extra_js'); ?>
    <script>
        // Image preview
        function readURL(input, place) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    if (place === 'add') {
                        $('#previewImage').attr('src', e.target.result);
                    } else {
                        $('#editpreviewImage').attr('src', e.target.result);
                    }
                };
                reader.readAsDataURL(input.files[0]);
            }
        }


        // Category Store
        $("body").on("submit", ".store_cate", function (e) {
            e.preventDefault()
            let fd = new FormData(this)
            fd.append('_token', "<?php echo e(csrf_token()); ?>");
            $.ajax({
                url: "<?php echo e(route('admin.category.store')); ?>",
                type: "POST",
                data: fd,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('#login-button').prop('disabled', true);
                    $('.loader').show();
                },
                success: function (result) {
                    if (result.status) {
                        iziToast.success({
                            title: '',
                            message: result.msg,
                            position: 'topRight'
                        });
                        $(".store_cate")[0].reset();
                        $("#exampleModal").modal("toggle");
                        $('#category').DataTable().ajax.reload(null, false);

                    } else {
                        iziToast.error({
                            title: '',
                            message: result.msg,
                            position: 'topRight'
                        });
                    }
                },
                complete: function () {
                    $('.loader').hide();
                },
                error: function (jqXHR, exception) {
                    $('.loader').hide();
                    console.log(jqXHR.responseText);
                }
            });
        })

        // Datatable
        // $.fn.tableload = function (e) {
        var tables = $('#category').DataTable({
            "processing": true,
            pageLength: 10,
            "serverSide": true,
            "ajax": {
                url: "<?php echo e(route('admin.category_ajax_list')); ?>",
                dataFilter: function (data) {
                    var json = jQuery.parseJSON(data);
                    json.recordsTotal = json.recordsTotal;
                    json.recordsFiltered = json.recordsFiltered;
                    json.data = json.data;
                    return JSON.stringify(json); // return JSON string
                }
            },

            'order': [
                [1, 'desc']
            ],
            'columnDefs': [{
                "targets": 0,
                "name": "id",
                'searchable': true,
                'orderable': true
            },
                {
                    "targets": 1,
                    "name": "cate_name",
                    'searchable': true,
                    'orderable': true
                },
                {
                    "targets": 2,
                    "name": "cate_img",
                    'searchable': true,
                    'orderable': true
                },
                {
                    "targets": 3,
                    "name": "status",
                    'searchable': true,
                    'orderable': true
                },
                {
                    "targets": 4,
                    "name": "action",
                    'searchable': true,
                    'orderable': true
                },
            ],
        });


        // Update Category
        $("body").on("click", ".editCategory", function (e) {
            var name = $(this).data('name');
            var img = $(this).data('img');
            var id = $(this).data('id');
            $('#editIcon').val("")
            $("#edit_cate").val(name)
            $('#cateid').val(id);
            $('#oldicon').val(img);
            $('#image-icon').html('<img class="img-thumbnail image-width mt-4 mb-3" id="editpreviewImage" src="<?php echo e(url('')); ?>' + img + '" alt="" />')
            $('#editModal').modal('toggle')
        });


        // Category Edit
        $("body").on("submit", ".edit_cate", function (e) {
            e.preventDefault()
            let fd = new FormData(this)
            fd.append('_token', "<?php echo e(csrf_token()); ?>");
            $.ajax({
                url: "<?php echo e(route('admin.category.update')); ?>",
                type: "POST",
                data: fd,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('#login-button').prop('disabled', true);
                    $('.loader').show();
                },
                success: function (result) {
                    if (result.status) {
                        iziToast.success({
                            title: '',
                            message: result.msg,
                            position: 'topRight'
                        });
                        $(".edit_cate")[0].reset();
                        $("#editModal").modal("toggle");
                        $('#category').DataTable().ajax.reload(null, false);

                    } else {
                        iziToast.error({
                            title: '',
                            message: result.msg,
                            position: 'topRight'
                        });
                    }
                },
                complete: function () {
                    $('.loader').hide();
                },
                error: function (jqXHR, exception) {
                    $('.loader').hide();
                    console.log(jqXHR.responseText);
                }
            });
        })

        // Update status for category
        $("body").on("click", ".statusVerifiedClick", function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            var status = $(this).data('status');
            let fd = new FormData()
            fd.append('_token', "<?php echo e(csrf_token()); ?>");
            fd.append('status', status);
            fd.append('id', id);
            $.confirm({
                title: 'Confirm!',
                content: 'Sure you want to change category status?',
                buttons: {
                    yes: function () {
                        $.ajax({
                            url: "<?php echo e(route('admin.category.status')); ?>",
                            type: 'POST',
                            data: fd,
                            dataType: "JSON",
                            contentType: false,
                            processData: false,
                        })
                            .done(function (result) {
                                if (result.status) {
                                    iziToast.success({
                                        title: '',
                                        message: result.msg,
                                        position: 'topRight'
                                    });
                                    $('#category').DataTable().ajax.reload(null, false);

                                } else {
                                    iziToast.error({
                                        title: '',
                                        message: result.msg,
                                        position: 'topRight'
                                    });
                                }
                            })
                            .fail(function (jqXHR, exception) {
                                console.log(jqXHR.responseText);
                            })


                    },
                    no: function () {
                    },
                }
            })
        })


        // Category delete
        $("body").on("click", ".category-delete", function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            let fd = new FormData()
            fd.append('_token', "<?php echo e(csrf_token()); ?>");
            fd.append('id', id);
            $.confirm({
                title: 'Confirm!',
                content: 'Sure you want to delete this category ?',
                buttons: {
                    yes: function () {
                        $.ajax({
                            url: "<?php echo e(route('admin.category.destroy')); ?>",
                            type: 'POST',
                            data: fd,
                            dataType: "JSON",
                            contentType: false,
                            processData: false,
                        })
                            .done(function (result) {
                                if (result.status) {
                                    iziToast.success({
                                        title: '',
                                        message: result.msg,
                                        position: 'topRight'
                                    });
                                    $('#category').DataTable().ajax.reload(null, false);

                                } else {
                                    iziToast.error({
                                        title: '',
                                        message: result.msg,
                                        position: 'topRight'
                                    });
                                }
                            })
                            .fail(function (jqXHR, exception) {
                                console.log(jqXHR.responseText);
                            })


                    },
                    no: function () {
                    },
                }
            })
        })
    </script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u700657081/domains/xcrinogroup.com/public_html/andhra/resources/views/admin/points/add.blade.php ENDPATH**/ ?>