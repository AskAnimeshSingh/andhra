<nav class="navbar navbar-expand-lg main-navbar sticky">
    <div class="form-inline mr-auto">
      <ul class="navbar-nav mr-3">
        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
                                collapse-btn"> <i data-feather="align-justify"></i></a></li>
        <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
            <i data-feather="maximize"></i>
          </a></li>
        
      </ul>
    </div>
    <ul class="navbar-nav navbar-right">

      <li class="dropdown"><a href="#" data-toggle="dropdown"
          class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="<?php echo e(asset(Auth::guard('admin')->user()->img)); ?>"
            class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
        <div class="dropdown-menu dropdown-menu-right pullDown">
          <div class="dropdown-title">Hello <?php echo e(Auth::guard('admin')->user()->fname); ?></div>
          <a href="<?php echo e(route('kitchen.profile')); ?>" class="dropdown-item has-icon"> <i class="far
                                    fa-user"></i> Profile
          </a> 
          <!--<a href="timeline.html" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>-->
          <!--  Activities-->

          <!--<div class="dropdown-divider"></div>-->
          <a href="javascript:void(0)" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
            Logout
          </a>
          <form id="logout-form" action="<?php echo e(route('kitchen.logout')); ?>" method="POST" class="display-none">
            <?php echo csrf_field(); ?>
        </form>
        </div>
      </li>
    </ul>
  </nav>
<?php /**PATH /home/u700657081/domains/xcrinogroup.com/public_html/andhra/resources/views/kitchen/include/nav.blade.php ENDPATH**/ ?>