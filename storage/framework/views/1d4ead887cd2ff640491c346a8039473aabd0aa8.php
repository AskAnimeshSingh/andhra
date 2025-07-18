
<?php $__env->startSection('extra_css'); ?>
<style>
  .branches-hero {
    color: var(--white);
    font-family: var(--fontFamily-forum);
    font-size: var(--fontSize-display-1);
    line-height: var(--lineHeight-1);
  }

  .image-container img {
    cursor: pointer;
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
    background-color: rgba(0, 0, 0, 0.7);
  }

  .text-overlay {
    position: absolute;
    top: 50%;
    right: 0;
    left: 0;
    color: white;
    text-align: center;
    z-index: 1;
  }

  .zoom-animation img {
    animation: zoom-out 5s ease infinite alternate;
  }

  @keyframes  zoom-out {
    0% {
      transform: scale(1.1);
    }

    100% {
      transform: scale(1);
    }
  }

  / Additional styles for modal /
  .modal {
    display: none;
    position: fixed;
    z-index: 9999;
    top: 0%;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.9);
  }

  .modal-content {
    margin: auto;
    display: block;
    width: 100%;
    max-width: 100%;
    position: relative;
    max-height: 100%;
    display: inline;
  }

  .modal-content img {
    width: 100%;
    height: 97%;
  }

  .close {
    position: absolute;
    top: 30px;
    right: 10px;
    width: 40px;
    height: 40px;
    color: white;
    border: 4px solid white;
    border-radius: 50%;
    font-size: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
  }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<body id="top">

  <div class="preload" id="loader">
    <div class="circle"></div>
    <p class="text">ANDHRA DINING</p>
  </div>

  <main>
    <article>
      <section>
        <div class="img-cont zoom-animation">
          <img src=" <?php echo e(asset('assets/website/indexImages/0.jpg')); ?>" alt="Image">
          <div class="dark"></div>
          <div class="text-overlay branches-hero" style="color: var(--white); font-size: var(--fontSize-display-1);line-height: var(--lineHeight-1);">
            <h1 style="font-family: var(--fontFamily-forum);">Gallery</h1>
          </div>
        </div>
      </section>

      <section class="section features text-center" aria-label="features">
        <section class="ag-photo-gallery-block">
          <div class="g-container mt-10">
            <h2 class="section-title headline-2-0 mx-10 my-5">OUR GALLERY</h2>
            <div class="g-body">
              <div class="parent-container">
                <div class="image-container">
                  <img src="<?php echo e(asset('assets/website/indexImages/1.jpg')); ?>">
                </div>
                <div class="image-container">
                  <img src="<?php echo e(asset('assets/website/indexImages/4.jpg')); ?>">
                </div>
                <div class="image-container">
                  <img src="<?php echo e(asset('assets/website/indexImages/3.jpg')); ?>">
                </div>
                <div class="image-container">
                  <img src="<?php echo e(asset('assets/website/indexImages/4.jpg')); ?>">
                </div>
                <div class="image-container">
                  <img src="<?php echo e(asset('assets/website/indexImages/5.jpg')); ?>">
                </div>
                <div class="image-container">
                  <img src="<?php echo e(asset('assets/website/indexImages/6.jpg')); ?>">
                </div>
                <div class="image-container">
                  <img src="<?php echo e(asset('assets/website/indexImages/6.jpg')); ?>">
                </div>
                <div class="image-container">
                  <img src="<?php echo e(asset('assets/website/indexImages/1.jpg')); ?>">
                </div>
                <div class="image-container">
                  <img src="<?php echo e(asset('assets/website/indexImages/9.jpg')); ?>">
                </div>
                <div class="image-container">
                  <img src="<?php echo e(asset('assets/website/indexImages/13.jpg')); ?>">
                </div>
                <div class="image-container">
                  <img src="<?php echo e(asset('assets/website/indexImages/11.jpg')); ?>">
                </div>
                <div class="image-container">
                  <img src="<?php echo e(asset('assets/website/indexImages/12.jpg')); ?>">
                </div>
              </div>
            </div>

          </div>
        </section>

        <!-- <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
          <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
        </a> -->

        <!-- Modal for displaying clicked image -->
        <div id="myModal" class="modal" style="width: 100%; height: 100%; overflow: hidden;">
          <div class="modal-content">
            <img id="modalImg">
            <div class="close">
              <h1 class="font-bold text-4xl">&times;</h1>
            </div>
          </div>
        </div>

      </section>
    </article>
  </main>

  <script>
    // Get all image containers
    const imageContainers = document.querySelectorAll('.image-container');

    // Get the modal
    const modal = document.getElementById('myModal');

    // Get the image element inside the modal
    const modalImg = document.getElementById('modalImg');

    // Loop through each image container and add click event listener
    imageContainers.forEach(container => {
      container.addEventListener('click', function() {
        // Get the clicked image source
        const imgSrc = this.querySelector('img').src;

        // Set the clicked image source to the modal image
        modalImg.src = imgSrc;

        // Display the modal
        modal.style.display = 'block';
      });
    });

    // When the user clicks on <span> (x), close the modal
    document.querySelector('.close').addEventListener('click', function() {
      modal.style.display = 'none';
    });

    // When the user clicks anywhere outside of the modal, close it
    window.addEventListener('click', function(event) {
      if (event.target === modal) {
        modal.style.display = 'none';
      }
    });
  </script>

</body>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra_js'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u700657081/domains/xcrinogroup.com/public_html/andhra/resources/views/website/gallery.blade.php ENDPATH**/ ?>