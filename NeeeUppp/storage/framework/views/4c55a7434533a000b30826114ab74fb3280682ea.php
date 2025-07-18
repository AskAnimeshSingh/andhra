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
            <h4>Product Create</h4>
          </div>
          <div class="card-body">
            <form class="add_product" method="POST">
              <div class="card-header">
                <h4>Add Product</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Product Name</label>
                      <input type="text" class="form-control" required="" placeholder="Product Name" name="product_name">
                    </div>
                  </div>
                  <div class="col-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Category</label>
                      <select class="form-control" name="category" required id="category">
                        <option value="">Select Product Category</option>
                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->cate_name); ?> </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                  </div>

                  <div class="col-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Sub Category</label>
                      <select class="form-control" name="sub_category" id="sub_category">
                      </select>
                    </div>
                  </div>

                  <div class="col-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Child Category</label>
                      <select class="form-control" name="child_category" id="child_category">

                      </select>
                    </div>
                  </div>

                  <div class="col-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Price</label>
                      <input type="number" min="0" step="any" class="form-control" required="" placeholder="Price" name="price">
                    </div>
                  </div>
                  
                  <div class="col-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Tax(%)</label>
                      <input type="number" min="0" step="any" class="form-control" placeholder="Product Tax " name="tax">
                    </div>
                  </div>

                  <div class="col-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Size</label>
                      <select type="text" class="form-control" name="size">
                        <option value="">Select Size</option>
                        <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($size->size); ?>"><?php echo e($size->size); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                  </div>

                  <div class="col-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Type</label>
                      <select type="text" class="form-control" name="type" required>
                        <option value="">Select Type</option>
                        <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($type->type); ?>"><?php echo e($type->type); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                  </div>

                  <div class="col-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Description</label>
                      <textarea type="text" class="form-control" placeholder="Description " name="description" id="desc"></textarea>
                    </div>
                  </div>
                  <div class="col-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Extra</label>
                      <br>
                      <?php $__currentLoopData = $extras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $extra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <input type="checkbox" name="extra[]" value="<?php echo e($extra->name); ?>" checked>&nbsp;<b><?php echo e($extra->name); ?></b> &nbsp; &nbsp;
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                  </div>

                  <div class="col-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Product Image</label>
                      <input type="file" class="form-control" name="product_image" required onchange="readURL(this);"></textarea>
                    </div>
                  </div>

                </div>

                

                <div class="row justify-content-left">
                  <div class="col-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <img class="img-thumbnail image-width mt-4 mb-3" id="previewImage" src="<?php echo e(asset('assets/admin/assets/img/default_cate.jpeg')); ?>" alt="your image" />
                    </div>
                  </div>
                </div>
              </div>

              <!-- Add Product Variant-->
              <div class="col-12 col-md-12 col-sm-12">
                <div class="form-group">
                  Add Topping &nbsp;&nbsp;<input type="checkbox" class="switch_1 check product_promotion" name="product_promotion" value="1">
                </div>
              </div>

              <div class="col-4 col-md-6 col-sm-12" id="promotion_input">
                <label>Topping</label>
                <div class="input-group ">
                  <input type="text" class="form-control item" name="addon[]"  placeholder="Topping">
                  <a href="javascript:void(0)" class="input-group-text text-decoration-none add_button_more btn btn-primary">Add More</a>
                </div>
              </div>
              <span class="add_more"></span>

              <!--End-->
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
  
  //Add on
  // $('#spin-product-add').hide();
  // $('#spin-product-code-add').hide();
  $('#promotion_input').hide()
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
  $("body").on("submit", ".add_product", function(e) {
    e.preventDefault()
    let fd = new FormData(this)

    // //store array in local storage
    // localStorage.setItem("promotion_input", JSON.stringify(promotion_input));

    // //get store arrayfrom local storage
    // console.log(localStorage.getItem("promotion_input"));

    fd.append('_token', "<?php echo e(csrf_token()); ?>");
    $.ajax({
      url: "<?php echo e(route('admin.product.store')); ?>",
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
          $(".add_product")[0].reset();
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
            datas += '<option value="' + val.id + '">' + val.name + '</option>';
            j++;
          });
        } else {
          datas += '<option value="">Sub Category Found</option>';
        }
        $('#sub_category').html(datas);

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
            datas += '<option value="' + val.id + '">' + val.name + '</option>';
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
    sessionStorage.clear()
    var maxField1 = 10;
    var addButton1 = $('.add_button_more');
    var wrapper1 = $('.add_more');

    var x = 1;

    $(addButton1).click(function() {
        var newinput = $('.item:first').val()

        var fieldHTML1 ='<div class="col-4 col-md-6 col-sm-12 my-2">'+
                        // '<label>Addon</label>'+
                        '<div class="input-group">'+
                        '<input type="text" class="form-control item" name="addon[]" placeholder="Add Topping">'+
                        '<a href="javascript:void(0)" class="input-group-text text-decoration-none remove-addon btn btn-danger">Remove</a>'+
                        '</div>'+
                        '</div>';
        $(wrapper1).append(fieldHTML1);
        // $('.item:first').val('')
        // var Items = sessionStorage.getItem("itemName")
        // if(Items!='' && Items != null){
        //     newinput = Items +','+ newinput
        // }
        // if(newinput!=null && newinput!='')
        //     sessionStorage.setItem("itemName",newinput)
        // console.log(sessionStorage);
        // var description = sessionStorage.getItem("itemName")
        // $('textarea#desc').val(description)
    });

    $("body").on("keyup" , ".item" , function() {
        sessionStorage.setItem("itemName",newinput)
      $('textarea#desc').val(sessionStorage.getItem("itemName"))
    })



    $(wrapper1).on('click', '.remove-addon', function(e) {
      e.preventDefault();
      $(this).parent('div').remove();
      x--;
    });
  });
</script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/restaurant_pos/resources/views/admin/product/create.blade.php ENDPATH**/ ?>