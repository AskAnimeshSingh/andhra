<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Restaurant</title>

   <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">

   <link rel="stylesheet" href="<?php echo e(asset('assets/website/css/font-awesome.min.css')); ?>" type="text/css">
   <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
   <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;display=swap" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
   <link rel="stylesheet" href="<?php echo e(asset('assets/website/font/stylesheet.css')); ?>" type="text/css">
   
   <link rel="stylesheet" href="<?php echo e(asset('assets/website/css/newStyle.css')); ?>" type="text/css">
   <link rel="stylesheet" href="<?php echo e(asset('assets/website/css/newAyurveda.css')); ?>" type="text/css">
   <link rel="stylesheet" href="<?php echo e(asset('assets/website/css/newB1gallery.css')); ?>" type="text/css">
   <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/website/font/flaticon.css')); ?>">

   <link rel="stylesheet" href="<?php echo e(asset('assets/website/css/aos.css')); ?>" type="text/css">
   
   <link rel="stylesheet" href="<?php echo e(asset('assets/website/css/responsive.css')); ?>" type="text/css">
   <link rel="stylesheet" href="<?php echo e(asset('assets/admin/assets/bundles/izitoast/css/iziToast.min.css')); ?>">
   <link rel='shortcut icon' type='image/x-icon' href='<?php echo e(asset('assets/website/images/logo.webp')); ?>' />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


   <!-- <link src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"></link>
    <link src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"></link>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->

   
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <!--
    - preload images
  -->
   
   <link rel="stylesheet" href="<?php echo e(asset('assets/website/font/stylesheet.css')); ?>" type="text/css">
   <link rel="stylesheet" href="<?php echo e(asset('assets/website/css/bootstrap.css')); ?>" type="text/css">
   <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/website/font/flaticon.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(asset('assets/website/css/aos.css')); ?>" type="text/css">
   <link rel="stylesheet" href="<?php echo e(asset('assets/website/css/style.css')); ?>" type="text/css">
   <link rel="stylesheet" href="<?php echo e(asset('assets/website/css/responsive.css')); ?>" type="text/css">
   <link rel="stylesheet" href="<?php echo e(asset('assets/admin/assets/bundles/izitoast/css/iziToast.min.css')); ?>">
   <link rel='shortcut icon' type='image/x-icon' href='<?php echo e(asset('assets/website/images/logo.webp')); ?>' />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
   

   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..................." crossorigin="anonymous" />
   <!--
   <style>
      .border-new {
         border: 1px dashed black;
         width: 150px;
         padding: 10px;
         margin: auto;
      }
   </style> -->
   <?php echo $__env->yieldContent('extra_css'); ?>
   <style>
       <?php if( request()->is('reservation-index') || request()->is('reservation-page/*')): ?>

       .menu-color {
         color: black;
       }
       .menu-border{
         border-color:#1F1E1D;
       }

       <?php endif; ?>
   </style>
</head>

<body id="top" style="background: #E7E5DC;">
   
   

   <!--include footer-->
   <?php echo $__env->make('website.include.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <main style="background-color: white">

      <?php echo $__env->yieldContent('content'); ?>
   </main>

   <!--include footer-->
   
   <script src="<?php echo e(asset('assets/website/js/aos.js')); ?>"></script>
   <script>
      AOS.init();
   </script>
   <script src="<?php echo e(asset('assets/website/js/jquery.min.js')); ?>"></script>
   <script src="../../../cdn.jsdelivr.net/npm/%40popperjs/core%402.10.2/dist/umd/popper.min.js"></script>
   <script src="<?php echo e(asset('assets/website/js/bootstrap.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/website/js/backtotop.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/website/js/newAyurveda.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/website/js/newScript.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/website/js/review.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/website/js/branches.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/website/js/awards.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/website/js/newB1gallery.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/admin/assets/bundles/izitoast/js/iziToast.min.js')); ?>"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
    <script>
        $(function(){
            var successMessage = <?php echo json_encode(session('success'), 15, 512) ?>;
            var errorMessage = <?php echo json_encode(session('error'), 15, 512) ?>;

            if (successMessage) {
                iziToast.success({
                    title: 'Success',
                    message: successMessage,
                    position: 'topRight',
                    timeout: 5000
                });
            }

            if (errorMessage) {
                iziToast.error({
                    title: 'Error',
                    message: errorMessage,
                    position: 'topRight',
                    timeout: 5000
                });
            }
        });
    </script>



   <script>
      document.addEventListener("DOMContentLoaded", function() {
         //   document.getElementById("loader").style.display = "none";
         //   document.getElementById("content").style.display = "block"
         setTimeout(function() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("content").style.display = "block";
         }, 3000);
      })
   </script>

   <script>
      // $('.loader').hide();

      $(function() {
         $(".save_address").on("submit", function(e) {
            e.preventDefault();
            let fd = new FormData(this)
            fd.append('_token', "<?php echo e(csrf_token()); ?>");

            $.ajax({
               url: "<?php echo e(route('website.home_address')); ?>",
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
                     $("#example").modal('toggle');
                  } else {
                     iziToast.error({
                        title: '',
                        message: result.msg,
                        position: 'topRight'
                     });
                     $("#example").modal('toggle');
                     $(".save_address")[0].reset();
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
      })
   </script>

   <script>
      $(function() {
         $('.owl-prev').hide();
         $('.owl-next').click(() => {
            $('.owl-prev').fadeIn(300);
         })
      })
   </script>
   <script>
      function fadeOutPreloader() {
         var preloader = document.querySelector('.preloader');
         if (preloader) {
            preloader.style.opacity = '0'; // Apply styles only if preloader exists
         }
      }

      fadeOutPreloader();
   </script>

   <script>
      function toggleActiveClass() {
         var element = document.querySelector('.existing-element');
         if (element) {
            element.classList.toggle('active'); // Apply class only if element exists
         }
      }

      toggleActiveClass();
   </script>
   <script>
      var element = document.querySelector('.existing-element');
      if (element) {
         element.classList.toggle('active');
      } else {
         console.error("Element does not exist or cannot be found.");
      }
   </script>

   <script>
      document.addEventListener("DOMContentLoaded", function() {
         setTimeout(function() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("content").style.display = "block";
         }, 500);
      })
   </script>



   <?php echo $__env->yieldContent('extra_js'); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\andhra\resources\views/website/layout/layoutheader.blade.php ENDPATH**/ ?>