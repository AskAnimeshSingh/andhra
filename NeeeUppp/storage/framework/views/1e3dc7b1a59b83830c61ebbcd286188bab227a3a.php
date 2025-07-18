<?php $__env->startSection('extra_css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="home-banner border-zigzag-up">
   <div id="banner-slide" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
         <div class="item carousel-item active">
            <img src="<?php echo e(asset('assets/website/images/slide2.webp')); ?>" alt="Los Angeles" class="img-fluid w-100">
            <div class="carousel-caption my-auto">
               <h5 class="font-cursive mb-0 text-start primary">Taste</h5>
               <h2 class="text-white">Loved by people</h2>
               <div class="address mb-5">
                  <p class="text-uppercase">Food Love</p>
               </div>
               <div class="banner-btn">
                  <a href="#menu" class="btn btn-outline">View Our Menu</a>
               </div>
            </div>
         </div>
         <div class="item carousel-item ">
            <img src="<?php echo e(asset('assets/website/images/slide3.webp')); ?>" alt="Los Angeles" class="img-fluid w-100">
            <div class="carousel-caption my-auto">
               <h5 class="font-cursive mb-0 text-start primary">Taste</h5>
               <h2 class="text-white">Loved by people</h2>
               <div class="address mb-5">
                  <p class="text-uppercase">Food Love</p>
               </div>
               <div class="banner-btn">
                  <a href="#menu" class="btn btn-outline">View Our Menu</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <a class="carousel-control-prev" href="#banner-slide" role="button" data-bs-slide="prev">
   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#banner-slide" role="button" data-bs-slide="next">
   <span class="carousel-control-next-icon" aria-hidden="true"></span>
   <span class="sr-only">Next</span>
   </a>

   <div id="menu"></div>

   <section class="order-menu py-100">
      <div class="container">
         <h4 class="primary text-center mb-lg-4">our Menu</h4>
         <div class="contact-form" style="background: none !important;padding-top: 0px !important;">
            <form class="formreply">
               <div class="row justify-content-center">
                  <div class="col-md-6">
                     <div class="mb-3">
                        <input type="number" class="form-control" id="email" placeholder="Phone number*" style="border:3px solid #e7eff3 !important">
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="mb-0 text-center btnsubmit">
                        <button type="submit" class="btn btn-primary">Search</button>
                        <a href="<?php echo e(route('website.login')); ?>"><button type="button" class="btn btn-success">Next</button></a>
                     </div>
                  </div>
               </div>
            </form>
         </div>
         <div class="tabs-bar text-center">
            <ul class="nav nav-pills mb-5" id="pills-tab" role="tablist">
               <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-Brunch-tab" data-bs-toggle="pill" data-bs-target="#pills-Brunch" type="button" role="tab" aria-controls="pills-Brunch" aria-selected="true">Home Delivery</button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-Lunch-tab" data-bs-toggle="pill" data-bs-target="#pills-Lunch" type="button" role="tab" aria-controls="pills-Lunch" aria-selected="false">Pick-Up</button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-Dinner-tab" data-bs-toggle="pill" data-bs-target="#pills-Dinner" type="button" role="tab" aria-controls="pills-Dinner" aria-selected="false">Dine-On</button>
               </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
               <div class="tab-pane fade show active" id="pills-Brunch" role="tabpanel" aria-labelledby="pills-Brunch-tab">
                  <div class="menubar">
                     <div class="row">
                        <div class="col-lg-12 col-md-12">
                           <div class="contact-form">
                              <form class="home_address" method="POST">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="mb-3 float-end">
                                          <div class="mb-0 text-center btnsubmit">
                                             <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal" type="button"><i class="fa fa-plus"></i> Add New Address</button>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="mb-3">
                                          <input type="text" class="form-control" placeholder="FirstName*" name="first_name"  <?php if(Auth::check()): ?> <?php if($homeAddress): ?> value="<?php echo e($homeAddress->first_name); ?>" <?php endif; ?> <?php endif; ?>>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="mb-3">
                                          <input type="text" class="form-control" placeholder="Last Name*" name="last_name" <?php if(Auth::check()): ?>  <?php if($homeAddress): ?> value="<?php echo e($homeAddress->last_name); ?>" <?php endif; ?> <?php endif; ?>>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="mb-3">
                                          <input type="text" class="form-control" placeholder="Middle Name*" name="middle_name" <?php if(Auth::check()): ?> <?php if($homeAddress): ?> value="<?php echo e($homeAddress->middle_name); ?>" <?php endif; ?> <?php endif; ?>>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="mb-3">
                                          <input type="text" class="form-control" placeholder="Business Name*" name="bussiness_name" <?php if(Auth::check()): ?> <?php if($homeAddress): ?> value="<?php echo e($homeAddress->bussiness_name); ?>" <?php endif; ?> <?php endif; ?>>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="mb-3">
                                          <input type="email" class="form-control" placeholder="Email Address*" name="email_address" <?php if(Auth::check()): ?> <?php if($homeAddress): ?> value="<?php echo e($homeAddress->email); ?>" <?php endif; ?> <?php endif; ?>>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="mb-3">
                                          <input type="tel" class="form-control"  placeholder="Phone Number*" name="phone_number" <?php if(Auth::check()): ?> <?php if($homeAddress): ?> value="<?php echo e($homeAddress->phone); ?>" <?php endif; ?> <?php endif; ?>>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="mb-3">
                                          <input type="text" class="form-control"  placeholder="City*" name="city" <?php if(Auth::check()): ?> <?php if($homeAddress): ?> value="<?php echo e($homeAddress->city); ?>" <?php endif; ?> <?php endif; ?>>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="mb-3">
                                          <input type="text" class="form-control"  placeholder="State*" name="state" <?php if(Auth::check()): ?> <?php if($homeAddress): ?> value="<?php echo e($homeAddress->state); ?>" <?php endif; ?> <?php endif; ?>>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="mb-3">
                                          <input type="text" class="form-control"  placeholder="House*" name="house" <?php if(Auth::check()): ?> <?php if($homeAddress): ?> value="<?php echo e($homeAddress->house); ?>" <?php endif; ?> <?php endif; ?>>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="mb-3">
                                          <input type="text" class="form-control"  placeholder="Street*" name="street" <?php if(Auth::check()): ?> <?php if($homeAddress): ?> value="<?php echo e($homeAddress->street); ?>" <?php endif; ?> <?php endif; ?>>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="mb-3">
                                          <input type="text" class="form-control"  placeholder="Apartment*" name="apartment" <?php if(Auth::check()): ?> <?php if($homeAddress): ?> value="<?php echo e($homeAddress->apartment); ?>" <?php endif; ?> <?php endif; ?>>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="mb-3">
                                          <input type="text" class="form-control"  placeholder="Cross Street*" name="cross_street" <?php if(Auth::check()): ?> <?php if($homeAddress): ?> value="<?php echo e($homeAddress->cross_street); ?>" <?php endif; ?> <?php endif; ?>>
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="mb-3 ">
                                          <textarea class="form-control" placeholder="special Instruction" name="instruction"><?php if(Auth::check()): ?> <?php if($homeAddress): ?> <?php echo e($homeAddress->instruction); ?> <?php endif; ?> <?php endif; ?></textarea>
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="mb-0 text-center btnsubmit">
                                          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                           <a href="javascript:void(0)"><button type="button" class="btn btn-success">Next</button></a>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="pills-Lunch" role="tabpanel" aria-labelledby="pills-Lunch-tab"
                  >
                  <div class="menubar">
                     <div class="row">
                        <div class="col-lg-12 col-md-12">
                           <div class="contact-form">
                              <form class="pickup_address" method="POST">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="mb-3">
                                          <input type="search" class="form-control" placeholder="Store Location*" name="store_location" required <?php if(Auth::check()): ?> <?php if($pickup): ?> value="<?php echo e($pickup->store_location); ?>" <?php endif; ?> <?php endif; ?>> 
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="mb-3">
                                          <input type="text" class="form-control" placeholder="FirstName*" name="first_name" required <?php if(Auth::check()): ?> <?php if($pickup): ?> value="<?php echo e($pickup->first_name); ?>" <?php endif; ?>  <?php endif; ?> >
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="mb-3">
                                          <input type="text" class="form-control" placeholder="Last Name*" name="last_name" required <?php if(Auth::check()): ?> <?php if($pickup): ?> value="<?php echo e($pickup->last_name); ?>" <?php endif; ?> <?php endif; ?>>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="mb-3">
                                          <input type="email" class="form-control" placeholder="Email Address*" name="email" <?php if(Auth::check()): ?> <?php if($pickup): ?> value="<?php echo e($pickup->email); ?>" <?php endif; ?> <?php endif; ?> >
                                          <div  class="form-text text-start">We'll never share your email with anyone else.</div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="mb-3">
                                          <input type="tel" class="form-control"  placeholder="Phone Number*" name="phone" required <?php if(Auth::check()): ?> <?php if($pickup): ?> value="<?php echo e($pickup->phone); ?>" <?php endif; ?> <?php endif; ?>>
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="mb-0 text-center btnsubmit">
                                          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                           <a href="javascript:void(0)"><button type="button" class="btn btn-success">Next</button></a>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="pills-Dinner" role="tabpanel" aria-labelledby="pills-Dinner-tab">
                  <div class="menubar">
                     <div class="row">
                        <div class="col-lg-12 col-md-12">
                           <div class="contact-form">
                              <form class="formreply">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="mb-3">
                                          <input type="text" class="form-control" placeholder="Table Number*">
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="mb-3">
                                          <div class="border-new">
                                             <input type="checkbox" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="form-check-input">
                                             <span class="fw-bold">&nbsp;Reservation</span>
                                          </div>
                                          <div class="collapse mt-3" id="collapseExample">
                                             <div class="container">
                                                <div class="row">
                                                   <div class="col-md-6">
                                                      <div class="mb-3">
                                                         <input type="date" class="form-control">
                                                      </div>
                                                   </div>
                                                   <div class="col-md-6">
                                                      <div class="mb-3">
                                                         <input type="time" class="form-control">
                                                      </div>
                                                   </div>
                                                   <div class="col-md-6">
                                                      <div class="mb-3">
                                                         <input type="text" class="form-control" placeholder="Area*">
                                                      </div>
                                                   </div>
                                                   <div class="col-md-6">
                                                      <div class="mb-3">
                                                         <input type="text" class="form-control" placeholder="Cabin Number*">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="mb-3">
                                          <input type="text" class="form-control" placeholder="FirstName*">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="mb-3">
                                          <input type="text" class="form-control" placeholder="Last Name*">
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="mb-0 text-center btnsubmit">
                                          <button type="submit" class="btn btn-primary">Submit</button>
                                           <a href="javascript:void(0)"><button type="button" class="btn btn-success">Next</button></a>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</section>
 <?php $__env->startSection('extra_js'); ?>
 <script>
   $(function() {
      $(".home_address").on("submit" , function(e) {
         e.preventDefault();
         let fd = new FormData(this)
         fd.append('_token',"<?php echo e(csrf_token()); ?>");

         $.ajax({
             url: "<?php echo e(route('website.home_address')); ?>",
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

      // Pickup address
      $(".pickup_address").on("submit" , function(e) {
         e.preventDefault();
         let fd = new FormData(this)
         fd.append('_token',"<?php echo e(csrf_token()); ?>");

         $.ajax({
             url: "<?php echo e(route('website.pickup_address')); ?>",
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
   })
</script>
 <?php $__env->stopSection(); ?>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/restaurant_pos/resources/views/website/dashboard.blade.php ENDPATH**/ ?>