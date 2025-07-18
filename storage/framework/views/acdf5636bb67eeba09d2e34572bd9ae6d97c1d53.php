
<?php $__env->startSection('extra_css'); ?>
    <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha384-xxxxx" crossorigin="anonymous" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" />

    <style>

        /** @type  {import('tailwindcss').Config} */
        



        
        .save-btn {
            position: relative;
            color: #A07E55;
            font-size: var(--fontSize-label-2);
            font-weight: var(--weight-bold);
            text-transform: uppercase;
            letter-spacing: var(--letterSpacing-2);
            max-width: max-content;
            border: 2px solid #A07E55;
            padding: 8px 35px;
            overflow: hidden;
            z-index: 1;
        }

        .funkyradio div {
            clear: both;
            overflow: hidden;
        }
        .funkyradio label {
            width: 100%;
            border-radius: 3px;
            border: 1px solid #D1D3D4;
            font-weight: normal;
        }
        .funkyradio input[type="radio"]:empty,
        .funkyradio input[type="checkbox"]:empty {
            display: none;
        }
        .funkyradio input[type="radio"]:empty~label,
        .funkyradio input[type="checkbox"]:empty~label {
            position: relative;
            line-height: 2.5em;
            text-indent: 3.25em;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        .funkyradio input[type="radio"]:empty~label:before,
        .funkyradio input[type="checkbox"]:empty~label:before {
            position: absolute;
            display: block;
            top: 0;
            bottom: 0;
            left: 0;
            content: '';
            width: 2.5em;
            background: #D1D3D4;
            border-radius: 3px 0 0 3px;
        }

        .funkyradio input[type="radio"]:hover:not(:checked)~label,
        .funkyradio input[type="checkbox"]:hover:not(:checked)~label {
            color: #888;
        }

        .funkyradio input[type="radio"]:hover:not(:checked)~label:before,
        .funkyradio input[type="checkbox"]:hover:not(:checked)~label:before {
            content: '\2714';
            text-indent: .9em;
            color: #C2C2C2;
        }

        .funkyradio input[type="radio"]:checked~label,
        .funkyradio input[type="checkbox"]:checked~label {
            color: #777;
        }
        .funkyradio input[type="radio"]:checked~label:before,
        .funkyradio input[type="checkbox"]:checked~label:before {
            content: '\2714';
            text-indent: .9em;
            color: #333;
            background-color: #ccc;
        }

        .funkyradio input[type="radio"]:focus~label:before,
        .funkyradio input[type="checkbox"]:focus~label:before {
            box-shadow: 0 0 0 3px #999;
        }

        .funkyradio-default input[type="radio"]:checked~label:before,
        .funkyradio-default input[type="checkbox"]:checked~label:before {
            color: #333;
            background-color: #ccc;
        }

        .funkyradio-primary input[type="radio"]:checked~label:before,
        .funkyradio-primary input[type="checkbox"]:checked~label:before {
            color: #fff;
            background-color: #337ab7;
        }

        .funkyradio-success input[type="radio"]:checked~label:before,
        .funkyradio-success input[type="checkbox"]:checked~label:before {
            color: #fff;
            background-color: #fe4e2b;
        }

        .funkyradio-danger input[type="radio"]:checked~label:before,
        .funkyradio-danger input[type="checkbox"]:checked~label:before {
            color: #fff;
            background-color: #d9534f;
        }

        .funkyradio-warning input[type="radio"]:checked~label:before,
        .funkyradio-warning input[type="checkbox"]:checked~label:before {
            color: #fff;
            background-color: #f0ad4e;
        }

        .funkyradio-info input[type="radio"]:checked~label:before,
        .funkyradio-info input[type="checkbox"]:checked~label:before {
            color: #fff;
            background-color: #5bc0de;
        }

        .custom-check {
            display: none;
        }

        :checked+label { 
            width: 100%;
            padding: 0% 2%;
            color: #000 !important;
        }

        .custom-label {
            width: 100%;
            padding: 0% 2%;
            height: 46px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 12px;
            line-height: 17px;
        }

        .owl-dots {
            display: none;
        }

        .owl-next {
            position: absolute;
            right: -30px;
            font-size: 26px !important;
            top: 11px;
            color: #fe4e2b !important;
        }

        .owl-prev {
            position: absolute;
            left: -30px;
            font-size: 26px !important;
            top: 11px;
            color: #fe4e2b !important;
        }

        .card-add-button {
            position: absolute;
            width: 89%;
            bottom: 17px;
        }

        .display-flex-space-between {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .avatar-container {
            position: relative;
            display: inline-block;
            border-radius: 50%;
            overflow: hidden;
            height: 35px;
            width: 35px;
            padding: 0;
            border: none;
            background: #efefef;
            cursor: pointer;
        }

        .avatar-container .avatar {
            display: block;
            margin: 15px;
            border-radius: 50%;
            width: 100px;
            height: 100px;
            overflow: hidden;
            z-index: 100;
        }
        .avatar-container .info {
            display: none;
            font-weight: bold;
            font-size: 2rem;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 187, 255, 0.2);
            color: white;
            z-index: 1000;
        }

        .avatar-container .info.js-active {
            display: table;
        }

        .avatar-container .info .info-inner {
            display: table-cell;
            text-align: center;
            vertical-align: middle;
        }

        .p--50 {
            background-image: linear-gradient(-90deg, #fe4e2b 50%, transparent 50%, transparent), linear-gradient(270deg, #fe4e2b 50%, #efefef 50%, #efefef);
            -webkit-transform: rotateY(180deg);
            transform: rotateY(180deg);
        }

        .p-100 {
            background-image: linear-gradient(90deg, #fe4e2b 50%, transparent 50%, transparent), linear-gradient(270deg, #fe4e2b 50%, #efefef 50%, #efefef);
        }

        .p-50 {
            background-image: linear-gradient(-90deg, #fe4e2b 50%, transparent 50%, transparent), linear-gradient(270deg, #0BF 50%, #efefef 50%, #efefef);
        }

        .p-25 {
            background-image: linear-gradient(90deg, #efefef 50%, transparent 50%, transparent), linear-gradient(180deg, #fe4e2b 50%, #efefef 50%, #efefef);
        }

        @media (min-width: 576px) {
            .modal-sm-mid {
                max-width: 400px;
            }
        }
        input.toppingdirection[type=radio] {
            display: none;
        }

        input.toppingdirection:checked+label {
            border: solid 5px #5ed05e;
            box-shadow: 0 0 5px #95f895 !important;
            width: 40px;
            height: 40px;
        }

        input.toppingdirection:checked+label:before {
            /*content: "✓ ";*/
        }

        .custom-label:hover {
            cursor: pointer;
        }

        .custom-col-7 { 
    flex: 1 0 auto;
    width: 54.33333333%;
  }

  /* this is for container */
  .container,
.container-fluid,
.container-sm,
.container-md,
.container-lg,
.container-xl,
.container-xxl {
  width: 100%;
  padding-right: var(--bs-gutter-x, 0.75rem);
  padding-left: var(--bs-gutter-x, 0.75rem);
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 576px) {
  .container-sm, .container {
    max-width: 540px;
  }
}

@media (min-width: 768px) {
  .container-md, .container-sm, .container {
    max-width: 720px;
  }
}

@media (min-width: 992px) {
  .container-lg, .container-md, .container-sm, .container {
    max-width: 960px;
  }
}

@media (min-width: 1200px) {
  .container-xl, .container-lg, .container-md, .container-sm, .container {
    max-width: 1140px;
  }
}

@media (min-width: 1400px) {
  .container-xxl, .container-xl, .container-lg, .container-md, .container-sm, .container {
    max-width: 1320px;
  }
}
/* cart for mobile  */
@media (max-width: 767.98px) {
  .food-card .card-body {
    padding: 8px 0px;
  }
}

.mobile-box {
  width: 40px;
  height: 40px;
}

@media (max-width: 576px) {
  .mobile-box {
    width: 30px;
    height: 30px;
    font-size: 12px;
  }
}


/* Scrollbar Styling */
#cart-scroll-wrapper::-webkit-scrollbar {
  width: 8px;
}

#cart-scroll-wrapper::-webkit-scrollbar-track {
  background: #f1f1f1;
}

#cart-scroll-wrapper::-webkit-scrollbar-thumb {
  background-color: #ff4d4d;
  border-radius: 10px;
  border: 2px solid #f1f1f1;
}

/* Firefox */
#cart-scroll-wrapper {
  scrollbar-width: thin;
  scrollbar-color: #ff4d4d #f1f1f1;
}


/* for home */
.smooth-scroll {
    scroll-behavior: smooth;
  }
  
  /* Add a slight transition to the scrollbar thumb */
  .scrollbar-thumb-gray-400 {
    transition: all 0.3s ease;
  }
  
  .scrollbar-thumb-gray-400:hover {
    background-color: #4a4a4a;
  }
  @media (max-width: 576px) {
    .card-body img {
        width: 50px !important;
        height: 50px !important;
    }

    .card-body h5 {
        font-size: 0.95rem !important;
    }

    .card-body div {
        font-size: 0.85rem !important;
    }
}

/* Common Orange Button */
.btn-orange {
    background-color: rgb(231, 89, 6) !important;
    border-color: rgb(231, 89, 6) !important;
    color: white !important;
    border-radius: 6px !important; /* Previously 8px — now less */
    font-size: 15px;
    padding: 2px 5px;
    font-weight: 500;
    transition: 0.3s ease-in-out;
}

.btn-orange:hover {
    background-color: rgb(200, 70, 0) !important;
}

.cart-heading {
        font-size: 25px !important;
        color:#A07E55;
    }

    .cart-subtext {
        font-size: 15px !important;
    }

/* Place Order Button */
#place_order {
    font-size: 16px !important;
    padding: 2px 10px !important;
    border-radius: 5px !important; /* Previously 50px — now subtle */
    font-weight: 600;
}


@media (max-width: 576px) {
    #coupon_apply,
    #redeem {
        padding: 2px 5px !important;
        font-size: 10px !important;
        width: 100%;
    }

    #place_order {
        font-size: 10px !important;
        padding: 5px 10px !important;
        background-color: rgb(231, 89, 6) !important;
    }

    .cart-heading {
        font-size: 20px !important;
        color:#A07E55;
    }

    .cart-subtext {
        font-size: 14px !important;
    }
}

@media (max-width: 640px) {
  .quantity-wrapper {
    padding: 2px 5px;
  }
}





    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section style="background-color: var(--eerie-black-4); padding-top: 84px;">
        <div class="the-div" style="background-color:white; width:100%;">
            <div class="container-fluid">
                <div class="row">

                    <!-- First column -->
                    <div class="col-3 p-2 mt-4">
                        <div class="row pt-3 menu-add-class">
                            <div class="col-lg-12 col-md-12 ">
                                <a href="" class="j-nav class-add" data-target="#menus" data-name="menus">
                                    <div class="card text-center mb-3 food-card repair-active-new">
                                        <div class="card-body ">
                                            <div class="h2 mb-0">
                                                <i class="fa fa-bars"></i>
                                            </div>
                                            <p class="mb-0">Menus</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <a href="" class="j-nav class-add" data-target="#combo" data-name="combo">
                                    <div class="card text-center mb-3 food-card ">
                                        <div class="card-body">
                                            <div class="h2 mb-0">
                                                <i class="fa fa-bars"></i>
                                            </div>
                                            <p class="mb-0">Combo Pack</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Recommended -->
                        <div class="col-lg-12 col-md-12">
                            <a href="" class="j-nav class-add" data-target="#recommended" data-name="recommended">
                                <div class="card text-center mb-3 food-card">
                                    <div class="card-body">
                                        <div class="h2 mb-0"><i class="fa fa-star"></i></div>
                                        <p class="mb-0">Recommended</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                            <!-- <div class="col-lg-6 col-md-12 hidden">
                                <a href="" class="j-nav class-add" data-target="#cart" data-name="cart">
                                    <div class="card text-center mb-4 food-card">
                                        <div class="card-body">
                                            <div class="h2 mb-0">
                                                <i class="fa fa-shopping-cart"></i>
                                            </div>
                                            <p class="mb-0">Cart</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-12 hidden">
                                <a href="" class="j-nav class-add" data-target="#orders" data-name="orders">
                                    <div class="card text-center mb-4 food-card">
                                        <div class="card-body">
                                            <div class="h2 mb-0">
                                                <i class="fa fa-shopping-bag"></i>
                                            </div>
                                            <p class="mb-0">Orders</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 hidden">
                                <a href="" class="j-nav class-add" data-target="#profile" data-name="profile">
                                    <div class="card text-center mb-4 food-card ">
                                        <div class="card-body">
                                            <div class="h3 mb-0">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <p class="mb-0">Profile</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 hidden">
                                <a href="javscript:void(0)"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <div class="card text-center mb-4 food-card">
                                        <div class="card-body">
                                            <div class="h3 mb-0">

                                                <i class="fas fa-sign-out-alt" style="font-size: 24px;"></i>
                                            </div>
                                            <p class="mb-0">Logout</p>
                                        </div>

                                    </div>

                                </a>
                                <form id="logout-form" action="<?php echo e(route('website.logout')); ?>" method="POST"
                                    class="display-none">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                            <div class="col-md-12   hidden  text-center bottom-position">
                                <img src="<?php echo e(asset('assets/website/images/bottom-img.png')); ?>" alt=""
                                    class="img-fluid w-75 mx-auto d-block">
                                <p class="fw-bold">First, we eat. Then, we do everything else.</p>
                            </div> -->
                        </div>
                    </div>
                    <!-- Second Column -->
                    <div class="col-9 custom-col-7 p-2">
                        < class="bg-lights ms-2 mt-3">

                            <!-- MENUS -->

                            <div id="menus" class="j-tab p-3">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div style="padding:5px;">
                                            <h3
                                                style="font-family: var(--fontFamily-forum); font-size:25px; color:#A07E55;">
                                                Menus</h3>
                                            <p
                                                style="font-family: var(--fontFamily-dm_sans); font-size:15px; color:#2D1E16;">
                                                Choose Category</p>
                                        </div>

                                        <!-- Tabs -->
