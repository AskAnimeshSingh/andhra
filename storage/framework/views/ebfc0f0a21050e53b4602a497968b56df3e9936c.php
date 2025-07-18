<?php $__env->startSection('extra_css'); ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<style>
    .h-64 {
        height: 84.5rem;
    }

    .display-2 {
        color: #F2F2F2;
        font-family: var(--fontFamily-forum);
        font-weight: var(--weight-regular);
        line-height: var(--lineHeight-2);
        font-size: var(--fontSize-display-1);
        text-align: center;
    }

    .banner-text {
        color: var(--white);
        font-family: var(--fontFamily-forum);
        font-size: var(--fontSize-display-1);
        line-height: var(--lineHeight-1);
    }

    .img-cont {
        position: relative;
        overflow: hidden;
        width: 100%;
        height: 100%;
    }

    .img-cont img {
        width: 100%;
        height: 100vh;
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
            top: 50%;
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

        .tradition_seprator {
            width: 17rem;
        }
    }

    @media  screen and (min-width: 375px) and (max-width: 425px) {
        .tradition_seprator {
            width: 19rem;
        }
    }

    @media  screen and (min-width: 425px) and (max-width: 768px) {
        .tradition_seprator {
            width: 28rem;
        }

    }

    @media  screen and (min-width: 768px) and (max-width: 1024px) {
        .tradition_seprator {
            width: 29rem;
        }
    }

    @media  screen and (min-width: 1024px) and (max-width: 1440px) {
        .tradition_seprator {
            width: 34rem;
        }

    }

    @media  screen and (min-width: 1440px) and (max-width: 2560px) {
        .tradition_seprator {
            width: 42rem;
        }
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="preload" id="loader">
    <div class="circle"></div>
    <p class="text">ANDHRA DINING</p>
</div>

<main>
    <article>
        <section>
            <div class="img-cont zoom-animation">
                <img src=" <?php echo e(asset('assets/website/indexImages/banner_branch.png')); ?>" alt="Image">
                <div class="dark"></div>
                <div class="text-overlay banner-text" style="color: var(--white);
      font-family: var(--fontFamily-forum);
      font-size: var(--fontSize-display-1);
      line-height: var(--lineHeight-1);">
                    <div><?php echo translate('discover_south_indian_cuisine'); ?></div>
                </div>

        </section>

        

        <section>
            <div class=" pt-10"
                style="background-color:#e7e5dc; display: flex; justify-content: center; flex-direction: column;">
                <div class="mx-auto"
                    style="width: 66%; display: flex; flex-direction: column; justify-content: start; align-items: start; ">
                    <!-- <h2 class="section-title headline-2-0 text-start my-5 pr-0 md:pr-0 lg:pr-[12rem]"
                        style="padding-left:0rem;">
                         <img style="width: 450px; ;" src="<?php echo e(asset('assets/website/indexImages/seprator.png')); ?>" alt="">
                        Where tradition meets taste: <h2><span style="font-size:45px;"> Join
                        us for a memorable Andhra Dining experience. </span></h2>
                    </h2> -->

                    <div class="" style="">
                        <img class="tradition_seprator" src="<?php echo e(asset('assets/website/indexImages/seprator.png')); ?>"
                            alt="">
                        <h2 class=" headline-2-0 text-start" style="padding-left:0rem;">
                            <?php echo translate('where_tradition_meets_taste'); ?>

                        </h2>
                        <h2 class=" headline-2-0 text-start " style="padding-left:0rem;">
                            <?php echo translate('join_us_for_a_memorable_andhra_dining_experience'); ?>

                        </h2>
                    </div>

                </div>
                <div class="container text-5xl flex justify-center" style="background-color:#e7e5dc">
                    <div
                        class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-x-6 gap-y-12 p-3">
                        <?php if($branchData): ?>
                            <?php $__currentLoopData = $branchData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(route('website.branch', ['id' => $data->id])); ?>">
                                    <div class="text-center bg-white flex flex-col gap-y-5 md:w-[330px]"
                                        style=" height: 350px;">
                                        <div class="container">
                                            <img src="<?php echo e(url($data->branch_banner)); ?>" alt="Andhra Dining Ginza"
                                                class="h-96 w-full">
                                        </div>
                                        <div class="">
                                            <h2 class="text-4xl font-medium mt-4" style="color: #806543; letter-spacing: 2px">
                                                <?php echo app()->getLocale() == 'ja' ? $data->type_jpn : $data->type; ?>

                                            </h2>
                                            <p class="font-bold text-3xl p-4" style="color: #806543; letter-spacing: 2px">
                                                <?php echo app()->getLocale() == 'ja' ? strtoupper($data->name_jpn) : strtoupper($data->name); ?>

                                            </p>
                                        </div>
                                    </div>
                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                    </div>
                </div>

        </section>

        <section>
            <div>

                <section class="section features text-center block md:block lg:block">
                    <div class="features-imgs mx-auto my-5">
                        <div class="block md:flex lg:flex gap-10 items-center justify-center "
                            style="align-items:flex-start;">
                            <div class="grid gap-7 w-full h-64">
                                <img class="w-full" src="<?php echo e(asset('assets/website/indexImages/branches_gallery.jpg')); ?>"
                                    style="object-fit: cover;">
                                <img class="w-full" src="<?php echo e(asset('assets/website/indexImages/1.jpg')); ?>"
                                    style="object-fit: cover; height: 325px">
                            </div>
                            <div class="w-full h-64 mt-10 lg:mt-0 md:mt-0">
                                <img class="w-full h-full"
                                    src="<?php echo e(asset('assets/website/indexImages/branches_gallery2.webp')); ?>"
                                    style="object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </section>




                <script src="./assets/js/script.js"></script>

                <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
                <?php $__env->stopSection(); ?>
                <?php $__env->startSection('extra_js'); ?>
                <?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u700657081/domains/xcrinogroup.com/public_html/andhra/resources/views/website/branchIndex.blade.php ENDPATH**/ ?>