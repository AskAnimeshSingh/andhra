
<?php $__env->startSection('extra_css'); ?>
    <style>
    </style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="section">
        <?php if(session()->has('error')): ?>
    <div id="error-message" class="alert alert-danger">
        <?php echo e(session('error')); ?>

    </div>
    <script>
        setTimeout(function(){
            // Hide the error message div
            $('#error-message').fadeOut('fast', function() {
                $(this).remove();
            });
            // After 5 seconds, remove the 'error' session variable
            <?php
                session()->forget('error');
            ?>
        }, 5000); // 5000 milliseconds = 5 seconds
    </script>
<?php endif; ?>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Branch List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped text-center" id="branch">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Address</th>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModal">Add Branch</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="store_branch" method="POST">
                        <div class="form-group">
                            <label>Name<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Name" name="name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Phone Number<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Phone Number" name="phone"
                                       required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Address<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Address" name="address"
                                       required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Distence From<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <textarea step="any" min="0" class="form-control"
                                placeholder="Distence From" name="distence_from" required cols="30" rows="10"></textarea>
                                
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Dilevery Link<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" step="any" min="0" class="form-control"
                                       placeholder="Dilevery Link" name="dilevery_link" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Reservation Link<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" step="any" min="0" class="form-control"
                                       placeholder="Reservation Link" name="reservation_link" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Seating Availability<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="number" step="any" min="0" class="form-control"
                                       placeholder="Seating Availability" name="seating_availability" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Google Map Link<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="urk" step="any" min="0" class="form-control"
                                       placeholder="Gooogle map link" name="google_mao_link" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <h3>Timing for Weekdays</h3>
                        </div>
                        <div class="form-group">
                            <h4>Morning to Afternoon</h4>
                        </div>
                        <div class="form-group">
                            <label>Opening Time <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="time" step="any" min="0" class="form-control"
                                       placeholder="Distence From" name="weekday_morning" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Closeing Time<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="time" step="any" min="0" class="form-control"
                                       placeholder="Distence From" name="weekday_afternoonc" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <h4>Afternoon to Night</h4>
                        </div>
                        <div class="form-group">
                            <label>Opening Time <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="time" step="any" min="0" class="form-control"
                                       placeholder="Distence From" name="weekday_afternoono" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Closeing Time<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="time" step="any" min="0" class="form-control"
                                       placeholder="Distence From" name="weekday_close" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <h3>Timing for Weekends</h3>
                        </div>
                        <div class="form-group">
                            <h4>Morning for Afternoon</h4>
                        </div>
                        <div class="form-group">
                            <label>Opening Time <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="time" step="any" min="0" class="form-control"
                                       placeholder="Distence From" name="weekend_morning" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Closeing Time<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="time" step="any" min="0" class="form-control"
                                       placeholder="Distence From" name="weekend_noonc" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <h4>Afternoon to Night</h4>
                        </div>
                        <div class="form-group">
                            <label>Opening Time <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="time" step="any" min="0" class="form-control"
                                       placeholder="Distence From" name="weekend_noono" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Closeing Time<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="time" step="any" min="0" class="form-control"
                                       placeholder="Distence From" name="weekend_close" required>
                            </div>

                        <div class="form-group">
                            <label>Branch Icon</label>
                            <div class="input-group">
                                <input type="file" class="form-control" name="branch_icon" accept="image/*"
                                       onchange="readURL(this,'add');">
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label>Branch Banner</label>
                            <div class="input-group">
                                <input type="file" class="form-control" name="branch_banner" accept="image/*"
                                       onchange="readURL(this,'add');">
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label>Specialty 1</label>
                            <div class="input-group">
                                <input type="file" class="form-control" name="specialty_1" accept="image/*"
                                       onchange="readURL(this,'add');">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Specialty 1 Description</label>
                            <div class="input-group">
                                <textarea class="form-control" name="specialty_1_description"  cols="30" rows="10"></textarea>        
                                
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label>Specialty 2</label>
                            <div class="input-group">
                                <input type="file" class="form-control" name="specialty_2" accept="image/*"
                                       onchange="readURL(this,'add');">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Specialty 2 Description</label>
                            <div class="input-group">
                                <textarea class="form-control" name="specialty_2_description"  cols="30" rows="10"></textarea>        
                                
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label>Footer Banner</label>
                            <div class="input-group">
                                <input type="file" class="form-control" name="footer_banner" accept="image/*"
                                       onchange="readURL(this,'add');">
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label>Branch Map</label>
                            <div class="input-group">
                                <input type="file" class="form-control" name="branch_map" accept="image/*"
                                       onchange="readURL(this,'add');">
                            </div>
                        </div>
                       

                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
                        url: "<?php echo e(route('admin.qr.setqr_ajax_list')); ?>",
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
                            "name": "address",
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


                // Category Edit
                $("body").on("submit", ".edit_branch", function (e) {
                    e.preventDefault()
                    let fd = new FormData(this)
                    fd.append('_token', "<?php echo e(csrf_token()); ?>");
                    $.ajax({
                        url: "<?php echo e(route('admin.branch.update')); ?>",
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
                                $(".edit_branch")[0].reset();
                                $("#editModal").modal("toggle");
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
                        content: 'Sure you want to change branch status?',
                        buttons: {
                            yes: function () {
                                $.ajax({
                                    url: "<?php echo e(route('admin.branch.status')); ?>",
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
                        content: 'Sure you want to delete this branch ?',
                        buttons: {
                            yes: function () {
                                $.ajax({
                                    url: "<?php echo e(route('admin.branch.destroy')); ?>",
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

<?php echo $__env->make('admin.layout.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u700657081/domains/xcrinogroup.com/public_html/andhra/resources/views/admin/qr/index.blade.php ENDPATH**/ ?>