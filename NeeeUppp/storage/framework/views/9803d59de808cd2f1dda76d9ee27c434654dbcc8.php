<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="<?php echo e(route('admin.dashboard')); ?>"> <img alt="image" src="<?php echo e(asset('assets/admin/assets/img/logo.png')); ?>" class="header-logo" /> <span
            class="logo-name">Xcrino</span>
        </a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Main</li>
        <li class="dropdown active">
          <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-link"><i data-feather=  "monitor"></i><span>Dashboard</span></a>
        </li>
        

        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
              data-feather="briefcase"></i><span>Category</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?php echo e(route('admin.category')); ?>">Category</a></li>
            <li><a class="nav-link" href="<?php echo e(route('admin.sub_category')); ?>">Sub Category</a></li>
            <li><a class="nav-link" href="<?php echo e(route("admin.child_category")); ?>">Child Category</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
              data-feather="briefcase"></i><span>Food</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?php echo e(route('admin.product.index')); ?>">Add New Item</a></li>
            <li><a class="nav-link" href="<?php echo e(route('admin.product.list')); ?>">All Item</a></li>
            
            <li><a class="nav-link" href="<?php echo e(route('admin.properties.index')); ?>">properties</a></li>
            <li><a class="nav-link" href="<?php echo e(route('admin.variation.index')); ?>">Variations</a></li>
          </ul>
        </li>

        
        <li><a class="nav-link" href="<?php echo e(route('admin.coupon.index')); ?>"><i data-feather="percent"></i><span>Discount</span></a></li>
        <li><a class="nav-link" href="<?php echo e(route('admin.offer.index')); ?>"><i data-feather="percent"></i><span>Offers</span></a></li>

        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
              data-feather="book-open"></i><span>Blogs</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?php echo e(route('admin.blog.index')); ?>">Blogs list</a></li>
            <li><a class="nav-link" href="<?php echo e(route('admin.blog.create')); ?>">Blogs Create</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Setting</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?php echo e(route('admin.size.index')); ?>">Size Setting</a></li>
            <li><a class="nav-link" href="<?php echo e(route('admin.type.index')); ?>">Type Setting</a></li>
            <li><a class="nav-link" href="<?php echo e(route('admin.extra.index')); ?>">Extra</a></li>
            <li><a class="nav-link" href="<?php echo e(route('admin.setting.currency')); ?>">Currencies</a></li>
            <li><a class="nav-link" href="<?php echo e(route('admin.setting.general')); ?>">General Settings</a></li>
            <li><a class="nav-link" href="<?php echo e(route('admin.setting.smtp')); ?>">Email\Smtp</a></li>
            <li><a class="nav-link" href="<?php echo e(route('admin.setting.language')); ?>">Language</a></li>
            <li><a class="nav-link" href="<?php echo e(route('admin.view.privacy_policy')); ?>">Privacy Policy</a></li>
            <li><a class="nav-link" href="<?php echo e(route('admin.view.term_and_condition')); ?>">Term and Condition</a></li>
          </ul>
        </li>

        <li><a class="nav-link" href="<?php echo e(route('admin.combopack.list')); ?>"><i data-feather="book-open"></i><span>combo pack</span></a></li>


      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Manage Stock</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="<?php echo e(route('admin.food_purchase.index')); ?>">Food Purchase</a></li>
          <li><a class="nav-link" href="<?php echo e(route('admin.food_purchase.food_purchase_list')); ?>">Purchase History</a></li>
          <li><a class="nav-link" href="<?php echo e(route('admin.ind_grp.index')); ?>">Ingredient Group</a></li>
          <li><a class="nav-link" href="<?php echo e(route('admin.ind_item.index')); ?>">Ingredient Item</a></li>
          <li><a class="nav-link" href="chat.html">Ingredient Purchase</a></li>
          <li><a class="nav-link" href="chat.html">Ingredient Purchase History</a></li>
          <li><a class="nav-link" href="<?php echo e(route('admin.supplier.index')); ?>">Manage Supplier</a></li>
          <li><a class="nav-link" href="chat.html">Supplier History</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="mail"></i><span>User Management</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="<?php echo e(route('admin.staff.index')); ?>">Admin/Staff</a></li>
          <li><a class="nav-link" href="<?php echo e(route('admin.customer.index')); ?>">Coustomer</a></li>
          <li><a class="nav-link" href="<?php echo e(route('admin.waiter.index')); ?>">Waiters</a></li>
          <li><a class="nav-link" href="email-read.html">Role Groups</a></li>
          <li><a class="nav-link" href="<?php echo e(route('admin.delivery.index')); ?>">Delivery User</a></li>
          
        </ul>
      </li>
        
          <li><a class="nav-link" href="<?php echo e(route('admin.delivery.feedback.index')); ?>"><i data-feather="star"></i><span>Delivery Feedback</span></a></li>

          
          <li><a class="nav-link" href="<?php echo e(route('admin.complete.order.index')); ?>"><i data-feather="shopping-cart"></i><span>Complete Order</span></a></li>


      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="copy"></i><span>Restaurant</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="<?php echo e(route('admin.branch.index')); ?>">Branches</a></li>
          <li><a class="nav-link" href="<?php echo e(route('admin.commission.index')); ?>">Dept Tags</a></li>
          <li><a class="nav-link" href="<?php echo e(route('admin.table.index')); ?>">Tables</a></li>
          <li><a class="nav-link" href="<?php echo e(route('admin.payment.index')); ?>">Payment Types</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="copy"></i><span>Orders</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="<?php echo e(route('admin.order.detail')); ?>">Details</a></li>
        </ul>
      </li>

      <li><a class="nav-link" href="<?php echo e(route('admin.help.index')); ?>"><i data-feather="copy"></i><span>Help</span></a></li>

      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="copy"></i><span>Table</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="<?php echo e(route('admin.table.qrcode')); ?>">Qr List</a></li>
          <li><a class="nav-link" href="<?php echo e(route('admin.table.booked_table')); ?>">Booked Tables Detail</a></li>
        </ul>
      </li>

      </ul>
    </aside>
  </div>
<?php /**PATH /var/www/html/restaurant-pos-backend/resources/views/admin/include/sidebar.blade.php ENDPATH**/ ?>