<!-- 
                                          <ul class="nav nav-pills mb-3 nav-category" id="pills-tab">
                                            <li class="nav-item">
                                                <button
                                                    class="nav-link catg-link active d-flex align-items-center flex-wrap rounded-pill px-4 get_menu1"
                                                    id="pills-all" data-bs-toggle="pill" data-bs-target="#all"
                                                    type="button">
                                                    <img src="<?php echo e(asset('assets/website/images/1.webp')); ?>" alt=""
                                                        style="width:40px;height: 40px;border-radius: 50%;"
                                                        class="me-4  object-cover  "> All</button>
                                            </li>
                                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="nav-item">
                                                    <button
                                                        class="nav-link catg-link d-flex align-items-center rounded-pill px-4 get_menu flex-wrap"
                                                        data-id="<?php echo e($item->id); ?>" id="pills-all"
                                                        data-bs-toggle="pill" data-bs-target="#all">
                                                        <img src="<?php echo e(url($item->cate_img)); ?>" alt=""
                                                            style="width:40px;height: 40px;border-radius: 50%;"
                                                            class="me-4   object-cover"><?php echo e($item->cate_name); ?></button>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                        
                                        <ul class="nav nav-pills mb-3 nav-category sub_category_list" id="pills-tab">

                                        </ul>   -->

                                        <!-- change badshah -->

                                         



<!-- New code  -->
<div class="w-full max-w-full overflow-x-auto cursor-pointer whitespace-nowrap scrollbar-thin  scrollbar-track-gray-100 px-4 py-2 smooth-scroll">
  <div class="flex gap-4 nav-category" id="pills-tab">
    <!-- Category Item -->
    <li class="flex-shrink-0 inline-flex flex-col items-center justify-center min-w-[100px] text-black sm:flex-row sm:rounded-full sm:px-4 sm:py-2 sm:gap-3 lg:w-60 lg:h-24 nav-item get_menu1" id="pills-all" data-bs-toggle="pill" data-bs-target="#all" type="button">
        <img src="<?php echo e(asset('assets/website/images/1.webp')); ?>" alt="All" class="w-16 h-16 sm:w-20 sm:h-20 lg:w-20 lg:h-20 rounded-full object-cover shadow-md">
        <p class="text-base font-semibold mt-2 sm:mt-0">All</p>
      </li>
      <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <li class="flex-shrink-0 inline-flex flex-col items-center justify-center min-w-[100px] text-black sm:flex-row sm:rounded-full sm:px-4 sm:py-2 sm:gap-3 lg:w-60 lg:h-24 get_menu" data-id="<?php echo e($item->id); ?>" id="pills-all" data-bs-toggle="pill" data-bs-target="#all">
      <img src="<?php echo e(url($item->cate_img)); ?>" alt="Burger" class="w-16 h-16 sm:w-20 sm:h-20 lg:w-20 lg:h-20 rounded-full object-cover shadow-md">
      <p class="text-base font-semibold mt-2 sm:mt-0">Burger</p>
    </li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
  </div>
</div>
<ul class="nav nav-pills mb-3 nav-category sub_category_list" id="pills-tab">
</ul>

















                                        <!-- Tab Content -->

                                        <div class="tab-content main-scrollbar">
                                            <div class="tab-pane fade show active mx-2" id="all">
                                                <div class="row" id="menu_list">
                                                </div>
                                                <div class="more">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Combo Pack-->
                            <div id="combo" class="j-tab p-3 " style="display: none">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <h3
                                            style="font-family: var(--fontFamily-forum); font-size:25px; color:#A07E55; padding:5px;">
                                            Combo Pack</h3>

                                          


                                        <!-- Tab Content -->

                                        <div class="tab-content main-scrollbar">
                                            <div class="tab-pane fade show active mx-2" id="all">
                                                <div class="row" id="combo_pack_list">
                                                </div>
                                                <div class="load_more">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Recommended -->
                            <div id="recommended" class="j-tab p-3" style="display: none">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div style="padding:5px;">
                                            <h3 style="font-family: var(--fontFamily-forum); font-size:25px; color:#A07E55;">Recommended Items</h3>
                                                <p style="font-family: var(--fontFamily-dm_sans); font-size:15px; color:#2D1E16;">Our Special Recommendations</p>
                                                </div>
                                                    <div class="tab-content main-scrollbar">
                                                    <div class="tab-pane fade show active mx-2">
                                                    <div class="row" id="recommended_list"></div>
                                                <div class="recommended-more"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Cart -->
<!-- Cart -->
<div id="cart" class="j-tab p-3" style="display: none;">
    <div class="row">
        <div class="col-md-12 mb-3">
            <div style="padding:5px;">
                <h3 class="cart-heading">Cart</h3>
                <p class="cart-subtext">Choose</p>
            </div>

            <div class="main-scrollbar">
                <div class="mx-2" id="side_card"></div>

                <!-- Coupon -->
                <div id="coupon-hide" class="row gx-2 align-items-center mb-3">
                    <div class="col-8 col-sm-9">
                        <select class="form-control form-control-sm" id="apply_coupon">
                            <option value="">Select a Coupon</option>
                            <?php $__currentLoopData = $coupons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coupon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($coupon->coupon_name); ?>"><?php echo e($coupon->coupon_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="col-4 col-sm-3">
                        <button id="coupon_apply" class="btn  btn-sm btn-orange w-100">Apply</button>
                    </div>
                </div>

                <div id="coupon_selected"></div>

                <!-- Totals -->
                <div class="totals mb-3 mr-16">
                    <div class="d-flex justify-content-between">
                        <span>Sub Total</span><strong id="sub_total"></strong>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span>Discount</span><strong id="total_discount"></strong>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span>Tax (Included)</span><strong id="tax_inc"></strong>
                    </div>
                    <div class="d-flex justify-content-between border-bottom pb-2">
                        <span>Delivery</span><strong id="delivery_inc"></strong>
                        <input type="hidden" name="delivery_ch" class="delivery_inc">
                    </div>
                </div>

                <!-- Redeem Points -->
                <div id="redeem-points" class="d-flex justify-content-between align-items-center mb-2 mr-10">
                    <span>Redeem points: <?php echo e($UserPoints->points); ?></span>
                    <button id="redeem" class="btn btn-orange btn-sm">Redeem</button>
                    <input type="hidden" value="<?php echo e($UserPoints->points); ?>" id="redeem_value">
                </div>
                <div id="points-redeemed"></div>

                <!-- Total -->
                <div class="d-flex justify-content-between border-bottom py-2 mr-16">
                    <strong class="text-warning">Total</strong>
                    <strong class="text-success" id="total"></strong>
                    <input type="hidden" name="sub_total" class="sub_total">
                    <input type="hidden" name="tax" class="tax_inc">
                    <input type="hidden" name="tax" class="discount_value" value="0">
                    <input type="hidden" name="net_amnt" class="total" id="net_amnt">
                </div>

                <!-- Dine-In -->
                <div class="form-check mt-3">
                    <input type="radio" class="form-check-input" value="Dine-In" name="home_delivery" checked readonly>
                    <label class="form-check-label">Dine-in</label>
                </div>

               

                <!-- Place Order -->
                <div class="mt-4">
                    <button class="btn btn-sm btn-orange w-100 fw-bold" id="place_order">Place Order</button>
                </div>

            </div>
        </div>
    </div>
</div>


                            <!-- Orders -->
                             
                          
<div id="orders" class="j-tab p-3" style="display:none; background-color: #eaf6fb;"> 
    <div class="row">
        <div class="col-md-12 mb-3">
            <div style="padding: 5px 10px;">
                <h3 style="font-family: var(--fontFamily-forum); font-size:25px; color:#A07E55;">Product History</h3>
                <p style="font-family: var(--fontFamily-dm_sans); font-size:15px; color:#2D1E16;">Details of all ordered products</p>
            </div>

            <!-- Unified white container -->
            
                <div class="row g-3 ">
                    <?php if(!$payment_done): ?>
                    <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 shadow-sm border-0" style="background-color: #ffffff;">
                                <div class="card-body d-flex flex-column">
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="<?php echo e(url($product['image'])); ?>" alt="Product Image" class="rounded" style="width: 60px; height: 60px; object-fit: cover; margin-right: 15px;">
                                        <div>
                                            <h5 class="mb-1" style="font-size: 1rem; font-weight: bold;"><?php echo e($product['name']); ?></h5>
                                            <?php if($product['variant']): ?>
                                                <div style="font-size: 0.875rem;"><?php echo $product['variant']; ?></div>
                                            <?php endif; ?>
                                            <?php if($product['crust']): ?>
                                                <div style="font-size: 0.875rem;"><?php echo $product['crust']; ?></div>
                                            <?php endif; ?>
                                            <?php if($product['toppings']): ?>
                                                <div style="font-size: 0.875rem;"><?php echo $product['toppings']; ?></div>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="mt-auto">
                                        <div class="d-flex justify-content-between mb-1">
                                            <span style="font-weight: 500;">Base Price:</span>
                                            <span>₹<?php echo e($product['base_price']); ?></span>
                                        </div>
                                        <div class="d-flex justify-content-between mb-1">
                                            <span style="font-weight: 500;">Quantity:</span>
                                            <span><?php echo e($product['quantity']); ?></span>
                                        </div>
                                        <div class="d-flex justify-content-between" style="font-weight: 600; color: #A07E55;">
                                            <span>Total:</span>
                                            <span>₹<?php echo e($product['total']); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="col-12 text-center">
                            <p>No products found.</p>
                        </div>
                    <?php endif; ?>
                    <?php endif; ?>
                    
                </div>
                <?php if($payment_done): ?>
                     <div class="col-12 text-center">
                            <p>No products found.</p>
                        </div>
                    <?php endif; ?>
            </div>
        </div>
    </div>
