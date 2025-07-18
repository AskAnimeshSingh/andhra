<header   class="header   "  data-header id="myHeader">
 
  <div class="container  ">
    <?php if(request()->is('/') == "/"): ?>
      <a href="<?php echo e(route('website.dashboard')); ?>" class="logo  ">
        <img src="<?php echo e(asset('assets/website/indexImages/changed_logo.png')); ?>" alt="Andhra Dining Logo" width="150" height="150" class="logo-img start">
      </a>
    <?php else: ?>
      <a href="<?php echo e(route('website.dashboard')); ?>" class="logo  ">
        <img src="<?php echo e(asset('assets/website/indexImages/changed_logo.png')); ?>" alt="Andhra Dining Logo" width="150" height="150" class="logo-img start">
      </a>
    <?php endif; ?>
 
   <div class="">
   <nav class="navbar hidebar" data-navbar>
  <button class="close-btn" aria-label="close menu" data-nav-toggler>
    <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
  </button>
 
  <ul class="navbar-list">
    <li class="navbar-item">
      <a href="" class="j-nav class-add navbar-link hover-underline font-medium text-black" data-target="#cart" data-name="cart" aria-label="close menu" data-nav-toggler>
        <p class="mb-0 font-medium text-black">Cart</p>
      </a>
    </li>
    <li class="navbar-item">
      <a href="" class="j-nav class-add navbar-link hover-underline font-medium text-black" data-target="#orders" data-name="orders" aria-label="close menu" data-nav-toggler>
        <p class="mb-0 font-medium text-black">Orders</p>
      </a>
    </li>
    <li class="navbar-item">
      <a href="" class="j-nav class-add navbar-link hover-underline font-medium text-black" data-target="#profile" data-name="profile" aria-label="close menu" data-nav-toggler>
        <p class="mb-0 font-medium text-black">Profile</p>
      </a>
    </li>
    <li class="navbar-item">
      <a href="javascript:void(0)" class="navbar-link hover-underline font-medium text-black"
         onclick="event.preventDefault();document.getElementById('logout-form').submit();">
        <p class="mb-0 font-medium text-black">Logout</p>
      </a>
      <form id="logout-form" action="<?php echo e(route('website.logout')); ?>" method="POST"
      class="display-none">
      <?php echo csrf_field(); ?>
  </form>
    </li>
  </ul>
</nav>
 
 
   </div>
    <div class="flag lg:flex" style="margin: 0 20px;">
      <ul class="navbar-list" style="gap:5px">
        <li class="navbar-item">
          <a href="<?php echo e(route('locale.switch', 'en')); ?>" class="navbar-link hover-underline md:menu-color text-black">en</a>
        </li>
        <li class="navbar-item">
          <span class="navbar-link md:menu-color">|</span>
        </li>
        <li class="navbar-item">
          <a href="<?php echo e(route('locale.switch', 'ja')); ?>" class="navbar-link hover-underline md:menu-color text-black">日本語</a>
        </li>
      </ul>
    </div>
 
    <button class="nav-open-btn  " aria-label="open menu" data-nav-toggler>
      <span class="line line-1"></span>
      <span class="line line-2"></span>
      <span class="line line-3"></span>
    </button>
 
    <div class="overlay" data-nav-toggler data-overlay></div>
  </div>
</header><?php /**PATH /home/u700657081/domains/xcrinogroup.com/public_html/andhra/resources/views/website/include/nav.blade.php ENDPATH**/ ?>