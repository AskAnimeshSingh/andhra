
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
                            <h4>Order Detail List</h4>
                            
                        </div>
                        <div class="card-body">
                          <select class="form-group" name="select_branch" id="select_branch">
                            <option value="all">All</option>
                            <?php $__currentLoopData = $branch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                            <div class="table-responsive">
                              <table class="table table-striped" id="detail">
                                    <thead>
                                        <tr>
                                             <th>Date</th>
                                             <th>User Name</th>
                                             <th>Branch</th>
                                             <th>User Phone</th>
                                             <th>User Address</th>
                                             <th>Txn id</th>
                                             <th>Invoice id</th>
                                             <th>Transaction Type</th>
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

     <!-- Modal with form -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="formModal">Delivery Boys List</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="store_deliveryboy" method="POST">
            <div class="form-group">
                <label>Select Delivery Boy</label>
                <select id="" class="form-control"
                    name="delivery_user_id" required>
                    <?php $__currentLoopData = $delivery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($d->id); ?>"><?php echo e($d->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </select>
            </div>

            <input type="hidden" id="edit_id" name="order_id">

            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  

   <?php $__env->startSection('extra_js'); ?>
   <script>
    var tables = $('#detail').DataTable({
    "processing": true,
    pageLength: 10,
    "serverSide": true,
    "ajax": {
      url: "<?php echo e(route('admin.order.detail_ajax_list')); ?>",
      data: function (d) {
                d.branch_id = $('#select_branch').val(); // Add selected branch ID to the request data
            },
      dataFilter: function(data) {
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
               "name": "created_at",
               'searchable': false,
               'orderable': false
            },
            {
               "targets": 1,
               "name": "name",
               'searchable': true,
               'orderable': true
            },
            {
               "targets": 2,
               "name": "name",
               'searchable': true,
               'orderable': true
            },
            {
               "targets": 3,
               "name": "name",
               'searchable': true,
               'orderable': true
            },
            {
               "targets": 4,
               "name": "name",
               'searchable': true,
               'orderable': true
            },
            {
               "targets": 5,
               "name": "name",
               'searchable': true,
               'orderable': true
            },

            {
               "targets": 6,
               "name": "name",
               'searchable': true,
               'orderable': true
            },
            {
               "targets": 7,
               "name": "name",
               'searchable': true,
               'orderable': true
            },
            {
               "targets": 8,
               "name": "name",
               'searchable': true,
               'orderable': true
            },
            {
               "targets": 9,
               "name": "name",
               'searchable': true,
               'orderable': true
            },
            {
               "targets": 10,
               "name": "action",
               'searchable': true,
               'orderable': true
            },
    ],
  });
// When branch selection changes, reload the DataTables
$('#select_branch').change(function () {
        tables.ajax.reload();
    });

        $("body").on("click", ".editUser", function(e) {
            var id = $(this).data('id');
            $("#edit_id").val(id);
            $('#editModal').modal('toggle')
        });

        $("body").on("submit", ".store_deliveryboy", function(e) {
            e.preventDefault()
            let fd = new FormData(this)
            fd.append('_token', "<?php echo e(csrf_token()); ?>");
            $.ajax({
            url: "<?php echo e(route('admin.order.store_delivery_boy')); ?>",
            type: "POST",
            data: fd,
            dataType: 'json',
            processData: false,
            contentType: false,
            beforeSend: function() {
                // $('#login-button').prop('disabled', true);
                // $('.loader').show();
            },
            success: function(result) {
                if (result.status) {
                iziToast.success({
                    title: '',
                    message: result.msg,
                    position: 'topRight'
                });
                $(".store_deliveryboy")[0].reset();
                $("#editModal").modal("toggle");
                $('#detail').DataTable().ajax.reload(null, false);

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
        $("body").on("change", "#status_update", function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            var status = $(this).find(':selected').attr('data-value');
            let fd = new FormData()
            fd.append('_token', "<?php echo e(csrf_token()); ?>");
            fd.append('status', status);
            fd.append('id', id);
            // alert(status);
            $.confirm({
            title: 'Confirm!',
            content: 'Sure you want to change delivery user status?',
            buttons: {
                yes: function() {
                $.ajax({
                    url: "<?php echo e(route('admin.order.update_delivery_status')); ?>",
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
                        $('#detail').DataTable().ajax.reload(null, false);

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

<?php echo $__env->make('admin.layout.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u700657081/domains/xcrinogroup.com/public_html/andhra/resources/views/admin/order/list.blade.php ENDPATH**/ ?>