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
            <h4>Product List</h4>
            <a href="<?php echo e(route('admin.product.index')); ?>" class="btn btn-primary text-decoration-none"><i class="fa fa-plus"></i></a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped nowrap text-center" id="product_list">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Sub Category</th>
                    <th>Tax</th>
                    <th>Status</th>
                    <th>Set Default toppings</th>
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

</section>
<?php $__env->startSection('extra_js'); ?>
<script>

  // $.fn.tableload = function (e) {
  var tables = $('#product_list').DataTable({
    "processing": true,
    pageLength: 10,
    "serverSide": true,
    "ajax": {
      url: "<?php echo e(route('admin.product_ajax_list')); ?>",
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
        "name": "product_name",
        'searchable': true,
        'orderable': true
      },
      {
        "targets": 2,
        "name": "cate_name",
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
        "name": "tax",
        'searchable': true,
        'orderable': true
      },
      {
        "targets": 5,
        "name": "status",
        'searchable': true,
        'orderable': true
      },
      {
        "targets": 6,
        "name": "product_des",
        'searchable': true,
        'orderable': true
      },
      {
        "targets": 7,
        "name": "action",
        'searchable': false,
        'orderable': false
      },
    ],
  });

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
      content: 'Sure you want to change product status?',
      buttons: {
        yes: function() {
          $.ajax({
              url: "<?php echo e(route('admin.product.status')); ?>",
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
                $('#product_list').DataTable().ajax.reload(null, false);

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
  $("body").on("click", ".product-delete", function(e) {
    e.preventDefault();
    var id = $(this).data('id');
    let fd = new FormData()
    fd.append('_token', "<?php echo e(csrf_token()); ?>");
    fd.append('id', id);
    $.confirm({
      title: 'Confirm!',
      content: 'Sure you want to delete this product ?',
      buttons: {
        yes: function() {
          $.ajax({
              url: "<?php echo e(route('admin.product.destroy')); ?>",
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
                $('#product_list').DataTable().ajax.reload(null, false);

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

<?php echo $__env->make('admin.layout.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u700657081/domains/xcrinogroup.com/public_html/andhra/resources/views/admin/product/product_list.blade.php ENDPATH**/ ?>