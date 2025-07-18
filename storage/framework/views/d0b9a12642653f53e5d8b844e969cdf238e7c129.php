
<?php $__env->startSection('extra_css'); ?>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
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
            <h4>Delivery Charges </h4>
          </div>
          <div class="card-body">
              <form class="store_delivery_charges" method="POST">
                  <div class="row">
                      <div class="col-6">
                          <div class="form-group">
                              <label>Charges:</label>
                              <div class="input-group">
                                  <input type="number" class="form-control" placeholder="enter charges" value="<?php echo e($deliveryCharges->charges); ?>" name="charges">
                              </div>
                          </div>
                      </div>

                      <div class="col-6">
                          <div class="form-group">
                              <label>Status: <?php if($deliveryCharges->status === 1 ): ?> Active <?php else: ?> Inactive <?php endif; ?></label>
                              <div class="input-group">
                                  <input type="checkbox" name="status" <?php if($deliveryCharges->status === 1 ): ?> checked <?php endif; ?> data-toggle="toggle">
                              </div>
                              <input type="hidden" name="id" value="<?php echo e($deliveryCharges->id); ?>">
                          </div>
                      </div>
                  </div>

                  <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<?php $__env->startSection('extra_js'); ?>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script>


  // Category Edit
  $("body").on("submit", ".store_delivery_charges", function(e) {
    e.preventDefault()
    let fd = new FormData(this)
    fd.append('_token', "<?php echo e(csrf_token()); ?>");
    $.ajax({
      url: "<?php echo e(route('admin.view.delivery_charges.update')); ?>",
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
          location.reload()

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


</script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u700657081/domains/xcrinogroup.com/public_html/andhra/resources/views/admin/delivery/delivery_charges.blade.php ENDPATH**/ ?>