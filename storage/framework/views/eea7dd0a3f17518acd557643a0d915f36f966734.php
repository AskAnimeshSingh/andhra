
<?php $__env->startSection('extra_css'); ?>
<style>
</style>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="section">
    <div class="section-body">
        <form class="add_blog" method="POST">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Create Blogs</h4>
            </div>
            <div class="card-body">
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" name="name" class="form-control">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Headline</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" name="headline" class="form-control">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                <div class="col-sm-12 col-md-7">
                  <input type="file" name="image" class="form-control" required onchange="readURL(this);">
                </div>
              </div>
              <div class="input-group  row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Preview</label>
                <div class="col-sm-12 col-md-7">
                    <img class="img-thumbnail image-width mt-4 mb-3" id="previewImage" src="<?php echo e(asset('assets/admin/assets/img/default_cate.jpeg')); ?>" alt="your image" />
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                <div class="col-sm-12 col-md-7">
                  <textarea class="summernote" name="description"></textarea>
                </div>
              </div>
              
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                  <button name="submit" class="btn btn-primary">Publish</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        </form>
    </div>
  </section>
<?php $__env->startSection('extra_js'); ?>
<script>
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
  // Blogs Create
  $("body").on("submit", ".add_blog", function(e) {
    e.preventDefault()
    let fd = new FormData(this)
    fd.append('_token', "<?php echo e(csrf_token()); ?>");
    $.ajax({
      url: "<?php echo e(route('admin.blog.store')); ?>",
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
          setTimeout(() => {
            window.location.href = "<?php echo e(url('admin/blog')); ?>"
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

</script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u700657081/domains/xcrinogroup.com/public_html/andhra/resources/views/admin/blog/create.blade.php ENDPATH**/ ?>