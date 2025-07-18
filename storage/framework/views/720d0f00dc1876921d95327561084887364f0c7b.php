<?php use App\Http\Controllers\Admin\Product; ?>

<?php $__env->startSection('extra_css'); ?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    .select2-container--default .select2-selection--multiple .select2-selection__choice, .select2-container--default .select2-results__option[aria-selected="true"], .select2-container--default .select2-results__option--highlighted[aria-selected] {
        color: #403838;
        font-weight: bold;
    }

    .select2-selection__choice__remove {
        color: #403838 !important;
        font-weight: bold !important;
    }

    .select2-search__field {
        vertical-align: middle !important;
    }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header float-right">
                        <a href="<?php echo e(route('admin.product.list')); ?>" class="btn btn-primary" title="Back"><i class="fa fa-arrow-left "></i></a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <h4>Add Product Defaults</h4>
                    </div>
                    <div class="card-body">
                        <form class="add_product_default" method="POST">
                            <div class="card-header">
                                <h4>Add Product Defaults</h4>
                            </div>
                            <div class="card-body">
                                  <div class="row">


                                      <div class="col-md-12">
                                          <div class="row">
                                              <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                  <?php if(in_array($pr->id, $ppr)): ?>
                                                      <div class="col-md-3">
                                                          <label for=""><?php echo e($pr->name); ?></label>
                                                          <select class="form-control" name="pi_items[]">
                                                              <?php $__currentLoopData = Product::getPropertyItemsByPropertyId($pr->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                  <option value="<?php echo e($pi->id); ?>" <?php if(in_array($pi->id, json_decode($products->default_toppings))): ?> selected <?php endif; ?>><?php echo e($pi->name); ?></option>
                                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                          </select>
                                                      </div>
                                                  <?php endif; ?>
                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label>Select Variations</label>
                                                      <select type="text" class="form-control" name="variations" required>
                                                          <option value="" disabled>Select Type</option>
                                                          <?php $__currentLoopData = $variations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                              <?php if(in_array($pr->id, $vvr)): ?>
                                                              <option value="<?php echo e($pr->id); ?>" <?php if($products->default_varients === $pr->id): ?> selected <?php endif; ?>><?php echo e($pr->name); ?></option>
                                                              <?php endif; ?>
                                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                      </select>
                                                  </div>
                                              </div>
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label>Select Crust</label>
                                                      <select type="text" class="form-control" name="crust" id="crust" required>
                                                          <option value="" disabled>Select Type</option>
                                                          <?php $__currentLoopData = $productCrursts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                  <option value="<?php echo e($cr->id); ?>" <?php if($products->default_crust === $cr->id): ?> selected <?php endif; ?>><?php echo e($cr->name); ?></option>
                                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                      </select>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>

                                <input type="hidden" value="<?php echo e($products->id); ?>" name="product_id">
                                <input type="hidden" value="<?php echo e($products->product_img); ?>" name="oldimage">
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

</section>
<?php $__env->startSection('extra_js'); ?>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>

    $(function (){
        // $('#properties').select2({
        //         multiple: true,
        //         disabled:'readonly'
        //     })
        // $('#variations').select2({
        //         multiple: false,
        // })
        $("body").on("submit", ".add_product_default", function(e) {
            e.preventDefault()
            let fd = new FormData(this)
            fd.append('_token', "<?php echo e(csrf_token()); ?>");
            $.ajax({
                url: "<?php echo e(route('admin.product.update.default')); ?>",
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

                        setTimeout(() => {
                            window.location.href = "<?php echo e(url('admin/product/list')); ?>"
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

<?php echo $__env->make('admin.layout.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u700657081/domains/xcrinogroup.com/public_html/andhra/resources/views/admin/product/add_default_toppings.blade.php ENDPATH**/ ?>