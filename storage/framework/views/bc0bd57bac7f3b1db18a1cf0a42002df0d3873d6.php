<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?php echo e(route('kitchen.dashboard')); ?>"> <img alt="image"
                src="<?php echo e(url('public/assets/website/indexImages/changed_logo.png')); ?>"
                class="header-logo" style="background-color: white"/> <span
class="logo-name font-14">Andhra Dining</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
                <a href="<?php echo e(route('kitchen.dashboard')); ?>" class="nav-link"><i
                        data-feather="monitor"></i><span>Dashboard</span></a>
            </li>


            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="briefcase"></i><span>Orders</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo e(route('kitchen.order_list')); ?>">Order History</a></li>
                    <li><a class="nav-link" href="<?php echo e(route('kitchen.order_pending_list')); ?>">New Orders</a></li>
                    <li><a class="nav-link" href="<?php echo e(route('kitchen.order_cooking_list')); ?>">Cooking</a></li>
                    <li><a class="nav-link" href="<?php echo e(route('kitchen.completed_order_list')); ?>">Completed Orders</a></li>
                    <li><a class="nav-link" href="<?php echo e(route('kitchen.order_cooked_list')); ?>">Orders ready to Handover</a></li>


                </ul>
            </li>

            

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="settings"></i><span>My
                        Account</span></a>
                <ul class="dropdown-menu">
                    <li>
                        
                    </li>
                    <li><a class="nav-link" href="<?php echo e(route('kitchen.profile')); ?>">Profile</a></li>
                    <!--<li><a class="nav-link" href="<?php echo e(route('kitchen.logout')); ?>">Log Out</a></li>-->
                    <li>
                        <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                          Log Out
                        </a>
                      
                        <form id="logout-form" action="<?php echo e(route('kitchen.logout')); ?>" method="POST" style="display: none;">
                          <?php echo csrf_field(); ?>
                        </form>
                      </li>

                </ul>
            </li>


        </ul>
    </aside>
</div>
<?php /**PATH /home/u700657081/domains/xcrinogroup.com/public_html/andhra/resources/views/kitchen/include/sidebar.blade.php ENDPATH**/ ?>