</div>












                            <!-- profile -->

                            <div id="profile" class="j-tab p-3" style="display: none;">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <h3
                                            style="font-family: var(--fontFamily-forum); font-size:25px; color:#A07E55; padding:5px;">
                                            Profile</h3>
                                        <div class="card bg-white border-0">
                                            <div class="col-md-12">
                                                <div class="mb-3 float-end">
                                                    <div class="mb-0 text-center btnsubmit">
                                                        <button class="save-btn btn-primary" data-bs-toggle="modal"
                                                            data-bs-target="#addressModal" type="button"><i
                                                                class="fa fa-plus"></i> Add Address</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="menubar">
                                                <div class="contact-form">
                                                    <form method="POST" class="update_profile">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Name*" name="name"
                                                                        value="<?php if(!empty(Auth::user()->name)): ?> <?php echo e(Auth::user()->name); ?> <?php endif; ?>"
                                                                        style="font-size: 14px; font-family: var(--fontFamily-dm_sans);">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <input type="email" class="form-control"
                                                                        placeholder="Email*" name="email"
                                                                        value="<?php if(!empty(Auth::user()->email)): ?> <?php echo e(Auth::user()->email); ?> <?php endif; ?>"
                                                                        style="font-size: 14px; font-family: var(--fontFamily-dm_sans);">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <input type="date" class="form-control"
                                                                        placeholder="Date of Birth*(m-d-Y)" name="dob"
                                                                        value="<?php if(!empty(Auth::user()->dob)): ?> <?php echo e(date('dd-mm-yyyy', strtotime(Auth::user()->dob))); ?> <?php endif; ?>"
                                                                        style="font-size: 14px; font-family: var(--fontFamily-dm_sans);">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <select name="age" id="age-group"
                                                                        class="form-control">
                                                                        <option>Age Group</option>
                                                                        <option value="10-25"
                                                                            <?php if(!empty(Auth::user()->age)): ?> <?php echo e(Auth::user()->age == '10-25' ? 'selected' : ''); ?> <?php endif; ?>>
                                                                            10 - 25</option>
                                                                        <option value="15-25"
                                                                            <?php if(!empty(Auth::user()->age)): ?> <?php echo e(Auth::user()->age == '15-25' ? 'selected' : ''); ?> <?php endif; ?>>
                                                                            15 - 25</option>
                                                                        <option value="20-25"
                                                                            <?php if(!empty(Auth::user()->age)): ?> <?php echo e(Auth::user()->age == '20-25' ? 'selected' : ''); ?> <?php endif; ?>>
                                                                            20 - 25</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                               
                                                            </div>
                                                            <div class="col-md-12">
                                                               <div class="mb-0 text-center btnsubmit">
                                                                  <button name="submit" type="submit" class="save-btn btn-primary">Save</button>
                                                               </div>

                                                            </div>

                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="row">
                                                    <div class="user_address_show"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Add Address-->
                       <div class="modal fade" id="addressModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog  modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"
                                            style="font-family: var(--fontFamily-forum); font-size:35px; color:#A07E55; padding:5px;">
                                            Add New Address</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="contact-form" style="padding: 20px !important;">
                                            <form class="user_address" method="POST">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="Flat No" name="house"
                                                                style="font-size:14px; font-family: var(--fontFamily-dm_sans);">
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="Apartment Name" name="apartment"
                                                                style="font-size:14px; font-family: var(--fontFamily-dm_sans);">
                                                        </div>
                                                    </div>
                                                     <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="Street" name="street"
                                                                style="font-size:14px; font-family: var(--fontFamily-dm_sans);">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="City" name="city"
                                                                style="font-size:14px; font-family: var(--fontFamily-dm_sans);">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="State" name="state"
                                                                style="font-size:14px; font-family: var(--fontFamily-dm_sans);">
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <input type="number" class="form-control"
                                                                placeholder="Pin Code" name="cross_street"
                                                                style="font-size:14px; font-family: var(--fontFamily-dm_sans);">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3 "
                                                            style="font-size:14px; font-family: var(--fontFamily-dm_sans);">
                                                            <textarea class="form-control" placeholder="Landmark / special Instruction" name="instruction"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 formrow formbtn">
                                                        <button type="submit" name="submit"
                                                            class="btn btn-primary w-100 btn-addres">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Edit User Address-->
                           <div class="modal fade" id="editAddModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog  modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Update Address</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="contact-form" style="padding: 20px !important;">
                                            <form class="update_user_address" method="POST">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="Flat No" id="edit_house" name="house">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="Apartment" id="edit_apartment"
                                                                name="apartment">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="Street" id="edit_street" name="street">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="City" id="edit_city" name="city">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="State" id="edit_state" name="state">
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <input type="number" class="form-control"
                                                                placeholder="Pin Code" id="edit_cross_street"
                                                                name="cross_street">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3 ">
                                                            <textarea class="form-control" placeholder="Landmark / special Instruction" name="instruction" id="edit_instruction"></textarea>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="address_id" id="edit_address_id">
                                                    <div class="col-lg-12 formrow formbtn">
                                                        <button type="submit" name="submit"
                                                            class="btn btn-primary w-100">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--order details -->

                        <!--Order history detail-->
                        
                        <!--Order History detail-->

                    </div>
                <!-- Third  Column -->



                
                




<div id="" class="col-md-12 mt-8 px-6 cart_full   " style="display:none" >
                    <div class=" mt-3 border-bottom">

                        <!-- Clearfix 1-->

                        <div class="clearfix">
                            <div class="float-start">
                                <h6>New Order Fill</h6>

                            </div>
                            <div class="float-end">
                                <p class="small"> <?php echo e(date('D m, Y')); ?></p>
                            </div>
                        </div>
                    </div>

                    <!-- End Clearfix 1 -->

                    <div class="cart-scrollbar">

                  

                        <div class="mx-2" id="side_card">
                            <!-- Cart 1 -->
                            <!-- End Cart 1 -->
                        </div>
                    </div>

                    <!--Scroll End -->

                    <!-- Clearfix 2-->
                    
                             <div id="coupon-hide" class="mt-3 d-flex align-items-stretch" style="gap: 8px;">
        
                                <select 
                                        class="form-control-sm w-100"
                                        id="apply_coupon"
                                        placeholder="Apply Coupon"
                                        style="
                                            border: 2px solid #ced4da;
                                            border-radius: 6px;
                                            padding: 8px 12px;
                                            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
                                            outline: none;
                                            transition: border-color 0.3s, box-shadow 0.3s;"
                                        onfocus="this.style.borderColor='#007bff'; this.style.boxShadow='0 0 5px rgba(0, 123, 255, 0.5)';"
                                        onblur="this.style.borderColor='#ced4da'; this.style.boxShadow='0 2px 6px rgba(0, 0, 0, 0.1)';"
                                    >
                                    <option value="">Select a Coupon</option>
    
                                    <?php $__currentLoopData = $coupons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coupon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($coupon->coupon_name); ?>"><?php echo e($coupon->coupon_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
                                    </select>

                            
                            <button 
                                id="coupon_apply" 
                                class="btn btn-danger" 
                                style="
                                    padding: 4px 12px;
                                    font-size: 10px;
                                    border-radius: 6px;
                                    box-shadow: 0 2px 5px rgba(220, 53, 69, 0.3);
                                    transition: box-shadow 0.3s, transform 0.2s;
                                "
                                onmouseover="this.style.boxShadow='0 4px 10px rgba(220, 53, 69, 0.5)'; this.style.transform='translateY(-2px)';"
                                onmouseout="this.style.boxShadow='0 2px 5px rgba(220, 53, 69, 0.3)'; this.style.transform='none';"
                            >
                                Apply
                            </button>
                        </div>
                    <div id="coupon_selected">

                    </div>
                    <div class=" mt-3">
                        <div class="clearfix">
                            <div class="float-start">
                                <p class="mb-0  font-medium ">Sub Total</p>
                            </div>
                            <div class="float-end">
                                <p class="fw-bold" id="sub_total"></p>
                            </div>
                        </div>
                        <div class="clearfix">
                            <div class="float-start">
                                <p class="mb-0  font-medium">Discount</p>
                            </div>
                            <div class="float-end">
                                <p class="fw-bold font-medium" id="total_discount"></p>

                            </div>
                        </div>
                    </div>
                    <!-- End Clearfix 2-->
                    <!-- Clearfix 3-->

                    <div class="">
                        <div class="clearfix">
                            <div class="float-start">
                                <p class="mb-0  font-medium" >Tax (Included)</p>
                            </div>
                            <div class="float-end">
                                <p class="fw-bold font-medium" id="tax_inc"></p>
                            </div>
                        </div>
                    </div>

                    <div class="delivery_inc_show" style="border-bottom: 1px dashed #000;">
                        <div class="clearfix">
                            <div class="float-start">
                                <p class="mb-0  font-medium">Delivery</p>
                            </div>
                            <div class="float-end">
                                <p class="fw-bold" id="delivery_inc"></p>
                                <input type="hidden" name="delivery_ch" class="delivery_inc">
                            </div>
                        </div>
                    </div>

                    <div id="redeem-points" class="mt-3">
                        <div style="display: flex;justify-content: space-between;align-items: center;">
                            <div class="font-medium"> Redeem points:  <?php echo e($UserPoints->points); ?> </div><div><span><button style="padding: 1px 8px;font-size: 10px;" class="btn btn-danger" id="redeem">Redeem</button></span></div>
                        </div>
                        <input type="hidden" value="<?php echo e($UserPoints->points); ?>" class="form-control-sm w-100" placeholder="Reedem now"
                            id="redeem_value">
                    </div>

                    <div id="points-redeemed">

                    </div>



                    <!-- End Clearfix 3-->

                    <!-- Clearfix 3-->

                    <div class="mt-3" style="border-bottom: 1px dashed #000;">
                        <div class="clearfix">
                            <div class="float-start">
                                <p class="mb-0 fw-bold text-warning">Total</p>
                            </div>
                            <div class="float-end">
                                <p class="fw-bold text-success" id="total"></p>
                            </div>
                            <input type="hidden" name="sub_total" class="sub_total">
                            <input type="hidden" name="tax" class="tax_inc">
                            <input type="hidden" name="tax" class="discount_value" value="0">
                            <input type="hidden" name="net_amnt" class="total" id="net_amnt">
                        </div>
                    </div>

                    <!-- End Clearfix 3-->

                    <div class="row mt-2">
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" value="Dine-In"
                                    name="home_delivery" checked readonly>
                                <label class="form-check-label din" for="ta">Dine-in</label>
                            </div>
                        </div>
                    </div>
                    <div class="row branches mt-3 mb-4">

                        <select class="form-select" name="branch_id" id="branchId" aria-label="Default select example">
                            <option selected>Select Branch</option>
                            <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($branch->id); ?>"><?php echo e($branch->address); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="adres">
                        <h5 class="my-3" style="display: flex;justify-content: space-between;align-items: center;">
                            Shipping Address <button style="font-size: 11px;padding: 6px 10px;" class="btn btn-primary"
                                data-bs-toggle="modal" data-bs-target="#addressModal" type="button"><i
                                    class="fa fa-plus"></i> Add Address</button></h5>
                        <div class="row">

                            <?php if($ship): ?>
                                <?php $__currentLoopData = $ship; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-12">
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input check1" name="address"
                                                value="<?php echo e($item->id); ?>">
                                            <label class="form-check-label" for="check1">
                                                <?php echo e($item->state); ?>,<?php echo e($item->house); ?>,<?php echo e($item->street); ?>

                                                <?php echo e($item->apartment); ?>,<?php echo e($item->cross_street); ?></label>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                    </div><br>
                    <!--<h5 class="my-3">Payment Method</h5>-->
                    <div class="row payment">
                        <div class="col-xl-4 col-lg-6 col-md-6">    
                        </div>
                    </div>
                    <div class="row  mb-6">
                     <button class="btn  hover:bg-gray-300" id="place_order" style="color: black;
                     border: 2px solid black ;">Place Order</button>
                  </div>
                </div>







</div>
         </div>
        </div>
        </div>
        </div>
        <div class="modal fade" id="customisable" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Customise</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <div class="container px-4">
                            <div class="row" class="accordion" id="new_point">
                            </div>
                        </div>
                    </div>
                    <!-- End Modal Body -->
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="combo_detail" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Combo Pack Detail</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <div class="container px-0 mt-3">
                            <div class="row" class="accordion" id="combo_pack_detail">
                            </div>
                        </div>
                    </div>
                    <!-- End Modal Body -->
                </div>
            </div>
        </div>
        <div class="modal fade" id="pizzaSidesModal" tabindex="-1">
            <div class="modal-dialog modal-sm modal-dialog-centered modal-sm-mid">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="font-size: 14px">Select the side you want
                            your
                            toppings</h5>
                        
                    </div>
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body display-flex-space-between">
                                        <div class="text-center">
                                            <input class="toppingdirection" id="left" type="radio" value="left"
                                                name="spreadPart" />
                                            <label class="avatar-container p--50" for="left"></label>
                                            <p><span>Left side</span></p>
                                        </div>
                                        <div class="text-center">
                                            <input class="toppingdirection" id="whole" type="radio" value="whole"
                                                checked name="spreadPart" />
                                            <label class="avatar-container p-100" for="whole"></label>
                                            <p><span>Whole pizza</span></p>
                                        </div>
                                        <div class="text-center">
                                            <input class="toppingdirection" id="right" type="radio" value="right"
                                                name="spreadPart" />
                                            <label class="avatar-container p-50" for="right"></label>
                                            <p><span>Right side</span></p>
                                        </div>
                                        <div class="text-center">
                                            <input class="toppingdirection" id="quarter" type="radio"
                                                value="quarter" name="spreadPart" />
                                            <label class="avatar-container p-25" for="quarter"></label>
                                            <p><span>Per Slice</span></p>
                                        </div>
                                        <input type="hidden" id="poperty_id_for_sides">
                                    </div>
                                    <div class="card-fotter text-center">
                                        <button class="btn btn-success selectSidesButton"
                                            style="margin-bottom: 4%;padding: 7px 25px;">OK</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal Body -->
                </div>
            </div>
        </div>
        </div>
        </div>



    </section>
