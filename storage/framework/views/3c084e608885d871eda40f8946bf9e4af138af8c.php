<?php $__env->startSection('extra_css'); ?>
<style>
  .menu-card {
    transition: box-shadow 0.3s;
  }

  .menu-card:hover {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .title-wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .card-title {
    text-decoration: none;
    color: #000;
  }

  .card-text {
    margin-top: 5px;
  }

  .grid-list {
    display: grid;
    gap: 20px;
  }

  .lg\\:grid-cols-2 {
    grid-template-columns: repeat(2, 1fr);
  }

  .grid-cols-1 {
    grid-template-columns: 1fr;
  }

  .gap-4 {
    gap: 16px;
  }

  .gap-5 {
    gap: 20px;
  }

  .title-3-0 {
    font-size: 1.75rem;
  }

  .font-bold {
    font-weight: bold;
  }

  .section {
    position: relative;
    padding-block: var(--section-space);
    overflow: hidden;
    z-index: 1;
    width: 100%;
    margin: auto;
    padding: 6rem 6rem;
  }

  /* Small devices (phones, 600px and down) */
  @media (max-width: 600px) {
    .section {
      padding: 0;
    }
  }

  /* Medium devices (tablets, 600px to 900px) */
  @media (min-width: 601px) and (max-width: 900px) {
    .section {
      padding: 4rem 3rem;
    }
  }

  /* Large devices (desktops, 900px and up) */
  @media (min-width: 901px) {
    .section {
      padding: 6rem 6rem;
    }
  }

  /* Extra large devices (large desktops, 1200px and up) */
  @media (min-width: 1200px) {
    .section {
      padding: 8rem 8rem;
    }
  }

</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<body id="top">

  <!--
      - #PRELOADER
    -->

  <div class="preload" id="loader">
    <div class="circle"></div>
    <p class="text">ANDHRA DINING</p>
  </div>



  <main>
    <article>

      <!--
          - #HERO
        -->

      <section class="hero text-center" aria-label="home" id="home" class="banner-section">

        <ul class="hero-slider" data-hero-slider>

          <li class="slider-item active" data-hero-slider-item>

            <div class="slider-bg">
              <img src=" <?php echo e(asset('assets/website/indexImages/menubanner.png')); ?> " width="1880" height="950" alt="" class="img-cover">
            </div>
            <div style="text-align:center; padding-right:0;">
              <h1 class="display-1 hero-title slider-reveal" style=" top:40%; ">
                <?php echo translate('explore_our_exhilarating_menu'); ?>

              </h1>


            </div>
          </li>

        </ul>
      </section>

      <!--
          - #MENU
        -->

      <section class="section menu" aria-label="menu-label" id="menu" style="background-color: #FFFFFF;">
        <div class="container mx-auto">

          <!-- <p class="section-subtitle text-center label-2">Special Selection</p> -->

          <div class="text-center">
            <h2 class="text-2xl mb-4"><?php echo translate('at_andhra_dining_we_create_an_atmosphere_that_takes'); ?></h2>

            <h1 class="title-3-0 font-bold" style="margin:50px 10px 0px 10px; font-size:3rem;">
                <?php echo translate('allergen_information'); ?>

            </h1>
            <div class="grid lg:grid-cols-8 md:grid-cols-8 sm:grid-cols-1 place-items-center justify-center lg:gap-0 sm:my-[5px] mx-auto w-50% lg:my-10">
              <div class="text-center sm:w-[100%] sm:h-[100%]">
                <img src=" <?php echo e(asset('assets/website/indexImages/egg.png')); ?> " alt="Egg" class="img-small">
                <p class="mt-2 text-md"><?php echo translate('Egg'); ?></p>
              </div>
              <div class="text-center sm:w-[100%] sm:h-[100%]">
                <img src=" <?php echo e(asset('assets/website/indexImages/gluten.png')); ?> " alt="Gluten" class="img-small">
                <p class="mt-2 text-md"><?php echo translate('Gluten'); ?></p>
              </div>
              <div class="text-center sm:w-[100%] sm:h-[100%]">
                <img src=" <?php echo e(asset('assets/website/indexImages/mustard.png')); ?> " alt="Mustard" class="img-small">
                <p class="mt-2 text-md"><?php echo translate('Mustard'); ?></p>
              </div>
              <div class="text-center sm:w-[100%] sm:h-[100%]">
                <img src=" <?php echo e(asset('assets/website/indexImages/nuts.png')); ?> " alt="Nuts" class="img-small">
                <p class="mt-2 text-md"><?php echo translate('Nuts'); ?></p>
              </div>
              <div class="text-center sm:w-[100%] sm:h-[100%]">
                <img src=" <?php echo e(asset('assets/website/indexImages/milk.png')); ?> " alt="Milk" class="img-small">
                <p class="mt-2 text-md"><?php echo translate('Milk'); ?></p>
              </div>
              <div class="text-center sm:w-[100%] sm:h-[100%]">
                <img src=" <?php echo e(asset('assets/website/indexImages/crustaceans.png')); ?> " alt="Crustaceans" class="img-small">
                <p class="mt-2 text-md"><?php echo translate('Crustaceans'); ?></p>
              </div>
              <div class="text-center sm:w-[100%] sm:h-[100%]">
                <img src=" <?php echo e(asset('assets/website/indexImages/fish.png')); ?> " alt="Fish" class="img-small">
                <p class="mt-2 text-md"><?php echo translate('Fish'); ?></p>
              </div>
              <div class="text-center sm:w-[100%] sm:h-[100%]">
                <img src=" <?php echo e(asset('assets/website/indexImages/sesame.png')); ?> " alt="Sesame" class="img-small">
                <p class="mt-2 text-md"><?php echo translate('Sesame'); ?></p>
              </div>
            </div>
            <span class="font-bold text-md" style="color:red"><?php echo translate('note_if_you_have_any_allergens'); ?></span>


              <?php $__currentLoopData = $getcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <h1 style="font-size: 32px; margin: 50px 10px 0px 10px; color: red; font-family: 'Montserrat';" class="title-3-0 font-bold">
                  <?php echo e($cat->cate_name); ?>

              </h1>

              
              <?php if(is_array($cat->product) && count($cat->product) > 0): ?>
                  <?php $__currentLoopData = $cat->product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <h2 style="padding-top: 4rem; font-size: 32px; color: black; font-family: 'Montserrat'; margin: 50px 10px 0px 10px; font-size: 2.6rem;" class="title-3-0 font-bold">
                      <?php echo e($subCat->name); ?>

                  </h2>
                  <ul id="salad-list" class="grid-list grid lg:grid-cols-2 gap-4 grid-cols-1 gap-5">
                      <div class="row">
                          <?php $__currentLoopData = $subCat->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="col-md-6">
                              <li>
                                  <div class="menu-card hover:card">
                                      <div class="title-wrapper flex justify-end items-center flex-row">
                                          <h3 class="title-3">
                                              <a style="font-size: 30px; font-family: 'Montserrat';" href="#" class="card-title"><?php echo app()->getLocale() == 'ja' ?  strtoupper($data->product_name_jpn) : strtoupper($data->product_name); ?></a>
                                          </h3>
                                          <span style="font-size: 22px; font-family: 'Montserrat';" class="span title-0-2">¥<?php echo e($data->price); ?></span>
                                      </div>
                                      <p class="card-text label-1"><?php echo app()->getLocale() == 'ja' ?  strtoupper($data->product_des_jpn) : strtoupper($data->product_des); ?></p>
                                  </div>
                              </li>
                          </div>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </div>
                  </ul>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php else: ?>
                  
                  <ul id="salad-list" class="grid-list grid lg:grid-cols-2 gap-4 grid-cols-1 gap-5">
                      <div class="row">
                          <?php $__currentLoopData = $cat->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="col-md-6">
                              <li>
                                  <div class="menu-card hover:card">
                                      <div class="title-wrapper flex justify-end items-center flex-row">
                                          <h3 class="title-3">
                                              <a style="font-size: 30px; font-family: 'Montserrat';" href="#" class="card-title"><?php echo e($data->product_name); ?></a>
                                          </h3>
                                          <span style="font-size: 22px; font-family: 'Montserrat';" class="span title-0-2">¥<?php echo e($data->price); ?></span>
                                      </div>
                                      <p class="card-text label-1"><?php echo e($data->product_des); ?></p>
                                  </div>
                              </li>
                          </div>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </div>
                  </ul>
              <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</body>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra_js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u700657081/domains/xcrinogroup.com/public_html/andhra/resources/views/website/menuPage.blade.php ENDPATH**/ ?>