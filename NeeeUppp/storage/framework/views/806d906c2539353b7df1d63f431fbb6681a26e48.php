<?php $__env->startSection('extra_css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="py-100">
   <div class="container">
      <div class="row">
         <div class="col-md-6">

            <div class="contact-form-new">
               <h3>Welcome</h3>

               <p>Add your phone number to login</p>
               <form class="form_login" method="POST">
                  <div class="mt-4 mb-4">
                     <input type="number" class="form-control" name="phone" placeholder="Phone number*" style="border:3px solid #e7eff3 !important;line-height: 2.5 !important" ; required >
                  </div>
                  <div class="mb-0 btnsubmit">
                     <button type="submit" name="submit" class="btn btn-primary w-100">Continue</button>
                  </div>
               </form>
            </div>
         </div>
         <div class="col-md-6">
            <img src="<?php echo e(asset('assets/website/custom/6.png')); ?>" alt="" class="img-fluid">
         </div>
      </div>
   </div>
</section>
<?php $__env->startSection('extra_js'); ?>
<script>
   $(function () {
        $('.form_login').on('submit', function(e){
            e.preventDefault()
            let fd = new FormData(this)
            fd.append('_token',"<?php echo e(csrf_token()); ?>");

            $.ajax({
                url: "<?php echo e(route('website.submit_number')); ?>",
                type:"POST",
                data: fd,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: function () {
                  $('.loader').show();
                },
                success:function(result){
                    if(result.status)
                    {
                        iziToast.success({
                              title: '',
                              message: result.msg,
                              position: 'topRight'
                            });
                        setTimeout(function(){
                            window.location.href = result.location;
                        }, 500);
                    }
                    else
                    {
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
                error: function(jqXHR, exception) {
                  $('.loader').hide();
                }
            });
        })
    });

</script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/restaurant_pos/resources/views/website/login.blade.php ENDPATH**/ ?>