<?php $__env->startSection('extra_js'); ?>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
    <script>
        $(document).on('change', '.abc', function(e) {
            e.preventDefault()
            var property_id = $(this).val()
            if ($(this).is(':checked')) {
                $('#poperty_id_for_sides').val(property_id)
                $('#pizzaSidesModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
                $('#pizzaSidesModal').modal('show');
            } else {
                $('.appendSide-' + property_id).html('')
            }
        });

        $(function() {

            $('.selectSidesButton').click(function(e) {
                e.preventDefault()
                var property_id = $('#poperty_id_for_sides').val()
                if ($('.toppingdirection:checked').val() == 'left') {
                    $('.appendSide-' + property_id).html(
                        `<div class="avatar-container p--50"></div><input type="hidden" name="p-${property_id}" value="left">`
                    )
                } else if ($('.toppingdirection:checked').val() == 'right') {
                    $('.appendSide-' + property_id).html(
                        `<div class="avatar-container p-50"></div><input type="hidden" name="p-${property_id}" value="right">`
                    )
                } else if ($('.toppingdirection:checked').val() == 'quarter') {
                    $('.appendSide-' + property_id).html(
                        `<div class="avatar-container p-25"></div><input type="hidden" name="p-${property_id}" value="quarter">`
                    )
                } else {
                    $('.appendSide-' + property_id).html(
                        `<div class="avatar-container p-100"></div><input type="hidden" name="p-${property_id}" value="whole">`
                    )
                }
                $('#pizzaSidesModal').modal('hide');
            })
        })

        $(document).ready(function() {

            $('.adres').hide();
            $('.branches').hide();

            $("input[id$='hmd']").click(function() {
                $('.adres').show();
                $('.branches').hide();
            });

            $("input[id$='ta']").click(function() {
                $('.adres').hide();
                $('.branches').show();
            });
        });

        $(document).ready(function() {
            sessionStorage.clear();
            const url = String(window.location.href)
            const u = url.split('?=')
            if (u.length === 2) {
                const a = u[1]
                $('.food-card').removeClass('repair-active-new')
                $(`a[data-target="#${a}"] .card`).addClass('repair-active-new')
                $('.j-tab').hide()
                $(`#${a}`).show()
            }
            $(".j-nav").click(function(e) {
                e.preventDefault();
                const target = $(this).attr('data-target')
                $('.j-tab').hide()
                $(target).show()
                const name = $(this).attr('data-name')
                // history.pushState({}, "POS", "pos.html?=" + name)
            });
            $('.sel-portion').click(function() {
                let portionId = $(this).val()
                let itemNumber = $(this).parent().parent().siblings('.itemNumber').val()
                let itemId = $(this).parent().parent().siblings('.itemNumber').val()

                sessionStorage.setItem(`ITEM_NUMBER${itemNumber}`, `${itemId},${portionId}`);

            })
            $('.accordion-button ').click(function() {
                let button = $(this).siblings().children().children().children('.itemNumber').val()
                $("input[type=radio][name=portion" + button + "]").prop('checked', false);

                sessionStorage.removeItem(`ITEM_NUMBER${button}`);
            })

            $('.add_topping').click(function() {
                alert('hello');
                exit;
                let totalItems = '<?php echo count($extra); ?>';
                let fd = new FormData();
                fd.append('_token', "<?php echo e(csrf_token()); ?>");
                let obj = {};

                for (let i = 1; i <= totalItems; i++) {
                    fd.append(i, sessionStorage.getItem(`ITEM_NUMBER${i}`))
                }
               

                $.ajax({
                    url: "<?php echo e(route('website.extra_topping')); ?>",
                    type: "POST",
                    data: fd,
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        // $('.loader').show();
                    },
                    success: function(result) {
                        console.log(result)
                        // $('#customisable').modal('hide')
                    },
                    complete: function() {
                        // $('.loader').hide();
                    },
                    error: function(jqXHR, exception) {
                        $('.loader').hide();
                    }
                });
            })
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.menu-add-class .class-add .food-card').click(function() {
                $('.food-card').removeClass("repair-active-new");
                $(this).addClass("repair-active-new");
            });
            $('.click-menu').click(function() {
                $('.click-menu').removeClass("add-menu");
                $(this).addClass("add-menu");
            });
            $('.click-menu-2').click(function() {
                $('.click-menu-2').removeClass("add-menu-2");
                $(this).addClass("add-menu-2");
            });
            $('.click-menu-3').click(function() {
                $('.click-menu-3').removeClass("add-menu-3");
                $(this).addClass("add-menu-3");
            });
            $('.payment .payment-item').click(function() {
                $('.payment-item').removeClass("repair-active");
                $(this).addClass("repair-active");
            });
        });
        $(document).ready(function() {
            $('#example').DataTable();
            $('.catg-link').click(function(argument) {
                $(this)[0].scrollIntoView({
                    behavior: "smooth",
                    block: "nearest",
                    inline: "center"
                })
            })
        });
    </script>
    <script>
        // Topping Added
        $("body").on("click", ".topping_added", function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            console.log(id);
            let fd = new FormData()
            fd.append('_token', "<?php echo e(csrf_token()); ?>");
            fd.append('id', id);
            $.ajax({
                url: "<?php echo e(route('website.extra_variants')); ?>",
                type: "POST",
                data: fd,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: function() {
                    // $('.loader').show();
                },
                success: function(result) {
                    console.log(result)
                    $("#new_point").html(result.data);
                    
                    $('.owl-carousel').owlCarousel({
                        loop: false,
                        margin: 10,
                        nav: true,
                        responsive: {
                            0: {
                                items: 1
                            },
                            600: {
                                items: 3
                            },
                            1000: {
                                items: 5
                            }
                        },
                        navText: ["<i class='fa fa-chevron-left'></i>",
                            "<i class='fa fa-chevron-right'></i>"
                        ]

                    })
                },
                complete: function() {
                    // $('.loader').hide();
                },
                error: function(jqXHR, exception) {
                    $('.loader').hide();
                }
            });
            $("#customisable").modal("toggle");
        })

        $(function() {
            var limit = 15;
            var newest = "";
            var asc = "";
            var cate_id = "";
            var sub_cate_id = "";
            var branch_id = <?php echo e($branch_id); ?>;
            // alert(branch_id);
            //load products
            $.fn.product = function(limit, newest, asc, cate_id, sub_cate_id) {
                    $.ajax({
                        type: "GET",
                        data: {
                            "limit": limit,
                            "newest": newest,
                            "asc": asc,
                            "cate_id": cate_id,
                            "sub_cate_id": sub_cate_id,
                            "branch_id": branch_id,
                        },
                        url: "<?php echo e(route('website.get_menu')); ?>",
                        beforeSend: function () {
                            $('.loaded').show();
                        },
                        success: function (data) {
                            console.log(data)
                            let datas = '';
                            let load = '';
                            if (data.products.length > 0) {
                                $.each(data.products, function (i, val) {
                                    let dis = val.discount || 0;
                                    let price = val.discount ? (val.new_price - (val.new_price * dis / 100)) : val.new_price;
                                    let discount = val.discount ? '<strike><span class="text-danger">$' + parseFloat(val.new_price).toFixed(2) + '</span></strike><span><br><b>Discount ' + dis + '%</b></span>' : '';
                                    let addBtn = '';

                                    if (val.hasVarient || val.hasDefaultVarient) {
                                        addBtn = '<a class="p-2 btn-primary topping_added flex items-center normal-case justify-center" style="border: 1px solid #b91c1c; border-radius: 0.5rem;" data-id="' + val.id + '" data-stock="' + val.stock + '" data-disabled="false"><i class="fa fa-cart-shopping"></i> Add</a>';
                                    } else {
                                        addBtn = '<a class="p-2 btn-primary add_to_cart normal-case flex items-center justify-center" style="border: 1px solid #b91c1c; border-radius: 0.5rem;" data-id="' + val.id + '" data-discount_percent="' + dis + '" data-normal_price="' + parseFloat(val.price).toFixed(2) + '" data-discounted_price="' + parseFloat(price).toFixed(2) + '" data-stock="' + val.stock + '" data-disabled="false"><i class="fa fa-cart-shopping"></i> Add</a>';
                                    }

                                    // Disable button if out of stock
                                    if (val.stock <= 0) {
                                        addBtn = addBtn.replace('data-disabled="false"', 'data-disabled="true"').addClass('disabled').text('Out of Stock');
                                    }

                                    // Format the price for the item
                                    var priceC = '<b><span class="text-success">$' + parseFloat(price).toFixed(2) + '</b></span>&nbsp;&nbsp;' + discount;
                                    var sty = val.hasVarient || val.hasDefaultVarient ? 'style="font-size: 12px;line-height: 16px; height:192px; overflow:scroll;"' : '';

                                    var url = "<?php echo e(url('')); ?>" + val.product_img;
                                    datas += `
<div class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/4 p-2 ">
  <div class="bg-white shadow-md rounded-lg overflow-hidden h-[200px] mb-2">
    <div class="p-4 flex justify-between justify-center items-center  space-x-4 h-full">
    <div>
    <img src="${url}" alt="" class="w-20 h-20 sm:w-24 sm:h-24 object-cover rounded-md self-start">
    </div>

       <div>
          <p class="text-left font-semibold mb-1">${val.product_name}</p>
          <p class="text-left ${sty}">${priceC}</p>
        </div>
        <div class="flex justify-between justify-center items-center">
          <div class="text-sm text-gray-600">
            ${(val.hasVarient || val.hasDefaultVarient) ? `<a href="#" data-id="${val.id}" class="text-blue-600 hover:underline topping_added"><i class="fa fa-cutlery"></i> Customize</a>` : ''}
          </div>
         
       
      </div>
       <div class="shrink-0">
            ${addBtn}
          </div>
    </div>
  </div>
</div>`;


                                });

                                // Load more functionality
                                if (data.limit <= data.total) {
                                    load += '<div class="page-pagination">' +
                                        '<ul class="pagination justify-content-center">' +
                                        '<button class="btn btn-primary load_more" data-load_more="' + data.limit + '">' +
                                        '<i class="fas fa-spinner fa-spin load_more_spin p-2"></i>Load More</button>' +
                                        '</ul>' +
                                        '</div>';
                                }
                            }

                            $('#menu_list').html(datas);
                            $(".more").html(load);
                        },
                        complete: function () {
                            $('.loaded').hide();
                        },
                    });    
            }
            $.fn.product();

            $('body').on('click', '.load_more', function(e) {
                var load_more = $(this).data('load_more');
                limit = 10 + load_more;
                $.fn.product(limit, newest, asc, cate_id, sub_cate_id);
            });

            $('body').on('click', '.get_menu1', function(e) {
                var sub_cate_id = $(this).data('id');
                $.fn.product(limit, newest, asc, cate_id, sub_cate_id);

            });


            //   // filter
            $('body').on('click', '.get_menu', function(e) {
                var cate_id = $(this).data('id');
                $.fn.subCateory(cate_id);
                $.fn.product(limit, newest, asc, cate_id, sub_cate_id);

            });

            // Get Sub Category
            $.fn.subCateory = function(cate_id) {
                $.ajax({
                    type: "GET",
                    data: {
                        "limit": limit,
                        "newest": newest,
                        "asc": asc,
                        "cate_id": cate_id
                    },
                    url: "<?php echo e(route('website.get_sub_category')); ?>",
                    beforeSend: function() {
                        $('.loaded').show();
                    },
                    success: function(data) {
                        let datas = '';

                        if (data.data.length > 0) {

                            $.each(data.data, function(i, val) {
                                var url = "<?php echo e(url('')); ?>" + val.image;
                                // datas += '<li class="nav-item">' +
                                //     '<button class="nav-link catg-link d-flex gap-2  align-items-center justify-center rounded-pill px-4 get_menu1" data-id="' +
                                //     val.id +
                                //     '" id="pills-all" data-bs-toggle="pill" data-bs-target="#all">' +
                                //     '<img src="' + url +
                                //     '" alt="" style="width:40px;height: 40px;border-radius: 50%;" class="lg:me-4 sm:me-2 ">' +
                                //     val.name + '</button>' +
                                //     '</li>';
                                datas += `
<li class="flex-shrink-0 inline-flex flex-col items-center justify-center min-w-[100px] text-black sm:flex-row sm:rounded-full sm:px-4 sm:py-2 sm:gap-3 lg:w-60 lg:h-24 nav-item get_menu1" 
    id="pills-all" 
    data-bs-toggle="pill" 
    data-bs-target="#all" 
    data-id="${val.id}" 
    type="button">
    <img src="${url}" alt="${val.name}" 
        class="w-16 h-16 sm:w-20 sm:h-20 lg:w-20 lg:h-20 rounded-full object-cover shadow-md">
    <p class="text-base font-semibold mt-2 sm:mt-0">${val.name}</p>
</li>`;
                            })
                        } else {
                            datas = '';
                        }
                        $('.sub_category_list').html(datas);
                    },
                    complete: function() {
                        $('.loaded').hide();

                    },
                })
            }
            // Add to cart
            $("body").on("click", ".add_to_cart", function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                var branch_id = '<?php echo e($branch_id); ?>'
                var table_id = '<?php echo e($table_id); ?>'
                var discount_percent = $(this).data('discount_percent');
                var discounted_price = $(this).data('discounted_price');
                var normal_price = $(this).data('normal_price');
                let fd = new FormData()
                fd.append('_token', "<?php echo e(csrf_token()); ?>");
                fd.append('branch_id', branch_id);
                fd.append('table_id', table_id);
                fd.append('id', id);
                fd.append('discount_percent', discount_percent);
                fd.append('discounted_price', discounted_price);
                fd.append('normal_price', normal_price);
                $.ajax({
                    url: "<?php echo e(route('website.add_to_cart')); ?>",
                    type: "POST",
                    data: fd,
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        // $('.loader').show();
                    },
                    success: function(result) {
                        if (result.status) {
                            iziToast.success({
                                title: '',
                                message: result.msg,
                                position: 'topRight'
                            });
                            $.fn.cart();
                            $.fn.sideCart();
                        } else {
                            iziToast.error({
                                title: '',
                                message: result.msg,
                                position: 'topRight'
                            });
                        }
                    },
                    complete: function() {
                        // $('.loader').hide();
                    },
                    error: function(jqXHR, exception) {
                        $('.loader').hide();
                    }
                });
            })
            // Cart List
            $.fn.cart = function() {
                var branch_id = <?php echo e($branch_id); ?>;
                var table_id = <?php echo e($table_id); ?>;
                $.ajax({
                    type: "GET",
                    url: "<?php echo e(route('website.get_cart_list_ajax')); ?>",
                    data: {
                        branch_id: branch_id,
                        table_id:   table_id,
                    },
                    beforeSend: function() {
                        $('.loaded').show();
                    },
                    success: function(data) {
                        let datas = '';
                        if (data.products.length > 0) {
                            $.each(data.products, function(i, val) {
                                console.log(val.image);
                                if (val.discount) {
                                    if (val.hasVarient) {
                                        var price = val.grandTotal;
                                    } else {
                                        var dis = val.discount;
                                        var price = (val.grandTotal - (val.grandTotal * val
                                            .discount / 100));
                                    }
                                } else {
                                    var dis = 0;
                                    var price = val.grandTotal;
                                }

                                if (val.type == "combo") {
                                    console.log(val.package_name);
                                    var url = "<?php echo e(url('')); ?>" + val.image;
                                    var name = val.package_name;
                                } else {
                                    var url = "<?php echo e(url('')); ?>" + val.product_img;
                                    var name = val.product_name;
                                }

                                if (val.hasVarient) {
                                    var varient = '<br><span><b>Size : </b>' + val
                                        .varientName + '</span>'
                                } else {
                                    var varient = ''
                                }

                                if (val.hasProperties) {
                                    var Properties = '<br><span><b>Toppings : </b>'
                                    $.map(val.propertyItems, function(elem, index) {
                                        Properties += elem.name + ','
                                    })
                                    Properties += '</span>'
                                } else {
                                    var Properties = ''
                                }

                                if (val.hasToppings) {
                                    var Toppings = '<br><span><b>Crust : </b>'
                                    $.map(val.ToppingItems, function(elem, index) {
                                        Toppings += elem.name + ','
                                    })
                                    Toppings += '</span>'
                                } else {
                                    var Toppings = ''
                                }

                           
                                // cart

                                datas += `
                                <div class=" rounded-md mb-3 p-4 shadow">
                                <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-center text-center md:text-left">

                                    <!-- Remove button -->
                                    <div class="col-span-12 text-right">
                                    <a href="javascript:void(0)" class="remove_to_cart text-red-600" data-id="${val.id}">
                                        <i class="fa fa-close mr-2"></i>
                                    </a>
                                    </div>

                                    <!-- Product image -->
                                    <div class="col-span-12 md:col-span-4 xl:col-span-3 flex justify-center">
                                    
                                
                                    
                                    <img src="${url}" alt="Product Image"
                                        class="w-20 h-20 sm:w-24 sm:h-24 md:w-36 md:h-36 object-cover rounded-md" />
                                        
                                        </div>



                                    <!-- Product info -->
                                    <div class="col-span-12 md:col-span-8 xl:col-span-5">
                                    <div class="px-0 text-center md:text-left">
                                        <p class="font-bold text-base">${name}</p>
                                        <p class="text-sm">
                                        <span class="text-green-600 font-bold">$${price}</span><br>
                                        ${varient}${Toppings}
                                        </p>
                                    </div>
                                    </div>

                                    <!-- Quantity controls with + Add design -->
                                    <div class="col-span-12 md:col-span-8 xl:col-span-4 flex justify-center md:justify-start items-center">
                                    <div class="quantity-wrapper border-2 border-red-700  py-2 px-4  rounded-md" data-id="${val.id}">
                                        ${
                                        val.qty == 0
                                            ? `
                                        <!-- + Add Button -->
                                        <button class="text-red-700 font-semibold  text-sm add-to-cart" 
                                                data-id="${val.id}">
                                        + Add
                                        </button>`
                                            : `
                                        <!-- Quantity Control -->
                                        <div class="flex items-center ">
                                        <button class="text-gray-700 text-sm px-2 decrement " data-id="${val.id}" data-qty="${val.qty}">−</button>
                                        <span class="px-2 font-semibold">${val.qty}</span>
                                        <button class="text-gray-700 text-sm px-2 increment" data-id="${val.id}" data-qty="${val.qty}">+</button>
                                        </div>`
                                        }
                                    </div>
                                    </div>

                                    <!-- Additional Properties -->
                                    <div class="col-span-12 xl:col-start-4 xl:col-span-9 mt-2 text-center md:text-left">
                                    ${Properties}
                                    </div>

                                </div>
                                </div> `;
                            })
                        } else {

                        }
                        $('#cart_list').html(datas);
                    },
                    complete: function() {
                        $('.loaded').hide();

                    },
                })
            }
            $.fn.cart();


            // Remove for cart
            $("body").on("click", ".remove_to_cart", function(e) {
                e.preventDefault();
                var cart_id = $(this).data('id');
                let fd = new FormData()
                fd.append('_token', "<?php echo e(csrf_token()); ?>");
                fd.append('cart_id', cart_id);
                $.ajax({
                    url: "<?php echo e(route('website.remove_from_cart')); ?>",
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
                            $.fn.cart();
                            $.fn.sideCart();
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
                    }
                });
            })

            // Increament Qty
            $("body").on("click", ".increment", function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                var qty = $(this).data('qty');
                let fd = new FormData()

                fd.append('_token', "<?php echo e(csrf_token()); ?>");
                fd.append('qty', qty);
                fd.append('id', id);
                $.ajax({
                    url: "<?php echo e(route('website.qty_increase')); ?>",
                    type: "POST",
                    data: fd,
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        // $('.loader').show();
                    },
                    success: function(result) {
                        if (result.status) {
                            iziToast.success({
                                title: '',
                                message: result.msg,
                                position: 'topRight'
                            });
                            $.fn.cart();
                            $.fn.sideCart();
                        } else {
                            iziToast.error({
                                title: '',
                                message: result.msg,
                                position: 'topRight'
                            });
                        }
                    },
                    complete: function() {
                        // $('.loader').hide();
                    },
                    error: function(jqXHR, exception) {
                        $('.loader').hide();
                    }
                });
            })

            // Qty decrese
            $("body").on("click", ".decrement", function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                var qty = $(this).data('qty');
                let fd = new FormData()

                fd.append('_token', "<?php echo e(csrf_token()); ?>");
                fd.append('qty', qty);
                fd.append('id', id);
                $.ajax({
                    url: "<?php echo e(route('website.qty_decrease')); ?>",
                    type: "POST",
                    data: fd,
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        // $('.loader').show();
                    },
                    success: function(result) {
                        if (result.status) {
                            iziToast.success({
                                title: '',
                                message: result.msg,
                                position: 'topRight'
                            });
                            $.fn.cart();
                            $.fn.sideCart();
                        } else {
                            iziToast.error({
                                title: '',
                                message: result.msg,
                                position: 'topRight'
                            });
                        }
                    },
                    complete: function() {
                        // $('.loader').hide();
                    },
                    error: function(jqXHR, exception) {
                        $('.loader').hide();
                    }
                });
            })

            // Side cart show
            $.fn.sideCart = function() {
            // alert();
                var branch_id = <?php echo e($branch_id); ?>;
                var table_id = <?php echo e($table_id); ?>;

                $.ajax({
                    type: "GET",
                    url: "<?php echo e(route('website.get_cart_list_ajax')); ?>",
                    data: {
                        branch_id: branch_id,
                        table_id: table_id,
                    },
                    beforeSend: function() {
                        $('.loaded').show();
                    },
                    success: function(data) {
                        console.log(data)
                        let datas = '';
                        var sub_total = 0;
                        var net_amnt = 0;
                        var tax = 0;
                        if (data.products.length > 0) {
                            $.each(data.products, function(i, val) {
                                if (val.discount) {
                                    if (val.hasVarient) {
                                        var price = val.grandTotal;
                                    } else {
                                        var dis = val.discount;
                                        var price = (val.grandTotal - (val.grandTotal * val
                                            .discount / 100));
                                    }
                                } else {
                                    var dis = 0;
                                    var price = val.grandTotal;
                                }
                                sub_total += (val.qty * price);
                                net_amnt += (val.qty * price + (val.qty * price * val.tax) /
                                    100)
                                tax += ((val.tax / 100) * price) * val.qty
                                if (val.type == "combo") {
                                    // alert(hello);
                                    var url = "<?php echo e(url('')); ?>" + val.image;
                                    var name = val.package_name;
                                } else {
                                    var url = "<?php echo e(url('')); ?>" + val.product_img;
                                    var name = val.product_name;
                                }
                                if (val.hasVarient) {
                                    var varient = '<br><span><b>Size : </b>' + val
                                        .varientName + '</span>'
                                } else {
                                    var varient = ''
                                }

                                if (val.hasProperties) {
                                    var Properties = '<div><b>Toppings : </b>'
                                    $.map(val.propertyItems, function(elem, index) {
                                        Properties +=
                                            '<p style="display: flex; align-items: center;justify-content: space-between;padding: 3% 18% 0% 0%;">' +
                                            elem.name + '</p>'
                                    })
                                    Properties += '</div>'
                                } else {
                                    var Properties = ''
                                }

                                if (val.hasToppings) {
                                    var Toppings = '<br><span><b>Crust : </b>'
                                    $.map(val.ToppingItems, function(elem, index) {
                                        Toppings += elem.name + ','
                                    })
                                    Toppings += '</span>'
                                } else {
                                    var Toppings = ''
                                }

                                // cart for order below -> changes badshah
                                // datas += `
                                // <div class="rounded-md mb-3 p-4 shadow ">
                                // <div class="grid grid-cols-4 md:grid-cols-12 gap-4 items-center justifuy-center text-center md:text-left">    

                                //     <!-- Product image -->
                                // <div class="grid grid-cols-3 col-span-12 gap-2  items-center justifuy-center text-center place-items-center">
                                //     <div class=" flex justify-center">
                                //     <img src="${url}" alt="Product Image"
                                //         class="w-20 h-20 sm:w-24 sm:h-24 md:w-48 md:h-48 object-cover rounded-md" />
                                //     </div>

                                //     <!-- Product info -->
                                //     <div class="">
                                //     <div class="px-0  flex flex-col justify-center items-center text-center md:text-left">
                                //         <p class="font-bold text-base">${name}</p>
                                //         <p class="text-sm">
                                //         <p class="text-green-600 font-bold">$${sub_total}</p><br>
                                //         ${varient}${Toppings}
                                //         </p>
                                //     </div>
                                //     </div>

                                //     <!-- Quantity controls with + Add design -->
                                //     <div class=" flex justify-center md:justify-start items-center">
                                //     <div class="quantity-wrapper border-2 border-red-700 py-2 px-4 rounded-md" data-id="${val.id}">
                                //         ${
                                //         val.qty == 0
                                //             ? `
                                //         <!-- + Add Button -->
                                //         <button class="text-red-700 font-semibold text-sm add-to-cart" 
                                //                 data-id="${val.id}">
                                //         + Add
                                //         </button>`
                                //             : `
                                    

                                //         <!-- Quantity Control -->
                                //             <div class="flex items-center justify-center">
                                //                 ${
                                //                 val.qty == 1
                                //                         ? `<button class="remove_to_cart text-red-600" data-id="${val.id}">−</button>`
                                //                         : `<button class="text-gray-700 text-sm px-2 decrement" data-id="${val.id}" data-qty="${val.qty}">−</button>`
                                //             }
                                //                 <span class="px-2 font-semibold quantity">${val.qty}</span>
                                //             <button class="text-gray-700 text-sm px-2 increment" data-id="${val.id}" data-qty="${val.qty}">+</button>
                                //             </div>`
                                //         }
                                //     </div>
                                //     </div>
                                // </div>

                                //     <!-- Additional Properties -->
                                //     <div class="col-span-12 xl:col-start-4 xl:col-span-9 mt-2 text-center md:text-left">
                                //     ${Properties}
                                //     </div>

                                // </div>
                                // </div>
                                // `;
// cart for order below -> changes badshah

datas += `
<div id="cart-scroll-wrapper" class="overflow-y-auto max-h-[250px] p-4 flex flex-col-reverse space-y-reverse space-y-4 scrollbar-thin scrollbar-thumb-red-500 scrollbar-track-gray-200">

  <div class="rounded-md mb-3 p-3 shadow bg-white">
    <div class="flex flex-wrap items-center justify-between gap-2">

      <!-- Product Image -->
      <div class="flex-shrink-0">
        <img src="${url}" alt="Product Image" class="w-16 h-16 sm:w-20 sm:h-20 object-cover rounded-md shadow-sm" />
      </div>

      <!-- Product Info (more width on mobile now) -->
      <div class="flex-grow min-w-[60%] sm:min-w-[65%] px-2">
        <p class="font-semibold text-sm sm:text-base text-gray-800 truncate">${name}</p>
        <p class="text-xs sm:text-sm text-gray-600 leading-tight">
          <span class="text-green-600 font-bold">$${sub_total}</span><br>
          ${varient} ${Toppings}
        </p>
      </div>

      <!-- Quantity Controls -->
      <div class="flex-shrink-0">
        <div class="quantity-wrapper border-2 border-red-700 px-2 py-1 rounded flex items-center space-x-1" data-id="${val.id}">
          ${
            val.qty == 0
            ? `<button class="add-to-cart text-red-700 font-semibold text-xs px-2 py-1 rounded hover:bg-red-100">+ Add</button>`
            : `
              <div class="flex items-center space-x-1">
                ${
                  val.qty == 1
                  ? `<button class="remove_to_cart text-red-600 text-sm font-bold" data-id="${val.id}">−</button>`
                  : `<button class="decrement text-gray-700 text-sm font-bold px-1" data-id="${val.id}" data-qty="${val.qty}">−</button>`
                }
                <span class="text-sm font-semibold quantity">${val.qty}</span>
                <button class="increment text-gray-700 text-sm font-bold px-1" data-id="${val.id}" data-qty="${val.qty}">+</button>
              </div>`
          }
        </div>
      </div>

    </div>

    <!-- Properties Line -->
    <div class="mt-2 text-left text-gray-600 text-xs sm:text-sm">
      ${Properties}
    </div>
  </div>

</div>

`;




                             })
                        } else {

                        }
                        $('.delivery_inc_show').hide()
                        $('#side_card').html(datas); 
                        $("#sub_total").text(parseFloat(sub_total).toFixed(2))
                        $("#tax_inc").text(parseFloat(tax).toFixed(2))
                        // $("#total").text(parseFloat(net_amnt).toFixed(2))
                        if (typeof data.deliveryCharges.hasDeliveryCharges != "undefined") {
                            if (data.deliveryCharges.hasDeliveryCharges) {
                                // alert('ok')
                                $('.delivery_inc_show').show()
                                var delivery_chagre = data.deliveryCharges.deliveryChargesss
                                $("#delivery_inc").text(parseFloat(delivery_chagre).toFixed(2))
                                $(".delivery_inc").val(parseFloat(delivery_chagre).toFixed(2))
                                var priceAfterDelivery = parseFloat(net_amnt) + parseFloat(
                                    delivery_chagre)
                                var coupon_code_percentage = $('.coupon_code_percent').val()
                                if(isNaN(coupon_code_percentage)) {
                                    var coupon_code_percent = 0;
                                }else{
                                    var coupon_code_percent = coupon_code_percentage;
                                }
                                var coupon_discount = (coupon_code_percent / 100) * priceAfterDelivery
                                $('#total_discount').text(coupon_discount)
                                var total_after_coupon_discount = priceAfterDelivery - coupon_discount;

                                var redeem_discount = $('#red_dis').text();
                                if(isNaN(redeem_discount)) {
                                    var red_discount = 0;
                                }else{
                                    var red_discount = redeem_discount;
                                }

                                var total_after_redeem_discount = total_after_coupon_discount - red_discount

                                if(parseFloat(total_after_redeem_discount).toFixed(2) < 0){
                                    $granddTotal = 0;
                                }else{
                                    $granddTotal = parseFloat(total_after_redeem_discount).toFixed(2);
                                }

                                $("#total").text($granddTotal)
                                $(".total").val($granddTotal)
                            } else {
                                // alert('no')
                                $('.delivery_inc_show').hide()
                                var coupon_code_percent = $('.coupon_code_percent').val()
                                if(isNaN(coupon_code_percentage)) {
                                    var coupon_code_percent = 0;
                                }else{
                                    var coupon_code_percent = coupon_code_percentage;
                                }
                                var coupon_discount = (coupon_code_percent / 100) * net_amnt
                                $('#total_discount').text(coupon_discount)
                                var total_after_coupon_discount = net_amnt - coupon_discount;

                                var redeem_discount = $('#red_dis').text();
                                if(isNaN(redeem_discount)) {
                                    var red_discount = 0;
                                }else{
                                    var red_discount = redeem_discount;
                                }

                                var total_after_redeem_discount = total_after_coupon_discount - red_discount

                                if(parseFloat(total_after_redeem_discount).toFixed(2) < 0){
                                    $granddTotal = 0;
                                }else{
                                    $granddTotal = parseFloat(total_after_redeem_discount).toFixed(2);
                                }

                                $("#total").text($granddTotal)
                                $(".total").val($granddTotal)
                            }
                        }

                        $(".sub_total").val(parseFloat(sub_total).toFixed(2))
                        $(".tax_inc").val(parseFloat(tax).toFixed(2))
                        // $(".total").val(parseFloat(net_amnt).toFixed(2))


                    },
                    complete: function() {
                        $('.loaded').hide();

                    },
                })
            }
            $.fn.sideCart();

            
            // Place Order Confirm
            $("body").on("click", "#place_order", function(e) {
                e.preventDefault();

                var sub_total = $(".sub_total").val();
                var tax = $(".tax_inc").val();
                var discount_value = $(".discount_value").val();
                var total = $(".total").val();
                var coupon_code = typeof($(".coupon_code").val()) === "undefined" ? '' : $(".coupon_code").val();
                var delivery_charge = typeof($(".delivery_inc").val()) === "undefined" ? 0 : $(".delivery_inc").val();

                var branch_idd = <?php echo e($branch_id); ?>;
                var table_id = <?php echo e($table_id); ?>;
                var type = $('input[name="payment"]:checked').val() || ''; // Payment method (optional)
                var type_of_delivery = $('input[name="home_delivery"]:checked').val();
                var address = $("input[name='address']:checked").val();
                var branch_id = $('#branchId').find(":selected").val();
                var redeem_points_discount = $('#red_dis').text();

                let fd = new FormData();
                fd.append('_token', "<?php echo e(csrf_token()); ?>");
                fd.append('sub_total', sub_total);
                fd.append('branch_idd', branch_idd);
                fd.append('table_id', table_id);
                fd.append('tax', tax);
                fd.append('discount_value', discount_value);
                fd.append('total', total);
                fd.append('coupon_code', coupon_code);
                fd.append('delivery_charge', delivery_charge);
                fd.append('type', type); // can be blank
                fd.append('address', address);
                fd.append('type_of_delivery', type_of_delivery);
                fd.append('branch_id', branch_id);
                fd.append('redeem_points_discount', redeem_points_discount);
                // ✅ Check if any items are selected
                if (!sub_total || parseFloat(sub_total) <= 0) {
                    iziToast.error({
                        title: '',
                        message: "Please select at least one item to place an order.",
                        position: 'topRight'
                    });
                    return;
                }

                $.ajax({
                    url: "<?php echo e(route('website.place_order')); ?>",
                    type: "POST",
                    data: fd,
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        $('.loader').show();
                    },
                    success: function(result) {
                        console.log(result);
                        if (result.status) {
                            iziToast.success({
                                title: '',
                                message: result.msg,
                                position: 'topRight'
                            });
                            $.fn.cart();
                            $.fn.sideCart();
                            setTimeout(() => {
                                window.location.reload();
                            }, 1000);
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
                    }
                });
            });
             var tables = $('#example').DataTable({
                destroy: true,
                "processing": true,
                pageLength: 10,
                "serverSide": true,
                "ajax": {
                    url: "<?php echo e(route('website.order_history',[$branch_id,$table_id])); ?>",
                    
                    dataFilter: function(data) {
                        var json = jQuery.parseJSON(data);
                        json.recordsTotal = json.recordsTotal;
                        json.recordsFiltered = json.recordsFiltered;
                        json.data = json.data;
                        return JSON.stringify(json); // return JSON string
                    }
                },

                'order': [
                    [1, 'desc']
                ],
                
            });
        })

        //    Profile
        // Update profile
        $('.update_profile').on('submit', function(e) {
            e.preventDefault()
            let fd = new FormData(this)
            fd.append('_token', "<?php echo e(csrf_token()); ?>");
            $.ajax({
                url: "<?php echo e(route('website.user_profile_submit_new')); ?>",
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

        // Extra add to cart
        $("body").on("submit", ".new_add_to_cart", function(e) {
            e.preventDefault();
            let fd = new FormData(this)
            fd.append('_token', "<?php echo e(csrf_token()); ?>");
            $.ajax({
                url: "<?php echo e(route('website.extra_add_to_cart')); ?>",
                type: "POST",
                data: fd,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: function() {
                    // $('.loader').show();
                },
                success: function(result) {
                    console.log(result)
                    if (result.status) {
                        iziToast.success({
                            title: '',
                            message: result.msg,
                            position: 'topRight'
                        });
                        $.fn.cart();
                        $.fn.sideCart();
                        $('#customisable').modal('hide')
                    } else {
                        iziToast.error({
                            title: '',
                            message: result.msg,
                            position: 'topRight'
                        });
                    }
                },
                complete: function() {
                    // $('.loader').hide();
                },
                error: function(jqXHR, exception) {
                    $('.loader').hide();
                }
            });
        })

        // User Address  add
        $("body").on("submit", ".user_address", function(e) {
            e.preventDefault();
            let fd = new FormData(this)
            fd.append('_token', "<?php echo e(csrf_token()); ?>");
            $.ajax({
                url: "<?php echo e(route('website.user_address_add')); ?>",
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
                        $(".user_address")[0].reset();
                        $.fn.user_address();
                        $("#addressModal").modal("toggle");
                        location.reload()
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
                }
            });
        })

        // function for get user address
        $.fn.user_address = function() {
            $.ajax({
                type: "GET",
                url: "<?php echo e(route('website.get_user_address')); ?>",
                beforeSend: function() {
                    $('.loaded').show();
                },
                success: function(data) {
                    let datas = '';
                    if (data.data.length > 0) {
                        $.each(data.data, function(i, val) {
                            datas += '<div class="col-4">';
                            datas += '<div class="card" style="width: 18rem;">';
                            datas += '<div class="card-body">';
                            datas += '<h5 class="card-title">Address</h5>';
                            datas += '<h6 class="card-subtitle mb-2 text-muted"></h6>';
                            datas += '<p class="card-text">' + val.city + ' ' + val.state + ' ' +
                                val.house + ' ' + val.apartment + ' ' + val.cross_street + '</p>';
                            datas +=
                                '<a href="javascript:void(0);"  class="card-link text-primary edit_address" data-id="' +
                                val.id + '" data-city="' + val.city + '" data-state="' + val.state +
                                '" data-house="' + val.house + '" data-apartment="' + val
                                .apartment + '" data-cross_street="' + val.cross_street +
                                '" data-instruction="' + val.instruction + '" data-street="' + val
                                .street + '">Edit</a>&nbsp;&nbsp;&nbsp;';
                            datas +=
                                '<a href="javascript:void(0);"  class="card-link text-danger delete_address" data-id="' +
                                val.id + '">Delete</a>';
                            datas += '</div>';
                            datas += '</div>';
                            datas += '</div>';
                        })
                    } else {}
                    $('.user_address_show').html(datas);
                },
                complete: function() {
                    $('.loaded').hide();

                },
            })
        }
        $.fn.user_address();

        $("body").on("click", ".delete_address", function(e) {
            e.preventDefault();
            var address_id = $(this).data('id');
            let fd = new FormData()
            fd.append('_token', "<?php echo e(csrf_token()); ?>");
            fd.append('address_id', address_id);
            $.ajax({
                url: "<?php echo e(route('website.remove_address')); ?>",
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
                        $.fn.user_address();
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
                }
            });
        })

        // user address edit
        $("body").on("click", ".edit_address", function(e) {
            e.preventDefault();
            var address_id = $(this).data('id');
            var city = $(this).data('city');
            var state = $(this).data('state');
            var house = $(this).data('house');
            var street = $(this).data('street');
            var apartment = $(this).data('apartment');
            var cross_street = $(this).data('city');
            var instruction = $(this).data('instruction');

            $("#edit_city").val(city);
            $("#edit_state").val(state);
            $("#edit_house").val(house);
            $("#edit_apartment").val(apartment);
            $("#edit_cross_street").val(cross_street);
            $("#edit_instruction").text(instruction);
            $("#edit_address_id").val(address_id);
            $("#edit_street").val(street);
            $("#editAddModal").modal("toggle");
        })

        $("body").on("submit", ".update_user_address", function(e) {
            e.preventDefault();
            let fd = new FormData(this)
            fd.append('_token', "<?php echo e(csrf_token()); ?>");
            $.ajax({
                url: "<?php echo e(route('website.update_address')); ?>",
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
                        $(".update_user_address")[0].reset();
                        $("#editAddModal").modal("toggle");
                        $.fn.user_address();
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
                }
            });
        })

        // Order history detail
        // $("body").on("click", ".order_detail", function(e) {
        //     e.preventDefault();
        //     let order_id = $(this).attr('data-id');
        //     var tables = $('#order_detail').DataTable({
        //         destroy: true,
        //         "processing": true,
        //         pageLength: 10,
        //         "serverSide": true,
        //         "ajax": {
        //             url: "<?php echo e(url('order_history_details')); ?>/" + order_id,
        //             dataFilter: function(data) {
        //                 var json = jQuery.parseJSON(data);
        //                 json.recordsTotal = json.recordsTotal;
        //                 json.recordsFiltered = json.recordsFiltered;
        //                 json.data = json.data;
        //                 return JSON.stringify(json); // return JSON string
        //             }
        //         },

        //         'order': [
        //             [1, 'desc']
        //         ],
        //         'columnDefs': [{
        //                 "targets": 0,
        //                 "name": "product_name",
        //                 'searchable': false,
        //                 'orderable': false
        //             },
        //             {
        //                 "targets": 1,
        //                 "name": "base_price",
        //                 'searchable': false,
        //                 'orderable': false
        //             },
        //             {
        //                 "targets": 2,
        //                 "name": "size",
        //                 'searchable': false,
        //                 'orderable': false
        //             },
        //             {
        //                 "targets": 3,
        //                 "name": "qty",
        //                 'searchable': false,
        //                 'orderable': false
        //             },
        //         ],
        //     });

        //     $("#order_history_detail").modal("toggle");
        // })
        $("body").on("click", ".order_detail", function(e) {
    e.preventDefault();
    let order_id = $(this).attr('data-id');

    // Show the container
    $("#order_detail_container").show();

    // Destroy existing DataTable (if any)
    if ($.fn.DataTable.isDataTable('#order_detail_direct')) {
        $('#order_detail_direct').DataTable().destroy();
    }

    // Initialize DataTable for direct display
    $('#order_detail_direct').DataTable({
        destroy: true,
        processing: true,
        serverSide: true,
        pageLength: 10,
        ajax: {
            url: "<?php echo e(url('order_history_details')); ?>/" + order_id,
            dataFilter: function(data) {
                let json = jQuery.parseJSON(data);
                json.recordsTotal = json.recordsTotal;
                json.recordsFiltered = json.recordsFiltered;
                json.data = json.data;
                return JSON.stringify(json);
            }
        },
        order: [[1, 'desc']],
        columnDefs: [
            { targets: 0, name: "product_name", searchable: false, orderable: false },
            { targets: 1, name: "base_price", searchable: false, orderable: false },
            { targets: 2, name: "qty", searchable: false, orderable: false },
            { targets: 3, name: "total", searchable: false, orderable: false }
        ]
    });
});


        // Apply coupon
        $("body").on("click", "#coupon_apply", function(e) {
            e.preventDefault();
            let value = $("#apply_coupon").val();
            let fd = new FormData();
            var total = $("#net_amnt").val();
            fd.append('_token', "<?php echo e(csrf_token()); ?>");
            fd.append('value', value);
            if (!total || parseFloat(total) <= 0) {
                iziToast.error({
                    title: '',
                    message: "Please add food items before applying a coupon.",
                    position: 'topRight'
                });
                return;
            }
            $.ajax({
                url: "<?php echo e(route('website.check_coupon')); ?>",
                type: "POST",
                data: fd,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: function() {
                    // $('.loader').show();
                },
                success: function(result) {
                    if (result.data) {
                        var dis = result.data.discount
                        var total_dis = (dis / 100) * total;
                        var cal = total - ((dis / 100) * total);
                        $("#net_amnt").val(cal);

                        $("#total").text(parseFloat(cal).toFixed(2));
                        $("#total_discount").text(parseFloat(total_dis).toFixed(2));
                        $(".discount_value").val(parseFloat(total_dis).toFixed(2))
                        iziToast.success({
                            title: '',
                            message: 'Coupon applied Successfully',
                            position: 'topRight'
                        });
                       
                        $('#coupon_selected').html(
                            '<div class="d-flex align-items-center" style="gap: 8px;">' +
                                '<span class="text-success small">Coupon <strong>' + value + '</strong> applied ✓</span>' +
                                '<input class="coupon_code" type="hidden" name="coupon_code" value="' + value + '">' +
                                '<input class="coupon_code_percent" type="hidden" name="coupon_code_percent" value="' + dis + '">' +
                            '</div>'
                        )
                        $('#coupon-hide').fadeOut(300)
                        $("#apply_coupon").prop("disabled", true)
                            $("#coupon_apply").prop("disabled", true)
                            $("#apply_coupon").css("background-color", "#e9ecef")
                            $("#coupon_apply").css("background-color", "#adb5bd")
                             $("#apply_coupon").css("cursor", "not-allowed")
                            $("#coupon_apply").css("cursor", "not-allowed")
                        } else {
                        $(".discount_value").val('0')
                        iziToast.error({
                            title: '',
                            message: 'Coupon is not vaild!',
                            position: 'topRight'
                        });
                        $('#coupon_selected').html('')
                    }
                },
                complete: function() {
                    // $('.loader').hide();
                },
                error: function(jqXHR, exception) {
                    $('.loader').hide();
                }
            });
        })
       

        // Apply redeem
        $("body").on("click", "#redeem", function(e) {
            e.preventDefault();
            let fd = new FormData();
            var total = $("#net_amnt").val();
            $('#redeem-points').hide()
            fd.append('_token', "<?php echo e(csrf_token()); ?>");
            $.ajax({
                url: "<?php echo e(route('website.check_redeem')); ?>",
                type: "POST",
                data: fd,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: function() {
                    // $('.loader').show();
                },
                success: function(result) {
                    var redeem_money = result.data.yen / result.data.points
                    var limit = result.data.limit

                    var net_amnt = $("#net_amnt").val();
                    var total = $("#total").text();
                    var redeem_value = $("#redeem_value").val();

                    var redeem_discount = redeem_value * redeem_money
                    if(redeem_discount > limit){
                       var re_discount = limit
                    }else{
                        var re_discount = redeem_discount
                    }

                    var discounted_total = net_amnt - re_discount

                    if(discounted_total < 0) {
                        var final_discounted_price = 0;
                    }else{
                        var final_discounted_price = discounted_total;
                    }

                    $("#net_amnt").val(parseFloat(final_discounted_price).toFixed(2));
                    $("#total").text(parseFloat(final_discounted_price).toFixed(2));

                    $("#points-redeemed").html(`<div class="clearfix">
                            <div class="float-start">
                                <p class="mb-0 small">Redeem points discount</p>
                            </div>
                            <div class="float-end">
                                <p class="fw-bold" id="red_dis">${parseFloat(re_discount).toFixed(2)}</p>
                            </div>
                        </div>`)
                },
                complete: function() {
                    // $('.loader').hide();
                },
                error: function(jqXHR, exception) {
                    $('.loader').hide();
                }
            });
        })

        // Combo Pack
        let newlimit = 10;

        $.fn.combo = function(newlimit) {
            $.ajax({
    type: "GET",
    data: {
        "limit": newlimit,
    },
    url: "<?php echo e(route('website.get_combo_pack')); ?>",
    beforeSend: function () {
        $('.loaded').show();
    },
    success: function (data) {
        let datas = '';
        let load = '';

        if (data.products.length > 0) {
            $.each(data.products, function (i, val) {
                let url = "<?php echo e(url('')); ?>" + val.image;

                datas += `
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="card card-menu mb-3">
                            <div class="card-body ">

                         <div class="flex justify-between items-center sm:gap-4 gap-2">

                            <div>
                            <img src="${url}" alt="${val.package_name}" class="w-20 h-20 sm:w-24 sm:h-24 object-cover rounded-md self-start">
                            
                            </div>
    
                          <div>

                                <p class="fw-bold mt-3 mb-0">${val.package_name}</p>
                                <p>
                                    <b><span class="text-success">$${parseFloat(val.price).toFixed(2)}</span></b>
                                    &nbsp;&nbsp;
                                    <strike><span class="text-danger">$${parseFloat(val.price).toFixed(2)}</span></strike>
                                </p>
                          
                          </div>



                                <div>
                                
                                  <a href="javascript:void(0);"
                                       class="combo_add_to_cart btn normal-case"
                                       style="border: 1px solid #b91c1c; border-radius: 0.5rem; color: #b91c1c; font-size: 8px; padding: 4px 8px;"
                                       data-id="${val.id}">
                                    Add
                                    </a>
                                </div>
                         
                         </div>





                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <a href="javascript:void(0);" data-id="${val.id}" class="show_combo_detail underline">Detail</a>
                                  
                                </div>
                            </div>
                        </div>
                    </div>`;
            });

            if (data.limit <= data.total) {
                load += `
                    <div class="page-pagination">
                        <ul class="pagination justify-content-center">
                            <button class="btn btn-primary load_more" data-load_more="${data.limit}">
                                // <i class="fas fa-spinner fa-spin load_more_spin p-2"></i> Load More
                            </button>
                        </ul>
                    </div>`;
            }
        }

        $('#combo_pack_list').html(datas);
        $(".load_more").html(load);
    },
    complete: function () {
        $('.loaded').hide();
    }
});



        }
        $.fn.combo();

        // Show combo Pack detail
        $("body").on("click", ".show_combo_detail", function(e) {
            e.preventDefault()
            let combo_id = $(this).attr('data-id');
            let fd = new FormData();
            fd.append("_token", "<?php echo e(csrf_token()); ?>"),
                fd.append("combo_id", combo_id);
            $.ajax({
                url: "<?php echo e(route('website.get_combo_pack_detail')); ?>",
                type: "POST",
                data: fd,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $('.loader').show();
                },
                success: function(result) {
                    let combo_data = '';
                    if (result.data.length > 0) {
                        $.each(result.data, function(i, val) {
                            var url = "<?php echo e(url('')); ?>" + val.product_img;
                            combo_data += '<div class="card" style="width: 10rem; ">';
                            combo_data += '<img src="' + url +
                                '" class="card-img-top" alt="...">';
                            combo_data += '<div class="card-body">';
                            combo_data += '<h5 class="card-title">' + val.product_name +
                                '</h5>';
                            combo_data += '</div>';
                            combo_data += '</div>';
                        })

                        $("#combo_pack_detail").html(combo_data)
                        $("#combo_detail").modal("toggle")
                    } else {

                    }
                },
                complete: function() {
                    $('.loader').hide();
                },
                error: function(jqXHR, exception) {
                    $('.loader').hide();
                }
            });
        })


        //Combo pack add to cart
        $("body").on("click", ".combo_add_to_cart", function(e) {
            e.preventDefault();
            let combo_id = $(this).attr('data-id');
            var branch_idd = <?php echo e($branch_id); ?>;
            var table_id = <?php echo e($table_id); ?>;

            let fd = new FormData();
            fd.append('_token', "<?php echo e(csrf_token()); ?>");
            fd.append('combo_id', combo_id);
            fd.append('branch_idd', branch_idd);
            fd.append('table_id', table_id);
            $.ajax({
                url: "<?php echo e(route('website.combo_pack_add_to_cart')); ?>",
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
                        $.fn.cart();
                        $.fn.sideCart();
                    } else {
                        iziToast.error({
                            title: '',
                            message: result.msg,
                            position: 'topRight'
                        });
                        $.fn.cart();
                        $.fn.sideCart();
                    }

                },
                complete: function() {
                    $('.loader').hide();
                },
                error: function(jqXHR, exception) {
                    $('.loader').hide();
                }
            })
        })

        // Show Detail
        $("body").on("click", ".show_detail", function(e) {
            e.preventDefault();
            let combo_id = $(this).attr('data-id');
            let fd = new FormData();
            fd.append("_token", "<?php echo e(csrf_token()); ?>"),
                fd.append("combo_id", combo_id);
            $.ajax({
                url: "<?php echo e(route('website.get_combo_pack_detail')); ?>",
                type: "POST",
                data: fd,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $('.loader').show();
                },
                success: function(result) {
                    let combo_data = '';
                    if (result.data.length > 0) {
                        $.each(result.data, function(i, val) {
                            var url = "<?php echo e(url('')); ?>" + val.product_img;
                            combo_data += '<div class="card" style="width: 10rem; ">';
                            combo_data += '<img src="' + url +
                                '" class="card-img-top" alt="...">';
                            combo_data += '<div class="card-body">';
                            combo_data += '<h5 class="card-title">' + val.product_name +
                                '</h5>';
                            combo_data += '</div>';
                            combo_data += '</div>';
                        })

                        $("#combo_pack_detail").html(combo_data)
                        $("#combo_detail").modal("toggle")
                    } else {

                    }
                },
                complete: function() {
                    $('.loader').hide();
                },
                error: function(jqXHR, exception) {
                    $('.loader').hide();
                }
            });

        })
        //    Cancel Order
        $("body").on("click", ".statuscancel", function(e) {
            e.preventDefault();
            var id = $(this).attr('data-id');
            var status = $(this).attr('data-status');
            // alert(status);
            let fd = new FormData()
            fd.append('_token', "<?php echo e(csrf_token()); ?>");
            fd.append('status', status);
            fd.append('id', id);
            // alert(status);
            $.confirm({
                title: 'Confirm!',
                content: 'Sure you want to cancel the order?',
                buttons: {
                    yes: function() {
                        $.ajax({
                                url: "<?php echo e(route('website.cancel_order')); ?>",
                                type: 'POST',
                                data: fd,
                                dataType: "JSON",
                                contentType: false,
                                processData: false,
                            })
                            .done(function(result) {
                                if (result.status) {
                                    iziToast.success({
                                        title: '',
                                        message: result.msg,
                                        position: 'topRight'
                                    });
                                    setTimeout(function() {
                                        window.location.reload();
                                    }, 2000);

                                } else {
                                    iziToast.error({
                                        title: '',
                                        message: result.msg,
                                        position: 'topRight'
                                    });
                                }
                            })
                            .fail(function(jqXHR, exception) {
                                console.log(jqXHR.responseText);
                            })


                    },
                    no: function() {},
                }
            })
        })

