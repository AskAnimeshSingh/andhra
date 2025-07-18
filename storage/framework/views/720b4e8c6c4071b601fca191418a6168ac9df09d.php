<?php $__env->startSection('extra_css'); ?>
<style>
  .container {
    max-width: 1200px;
    height: auto;
    display: flex;
  }



  .text-center {
    margin-bottom: 20px;
  }

  .left-div,
  .right-div {
    width: 50%;
    height: auto;
  }

  .image-container {
    width: 100%;
    padding-top: 50%;
    position: relative;
  }

  .image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .text-center {
    text-align: center;
  }

  .headline-1.section-title {
    margin: 0;
  }

  @media  screen and (max-width: 768px) {
    .container {
      display: block;
      width: 100%;
      max-width: none;
      margin-left: auto;
      margin-right: auto;
    }

    .divider {
      display: none;
    }

    .left-div,
    .right-div {
      width: 100%;
      height: auto;
    }
  }
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="regis-container" style="color:black; background-color:#E7E5DC; padding-bottom:50px;">

  <div>
    <h2 class="headline-1 section-title mx-auto"
      style="margin-bottom: 5rem; text-align:center; margin-top:84px; padding-top:50px;">
      <?php echo translate('Reservation'); ?></h2>
  </div>
  <?php $__currentLoopData = $branchData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <a href="<?php echo e(route('website.reservation.page', ['id' => $data->id])); ?>" class="block">
    <div class="flex justify-center items-center min-h-auto my-10">
      <div class="flex bg-white shadow-md rounded justify-center items-center mx-12 p-12 container">
      <div class="left-div">
        <div class="text-center">
        <div class="mb-4">
          <h2 class="headline-1 section-title text-center text-5xl">
          <?php echo app()->getLocale() == 'ja' ? $data->type_jpn : $data->type; ?></h2>
          <h2 class="headline-1 section-title text-center text-4xl" style="font-family: var(--fontFamily-dm_sans);">
          <?php echo app()->getLocale() == 'ja' ? strtoupper($data->name_jpn) : strtoupper($data->name); ?></h2>
        </div>
        <div class="image-container">
          <img src="<?php echo e(url($data->branch_banner)); ?>" alt="Image" class="image">
        </div>
        </div>
      </div>
      <div class="divider w-px h-80 mx-8" style="background-color:#A07E55;"></div>
      <div class="right-div">
        <div class="text-center">
        <h2 class="headline-1 section-title text-4xl mb-2" style="font-family: var(--fontFamily-dm_sans);">
          <?php echo translate('Location'); ?></h2>
        <p class="headline-1 section-title text-2xl" style="font-family: var(--fontFamily-dm_sans);">
          <?php echo app()->getLocale() == 'ja' ? $data->address_jpn : $data->address; ?> (<?php echo e($data->seating_ability); ?>

          <?php echo stripParagraphTags(translate('seats')); ?>)</p>
        </div>
        <div class="text-center">
        <h2 class="headline-1 section-title text-4xl mb-2" style="font-family: var(--fontFamily-dm_sans);">
          <?php echo translate('business_hours'); ?></h2>
        <p class="headline-1 section-title text-2xl mb-2" style="font-family: var(--fontFamily-dm_sans);">
          <?php echo stripParagraphTags(translate('Weekdays')); ?> -
          <?php echo e(\Carbon\Carbon::createFromFormat('H:i:s', $data->weekday_opening)->format('g:iA')); ?> -
          <?php echo e(\Carbon\Carbon::createFromFormat('H:i:s', $data->weekday_noon_close)->format('g:iA')); ?>,
          <?php echo e(\Carbon\Carbon::createFromFormat('H:i:s', $data->weekday_noon_open)->format('g:iA')); ?> -
          <?php echo e(\Carbon\Carbon::createFromFormat('H:i:s', $data->weekday_closing)->format('g:iA')); ?></p>

        <p class="headline-1 section-title text-2xl" style="font-family: var(--fontFamily-dm_sans);">
          <?php echo stripParagraphTags(translate('Weekends')); ?> -
          <?php echo e(\Carbon\Carbon::createFromFormat('H:i:s', $data->weekend_opening)->format('g:iA')); ?> -
          <?php echo e(\Carbon\Carbon::createFromFormat('H:i:s', $data->weekend_noon_close)->format('g:iA')); ?>,
          <?php echo e(\Carbon\Carbon::createFromFormat('H:i:s', $data->weekend_noon_open)->format('g:iA')); ?> -
          <?php echo e(\Carbon\Carbon::createFromFormat('H:i:s', $data->weekend_closing)->format('g:iA')); ?></p>
        </div>
        <div class="text-center">
        <h2 class="headline-1 section-title text-4xl mb-2" style="font-family: var(--fontFamily-dm_sans);">
          <?php echo stripParagraphTags(translate('contact_us')); ?></h2>
        <p class="headline-1 section-title text-2xl mb-2" style="font-family: var(--fontFamily-dm_sans);">
          <?php echo stripParagraphTags(translate('TEL')); ?> - <?php echo e($data->phone); ?></p>
        <p class="headline-1 section-title text-2xl" style="font-family: var(--fontFamily-dm_sans);">
          <?php echo stripParagraphTags(translate('email')); ?> : Andhradining_ginza@gmail.com</p>
        </div>
      </div>
      </div>
    </div>
    </a>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


  <!--
  <a href="#link2" class="block">
    <div class="flex justify-center items-center min-h-auto my-10">
      <div class="flex bg-white shadow-md rounded justify-center items-center mx-12 p-12 container">
        <div class="right-div">
          <div class="text-center">
            <h2 class="headline-1 section-title text-4xl mb-2" style="font-family: var(--fontFamily-dm_sans);">Location</h2>
            <p class="headline-1 section-title text-2xl" style="font-family: var(--fontFamily-dm_sans);">2 Chome-4-3 Komatsugawa, Edogawa City, Tokyo 132-0034 (25 seats)</p>
          </div>
          <div class="text-center">
            <h2 class="headline-1 section-title text-4xl mb-2" style="font-family: var(--fontFamily-dm_sans);">Business hours</h2>
            <p class="headline-1 section-title text-2xl mb-2" style="font-family: var(--fontFamily-dm_sans);">Weekdays - 11:15AM - 2:30PM, 5:00PM - 9:00PM</p>
            <p class="headline-1 section-title text-2xl" style="font-family: var(--fontFamily-dm_sans);">Weekends - 11:30AM - 2:30PM, 5:00PM - 9:00PM</p>
          </div>
          <div class="text-center">
            <h2 class="headline-1 section-title text-4xl mb-2" style="font-family: var(--fontFamily-dm_sans);">Contact Us</h2>
            <p class="headline-1 section-title text-2xl mb-2" style="font-family: var(--fontFamily-dm_sans);">Phone number: 03-3567-4005</p>
            <p class="headline-1 section-title text-2xl" style="font-family: var(--fontFamily-dm_sans);">Email: Andhradining_ginza@gmail.com</p>
          </div>
        </div>
        <div class="divider w-px h-80 mx-8" style="background-color:#A07E55;"></div>
        <div class="left-div">
          <div class="text-center">
            <div class="mb-4">
              <h2 class="headline-1 section-title text-center text-5xl">Andhra Dining</h2>
              <h2 class="headline-1 section-title text-center text-4xl" style="font-family: var(--fontFamily-dm_sans);">Ginza</h2>
            </div>
            <div class="image-container">
              <img src="<?php echo e(asset('assets/website/indexImages/ginza.jpeg')); ?>" alt="Image" class="image">
            </div>
          </div>
        </div>
      </div>
    </div>
  </a>

  <a href="#link3" class="block">
    <div class="flex justify-center items-center min-h-auto my-10">
      <div class="flex bg-white shadow-md rounded justify-center items-center mx-12 p-12 container">
        <div class="left-div">
          <div class="text-center">
            <div class="mb-4">
              <h2 class="headline-1 section-title text-center text-5xl">Andhra Dining</h2>
              <h2 class="headline-1 section-title text-center text-4xl" style="font-family: var(--fontFamily-dm_sans);">Ginza</h2>
            </div>
            <div class="image-container">
              <img src="<?php echo e(asset('assets/website/indexImages/ginza.jpeg')); ?>" alt="Image" class="image">
            </div>
          </div>
        </div>
        <div class="divider w-px h-80 mx-8" style="background-color:#A07E55;"></div>
        <div class="right-div">
          <div class="text-center">
            <h2 class="headline-1 section-title text-4xl mb-2" style="font-family: var(--fontFamily-dm_sans);">Location</h2>
            <p class="headline-1 section-title text-2xl" style="font-family: var(--fontFamily-dm_sans);">2 Chome-4-3 Komatsugawa, Edogawa City, Tokyo 132-0034 (25 seats)</p>
          </div>
          <div class="text-center">
            <h2 class="headline-1 section-title text-4xl mb-2" style="font-family: var(--fontFamily-dm_sans);">Business hours</h2>
            <p class="headline-1 section-title text-2xl mb-2" style="font-family: var(--fontFamily-dm_sans);">Weekdays - 11:15AM - 2:30PM, 5:00PM - 9:00PM</p>
            <p class="headline-1 section-title text-2xl" style="font-family: var(--fontFamily-dm_sans);">Weekends - 11:30AM - 2:30PM, 5:00PM - 9:00PM</p>
          </div>
          <div class="text-center">
            <h2 class="headline-1 section-title text-4xl mb-2" style="font-family: var(--fontFamily-dm_sans);">Contact Us</h2>
            <p class="headline-1 section-title text-2xl mb-2" style="font-family: var(--fontFamily-dm_sans);">Phone number: 03-3567-4005</p>
            <p class="headline-1 section-title text-2xl" style="font-family: var(--fontFamily-dm_sans);">Email: Andhradining_ginza@gmail.com</p>
          </div>
        </div>
      </div>
    </div>
  </a>

  <a href="#link4" class="block">
    <div class="flex justify-center items-center min-h-auto my-10">
      <div class="flex bg-white shadow-md rounded justify-center items-center mx-12 p-12 container">
        <div class="right-div">
          <div class="text-center">
            <h2 class="headline-1 section-title text-4xl mb-2" style="font-family: var(--fontFamily-dm_sans);">Location</h2>
            <p class="headline-1 section-title text-2xl" style="font-family: var(--fontFamily-dm_sans);">2 Chome-4-3 Komatsugawa, Edogawa City, Tokyo 132-0034 (25 seats)</p>
          </div>
          <div class="text-center">
            <h2 class="headline-1 section-title text-4xl mb-2" style="font-family: var(--fontFamily-dm_sans);">Business hours</h2>
            <p class="headline-1 section-title text-2xl mb-2" style="font-family: var(--fontFamily-dm_sans);">Weekdays - 11:15AM - 2:30PM, 5:00PM - 9:00PM</p>
            <p class="headline-1 section-title text-2xl" style="font-family: var(--fontFamily-dm_sans);">Weekends - 11:30AM - 2:30PM, 5:00PM - 9:00PM</p>
          </div>
          <div class="text-center">
            <h2 class="headline-1 section-title text-4xl mb-2" style="font-family: var(--fontFamily-dm_sans);">Contact Us</h2>
            <p class="headline-1 section-title text-2xl mb-2" style="font-family: var(--fontFamily-dm_sans);">Phone number: 03-3567-4005</p>
            <p class="headline-1 section-title text-2xl" style="font-family: var(--fontFamily-dm_sans);">Email: Andhradining_ginza@gmail.com</p>
          </div>
        </div>
        <div class="divider w-px h-80 mx-8" style="background-color:#A07E55;"></div>
        <div class="left-div">
          <div class="text-center">
            <div class="mb-4">
              <h2 class="headline-1 section-title text-center text-5xl">Andhra Dining</h2>
              <h2 class="headline-1 section-title text-center text-4xl" style="font-family: var(--fontFamily-dm_sans);">Ginza</h2>
            </div>
            <div class="image-container">
              <img src="<?php echo e(asset('assets/website/indexImages/ginza.jpeg')); ?>" alt="Image" class="image">
            </div>
          </div>
        </div>
      </div>
    </div>
  </a>

  <a href="#link1" class="block">
    <div class="flex justify-center items-center min-h-auto mt-10">
      <div class="flex bg-white shadow-md rounded justify-center items-center mx-12 p-12 container">
        <div class="left-div">
          <div class="text-center">
            <div class="mb-4">
              <h2 class="headline-1 section-title text-center text-5xl">Andhra Dining</h2>
              <h2 class="headline-1 section-title text-center text-4xl" style="font-family: var(--fontFamily-dm_sans);">Ginza</h2>
            </div>
            <div class="image-container">
              <img src="<?php echo e(asset('assets/website/indexImages/ginza.jpeg')); ?>" alt="Image" class="image">
            </div>
          </div>
        </div>
        <div class="divider w-px h-80 mx-8" style="background-color:#A07E55;"></div>
        <div class="right-div">
          <div class="text-center">
            <h2 class="headline-1 section-title text-4xl mb-2" style="font-family: var(--fontFamily-dm_sans);">Location</h2>
            <p class="headline-1 section-title text-2xl" style="font-family: var(--fontFamily-dm_sans);">2 Chome-4-3 Komatsugawa, Edogawa City, Tokyo 132-0034 (25 seats)</p>
          </div>
          <div class="text-center">
            <h2 class="headline-1 section-title text-4xl mb-2" style="font-family: var(--fontFamily-dm_sans);">Business hours</h2>
            <p class="headline-1 section-title text-2xl mb-2" style="font-family: var(--fontFamily-dm_sans);">Weekdays - 11:15AM - 2:30PM, 5:00PM - 9:00PM</p>
            <p class="headline-1 section-title text-2xl" style="font-family: var(--fontFamily-dm_sans);">Weekends - 11:30AM - 2:30PM, 5:00PM - 9:00PM</p>
          </div>
          <div class="text-center">
            <h2 class="headline-1 section-title text-4xl mb-2" style="font-family: var(--fontFamily-dm_sans);">Contact Us</h2>
            <p class="headline-1 section-title text-2xl mb-2" style="font-family: var(--fontFamily-dm_sans);">Phone number: 03-3567-4005</p>
            <p class="headline-1 section-title text-2xl" style="font-family: var(--fontFamily-dm_sans);">Email: Andhradining_ginza@gmail.com</p>
          </div>
        </div>
      </div>
    </div>
  </a> -->


</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('extra_js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u700657081/domains/xcrinogroup.com/public_html/andhra/resources/views/website/reservationIndex.blade.php ENDPATH**/ ?>