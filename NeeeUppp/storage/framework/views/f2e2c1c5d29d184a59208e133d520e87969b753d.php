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
                        <a href="<?php echo e(route('admin.product.list')); ?>" class="btn btn-primary" title="Back"><i class="fa fa-arrow-left "></i></a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <h4>Edit Product</h4>
                    </div>
                    <div class="card-body">
                        <form class="update_product" method="POST">
                            <div class="card-header">
                                <h4>Edit Product</h4>
                            </div>
                            <div class="card-body">
                                  <div class="row">
                                    <div class="col-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Product Name</label>
                                            <input type="text" class="form-control" required="" placeholder="Product Name" name="product_name" value="<?php echo e($products->product_name); ?>">
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control" name="category" required id="category">
                                                <option value="">Select Product Category</option>
                                                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                                    <option value="<?php echo e($item->id); ?>" <?php echo e($item->id == $products->category ? 'selected' : ''); ?>><?php echo e($item->cate_name); ?> </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-6 col-sm-12">
                                      <div class="form-group">
                                          <label>Sub Category</label>
                                          <select class="form-control" name="sub_category" id="sub_category">
                                             <option value="<?php echo e($products->sub_category); ?>"><?php echo e($products->subname); ?></option>
                                          </select>
                                      </div>
                                    </div>
                                    <div class="col-4 col-md-6 col-sm-12">
                                      <div class="form-group">
                                          <label>Child Category</label>
                                          <select class="form-control" name="child_category" id="child_category">
                                            <option value="<?php echo e($products->child_category); ?>"><?php echo e($products->childname); ?></option>
                                          </select>
                                      </div>
                                    </div>
                                    <div class="col-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="number" min="0" step="any" class="form-control" required="" placeholder="Product Price" name="price" value="<?php echo e($products->price); ?>">
                                        </div>
                                    </div>


                                    <div class="col-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Tax(%)</label>
                                            <input type="number" min="0" step="any" class="form-control"  placeholder="Product Tax " name="tax" value="<?php echo e($products->tax); ?>">
                                        </div>
                                    </div>

                                    <div class="col-4 col-md-6 col-sm-12">
                                      <div class="form-group">
                                        <label>Size</label>
                                        <select type="text" class="form-control" name="size">
                                          <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($size->size); ?>" <?php echo e($products->size == $size->size ? 'selected' : ''); ?>><?php echo e($size->size); ?></option>
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                      </div>
                                    </div>

                                    <div class="col-4 col-md-6 col-sm-12">
                                      <div class="form-group">
                                        <label>Type</label>
                                        <select type="text" class="form-control" name="type" required>
                                          <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($type->type); ?>" <?php echo e($products->type == $type->type ? 'selected' : ''); ?>><?php echo e($type->type); ?></option>
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                      </div>
                                    </div>
                                    
                                    <div class="col-4 col-md-6 col-sm-12">
                                      <div class="form-group">
                                          <label>Description</label>
                                          <textarea type="text" class="form-control"  placeholder="Description " name="description"><?php echo e($products->product_des); ?></textarea>
                                      </div>
                                    </div>

                                    <div class="col-4 col-md-6 col-sm-12">
                                      <div class="form-group">
                                          <label>Extra</label>
                                          <br>
                                          <?php $__currentLoopData = $extras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $extra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <input type="checkbox" name="extra[]" value="<?php echo e($extra->name); ?>" checked>&nbsp;<b><?php echo e($extra->name); ?></b> &nbsp; &nbsp;
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      </div>
                                    </div>  

                                    <div class="col-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Product Image</label>
                                            <input type="file" class="form-control" name="product_image"  onchange="readURL(this);"></textarea>
                                        </div>
                                    </div>

                                   
                                    
                                </div>
                                <div class="row justify-content-left">
                                    <div class="col-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <img class="img-thumbnail image-width mt-4 mb-3" id="previewImage" src="<?php echo e($products->product_img != "" ? url($products->product_img) :  asset('assets/admin/assets/img/default_cate.jpeg')); ?>" alt="your image" />
                                        </div>
                                    </div>
                                </div>

                                <!-- Add Product Variant-->
                                <div class="col-12 col-md-12 col-sm-12">
                                  <div class="form-group">
                                    Add Topping &nbsp;&nbsp;<input type="checkbox" class="switch_1 check product_promotion" name="product_promotion" value="1" <?php echo e($products->addon == 1 ? 'checked' : ''); ?>>
                                  </div>
                                </div>

                                
                                  
                                  <?php if($addon->count() > 0): ?>
                                  <?php ($i = 0); ?>
                                    <?php $__currentLoopData = $addon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <?php ($i++); ?>
                                      <?php if($i == 1): ?>
                                      <div class="col-4 col-md-6 col-sm-12 my-2" id="promotion_input">
                                        <label>Topping</label>
                                      <div class="input-group ">
                                        <input type="text" class="form-control" name="addon[]" placeholder="Add Variant" value="<?php echo e($item->variant); ?>">
                                        <a href="javascript:void(0)" class="input-group-text text-decoration-none add_button_more btn btn-primary">Add More</a>
                                      </div>
                                      </div>
                                      <?php else: ?>
                                      <div class="col-4 col-md-6 col-sm-12 my-2" id="promotion_input">
                                      <div class="input-group my-2">
                                        <input type="text" class="form-control" name="addon[]" placeholder="Add Variant" value="<?php echo e($item->variant); ?>">
                                        <a href="javascript:void(0)" class="input-group-text text-decoration-none remove-addon btn btn-danger">Remove</a>
                                      </div>
                                      </div>
                                      <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  <?php else: ?>
                                  <div class="col-4 col-md-6 col-sm-12 my-2" id="promotion_input">
                                    <label>Addon</label>
                                  <div class="input-group ">
                                    <input type="text" class="form-control" name="addon[]" placeholder="Add Variant">
                                    <a href="javascript:void(0)" class="input-group-text text-decoration-none add_button_more btn btn-primary">Add More</a>
                                  </div>
                                </div>
                                  <?php endif; ?>
                                
                                <span class="add_more"></span>

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
<script>