// Recommended Products Function
$.fn.recommendedProducts = function(limit) {
    $.ajax({
        type: "GET",
        data: {
            "limit": limit,
            "recommended": 1,
            "branch_id": <?php echo e($branch_id); ?>

        },
        url: "<?php echo e(route('website.get_menu')); ?>",
        beforeSend: function() {
            $('.loaded').show();
        },
        success: function(data) {
            let datas = '';
            let load = '';
            if (data.products && data.products.length > 0) {
                $.each(data.products, function(i, val) {
                    if (val.discount) {
                        var dis = val.discount;
                        var price = (val.new_price - (val.new_price * dis / 100));
                        var discount = '<strike><span class="text-danger">₹' +
                            parseFloat(val.new_price).toFixed(2) +
                            '</span></strike><span> <br> <span><b>Discount </b>' +
                            dis + '%</span>';
                    } else {
                        var dis = 0;
                        var price = val.new_price;
                        var discount = '';
                    }
                    var url = "<?php echo e(url('')); ?>" + val.product_img;
                    var recommendedBadge = val.is_recommended ? '<span class="badge bg-success">Recommended</span>' : '';
                    // datas += '<div class="col-6 col-md-12 col-lg-6">' +
                    //     '<div class="card card-menu mb-3" style="height: 200px">' +
                    //     '<div class="card-body">' +
                    //     '<img src="' + url +
                    //     '" alt="" class="img-menu mx-auto d-block w-20 h-20 sm:w-24 sm:h-24 md:w-60 md:h-52 object-cover rounded-md">' +
                    //     '<p class="text-center fw-bold mt-3 mb-0">' + val.product_name + ' ' + recommendedBadge + '</p>' +
                    //     '<p class="text-center"><b><span><span class="text-success">₹' +
                    //     parseFloat(price).toFixed(2) + '</b></span> ' + discount + '</p>' +
                    //     '<div class="clearfix card-add-button">' +
                    //     '<div class="float-end">' +
                    //     '<a class="p-2 btn-primary add_to_cart" style="border: 1px solid #b91c1c; border-radius: 0.5rem; color: #b91c1c; font-size: 8px; padding: 4px 8px;" data-discount_percent="' +
                    //     dis + '" data-normal_price="' + parseFloat(val.new_price).toFixed(2) +
                    //     '" data-discounted_price="' + parseFloat(price).toFixed(2) + '" data-id="' + val.id +
                    //     '"><i class="fa fa-cart-shopping"></i> Add</a>' +
                    //     '</div>' +
                    //     '</div>' +
                    //     '</div>' +
                    //     '</div>' +
                    //     '</div>';

                    // chnages badshah 
                    datas += 
  '<div class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/2 p-2">' +
    '<div class="bg-white rounded-lg shadow-md h-[200px]">' +
      '<div class="p-4 h-full flex flex-row sm:flex-col justify-between gap-2 justify-center items-center">' +
        '<div> <img src="' + url + '" alt="" ' +
          'class="w-20 h-20 sm:w-24 sm:h-24 object-cover rounded-md self-start"> </div>'  +

        '<div class="flex flex-col justify-center items-center text-center ">' +
          '<p class="font-bold">' + val.product_name + ' ' + recommendedBadge + '</p>' +
          '<p><b><span class="text-green-600">₹' + parseFloat(price).toFixed(2) + '</span></b> ' + discount + '</p>' +
        '</div>'
         +
        '<div class="  flex  justify-center items-center sm:mt-2">' +
          '<a class="add_to_cart  flex items-center justify-center" ' +
            'style="border: 1px solid #b91c1c; border-radius: 0.5rem; color: #b91c1c; font-size: 8px; padding: 4px 6px; display: inline-block;" ' +
            'data-discount_percent="' + dis + '" ' +
            'data-normal_price="' + parseFloat(val.new_price).toFixed(2) + '" ' +
            'data-discounted_price="' + parseFloat(price).toFixed(2) + '" ' +
            'data-id="' + val.id + '">' +
            ' Add ' +
          '</a>' +
        '</div>' +
      '</div>' +
    '</div>' +
  '</div>';

                });
                if (data.limit < data.total) {
                    load += '<div class="page-pagination">' +
                        '<ul class="pagination justify-content-center">' +
                        '<button class="btn btn-primary load_recommended" data-load_more="' +
                        data.limit +
                        '"><i class="fas fa-spinner fa-spin load_more_spin p-2"></i>Load More</button>' +
                        '</ul>' +
                        '</div>';
                }
            } else {
                datas = '<div class="col-12 text-center"><p>No recommended items found</p></div>';
            }
            $('#recommended_list').html(datas);
            $('.recommended-more').html(load);
        },
        complete: function() {
            $('.loaded').hide();
        },
        error: function(xhr, status, error) {
            console.log("Error loading recommended products:", error);
        }
    });
};

