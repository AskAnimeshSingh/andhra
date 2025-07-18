<?php
$content = App\Models\Contact::first();
?>
<style>
  @media  only screen and (max-width: 767px) {
    /* .headline-11 {
      display: block;
      font-size: 16px;
      text-transform: none;
      gap: 10px;
    }

    .facebook {
      margin: 10px 0;
    }

    .headline-11 li {
      margin-top: 10px;
    } */

  }

  @media  only screen and (max-width: 639px) {

    .headline-11 {
      display: block;
      font-size: 16px;
      text-transform: none;
      gap: 10px;
    }

    .facebook {
      margin: 10px 0;
    }

    .headline-11 li {
      margin-top: 10px;
    }

  }

  @media  only screen and (max-width: 479px) {
    .headline-11 {
      display: block;
      font-size: 16px;
      text-transform: none;
      gap: 10px;
    }

    .facebook {
      margin: 10px 0;
    }

    .headline-11 li {
      margin-top: 10px;
    }
  }

  @media  only screen and (max-width: 979px) {
    .headline-11 {
      font-size: 17px;
      text-transform: uppercase;
      font-family: var(--fontFamily-dm_sans);
      gap: 20px;
      letter-spacing: 4px;
    }
  }

  @media (min-width: 768px) and (max-width: 979px) {
    .headline-11 {
      font-size: 17px;
      text-transform: uppercase;
      font-family: var(--fontFamily-dm_sans);
      gap: 20px;
      letter-spacing: 4px;
    }
  }

  @media (min-width: 980px) and (max-width: 1161px) {
    .headline-11 {
      font-size: 17px;
      text-transform: uppercase;
      font-family: var(--fontFamily-dm_sans);
      gap: 20px;
      letter-spacing: 4px;
    }
  }
</style>
<div class="mx-auto" style="background-color:black; position:relative; ">
  <div class="md:flex md:items-center md:justify-between" style="padding: 50px">
    <div class="md:w-3/4">
      <h3 class="headline-1 section-title mb-4"><?php echo translate('authentic_taste_slogan'); ?></h3>
      <p class="text-[1.2rem] lg:text-[2rem] text-gray-500" style="color:#E7E5DC;font-family:var(--fontFamily-dm_sans); width:100%; font-size:2rem; line-height:28px;"><?php echo translate('footer_since_2009'); ?></p>
    </div>
    <div class="md:w-1/2 mt-4 md:mt-0 text-right">
      <a href="<?php echo e(route('website.dashboard')); ?>" class="float-right">
        <img src="<?php echo e(asset('assets/website/indexImages/footerLOGO1.png')); ?>" alt="Logo" class="w-full h-full">
      </a>
    </div>
  </div>

  <div class="" style="padding: 50px;">
    <div class="headline-11 flex flex-row justify-center gap-5" style=" width: 58%;">
      <a href="<?php echo e($content->tiktok); ?>"><img src="<?php echo e(asset('assets/website/indexImages/tiktok.png')); ?>" alt="Image 1" style="width:35px; height:35px; background-color: white; border-radius: 30%; padding: 4px;"></a>
      <a class="facebook" href="<?php echo e($content->facebook_link); ?>"><img src="<?php echo e(asset('assets/website/indexImages/fb.png')); ?>" alt="Image 1" style="width:35px; height:35px; background-color: white; border-radius: 30%; padding: 4px;"></a>
      <a href="<?php echo e($content->instagram_link); ?>"><img src="<?php echo e(asset('assets/website/indexImages/insta.png')); ?>" alt="Image 1" style="width:35px; height:35px; background-color: white; border-radius: 30%; padding: 4px;"></a>
    </div>
    
  </div>
  <div style="color: white; display: flex; justify-content: center; align-items: center; padding-bottom: 20px; font-family:var(--fontFamily-dm_sans); font-size: 15px;">
    <p style=""><?php echo e(translate('footer_all_rights_reserved')); ?></p>
  </div>

</div>
<?php /**PATH C:\xampp\htdocs\andhra\resources\views/website/include/footer.blade.php ENDPATH**/ ?>