<?php $__env->startSection('extra_css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section>
   <div class="container-fluid">
      <div class="row">

         <!-- First column -->

         <div class="col-md-2 p-2">
            <div class="row pt-3 menu-add-class">
               <div class="col-lg-6 col-md-12">
                  <a href="" class="j-nav class-add" data-target="#menus" data-name="menus">
                     <div class="card text-center mb-3 food-card repair-active-new">
                        <div class="card-body">
                           <div class="h2 mb-0">
                              <i class="fa fa-burger"></i>
                           </div>
                           <p class="mb-0">Menus</p>
                        </div>
                     </div>
                  </a>
               </div>

               <div class="col-lg-6 col-md-12">
                  <a href="" class="j-nav class-add" data-target="#cart" data-name="cart">
                     <div class="card text-center mb-4 food-card">
                        <div class="card-body">
                           <div class="h2 mb-0">
                              <i class="fa-solid fa-cart-shopping"></i>
                           </div>
                           <p class="mb-0">Cart</p>
                        </div>
                     </div>
                  </a>
               </div>

               <div class="col-lg-6 col-md-12">
                  <a href="" class="j-nav class-add" data-target="#orders" data-name="orders">
                     <div class="card text-center mb-4 food-card">
                        <div class="card-body">
                           <div class="h2 mb-0">
                              <i class="fa-solid fa-bag-shopping"></i>
                           </div>
                           <p class="mb-0">Orders</p>
                        </div>
                     </div>
                  </a>
               </div>


               <div class="col-md-12 text-center bottom-position">
                  <img src="<?php echo e(asset('assets/website/images/bottom-img.png')); ?>" alt="" class="img-fluid w-75 mx-auto d-block">
                  <p class="fw-bold">First, we eat. Then, we do everything else.</p>
               </div>

            </div>
         </div>



         <!-- Second Column -->

         <div class="col-md-7 p-2">
            <div class="bg-lights ms-2 mt-3">

               <!-- MENUS -->

               <div id="menus" class="j-tab p-3">
                  <div class="row">
                     <div class="col-md-12 mb-3">
                        <h3>Menus</h3>
                        <p>Choose Category</p>

                        <!-- Tabs -->

                        <ul class="nav nav-pills mb-3 nav-category" id="pills-tab">
                           <li class="nav-item">
                              <button class="nav-link catg-link active d-flex align-items-center rounded-pill px-4 get_menu1" id="pills-all" data-bs-toggle="pill" data-bs-target="#all" type="button">
                                 <img src="<?php echo e(asset('assets/website/images/1.webp')); ?>" alt="" style="width:40px;height: 40px;border-radius: 50%;" class="me-4"> All</button>
                           </li>
                           <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <li class="nav-item">
                              <button class="nav-link catg-link d-flex align-items-center rounded-pill px-4 get_menu" data-id="<?php echo e($item->id); ?>" id="pills-all" data-bs-toggle="pill" data-bs-target="#all">
                                 <img src="<?php echo e(url($item->cate_img)); ?>" alt="" style="width:40px;height: 40px;border-radius: 50%;" class="me-4"><?php echo e($item->cate_name); ?></button>
                           </li>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>

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



               <!-- history -->

               <!--  <div id="history" class="j-tab" style="display: none;">
                   <div class="row pt-3">
                      <div class="col-md-6 mb-3">
                         <div class="card bg-info">
                            <div class="card-body">
                               <div class="clearfix">
                                  <div class="float-start">
                                     <h6>History</h6>
                                     <p>34567</p>
                                  </div>
                                  <div class="float-end">
                                     <div class="bg-dark p-3">
                                        <i class="fa fa-home" style="color: #fff"></i>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div> -->



               <!-- Cart -->


               <div id="cart" class="j-tab p-3" style="display: none;">
                  <div class="row">
                     <div class="col-md-12 mb-3">

                        <h3>Cart</h3>
                        <p>Choose</p>

                        <div class="main-scrollbar">
                           <div class="mx-2" id="cart_list">
                           </div>
                        </div>

                     </div>
                  </div>
               </div>


               <!-- Wallet -->

               <!--   <div id="wallet" class="j-tab" style="display: none;">
                   <div class="row pt-3">
                      <div class="col-md-6 mb-3">
                         <div class="card bg-info">
                            <div class="card-body">
                               <div class="clearfix">
                                  <div class="float-start">
                                     <h6>Wallet</h6>
                                  </div>
                                  <div class="float-end">
                                     <div class="bg-dark p-3">
                                        <i class="fa fa-home" style="color: #fff"></i>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div> -->


               <!-- Orders -->


               <div id="orders" class="j-tab p-3" style="display: none;">
                  <div class="row">
                     <div class="col-md-12 mb-3">

                        <h3>Orders</h3>
                        <p>Details</p>

                        <div class="main-scrollbar">

                           <div class="card table-card mx-2">

                              <div class="card-body">
                                 <div class="table-responsive">
                                    <table id="example" class="table table-striped table-order text-nowrap" style="width: 100%">
                                       <thead>
                                          <tr>
                                             <th><i class="fa-solid fa-calendar-days"></i> Date</th>
                                             <th><i class="fa fa-cutlery"></i> Txn id</th>
                                             <th><i class="fa fa-cutlery"></i> Invoice id</th>
                                             <th><i class="fa-solid fa-money-bill-transfer"></i> Transaction Type</th>
                                             <th><i class="fa-solid fa-money-bill"></i> Price</th>
                                          </tr>
                                       </thead>
                                       <tbody>

                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>





            </div>
         </div>

         <!-- Third  Column -->

         <div class="col-md-3 mt-2">
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

            <div class=" mt-3">
               <div class="clearfix">
                  <div class="float-start">
                     <p class="mb-0 small">Sub Total</p>
                  </div>
                  <div class="float-end">
                     <p class="fw-bold" id="sub_total"></p>
                  </div>
               </div>
            </div>

            <!-- End Clearfix 2-->


            <!-- Clearfix 3-->

            <div class="" style="border-bottom: 1px dashed #000;">
               <div class="clearfix">
                  <div class="float-start">
                     <p class="mb-0 small">Tax (Included)</p>
                  </div>
                  <div class="float-end">
                     <p class="fw-bold" id="tax_inc"></p>
                  </div>
               </div>
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
                  <input type="hidden" name="net_amnt" class="total">
               </div>
            </div>

            <!-- End Clearfix 3-->

            <!-- Payment Method -->

            <h5 class="my-3">Payment Method</h5>

            <div class="row payment">
               <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="card text-center mb-4 payment-item">
                     <div class="card-body">
                        <label>
                           <div class="h3 mb-0">
                              <i class="fa-solid fa-money-check-dollar"></i>
                           </div>
                           <p class="mb-0 small fw-bold">Cash</p>
                           <input type="radio" name="payment" value="Cash">
                        </label>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="card text-center mb-4 payment-item">
                     <div class="card-body">
                        <label>
                           <div class="h3 mb-0">
                              <i class="fa-solid fa-credit-card"></i>
                           </div>
                           <p class="mb-0 small fw-bold">Card/Debit</p>
                           <input type="radio" name="payment" value="Card">
                        </label>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="card text-center mb-4 payment-item">
                     <div class="card-body">
                        <label>
                           <div class="h3 mb-0">
                              <i class="fa-solid fa-wallet"></i>
                           </div>
                           <p class="mb-0 small fw-bold">E-Wallet</p>
                           <input type="radio" name="payment" value="Wallet">
                        </label>
                     </div>
                  </div>
               </div>
            </div>
            <button class="btn btn-primary w-100" id="place_order">Place Order</button>
         </div>
      </div>
   </div>
</section>

<div class="modal fade" id="customisable" tabindex="-1">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Choose Your Topping</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>

         <!-- Modal Body -->

         <div class="modal-body">
            <h6 style="color: #fe4e2b;">MEATS</h6>

            <div class="container px-0 mt-3">
               <div class="row" class="accordion">

                  <!-- First Collapse -->

                  <div class="col-md-6 mb-3">
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                           <h2 class="accordion-button collapsed px-1 text-dark pt-0  border-bottom" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                              Pepperoni <br>
                              50 cal/slice
                           </h2>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse">
                           <div class="accordion-body ps-0 pt-1">
                              <div class="row">
                                 <div class="col-3 text-center">
                                    <div class="click-menu">
                                       <img src="<?php echo e(asset('assets/website/custom/1.png')); ?>" alt="">
                                       <p class="mb-0">Left</p>
                                    </div>
                                 </div>

                                 <div class="col-3 text-center">
                                    <div class="click-menu">
                                       <img src="<?php echo e(asset('assets/website/custom/2.png')); ?>" alt="">
                                       <p class="mb-0">Center</p>
                                    </div>

                                 </div>

                                 <div class="col-3 text-center">
                                    <div class="click-menu">
                                       <img src="<?php echo e(asset('assets/website/custom/3.png')); ?>" alt="">
                                       <p class="mb-0">Right</p>
                                    </div>

                                 </div>

                                 <div class="col-3 text-center">
                                    <div class="click-menu">
                                       <img src="<?php echo e(asset('assets/website/custom/4.png')); ?>" alt="" class="img-special">
                                       <p class="mb-0">Extra</p>
                                    </div>

                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- Second Collapse -->

                  <div class="col-md-6 mb-3">
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                           <h2 class="accordion-button collapsed px-1 text-dark pt-0 border-bottom" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                              Italian Suasage <br>
                              50 cal/slice
                           </h2>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse">
                           <div class="accordion-body ps-0 pt-1">
                              <div class="row">
                                 <div class="col-3 text-center">
                                    <div class="click-menu-2">
                                       <img src="<?php echo e(asset('assets/website/custom/1')); ?>.png" alt="">
                                       <p class="mb-0">Left</p>
                                    </div>
                                 </div>

                                 <div class="col-3 text-center">
                                    <div class="click-menu-2">
                                       <img src="<?php echo e(asset('assets/website/custom/2')); ?>.png" alt="">
                                       <p class="mb-0">Center</p>
                                    </div>

                                 </div>

                                 <div class="col-3 text-center">
                                    <div class="click-menu-2">
                                       <img src="<?php echo e(asset('assets/website/custom/3')); ?>.png" alt="">
                                       <p class="mb-0">Right</p>
                                    </div>

                                 </div>

                                 <div class="col-3 text-center">
                                    <div class="click-menu-2">
                                       <img src="<?php echo e(asset('assets/website/custom/4')); ?>.png" alt="" class="img-special">
                                       <p class="mb-0">Extra</p>
                                    </div>

                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>


                  <h6 style="color: #fe4e2b;">VEGGIES</h6>

                  <!-- Third Collapse -->

                  <div class="col-md-6 mb-3">
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                           <button class="accordion-button collapsed  px-1 text-dark pt-0 border-bottom" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                              Mushrooms
                           </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse">
                           <div class="accordion-body ps-0 pt-1">
                              <div class="row">
                                 <div class="col-3 text-center">
                                    <div class="click-menu-3">
                                       <img src="<?php echo e(asset('assets/website/custom/1')); ?>.png" alt="">
                                       <p class="mb-0">Left</p>
                                    </div>
                                 </div>

                                 <div class="col-3 text-center">
                                    <div class="click-menu-3">
                                       <img src="<?php echo e(asset('assets/website/custom/2')); ?>.png" alt="">
                                       <p class="mb-0">Center</p>
                                    </div>

                                 </div>

                                 <div class="col-3 text-center">
                                    <div class="click-menu-3">
                                       <img src="<?php echo e(asset('assets/website/custom/3')); ?>.png" alt="">
                                       <p class="mb-0">Right</p>
                                    </div>

                                 </div>

                                 <div class="col-3 text-center">
                                    <div class="click-menu-3">
                                       <img src="<?php echo e(asset('assets/website/custom/4')); ?>.png" alt="" class="img-special">
                                       <p class="mb-0">Extra</p>
                                    </div>

                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div>
            </div>
         </div>

         <!-- End Modal Body -->

         <div class="modal-footer border-top-0">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
               <i class="fa fa-cart-shopping"></i> Add to Cart</button>
         </div>
      </div>
   </div>
</div>
<?php $__env->startSection('extra_js'); ?>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
   $(document).ready(function() {
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
   });
</script>

<script>

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
   /* zoomer image */
   // $(document).ready(function() {
   //    $('.sp-wrap').smoothproducts();
   // });
</script>

<script>
   $(function() {
      var limit = 15;
      var newest = "";
      var asc = "";
      var cate_id = "";
      var sub_cate_id = "";

      //load products
      $.fn.product = function(limit, newest, asc, cate_id , sub_cate_id) {

         $.ajax({
            type: "GET",
            data: {
               "limit": limit,
               "newest": newest,
               "asc": asc,
               "cate_id": cate_id,
               "sub_cate_id": sub_cate_id
            },
            url: "<?php echo e(route('website.get_menu')); ?>",
            beforeSend: function() {
               $('.loaded').show();
            },
            success: function(data) {
               let datas = '';
               let load = '';
               if (data.products.length > 0) {
                  $.each(data.products, function(i, val) {
                     var url = "<?php echo e(url('')); ?>" + val.product_img;
                     datas += '<div class="col-xl-4 col-lg-6 col-md-12">' +
                        '<div class="card card-menu mb-3">' +
                        '<div class="card-body">' +
                        '<img src="' + url + '" alt="" class="img-menu mx-auto d-block">' +
                        '<p class="text-center fw-bold mt-3 mb-0">' + val.product_name + '</p>' +
                        '<p class="text-center">$' + val.price + '</p>' +
                        '<p class="text-center">Type : <b>' + val.type + '</b></p>' +
                        '<div class="clearfix">' +
                        '<div class="float-start c-text">' +
                        '<a href="" data-bs-toggle="modal" data-bs-target="#customisable"><i class="fa fa-cutlery"></i> Custom</a>' +
                        '</div>' +
                        '<div class="float-end">' +
                        '<a class="p-2 btn-primary add_to_cart" data-id="' + val.id + '"><i class="fa fa-cart-shopping"></i> Add</a>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>';
                  })



                  if (data.limit <= data.total) {
                     load += '<div class="page-pagination">' +
                        '<ul class="pagination justify-content-center">' +
                        '<button class="btn btn-primary load_more" data-load_more="' + data.limit + '"><i class="fas fa-spinner fa-spin load_more_spin p-2"></i>Load More</button>' +
                        '</ul>' +
                        '</div>'
                  }
               } else {

               }
               $('#menu_list').html(datas);
               $(".more").html(load);
            },
            complete: function() {
               $('.loaded').hide();

            },
         })
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
                     datas += '<li class="nav-item">'+
                              '<button class="nav-link catg-link d-flex align-items-center rounded-pill px-4 get_menu1" data-id="'+val.id+'" id="pills-all" data-bs-toggle="pill" data-bs-target="#all">'+
                                 '<img src="'+url+'" alt="" style="width:40px;height: 40px;border-radius: 50%;" class="me-4">'+val.name+'</button>'+
                           '</li>';
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
         let fd = new FormData()
         fd.append('_token', "<?php echo e(csrf_token()); ?>");
         fd.append('id', id);
         $.ajax({
            url: "<?php echo e(route('website.add_to_cart')); ?>",
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

      // Cart List
      $.fn.cart = function() {
         $.ajax({
            type: "GET",
            url: "<?php echo e(route('website.get_cart_list_ajax')); ?>",
            beforeSend: function() {
               $('.loaded').show();
            },
            success: function(data) {
               let datas = '';
               if (data.products.length > 0) {
                  $.each(data.products, function(i, val) {
                     var url = "<?php echo e(url('')); ?>" + val.product_img;
                     datas += ' <div class="card mb-3 main-cart pb-3 mt-0">' +
                        '<div class="row align-items-center">' +
                        '<div class="col-md-3">' +
                        '<div class="ps-2 pt-3">' +
                        '<img src="' + url + '" class="img-fluid rounded-start w-100 h-100" alt="...">' +
                        '</div>' +
                        '</div>' +
                        '<div class="col-md-5">' +
                        '<div class="card-body">' +
                        '<h5 class="card-title  fw-bold">' + val.product_name + '</h5>' +
                        '<p class="mb-0">$10.00</p>' +
                        '</div>' +
                        '</div>' +
                        '<div class="col-md-2">' +
                        '<div class="qty-block">' +
                        '<div class="qty">' +
                        '<input type="text" name="qty" maxlength="12" value="' + val.qty + '" title="" class="input-text" />' +
                        '<div class="qty_inc_dec">' +
                        '<i class="increment" data-id="' + val.id + '" data-qty="' + val.qty + '">+</i>' +
                        '<i class="decrement" data-id="' + val.id + '" data-qty="' + val.qty + '">-</i>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '<div class="col-md-2">' +
                        '<a class="small mb-0 text-end text-danger remove_to_cart" data-id="' + val.id + '" >Remove <i class="fa fa-close  me-2"></i>' +
                        '</a>' +
                        '</div>' +
                        '</div>' +
                        '</div>';
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

      // Side cart show
      $.fn.sideCart = function() {
         $.ajax({
            type: "GET",
            url: "<?php echo e(route('website.get_cart_list_ajax')); ?>",
            beforeSend: function() {
               $('.loaded').show();
            },
            success: function(data) {
               let datas = '';
               var sub_total = 0;
               var net_amnt = 0;
               var tax = 0;
               if (data.products.length > 0) {
                  $.each(data.products, function(i, val) {
                     sub_total += (val.qty * val.price);
                     net_amnt += (val.qty * val.price + (val.qty * val.price * val.tax) / 100)
                     tax += ((val.qty * val.price * val.tax) / 100)

                     var url = "<?php echo e(url('')); ?>" + val.product_img;
                     datas += '<div class="card mb-3 bg-cart pb-3">' +
                        '<div class="row align-items-center">' +
                        '<div class="col-md-12">' +
                        '<p class="small mb-0 text-end">' +
                        '<a href="javascript:void(0)" class="remove_to_cart" data-id="' + val.id + '"><i class="fa fa-close  me-2"></i></a>' +
                        '</p>' +
                        '</div>' +
                        '<div class="col-xl-3 col-md-12">' +
                        '<div class="ps-xl-2">' +
                        '<img src="' + url + '" class="img-fluid rounded-start w-100" alt="...">' +
                        '</div>' +
                        '</div>' +
                        '<div class="col-xl-5 col-md-6">' +
                        '<div class="card-body p-xl-0">' +
                        '<p class="card-title mb-0 fw-bold n-size">' + val.product_name + '</p>' +
                        '<p class="card-text mb-0">$' + val.price + '</p>' +
                        '</div>' +
                        '</div>' +
                        '<div class="col-xl-4 col-md-6">' +
                        '<div class="qty-block">' +
                        '<div class="qty">' +
                        '<input type="text" name="qty" maxlength="12" value="' + val.qty + '" title="" class="input-text" />' +
                        '<div class="qty_inc_dec">' +
                        '<i class="increment" data-id="' + val.id + '" data-qty="' + val.qty + '">+</i>' +
                        '<i class="decrement" data-id="' + val.id + '" data-qty="' + val.qty + '">-</i>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>';
                  })
               } else {

               }
               $('#side_card').html(datas);
               $("#sub_total").text(parseFloat(sub_total).toFixed(2))
               $("#tax_inc").text(parseFloat(tax).toFixed(2))
               $("#total").text(parseFloat(net_amnt).toFixed(2))

               $(".sub_total").val(parseFloat(sub_total).toFixed(2))
               $(".tax_inc").val(parseFloat(tax).toFixed(2))
               $(".total").val(parseFloat(net_amnt).toFixed(2))


            },
            complete: function() {
               $('.loaded').hide();

            },
         })
      }
      $.fn.sideCart();

      //Place Order Confirm
      $("body").on("click", "#place_order", function(e) {
         e.preventDefault();
         var sub_total = $(".sub_total").val();
         var tax = $(".tax_inc").val();
         var total = $(".total").val();
         var type = $('input[name="payment"]:checked').val();
         let fd = new FormData()
         fd.append('_token', "<?php echo e(csrf_token()); ?>");
         fd.append('sub_total', sub_total);
         fd.append('tax', tax);
         fd.append('total', total);
         fd.append('type', type);

         if (type != "") {
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
         } else {
            iziToast.error({
               title: '',
               message: "select payment method",
               position: 'topRight'
            });
         }
      })

      // Order List Show
      var tables = $('#example').DataTable({
         destroy: true,
         "processing": true,
         pageLength: 10,
         "serverSide": true,
         "ajax": {
            url: "<?php echo e(route('website.order_history')); ?>",
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
         'columnDefs': [{
               "targets": 0,
               "name": "created_at",
               'searchable': true,
               'orderable': true
            },
            {
               "targets": 1,
               "name": "txn_id",
               'searchable': true,
               'orderable': true
            },
            {
               "targets": 2,
               "name": "invoice_id",
               'searchable': true,
               'orderable': true
            },
            {
               "targets": 3,
               "name": "type",
               'searchable': true,
               'orderable': true
            },
            {
               "targets": 4,
               "name": "pay_amount",
               'searchable': true,
               'orderable': true
            },
         ],
      });
   })
</script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/restaurant_pos/resources/views/website/pos_detail.blade.php ENDPATH**/ ?>