// Load more recommended items
$("body").on("click", ".load_recommended", function(e) {
    e.preventDefault();
    var load_more = $(this).data('load_more');
    var limit = 15 + load_more;
    $.fn.recommendedProducts(limit);
});

// Navigation handler for recommended tab
$(".j-nav[data-target='#recommended']").click(function(e) {
    e.preventDefault();
    const target = $(this).attr('data-target');
    $('.j-tab').hide();
    $(target).show();
    $('.food-card').removeClass('repair-active-new');
    $(this).find('.food-card').addClass('repair-active-new');
    $.fn.recommendedProducts(15); // Initial load with 15 items
});

// Handle "Add to Cart" button click dynamically
$(document).on('click', '.add_to_cart', function () {
    const $btn = $(this);
    const productId = $btn.data('id'); 
    $btn.prop('disabled', true).css({
        'border': '1px solid red', 
        'background-color': '#f8d7da', 
        'color': 'red'
    }).html('<i class="fa fa-check-circle" ></i> In Cart'); // Update button text
});

// for button

document.addEventListener('click', function (e) {
  const isAddBtn = e.target.classList.contains('add-to-cart');
  const isDecrement = e.target.classList.contains('decrement');
  const isIncrement = e.target.classList.contains('increment');

  if (isAddBtn) {
    const wrapper = e.target.closest('.quantity-wrapper');
    e.target.remove(); // remove +Add
    wrapper.innerHTML = `
      <div class="flex items-center  gap-2 ">
        <button class="text-red-700  text-lg px-2 decrement" data-id="${wrapper.dataset.id}" data-qty="1">−</button>
        <span class="px-2 font-semibold text-red-700  text-lg">1</span>
        <button class="text-red-700  text-lg  px-2 increment" data-id="${wrapper.dataset.id}" data-qty="1">+</button>
      </div>`;
  }

  if (isDecrement || isIncrement) {
    const wrapper = e.target.closest('.quantity-wrapper');
    let qty = parseInt(wrapper.querySelector('span').textContent);
    qty = isDecrement ? qty - 1 : qty + 1;

    if (qty <= 0) {
        wrapper.innerHTML = `
 
  <button 
    class="text-red-700 font-semibold  text-base bg-white add-to-cart"
    data-id="${wrapper.dataset.id}"
  >
    + Add
 
 </div>


`;

} else {
  wrapper.querySelector('span').textContent = qty;
}

  }
});


