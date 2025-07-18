
 <?php if(request()->is('menu') || request()->is('login') || request()->is('otp/id') || request()->is('pos_detail') ): ?>
 <section class="header-area p-0" style="background: #fe4e2b;">
   <div class="container">
      <div class="row">
         <div class="col-md-12 px-0">
            <nav class="navbar navbar-expand-lg navbar-light p-3">
               <a class="navbar-brand" href="index.html"><img src="<?php echo e(asset('assets/website/images/logo.webp')); ?>" alt="logo" title="logo" class="img-fluid" style="width:150px !important"></a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto ">
                     <li class="nav-item me-5">
                        <a class="nav-link p-0 text-white  <?php echo e(request()->is('/') == "/" ? 'active' : ''); ?>" aria-current="page" href="<?php echo e(route('website.dashboard')); ?>">Home</a>
                     </li>
                     <li class="nav-item me-5">
                        <?php if(Auth::user()): ?>
                        <a class="nav-link p-0 text-white  <?php echo e(request()->is('pos_detail') == "/" ? 'active' : ''); ?>" href="<?php echo e(route('website.pos_detail')); ?>">Menu</a>
                        <?php else: ?>
                        <a class="nav-link p-0 text-white  <?php echo e(request()->is('menu') == "/" ? 'active' : ''); ?>" href="#menu">Menu</a>
                        <?php endif; ?>
                     </li>
                     <li class="nav-item me-5">
                        <a class="nav-link p-0 text-white  <?php echo e(request()->is('/') == "contact" ? 'active' : ''); ?>" href="<?php echo e(route('website.contact')); ?>">Contact</a>
                     </li>
                  </ul>
                  <?php if(Auth::user()): ?>
                  <button class="btn btn-danger"  type="button" onclick="event.preventDefault();document.getElementById('user_logout_form').submit();">
                     Guest - <?php echo e(Auth::user()->phone); ?></button>
                  <?php else: ?>
                  <a href="<?php echo e(route('website.login')); ?>"><button class="btn btn-danger"  type="button">
                     LOGIN</button></a>
                  <?php endif; ?>
               </div>
            </nav>
         </div>
      </div>
   </div>
</section>

   <?php else: ?>
   <header class="header-area sticky">
      <div class="container">
         <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
               <a class="navbar-brand p-0" href="index.html"><img src="<?php echo e(asset('assets/website/images/logo.webp')); ?>" alt="logo" title="logo"></a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto ">
                     <li class="nav-item me-5">
                        <a class="nav-link p-0 text-white  <?php echo e(request()->is('/') == "/" ? 'active' : ''); ?>" aria-current="page" href="<?php echo e(route('website.dashboard')); ?>">Home</a>
                     </li>
                     <li class="nav-item me-5">
                        <?php if(Auth::user()): ?>
                        <a class="nav-link p-0 text-white  <?php echo e(request()->is('pos_detail') == "/" ? 'active' : ''); ?>" href="<?php echo e(route('website.pos_detail')); ?>">Menu</a>
                        <?php else: ?>
                        <a class="nav-link p-0 text-white  <?php echo e(request()->is('menu') == "/" ? 'active' : ''); ?>" href="#menu">Menu</a>
                        <?php endif; ?>
                     </li>
                     <li class="nav-item me-5">
                        <a class="nav-link p-0 text-white  <?php echo e(request()->is('contact') == "/" ? 'active' : ''); ?>" href="<?php echo e(route('website.contact')); ?>">Contact</a>
                     </li>
                  </ul>
                  <?php if(Auth::user()): ?>
                  <button class="btn btn-danger"  type="button" onclick="event.preventDefault();document.getElementById('user_logout_form').submit();">
                     Guest - <?php echo e(Auth::user()->phone); ?></button>
                  <?php else: ?>
                  <a href="<?php echo e(route('website.login')); ?>"><button class="btn btn-danger"  type="button">
                     LOGIN</button></a>
                  <?php endif; ?>
               </div>
            </nav>
         </div>
      </div>
   <?php endif; ?>
   <form id="user_logout_form" action="<?php echo e(route('website.logout')); ?>" method="POST" class="display-none">
      <?php echo csrf_field(); ?>
  </form>
</header><?php /**PATH /var/www/html/restaurant_pos/resources/views/website/include/header.blade.php ENDPATH**/ ?>