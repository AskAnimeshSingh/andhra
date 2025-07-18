<?php $__env->startSection('extra_css'); ?>
<style>
  .branches-hero {
    color: var(--white);
    /* font-family: var(--fontFamily-forum); */
    font-size: var(--fontSize-display-1);
    line-height: var(--lineHeight-1);
  }

  .img-cont {
    position: relative;
    overflow: hidden;
    width: 100%;
    height: 100vh;
  }

  .img-cont img {
    width: 100%;
    height: 100%;
    transition: transform 0.3s ease;
    object-fit: cover;
  }

  .dark {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }

  @media (min-width: 320px) {
    .text-overlay {
      position: absolute;
      top: 50%;
      text-align: right;
      right: 0;
      color: white;
      text-align: right;
      z-index: 1;
      padding-right: 10px;
    }
  }

  @media (min-width: 375px) {
    .text-overlay {
      position: absolute;
      top: 50%;
      text-align: right;
      right: 0;
      color: white;
      text-align: right;
      z-index: 1;
      padding-right: 10px;
    }
  }

  @media (min-width: 425px) {
    .text-overlay {
      position: absolute;
      top: 50%;
      text-align: right;
      right: 0;
      color: white;
      text-align: right;
      z-index: 1;
      padding-right: 10px;
    }
  }

  @media (min-width: 768px) {
    .text-overlay {
      position: absolute;
      top: 40%;
      text-align: right;
      right: 0;
      color: white;
      text-align: right;
      z-index: 1;
      padding-right: 60px;
    }
  }

  @media (min-width: 1024px) {
    .text-overlay {
      position: absolute;
      top: 50%;
      text-align: right;
      right: 0;
      color: white;
      text-align: right;
      z-index: 1;
      padding-right: 60px;
    }
  }

  @media (min-width: 1400px) {
    .text-overlay {
      position: absolute;
      top: 50%;
      text-align: right;
      right: 0;
      color: white;
      text-align: right;
      z-index: 1;
      padding-right: 60px;
    }
  }

  @media (min-width: 1440px) {
    .text-overlay {
      position: absolute;
      top: 50%;
      text-align: right;
      right: 0;
      color: white;
      text-align: right;
      z-index: 1;
      padding-right: 60px;
    }
  }

  .zoom-animation img {
    animation: zoom-out 5s ease infinite alternate;
  }

  .title {
    font-family: var(--fontFamily-forum);
  }

  .des {
    font-family: var(--fontFamily-dm_sans);
    font-size: 1.8em;
  }

  @keyframes  zoom-out {
    0% {
      transform: scale(1.1);
      /* Initial scale (larger size) */
    }

    100% {
      transform: scale(1);
      /* Final scale (normal size) */
    }
  }


  @media  screen and (min-width: 320px) and (max-width: 375px) {

    .healing_seprator {
      width: 25rem;
    }
  }

  @media  screen and (min-width: 375px) and (max-width: 425px) {
    .healing_seprator {
      width: 27rem;
    }
  }

  @media  screen and (min-width: 425px) and (max-width: 768px) {
    .healing_seprator {
      width: 28rem;
    }
  }

  @media  screen and (min-width: 768px) and (max-width: 1024px) {
    .healing_seprator {
      width: 36rem;
    }
  }

  @media  screen and (min-width: 1024px) and (max-width: 1440px) {
    .healing_seprator {
      width: 41rem;
    }
  }

  @media  screen and (min-width: 1440px) and (max-width: 2560px) {
    .healing_seprator {
      width: 51rem;
    }
  }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="preload" data-preaload id="loader">
  <div class="circle"></div>
  <p class="text">ANDHRA DINING</p>
</div>

