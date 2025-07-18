<style>
    .dropdown-menu li.active a {
        color: red !important;
    }
</style>
<?php
$dashboard = Request::is('admin/dashboard');
$category = Request::is('admin/category');
$subCategory = Request::is('admin/sub_category');
$addProduct = Request::is('admin/product');
$productList = Request::is('admin/product/list');
if (!empty($products->id)) {
    $productID = $products->id;
} else {
    $productID = 0;
}
$productEdit = Request::is('admin/product/edit/' . $productID);
$propertyList = Request::is('admin/properties');
$variationList = Request::is('admin/variation');
$coupons = Request::is('admin/coupons');
$offers = Request::is('admin/offer');
?>
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?php echo e(route('admin.dashboard')); ?>"> <img alt="image"
                                                          src="<?php echo e(url('public/assets/website/indexImages/changed_logo.png')); ?>"
                                                          class="header-logo" style="background-color: white"/> <span
                    class="logo-name font-14">Andhra Dining</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 1 , 1)): ?>
                <li class="dropdown <?php echo e($dashboard ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
                </li>
            <?php endif; ?>
            
            <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 2 , 1)): ?>
                <li class="dropdown <?php echo e($category || $subCategory ? 'active' : ''); ?>">
                    <a href="#" class="menu-toggle nav-link has-dropdown"><i
                            data-feather="briefcase"></i><span>Category</span></a>
                    <ul class="dropdown-menu">
                        <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 2 , 1)): ?>
                            <li class="<?php echo e($category ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(route('admin.category')); ?>">Category</a></li>
                        <?php endif; ?>
                        <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 2 , 2)): ?>
                            <li class="<?php echo e($subCategory ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(route('admin.sub_category')); ?>">Sub Category</a></li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>

            <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 3 , 1)): ?>
                <li class="dropdown <?php echo e($addProduct || $productList || $productEdit || $propertyList || $variationList ? 'active' : ''); ?>">
                    <a href="#" class="menu-toggle nav-link has-dropdown"><i
                            data-feather="briefcase"></i><span>Food</span></a>
                    <ul class="dropdown-menu">
                        <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 3 , 1)): ?>
                            <li class="<?php echo e($addProduct ? 'active' : ''); ?>"><a class="nav-link"
                                                                             href="<?php echo e(route('admin.product.index')); ?>">Add
                                    New Item</a></li>
                        <?php endif; ?>
                        <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 3 , 2)): ?>
                            <li class="<?php echo e($productList || $productEdit ? 'active' : ''); ?>"><a class="nav-link"
                                                                                              href="<?php echo e(route('admin.product.list')); ?>">All
                                    Item</a></li>
                        <?php endif; ?>
                        
                        <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 3 , 3)): ?>
                            <li class="<?php echo e($propertyList ? 'active' : ''); ?>"><a class="nav-link"
                                                                               href="<?php echo e(route('admin.properties.index')); ?>">Properties</a>
                            </li>
                        <?php endif; ?>
                        <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 3 , 4)): ?>
                            <li class="<?php echo e($variationList ? 'active' : ''); ?>"><a class="nav-link"
                                                                                href="<?php echo e(route('admin.variation.index')); ?>">Variations</a>
                            </li>
                        <?php endif; ?>
                        <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 9 , 3)): ?>
                            <li class="<?php echo e(Request::is('admin/ind_grp') ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(route('admin.ind_grp.index')); ?>">Ingredient Group</a></li>
                        <?php endif; ?>
                        <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 9 , 4)): ?>
                            <li class="<?php echo e(Request::is('admin/ind_item') ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(route('admin.ind_item.index')); ?>">Ingredient Item</a></li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>
            
            <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 4 , 1)): ?>
                <li class="<?php echo e($coupons ? 'active' : ''); ?>"><a class="nav-link"
                                                              href="<?php echo e(route('admin.coupon.index')); ?>"><i
                            data-feather="percent"></i><span>Discount</span></a>
                </li>
            <?php endif; ?>
            <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 5 , 1)): ?>
                <li class="<?php echo e($offers ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.offer.index')); ?>"><i
                            data-feather="percent"></i><span>Offers</span></a>
                </li>
            <?php endif; ?>
            <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 6 , 1)): ?>
                <li class="dropdown">
                    <a href="#" class="menu-toggle nav-link has-dropdown"><i
                            data-feather="book-open"></i><span>Blogs</span></a>
                    <ul class="dropdown-menu">
                        <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 6 , 1)): ?>
                            <li><a class="nav-link" href="<?php echo e(route('admin.blog.index')); ?>">Blogs list</a></li>
                        <?php endif; ?>
                        <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 6 , 2)): ?>
                            <li><a class="nav-link" href="<?php echo e(route('admin.blog.create')); ?>">Blogs Create</a></li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>

            <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 7 , 1)): ?>
                <li class="dropdown">
                    <a href="#" class="menu-toggle nav-link has-dropdown"><i
                            data-feather="command"></i><span>Setting</span></a>
                    <ul class="dropdown-menu">





















                        <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 7 , 8)): ?>
                            <li><a class="nav-link" href="<?php echo e(route('admin.view.privacy_policy')); ?>">Privacy Policy</a>
                            </li>
                        <?php endif; ?>
                        <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 7 , 9)): ?>
                            <li><a class="nav-link" href="<?php echo e(route('admin.view.term_and_condition')); ?>">Term and
                                    Condition</a></li>
                        <?php endif; ?>
                        <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 7 , 9)): ?>
                            <li><a class="nav-link" href="<?php echo e(route('admin.view.delivery_charges')); ?>">Set Dlivery Charges</a></li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>

            <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 8 , 1)): ?>
                <li><a class="nav-link" href="<?php echo e(route('admin.combopack.list')); ?>"><i data-feather="book-open"></i><span>Combo pack</span></a>
                </li>
            <?php endif; ?>
            <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 8 , 1)): ?>
                <li class="dropdown">
                    <a href="#" class="menu-toggle nav-link has-dropdown"><i
                            data-feather="briefcase"></i><span>Chef</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="<?php echo e(route('admin.chef')); ?>">Add Chef</a></li>
                        <li><a class="nav-link" href="<?php echo e(route('admin.list.chef')); ?>">Chef List</a></li>
                        

                    </ul>
                </li>
            <?php endif; ?>

            <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 8 , 1)): ?>
                <li class="dropdown">
                    <a href="#" class="menu-toggle nav-link has-dropdown"><i
                            data-feather="briefcase"></i><span>Content</span></a>
                    <ul class="dropdown-menu">
                        
                        <li><a class="nav-link" href="<?php echo e(route('admin.about_us.addd')); ?>"><span>About Us</span></a>
                        <li><a class="nav-link" href="<?php echo e(route('admin.gallery')); ?>"><span>Gallary</span></a>
                        <li><a class="nav-link" href="<?php echo e(route('admin.ayurveda')); ?>"><span>Philosophy & Ayurveda</span></a>
                        <li><a class="nav-link" href="<?php echo e(route('admin.contact')); ?>"><span>Contact Information</span></a>
                        <li><a class="nav-link" href="<?php echo e(route('translations.index')); ?>"><span>Translations</span></a>





                        

                    </ul>
                </li>
            <?php endif; ?>

            <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 8 , 1)): ?>
                <li><a class="nav-link" href="<?php echo e(route('admin.reservation.index')); ?>"><i data-feather="info"></i><span>Reservation</span></a>
                </li>
            <?php endif; ?>
            <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 8 , 1)): ?>
                <li><a class="nav-link" href="<?php echo e(route('admin.points.addd')); ?>"><i data-feather="info"></i><span>Points</span></a>
                </li>
            <?php endif; ?>

            
            <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 8 , 1)): ?>
                <li><a class="nav-link" href="<?php echo e(route('admin.price.index')); ?>"><i data-feather="book-open"></i><span>Set Price</span></a>
                </li>
            <?php endif; ?>
            <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 8 , 1)): ?>
                <li><a class="nav-link" href="<?php echo e(route('admin.qr.index')); ?>"><i data-feather="maximize"></i><span>Create QR</span></a>
                </li>
            <?php endif; ?>
            <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 8 , 1)): ?>
            <li><a class="nav-link" href="<?php echo e(route('admin.ratings')); ?>"><i data-feather="star"></i><span>Ratings</span></a>
            </li>
        <?php endif; ?>





































            <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 10 , 1)): ?>
                <li class="dropdown">
                    <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="mail"></i><span>User Management</span></a>
                    <ul class="dropdown-menu">
                        <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 10 , 1)): ?>
                            <li><a class="nav-link" href="<?php echo e(route('admin.staff.index')); ?>">Admin/Staff</a></li>
                        <?php endif; ?>
                        <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 10 , 2)): ?>
                            <li><a class="nav-link" href="<?php echo e(route('admin.customer.index')); ?>">Coustomer</a></li>
                        <?php endif; ?>
                        <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 10 , 3)): ?>
                            <li><a class="nav-link" href="<?php echo e(route('admin.waiter.index')); ?>">Waiters</a></li>
                        <?php endif; ?>
                        <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 10 , 4)): ?>
                            <li><a class="nav-link" href="">Role Groups</a></li>
                        <?php endif; ?>
                        <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 10 , 5)): ?>
                            <li><a class="nav-link" href="<?php echo e(route('admin.delivery.index')); ?>">Delivery User</a></li>
                        <?php endif; ?>

                    </ul>
                </li>
            <?php endif; ?>

            
    
    
    
    
            
            <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 12 , 1)): ?>
                <li><a class="nav-link" href="<?php echo e(route('admin.complete.order.index')); ?>"><i
                            data-feather="shopping-cart"></i><span>Complete Order</span></a></li>
            <?php endif; ?>

            <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 13 , 1)): ?>
                <li class="dropdown <?php echo e(Request::is('admin/branch') ? 'active' : ''); ?>">
                    <a href="#" class="menu-toggle nav-link has-dropdown"><i
                            data-feather="copy"></i><span>Restaurant</span></a>
                    <ul class="dropdown-menu">
                        <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 13 , 1)): ?>
                            <li class="<?php echo e(Request::is('admin/branch') ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(route('admin.branch.index')); ?>">Branches</a>
                            </li>
                        <?php endif; ?>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </ul>
                </li>
            <?php endif; ?>

            <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 14 , 1)): ?>
                <li class="dropdown">

                    <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="copy"></i><span>Orders</span></a>
                    <ul class="dropdown-menu">
                        <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 14 , 1)): ?>
                            <li><a class="nav-link" href="<?php echo e(route('admin.order.detail')); ?>">Details</a></li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>
            <?php if(App\Helpers\MyHelper::checkUserPrivilages(Auth::guard('admin')->user()->id , 15 , 1)): ?>
                <li><a class="nav-link" href="<?php echo e(route('admin.help.index')); ?>"><i
                            data-feather="copy"></i><span>Help</span></a></li>
            <?php endif; ?>

            
            
            
            
            
            
            
            
            
            
            
            
            

            

            <?php if((Auth::guard('admin')->user()->type == 'admin') || (Auth::guard('admin')->user()->type == 'pos')): ?>
                <li><a class="nav-link" href="<?php echo e(route('admin.index.pos')); ?>"><i data-feather="copy"></i><span>POS-2</span></a>
                </li>
            <?php endif; ?>





        </ul>
    </aside>
</div>
<?php /**PATH /home/u700657081/domains/xcrinogroup.com/public_html/andhra/resources/views/admin/include/sidebar.blade.php ENDPATH**/ ?>