// Add event listener to handle the button state change dynamically
$(document).on('click', '.add_to_cart, .topping_added', function () {
    const $this = $(this);
    if ($this.data('disabled') === true) {
        return; // Do nothing if the button is disabled
    }

    // Handle the add to cart functionality here
    const productId = $this.data('id');
    const discountPrice = $this.data('discounted_price');
    const normalPrice = $this.data('normal_price');
    const discountPercent = $this.data('discount_percent');

    // Disable the button after adding to cart
    $this.prop('disabled', true).addClass('disabled').text('In Cart');
});

// Handle "Add to Cart" button click dynamically
$(document).on('click', '.combo_add_to_cart', function () {
    const $btn = $(this);
    const productId = $btn.data('id');
    // Disable the button
    $btn.prop('disabled', true);

    // Change button text and style
    $btn.html('<i class=""></i> In Cart')
        .css({
         'border': '1px solid red', 
        'background-color': '#f8d7da', 
        'color': 'red',
          'text-transform': 'none'
        });
    let addedItems = JSON.parse(localStorage.getItem('addedItems')) || [];
    if (!addedItems.includes(productId)) {
        addedItems.push(productId);
        localStorage.setItem('addedItems', JSON.stringify(addedItems));
    }
});

//view order button shows logic
$(function() {
    // Bind the click event on the 'Add' buttons
    $(document).on('click', '.add_to_cart, .topping_added', function() {
        // Check if the view_orders_container is hidden, and if so, show it
        $('#view_orders_container').fadeIn();  // or .show()
        
        // Hide the cart_full container (to simulate the "empty" state)
        $('.cart_full').hide();
    });
});

$(function() {
    // Bind the click event on the 'Add' buttons
    $(document).on('click', '.combo_add_to_cart', function () {
        // Check if the view_orders_container is hidden, and if so, show it
        $('#view_orders_container').fadeIn();  // or .show()
        
        // Hide the cart_full container (to simulate the "empty" state)
        $('.cart_full').hide();
    });
});

$(document).ready(function() {
    // When the View Orders button is clicked
    $('#view_orders_button').click(function() {
        
        $('#view_orders_container').hide();
        
        // Show the cart_full container
        $('.cart_full').fadeIn();  // or .show() for instant visibility
    });
});


const cartWrapper = document.getElementById('cart-scroll-wrapper');
if (cartWrapper) {
  cartWrapper.scrollTop = cartWrapper.scrollHeight;
}





</script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layout.layoutheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u700657081/domains/xcrinogroup.com/public_html/andhra/resources/views/website/pos_detail.blade.php ENDPATH**/ ?>