<div id="content" style="display:none">

  <main>
    <article>
      <!--
          - #HERO
        -->
      <section>
        <div class="img-cont zoom-animation">
          <img src=" <?php echo e(asset('assets/website/indexImages/aurveda_banner.png')); ?>" alt="Image">
          <div class="dark"></div>
          <div class="text-overlay banner-text" style="color: var(--white);
            font-family: var(--fontFamily-forum);
            font-size: var(--fontSize-display-1);
            line-height: var(--lineHeight-1);">
            <div><?php echo translate('the_healing_power'); ?></div>
          </div>
      </section>
      <section class="section event bg-black-10-1" aria-label="event">
        <div class="container dp-container" style="display: flex; flex-direction: column;">
          <!-- <img style="width: 550px; margin-top:2rem" class="xl:ml-72 sm:ml-60 " src="<?php echo e(asset('assets/website/indexImages/seprator.png')); ?>" alt="">
          <h2 class="section-title headline-2-0 text-start">Healing Through Food:<br /> <span style="font-size:45px;">
            Our Commitment to Ayurvedic Wisdom
          </span>
        </h2> -->
          <div class="lg:ml-[192px]" style="">
            <img class="healing_seprator" src="<?php echo e(asset('assets/website/indexImages/seprator.png')); ?>" alt="">
            <!-- <p class="section-subtitle-3 label-2-0"></p> -->
            <h2 class=" headline-2-0 text-start" style="padding-left:0rem;"><?php echo translate('healing_through_food-h'); ?>

            </h2>
            <h2 class=" headline-2-0 text-start " style="padding-left:0rem;">
              <?php echo translate('our_commitment_to_ayurvedic_wisdom'); ?>

            </h2>
          </div>
          <div class="dp pt-20" style="display: flex; flex-direction: column; align-items: center; text-align: justify">
            
            <?php echo app()->getLocale() == 'ja' ? $info->ayurveda_description_jpn : $info->ayurveda_description; ?>


          </div>
        </div>
      </section>

      <!-- carousel -->
      <div class="carousel">

        <div class="list">
          <div class="item">
            <img src=" <?php echo e(asset('assets/website/indexImages/turmeric.png ')); ?> " class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="ayurveda-content">
              <div class="title"><?php echo translate('turmeric'); ?></div>
              <div class="des">
                
                <?php echo translate('turmeric_info'); ?>

              </div>
            </div>
          </div>
          <div class="item">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="ayurveda-content">
              <div class="title"><?php echo translate('ginger'); ?></div>
              <div class="des">
                
                <?php echo translate('ginger_info'); ?>

              </div>
            </div>
          </div>
          <div class="item">
            <img src=" <?php echo e(asset('assets/website/indexImages/cumin.jpg')); ?> " class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="ayurveda-content">
              <div class="title"><?php echo translate('cumin'); ?> </div>
              <div class="des">
                
                <?php echo translate('cumin_info'); ?>

              </div>
            </div>
          </div>
          <div class="item">
            <img src=" <?php echo e(asset('assets/website/indexImages/clove1.jpg')); ?> " class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="ayurveda-content">
              <div class="title"><?php echo translate('cloves'); ?></div>
              <div class="des">
                
                <?php echo translate('cloves_info'); ?>

              </div>
            </div>
          </div>
          
          <div class="item">
            <img src=" <?php echo e(asset('assets/website/indexImages/cardamom.jpg')); ?> " class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="ayurveda-content">
              <div class="title"><?php echo translate('cardamom'); ?></div>
              <div class="des">
                
                <?php echo translate('cardamom_info'); ?>


              </div>
            </div>
          </div>

          <button class="slider-btn prev hidden sm:flex" data-prev-btn id="prev">
            <ion-icon name="chevron-back"></ion-icon>
          </button>

          <button class="slider-btn next hidden sm:flex" data-next-btn id="next">
            <ion-icon name="chevron-forward"></ion-icon>
          </button>
        </div>

        <div class="thumbnail pt-4 hidden sm:flex">
          <div class="item">
            <img src=" <?php echo e(asset('assets/website/indexImages/turmeric.png')); ?> " />
            <div class="ayurveda-content">
              <div class="title"><?php echo translate('turmeric'); ?></div>
              <div class="description"><?php echo translate('golden_spice'); ?></div>
            </div>
          </div>
          <div class="item">
            <img src=" <?php echo e(asset('assets/website/indexImages/ginger.jpg')); ?> " />
            <div class="ayurveda-content">
              <div class="title"><?php echo translate('ginger'); ?></div>
              <div class="description"><?php echo translate('elixir_root'); ?></div>
            </div>
          </div>
          <div class="item">
            <img src=" <?php echo e(asset('assets/website/indexImages/cumin.jpg')); ?> " />
            <div class="ayurveda-content">
              <div class="title"><?php echo translate('cumin'); ?></div>
              <div class="description"><?php echo translate('aromatic_seed'); ?></div>
            </div>
          </div>
          <div class="item">
            <img src=" <?php echo e(asset('assets/website/indexImages/cloves.jpg')); ?> " />
            <div class="ayurveda-content">
              <div class="title"><?php echo translate('cloves'); ?></div>
              <div class="description"><?php echo translate('spice_buds'); ?></div>
            </div>
          </div>
          
          <div class="item">
            <img src=" <?php echo e(asset('assets/website/indexImages/cardamom.jpg')); ?> " />
            <div class="ayurveda-content">
              <div class="title"><?php echo translate('cardamom'); ?></div>
              <div class="description"><?php echo translate('scented_pods'); ?></div>
            </div>
          </div>
        </div>
      </div>
    </article>
  </main>

  <script src="assets/js/script.js"></script>
  <script src="./assets/js/ayurveda.js"></script>

  <?php $__env->stopSection(); ?>


  <?php $__env->startSection('extra_js'); ?>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u700657081/domains/xcrinogroup.com/public_html/andhra/resources/views/website/ayurveda.blade.php ENDPATH**/ ?>