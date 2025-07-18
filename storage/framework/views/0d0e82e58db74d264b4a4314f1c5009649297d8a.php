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
                        <div class="card-header d-flex justify-content-between">
                            <h4>Branch Food List</h4>
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped text-center" id="branch">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Dish Name</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal Add Branch -->


    <!-- Modal Edit Branch -->
    
        <?php $__env->startSection('extra_js'); ?>
            <script>

                // Category Store
                $("body").on("submit", ".store_branch", function (e) {
                    e.preventDefault()
                    let fd = new FormData(this)
                    fd.append('_token', "<?php echo e(csrf_token()); ?>");
                    $.ajax({
                        url: "<?php echo e(route('admin.branch.store')); ?>",
                        type: "POST",
                        data: fd,
                        dataType: 'json',
                        processData: false,
                        contentType: false,
                        beforeSend: function () {
                            $('.loader').show();
                        },
                        success: function (result) {
                            if (result.status) {
                                iziToast.success({
                                    title: '',
                                    message: result.msg,
                                    position: 'topRight'
                                });
                                $(".store_branch")[0].reset();
                                $("#exampleModal").modal("toggle");
                                $('#branch').DataTable().ajax.reload(null, false);

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
                var tables = $('#branch').DataTable({
                    "processing": true,
                    pageLength: 10,
                    "serverSide": true,
                    "ajax": {
                        url: "<?php echo e(route('admin.price.setPrice_ajax_list')); ?>",
                        data: function(d) {
                                d.id = "<?php echo e($id); ?>"; // Adding id field with <?php echo e($id); ?> value
                            },
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
                            "name": "name",
                            'searchable': true,
                            'orderable': true
                        },
                        {
                            "targets": 2,
                            "name": "phone",
                            'searchable': true,
                            'orderable': true
                        },

                        {
                            "targets": 3,
                            "name": "action",
                            'searchable': true,
                            'orderable': true
                        },
                    ],
                });


                // Edit Category
                $("body").on("click", ".editBranch", function (e) {
                    var name = $(this).data('name');
                    var id = $(this).data('id');
                    var phone = $(this).data('phone');
                    var address = $(this).data('address');
                    var delivery_fee = $(this).data('delivery_fee');

                    $("#edit_name").val(name);
                    $("#edit_phone").val(phone);
                    $("#edit_address").val(address);
                    $("#edit_delivery_fee").val(delivery_fee);
                    $('#edit_branch_id').val(id);
                    $('#editModal').modal('toggle')
                });




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
                        content: 'Sure you want to change status?',
                        buttons: {
                            yes: function () {
                                $.ajax({
                                    url: "<?php echo e(route('admin.food.price.status')); ?>",
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
                                            $('#branch').DataTable().ajax.reload(null, false);

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
                $("body").on("click", ".branch-delete", function (e) {
                    e.preventDefault();
                    var id = $(this).data('id');
                    let fd = new FormData()
                    fd.append('_token', "<?php echo e(csrf_token()); ?>");
                    fd.append('id', id);
                    $.confirm({
                        title: 'Confirm!',
                        content: 'Sure you want to delete this Product ?',
                        buttons: {
                            yes: function () {
                                $.ajax({
                                    url: "<?php echo e(route('admin.price.delete')); ?>",
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
                                            $('#branch').DataTable().ajax.reload(null, false);

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

<?php echo $__env->make('admin.layout.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u700657081/domains/xcrinogroup.com/public_html/andhra/resources/views/admin/set_price/view.blade.php ENDPATH**/ ?>