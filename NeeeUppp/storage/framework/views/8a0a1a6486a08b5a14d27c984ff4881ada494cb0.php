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
            <h4>Delivery List </h4>
            <button class="btn btn-primary float-left" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i></button>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="staff">
                <thead>
                  <tr>
                    <th class="text-center">#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Phn No</th>
                    <th>Branch</th>
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
  </div>

  <!-- Modal with form -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="formModal">Add New Admin/Staff</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="store_user" method="POST">
            <div class="form-group">
                <label>Name:</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Name" name="name">
                </div>
            </div>

            <div class="form-group">
                <label>Branch:</label>
                <div class="input-group">
                  <select type="text" class="form-control"  name="branch">
                      <option value="">Select Branch</option>
                      <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>

            <div class="form-group">
                <label>Email:</label>
                <div class="input-group">
                  <input type="email" class="form-control" placeholder="E-mail" name="email">
                </div>
            </div>
            <div class="form-group">
                <label>Phone No:</label>
                <div class="input-group">
                  <input type="number" step="any"  class="form-control" placeholder="phone Number" name="phone">
                </div>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <div class="input-group">
                  <input type="password" class="form-control" placeholder="*******" name="password">
                </div>
            </div>
            <div class="form-group">
                <label>Confirm Password:</label>
                <div class="input-group">
                  <input type="password" class="form-control" placeholder="*******" name="password_confirmation">
                </div>
            </div>

            <div class="form-group">
                <label>Image:</label>
                <div class="input-group">
                  <input type="file" class="form-control" name="image">
                </div>
            </div>

            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Edit form -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" a  ria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="formModal">Edit Payment Type</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="edit_user" method="POST">
            <div class="form-group">
                <label>Name:</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Name" name="name" id="edit_name">
                </div>
            </div>

              <div class="form-group">
                  <label>Branch:</label>
                  <div class="input-group">
                    <select type="text" class="form-control"  name="branch" id="edit_branch">
                        <option value="">Select Branch</option>
                        <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                  </div>
                </div>
  
              
              <div class="form-group">
                  <label>Email:</label>
                  <div class="input-group">
                    <input type="email" class="form-control" placeholder="E-mail" name="email" id="edit_email">
                  </div>
              </div>
              <div class="form-group">
                  <label>Phone No:</label>
                  <div class="input-group">
                    <input type="number" step="any"  class="form-control" placeholder="phone Number" name="phone" id="edit_phone">
                  </div>
              </div>
              <div class="form-group">
                  <label>Password:</label>
                  <div class="input-group">
                    <input type="password" class="form-control" placeholder="*******" name="password">
                  </div>
              </div>
              <div class="form-group">
                  <label>Confirm Password:</label>
                  <div class="input-group">
                    <input type="password" class="form-control" placeholder="*******" name="password_confirmation">
                  </div>
              </div>
  
              <div class="form-group">
                  <label>Image:</label>
                  <div class="input-group">
                    <input type="file" class="form-control" name="image">
                  </div>
              </div>
            <input type="hidden" id="edit_user_id" name="edit_user_id">
            <input type="hidden" id="img" name="img">
            <button type="submit" name="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
          </form>
        </div>
      </div>
    </div>
</section>
<?php $__env->startSection('extra_js'); ?>
<script>
  
  // Category Store
  $("body").on("submit", ".store_user", function(e) {
    e.preventDefault()
    let fd = new FormData(this)
    fd.append('_token', "<?php echo e(csrf_token()); ?>");
    $.ajax({
      url: "<?php echo e(route('admin.delivery.store')); ?>",
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
          $(".store_user")[0].reset();
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

  // Datatable
  // $.fn.tableload = function (e) {
  var tables = $('#staff').DataTable({
    "processing": true,
    pageLength: 10,
    "serverSide": true,
    "ajax": {
      url: "<?php echo e(route('admin.delivery.delivery_ajax_list')); ?>",
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
        "name": "id",
        'searchable': true,
        'orderable': true
      },
      {
        "targets": 1,
        "name": "image",
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
        "name": "phone",
        'searchable': true,
        'orderable': true
      },
      {
        "targets": 3,
        "name": "branch_id",
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
        "targets": 3,
        "name": "action'",
        'searchable': false,
        'orderable': false
      },
    ],
  });


  // Edit Category
  $("body").on("click", ".editUser", function(e) {
    var name        = $(this).data('name');
    var phone       = $(this).data('phone');
    var branch      = $(this).data('branch');
    var type        = $(this).data('type');
    var email       = $(this).data('email');
    var id          = $(this).data('id');
    var img         = $(this).data('img');
        
    $("#edit_name").val(name);
    $("#edit_phone").val(phone);
    $("#edit_branch").val(branch);
    $("#edit_type").val(type);
    $("#edit_email").val(email);
    $("#edit_user_id").val(id);
    $('#editModal').modal('toggle')
  });


  // Category Edit
  $("body").on("submit", ".edit_user", function(e) {
    e.preventDefault()
    let fd = new FormData(this)
    fd.append('_token', "<?php echo e(csrf_token()); ?>");
    $.ajax({
      url: "<?php echo e(route('admin.delivery.update')); ?>",
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
          $(".edit_user")[0].reset();
          $("#editModal").modal("toggle");
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

  // Update status for category
  $("body").on("click", ".statusVerifiedClick", function(e) {
    e.preventDefault();
    var id = $(this).data('id');
    var status = $(this).data('status');
    let fd = new FormData()
    fd.append('_token', "<?php echo e(csrf_token()); ?>");
    fd.append('status', status);
    fd.append('id', id);
    $.confirm({
      title: 'Confirm!',
      content: 'Sure you want to change delivery user status?',
      buttons: {
        yes: function() {
          $.ajax({
              url: "<?php echo e(route('admin.delivery.status')); ?>",
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
                $('#staff').DataTable().ajax.reload(null, false);

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


  // Category delete
  $("body").on("click", ".user-delete", function(e) {
    e.preventDefault();
    var id = $(this).data('id');
    let fd = new FormData()
    fd.append('_token', "<?php echo e(csrf_token()); ?>");
    fd.append('id', id);
    $.confirm({
      title: 'Confirm!',
      content: 'Sure you want to delete this delivery user ?',
      buttons: {
        yes: function() {
          $.ajax({
              url: "<?php echo e(route('admin.delivery.destroy')); ?>",
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
                $('#staff').DataTable().ajax.reload(null, false);

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
<?php echo $__env->make('admin.layout.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/restaurant-pos-backend/resources/views/admin/delivery/index.blade.php ENDPATH**/ ?>