if ($('.product_promotion:checkbox:checked').length > 0) {
  $('#promotion_input').show()
}else
{
  $('#promotion_input').hide()
}

  
  $('.product_promotion').on('click', function() {
    if ($('.product_promotion:checkbox:checked').length > 0) {
      $('#promotion_input').show();
    } else {
      $('#promotion_input').hide();
    }
  });

    // Image preview
      function readURL(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function(e) {
            $('#previewImage').attr('src', e.target.result);
          };
          reader.readAsDataURL(input.files[0]);
        }
      }


    // Product Store
      $("body").on("submit", ".update_product", function(e) {
        e.preventDefault()
        let fd = new FormData(this)
        fd.append('_token', "<?php echo e(csrf_token()); ?>");
        $.ajax({
          url: "<?php echo e(route('admin.product.update')); ?>",
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

      // get Sub Category help of Category Id
      $('#category').on('change', function(e) {
        let fd = new FormData();
        var cateid = $(this).val();

        fd.append('cateid', cateid);
        fd.append('_token', "<?php echo e(csrf_token()); ?>");
        $.ajax({
          url: "<?php echo e(route('common.get_sub_category')); ?>",
          type: "POST",
          data: fd,
          dataType: 'json',
          processData: false,
          contentType: false,
          beforeSend: function() {
            $('.loader').show();
          },
          success: function(result) {
            var datas = '';
          
            if (result.data.length > 0) {
              let j = 1;
              datas += '<option value="">Please Select</option>';
              $.each(result.data, function(i, val) {
                datas += '<option value="' + val.id + '">' + val.name+ '</option>';
                j++;
              });
            } else {
              datas += '<option value="">Sub Category Found</option>';
            }
            $('#sub_category').html(datas);
            $('#child_category').html('');
          },
          complete: function() {
            // $("#sub_category").hide()
            $('.loader').hide();
          },
          error: function(jqXHR, exception) {
            console.log(jqXHR.responseText);
            $('.loader').hide();
          }
        });
      });

      // Get child Category help of sub category id
      $('#sub_category').on('change', function(e) {
        let fd = new FormData();
        var cateid = $(this).val();

        fd.append('cateid', cateid);
        fd.append('_token', "<?php echo e(csrf_token()); ?>");
        $.ajax({
          url: "<?php echo e(route('common.get_child_category')); ?>",
          type: "POST",
          data: fd,
          dataType: 'json',
          processData: false,
          contentType: false,
          beforeSend: function() {
            $('.loader').show();
          },
          success: function(result) {
            var datas = '';
            if (result.data.length > 0) {
              let j = 1;
              datas += '<option value="">Please Select</option>';
              $.each(result.data, function(i, val) {
                datas += '<option value="' + val.id + '">' + val.name+ '</option>';
                j++;
              });
            } else {
              datas += '<option value="">Sub Category Found</option>';
            }
            $('#child_category').html(datas);

          },
          complete: function() {
            // $("#sub_category").hide()
            $('.loader').hide();
          },
          error: function(jqXHR, exception) {
            console.log(jqXHR.responseText);
            $('.loader').hide();
          }
        });
      });


      $(document).ready(function() {
    var maxField1 = 10;
    var addButton1 = $('.add_button_more');
    var wrapper1 = $('.add_more');
    var x = 1;

  

    $(addButton1).click(function() {
     
        var fieldHTML1 ='<div class="col-4 col-md-6 col-sm-12 my-2">'+
                        // '<label>Addon</label>'+
                        '<div class="input-group">'+
                        '<input type="text" class="form-control" name="addon[]" placeholder="Topping">'+
                        '<a href="javascript:void(0)" class="input-group-text text-decoration-none remove-addon btn btn-danger">Remove</a>'+
                        '</div>'+
                        '</div>';
        $(wrapper1).append(fieldHTML1);
    });



    $("body").on('click', '.remove-addon', function(e) {
      e.preventDefault();
      $(this).parent('div').remove();
      x--;
    });
  });
</script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/restaurant-pos-backend/resources/views/admin/product/edit.blade.php ENDPATH**/ ?>