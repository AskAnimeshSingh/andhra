<?php $__env->startSection('extra_css'); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<style>
    :root {
        --yellow: #FFBD13;
        --blue: #4383FF;
        --blue-d-1: #3278FF;
        --light: #F5F5F5;
        --grey: #AAA;
        --white: #FFF;
        --shadow: 8px 8px 30px rgba(0, 0, 0, .05);
    }

    .form {
        margin-top: 0px;
        display: flex;
        flex-direction: column;
    }

    .feedback-wrapper {
        background: var(--white);
        padding: 2rem;
        width: 100%;
        border-radius: .75rem;
        text-align: start;
    }

    /* .feedback-wrapper h3 {
                                        font-size: 4rem;
                                        margin-bottom: 1rem;
                                        font-family: var(--fontFamily-forum);
                                        color: #A07E55;
                                      } */

    .rating {
        display: flex;
        justify-content: start;
        align-items: center;
        grid-gap: .5rem;
        font-size: 3rem;
        color: #A07E55;
        margin-bottom: 2rem;
    }

    .rating .star {
        cursor: pointer;
    }

    .rating .star.active {
        opacity: 0;
        animation: animate .5s calc(var(--i) * .1s) ease-in-out forwards;
    }

    @keyframes  animate {
        0% {
            opacity: 0;
            transform: scale(1);
        }

        50% {
            opacity: 1;
            transform: scale(1.2);
        }

        100% {
            opacity: 1;
            transform: scale(1);
        }
    }


    .rating .star:hover {
        transform: scale(1.1);
    }

    textarea {
        width: 100%;
        background: var(--light);
        padding: 1.5rem;
        border: none;
        outline: none;
        resize: none;
        margin-bottom: 2rem;
        color: #A07E55;
    }

    .feedback-text {
        width: 100%;
        background: var(--light);
        padding: 1.5rem;
        border: none;
        outline: none;
        resize: none;
        margin-bottom: 2rem;
        color: #A07E55;
        font-family: var(--fontFamily-dm_sans);
    }

    .email {
        width: 100%;
        background: var(--light);
        padding: 1.5rem;
        border: none;
        outline: none;
        resize: none;
        margin-bottom: 2rem;
        color: #A07E55;
        font-family: var(--fontFamily-dm_sans);
    }

    .phonenumber {
        width: 100%;
        background: var(--light);
        padding: 1.5rem;
        border: none;
        outline: none;
        resize: none;
        margin-bottom: 2rem;
        color: #A07E55;
        font-family: var(--fontFamily-dm_sans);
    }

    .butn-group {
        background-color: #E7E5DC;
        padding: 1rem;
    }

    .butn-group .butn {
        cursor: pointer;
        font-size: 1.5rem;
        font-weight: 500;
        font-family: var(--fontFamily-dm_sans);
    }

    .butn-group .butn.submit {
        color: #A07E55;
        transition: border 0.3s, transform 0.3s;
        font-family: var(--fontFamily-dm_sans);
    }

    .butn-group .butn.submit:hover {
        background: #E7E5DC;
        transform: scale(1.05);
    }


    /**
                                    * responsive for larger than 992px screen
                                    */

    @media (min-width: 992px) {
        .review-img {
            margin: auto;
            border-radius: 100px;
        }

        .feedback {
            width: 100%;
            justify-content: start;
            align-items: center;
            padding: 8rem;
        }

        .modal-content {
            width: 80%;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin: 60px auto;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        .cls-btn {
            cursor: pointer;
            color: #6A432A;
            float: right;
            width: 20%;
            height: auto;
            padding: 60px 10px 10px 10px;
        }


    }


    @media  only screen and (max-width: 375px) {
        .review-img {
            margin: auto;
            border-radius: 100px;
            width: 100px;
            height: 100px;
        }

        .close-btn-wrapper {
            width: 6%;
            position: relative;
            cursor: pointer;
        }

        .fe-top {
            margin-bottom: 0px;
        }

        .feedback-wrapper h3 {
            font-size: 3rem;
            margin-bottom: 1rem;
            font-family: var(--fontFamily-forum);
            color: #A07E55;
        }

        .review-img {
            margin: auto;
            border-radius: 100px;
            width: 100px;
            height: 100px;
        }

        .cls-btn {
            cursor: pointer;
            color: #6A432A;
            float: right;
            width: 20%;
            height: auto;
            padding: 60px 10px 10px 10px;
        }

        .modal-content {
            width: 100%;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin: 20px 10px 20px 10px;
        }

        .feedback {
            width: 100%;
            justify-content: start;
            align-items: center;
            /* padding: 8rem; */
        }

        .custom-modal {
            /* display: none; */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 50;
        }
    }

    @media  only screen and (max-width: 320px) {
        .review-img {
            margin: auto;
            border-radius: 100px;
            width: 100px;
            height: 100px;
        }

        .feedback-wrapper h3 {
            font-size: 2.2rem;
            margin-bottom: 1rem;
            font-family: var(--fontFamily-forum);
            color: #A07E55;
        }

        .close-btn-wrapper {
            width: 6%;
            position: relative;
            cursor: pointer;
        }

        .fe-top {
            margin-bottom: 0px;
        }

        .cls-btn {
            cursor: pointer;
            color: #6A432A;
            float: right;
            width: 30%;
            height: auto;
            padding: 60px 10px 10px 10px;
        }

        .modal-content {
            width: 100%;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin: 20px 10px 20px 10px;
        }

        .feedback {
            width: 100%;
            justify-content: start;
            align-items: center;
        }

        .custom-modal {
            /* display: none; */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 1;
        }
    }

    @media  only screen and (max-width: 425px) {
        .review-img {
            margin: auto;
            border-radius: 100px;
            width: 100px;
            height: 100px;
        }

        .close-btn-wrapper {
            width: 6%;
            position: relative;
            cursor: pointer;
        }

        .fe-top {
            margin-bottom: 0px;
        }

        .feedback-wrapper h3 {
            font-size: 3rem;
            margin-bottom: 1rem;
            font-family: var(--fontFamily-forum);
            color: #A07E55;
        }

        .section {
            padding: 25px 0px 25px 0px;
        }

        .review-img {
            margin: auto;
            border-radius: 100px;
            width: 100px;
            height: 100px;
        }

        .cls-btn {
            cursor: pointer;
            color: #6A432A;
            float: right;
            width: 20%;
            height: auto;
            padding: 60px 10px 10px 10px;
        }

        .modal-content {
            width: 100%;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin: 20px 10px 20px 10px;
        }

        .feedback {
            width: 100%;
            justify-content: start;
            align-items: center;
        }

        .custom-modal {
            /* display: none; */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 1;
        }
    }

    @media  only screen and (max-width: 1440px) {
        .feedback {
            width: 100%;
            justify-content: start;
            align-items: center;
        }

        .close-btn-wrapper {
            width: 10%;
            position: relative;
            cursor: pointer;
        }

        .fe-top {
            margin-bottom: 30px;
        }

        .feedback-wrapper h3 {
            font-size: 4rem;
            margin-bottom: 1rem;
            font-family: var(--fontFamily-forum);
            color: #A07E55;
        }

        .modal-content {
            width: 80%;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin: 20px auto;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        .cls-btn {
            cursor: pointer;
            color: #6A432A;
            float: right;
            width: 10%;
            height: auto;
            padding: 60px 10px 10px 10px;
        }

    }

    @media  only screen and (max-width: 2560px) {
        .feedback-wrapper h3 {
            font-size: 4rem;
            margin-bottom: 1rem;
            font-family: var(--fontFamily-forum);
            color: #A07E55;
        }

        .close-btn-wrapper {
            width: 3%;
            position: relative;
            cursor: pointer;
        }

        .fe-top {
            margin-bottom: 30px;
        }

        .cls-btn {
            cursor: pointer;
            color: #6A432A;
            float: right;
            width: 10%;
            height: auto;
            padding: 60px 10px 10px 10px;
        }
    }

    @media  only screen and (max-width: 1024px) {
        .feedback {
            width: 100%;
            justify-content: start;
            align-items: center;
        }

        .close-btn-wrapper {
            width: 6%;
            position: relative;
            cursor: pointer;
        }

        .fe-top {
            margin-bottom: 30px;
        }

        .feedback-wrapper h3 {
            font-size: 4rem;
            margin-bottom: 1rem;
            font-family: var(--fontFamily-forum);
            color: #A07E55;
        }

        .modal-content {
            width: 78%;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin: 20px 10px 20px 10px;
        }

        .cls-btn {
            cursor: pointer;
            color: #6A432A;
            float: right;
            width: 10%;
            height: auto;
            padding: 60px 10px 10px 10px;
        }

    }

    @media  only screen and (max-width: 768px) {
        .review-img {
            margin: auto;
            border-radius: 100px;
            width: 100px;
            height: 100px;
        }

        .close-btn-wrapper {
            width: 7%;
            position: relative;
            cursor: pointer;
        }

        .feedback-wrapper h3 {
            font-size: 3rem;
            margin-bottom: 1rem;
            font-family: var(--fontFamily-forum);
            color: #A07E55;
        }

        .feedback {
            width: 100%;
            justify-content: start;
            align-items: center;
        }

        .modal-content {
            width: 78%;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin: 20px 10px 20px 10px;
        }

        .cls-btn {
            cursor: pointer;
            color: #6A432A;
            float: right;
            width: 10%;
            height: auto;
            padding: 10px 10px 10px 10px;
            position: absolute;
            right: 100px;
        }

    }

    .modal-body {
        font-family: Arial, sans-serif;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Styles for the modal */
    .custom-modal {
        /* display: none; */
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
        z-index: 1;
    }

    .hidden {
        display: none
    }

    .r-body {
        width: 100%;
        position: absolute;
        min-height: 100vh;
        background-color: #fcfcfc;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .r-container {
        position: relative;
        width: 100%;
    }

    .r-container .r-contents-wraper {
        width: 100%;
        min-height: inherit;
        margin: auto;
        text-align: center;
        z-index: 10;
    }

    .r-contents-wraper .header h1 {
        position: relative;
        font-size: 40px;
        text-transform: uppercase;
        font-weight: 500;
        text-align: center;
        letter-spacing: 1px;
    }

    .r-contents-wraper .header h1::before {
        content: '';
        width: 200px;
        height: 2px;
        background-color: #006994;
        border-radius: 15px;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        bottom: -10px;
    }

    .r-contents-wraper .testRow {
        width: 90%;
        min-height: inherit;
        position: relative;
        overflow: hidden;
        margin: auto;
    }

    .testRow .testItem {
        width: 100%;
        /* height: 100%; */
        position: absolute;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .testRow .testItem:not(.active) {
        top: 0;
        left: -100%;
    }

    .testItem {
        opacity: 0;
        transition: opacity 0.5s ease-in-out;
    }

    .testItem.active {
        opacity: 1;
    }

    .testRow .testItem img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 5px;
        outline: 2px solid #006994;
        outline-offset: 2px;
    }

    .testRow .testItem h3 {
        font-size: 30px;
        font-style: italic;
        padding: 7px;
    }

    .testRow .testItem h4 {
        font-style: italic;
    }

    .testRow .testItem p {
        font-size: 30px;
        letter-spacing: 1px;
        line-height: 1.2;
        padding: 0px;
        font-family: var(--fontFamily-forum);
    }

    .r-contents-wraper .indicators {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        padding: 5px;
        cursor: pointer;
    }

    .r-contents-wraper .indicators .dot {
        width: 10px;
        height: 10px;
        margin: 0px 3px;
        border: 3px solid #aaa;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.5s ease;
    }

    .r-contents-wraper .indicators .active {
        background-color: #A07E55;
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

    .rimages img {
        width: 100%;
        height: auto;
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

    .img-slider {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        /* 	flex-wrap: wrap; */
        height: 100vh;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    .awards-logo {
        font-size: 40px;
        color: #14f7c1;
        letter-spacing: 10px;
        position: absolute;
        opacity: 0;
        overflow: hidden;
        height: fit-content;
        width: fit-content;
    }

    .awards-logo img {
        height: 100%;
        width: 100%;
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

    @keyframes  next1 {
        from {
            left: 0%;
        }

        to {
            left: -100%;
        }
    }

    @keyframes  next2 {
        from {
            left: 100%;
        }

        to {
            left: 0%;
        }
    }

    @keyframes  prev1 {
        from {
            left: 0%;
        }

        to {
            left: 100%;
        }
    }

    @keyframes  prev2 {
        from {
            left: -100%;
        }

        to {
            left: 0%;
        }
    }

    @media(max-width: 550px) {
        .r-container .contents-wraper {
            width: 90%;
        }

        .r-contents-wraper .header h1 {
            font-size: 32px;
        }

        .testRow .testItem h3 {
            font-size: 26px;
        }

        .testRow .testItem p {
            font-size: 16px;
            letter-spacing: initial;
            line-height: initial;
        }
    }

    ::placeholder {
        color: #A07E55;
    }

    /* ----------------- */

    body {
        background: aliceblue;
    }

    .gtco-testimonials {
        position: relative;
        margin-top: 30px;

        h2 {
            font-size: 30px;
            text-align: center;
            color: #333333;
            margin-bottom: 50px;
        }

        .owl-stage-outer {
            padding: 30px 0;
        }

        .owl-nav {
            display: none;
        }

        .owl-dots {
            text-align: center;

            .active {
                box-shadow: none;
            }
        }

        .card {
            background: #fff;
            box-shadow: black;
            margin: 0 20px;
            padding: 0 10px;
            border-radius: 20px;
            border: 0;

            .card-img-top {
                max-width: 50px;
                margin: 15px auto 0;
                width: 50px;
                height: 50px;
            }

            h5 {
                color: black;
                font-size: 21px;
                line-height: 1.3;
                padding-bottom: 2rem;

                /* span1 {
            font-size: 18px;
            color: #666666;
          } */
            }

            p {
                font-size: 18px;
                color: #555;
                padding-bottom: 15px;
            }
        }

        .active {
            opacity: 0.5;
            transition: all 0.3s;
        }

        .center {
            opacity: 1;

            h5 {
                font-size: 24px;

                /* span1 {
            font-size: 20px;
          } */
            }

            .card-img-top {
                max-width: 100%;
                height: 80px;
                width: 80px;
            }
        }
    }

    @media (max-width: 767px) {
        .gtco-testimonials {
            margin-top: 20px;
        }
    }

    .owl-carousel {
        .owl-nav button {

            &.owl-next,
            &.owl-prev {
                outline: 0;
            }
        }

        /* button.owl-dot {
        outline: 0;
      } */
    }

    /* media query */
    /* w-[18rem] sm:w-[25rem] lg:w-[29rem] xl:w-[370px] */

    @media  screen and (min-width: 320px) and (max-width: 375px) {
        .img_size {
            width: 18rem;
        }

        .latest_seprator {
            width: 17rem;
        }

        .Excellence_seprator {
            width: 27rem;
        }

        .text-width{
            width: 86%;
        }
    }

    @media  screen and (min-width: 375px) and (max-width: 425px) {
        .img_size {
            width: 19rem;
        }

        .latest_seprator {
            width: 18rem;
        }
        .Excellence_seprator {
            width: 27rem;
        }

        .text-width{
            width: 80%;
        }
    }

    @media  screen and (min-width: 425px) and (max-width: 768px) {
        .img_size {
            width: 18rem;
        }

        .latest_seprator {
            width: 19rem;
        }
        .Excellence_seprator {
            width: 29rem;
        }

        .text-width{
            width: 80%;
        }
    }

    @media  screen and (min-width: 768px) and (max-width: 1024px) {
        .img_size {
            width: 25rem;
        }

        .latest_seprator {
            width: 23rem;
        }
        .Excellence_seprator {
            width: 27rem;
        }

        .text-width{
            width: 80%;
        }
    }

    @media  screen and (min-width: 1024px) and (max-width: 1440px) {
        .img_size {
            width: 29rem;
        }

        .latest_seprator {
            width: 28rem;
        }
        .Excellence_seprator {
            width: 42rem;
        }

        .text-width{
            width: 90%;
        }
    }

    @media  screen and (min-width: 1440px) and (max-width: 2560px) {
        .img_size {
            width: 36rem;
        }

        .latest_seprator {
            width: 35rem;
        }
        .Excellence_seprator {
            width: 53.5rem;
        }

    }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!--- #PRELOADER  -->

<div class="preload" id="loader">
    <div class="circle"></div>
    <p class="text">ANDHRA DINING</p>
</div>

<main>
    <article>
        <section>
            <div>
                <section class="hero text-center" aria-label="home" id="home" style="height:100%;">
                    <ul class="hero-slider" data-hero-slider>
                        <li class="slider-item active" data-hero-slider-item>
                            <div class="slider-bg">
                                <img src="<?php echo e(asset('assets/website/indexImages/hero-slider-1.jpeg')); ?>" alt=""
                                    class="img-cover">
                            </div>
                            <h1 class="display-1 hero-title slider-reveal">
                                <?php echo translate('andhra_born_in_japan'); ?>

                            </h1>
                            <!-- <h1 class="hero-title slider-reveal" style=" font-weight: 10; color:#F5F5F5; font-family:var(--fontFamily-forum); font-size:xxx-large; line-height: var(--lineHeight-2); margin-top:0px">BORN IN JAPAN</h1> -->
                        </li>

                        <li class="slider-item" data-hero-slider-item>
                            <div class="slider-bg">
                                <img src="<?php echo e(asset('assets/website/indexImages/Home2.png')); ?>" alt="" class="img-cover">
                            </div>
                            <h1 class="display-1 hero-title slider-reveal">
                                <?php echo translate('where_andhra_comes_to_life'); ?>

                            </h1>
                        </li>
                        <li class="slider-item" data-hero-slider-item>
                            <div class="slider-bg">
                                <img src="<?php echo e(asset('assets/website/indexImages/home3.png')); ?>" alt="" class="img-cover">
                            </div>
                            <h1 class="display-1 hero-title slider-reveal">
                                <?php echo translate('where_every_flavor_tells_a_story'); ?>

                            </h1>
                        </li>
                    </ul>

                    <button class="slider-btn prev" style="display:none;" aria-label="slide to previous" data-prev-btn>
                        <!-- <ion-icon name="chevron-back"></ion-icon> -->
                    </button>

                    <button class="slider-btn next" style="display:none;" aria-label="slide to next" data-next-btn>
                        <!-- <ion-icon name="chevron-forward"></ion-icon> -->
                    </button>

                </section>

                <div class="pt-20" style="background-color: #E7E5DC; ">
                    <div class=" lg:flex justify-center">
                        <!-- Left Side (Image) -->
                        <div class=" flex-1 lg:mr-20">
                            <img src="<?php echo e(url($ayurveda->philosophy_banner)); ?>" alt="Your Image"
                                class="w-full h-screen object-cover" />
                        </div>
                        <!-- Right Side (Paragraph) -->
                        <div class="flex-1 p-8 flex flex-col justify-center lg:ml-[40px]" style="">
                            <div class="w-full">

                                <img class="img_size" src="<?php echo e(asset('assets/website/indexImages/seprator.png')); ?>"
                                    alt="">
                                <!-- <p class="section-subtitle-3 label-2-0"></p> -->
                                <h2 class="headline-1 section-title" style=""><?php echo translate('Our_Philosophy'); ?></h2>
                            </div>
                            <p class="pw w-[100%] text-justify font-light"
                                style="font-family:var(--fontFamily-dm_sans);">
                                <?php echo e(app()->getLocale() == 'ja' ? $ayurveda->philosophy_description_jpn : $ayurveda->philosophy_description); ?><br /><br />
                                <span style="text-align:start"
                                    style="font-family:var(--fontFamily-dm_sans); "><?php echo translate('andhra_born_in_japan'); ?></span>
                            </p>
                        </div>
                    </div>
                </div>

                <!--
                                            - #News And Info
                                          -->
                <section class="section event " aria-label="event" style=" background-color:#FFFFFF;">
                    <div class="container" style="padding-top:40px;">
                        <div class="" style="">
                            <img class="latest_seprator" src="<?php echo e(asset('assets/website/indexImages/seprator.png')); ?>"
                                alt="">
                            <!-- <p class="section-subtitle-3 label-2-0"></p> -->

                            <h2 class=" headline-2-0 text-[30px]  text-start pr-0 md:pr-0 lg:pr-[12rem]"
                                style="padding-left:0rem; "><?php echo translate('latest_updates'); ?>

                            </h2>
                            <h2 class=" headline-2-0 text-[25px] text-start pr-0 md:pr-0 lg:pr-[12rem]"
                                style="padding-left:0rem;"><?php echo translate('Discover what'); ?>

                            </h2>
                        </div>
                        <!-- <h1 ">Latest Updates:</h1> -->
                        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-3 lg:gap-20 md:gap-5 gap-10 mx-auto"
                            style="padding: 40px 0 0 0;">
                            <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="flex flex-col text-justify items-center h-full gap-15"
                                    style="margin: auto; justify-content: start;">
                                    <div class="p-5"
                                        style="color: #6A432A;text-align: center;background-color: #E7E5DC;width: 100%;height: 100%;display: flex;flex-direction: column;justify-content: start;place-items: center;gap:50px;">
                                        <p class="text-center text-lg leading-10"
                                            style="text-align: center; font-size: large; letter-spacing: 3px; color: #6A432A; margin-top: 10px;">
                                            <?php echo app()->getLocale() == 'ja' ? $data->name_jpn : $data->name; ?>

                                        </p>
                                        <p class=""
                                            style="text-justify color: #6A432A; font-family: 'DM Sans', sans-serif; line-height: 22px; margin-top: <?php echo e($data->name === 'TELUGU MOVIES IN TOKYO' ? '0px;' : '0px;'); ?> font-size: 14px;">
                                            <?php echo app()->getLocale() == 'ja' ? $data->headline_jpn : $data->headline; ?>

                                        </p>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                </section>

                <section>
                    <div class="pt-20 "
                        style="position: relative; background-image: url('<?php echo e(asset('assets/website/indexImages/ricebanner.png')); ?>'); background-repeat: no-repeat; background-size: cover; height: 500px;">
                        <div
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);">
                        </div>
                        <div class="ind">
                            <h1 class="headline-1 section-title" style="color:white">
                                <?php echo translate('indulge_in_exotic_delights'); ?>

                            </h1>
                            <a href="<?php echo e(route('website.branchIndex')); ?>" class="btn btn-primary"
                                style="color: white; border-color: white; margin-top:25px;">
                                <span class="text text-1"><?php echo translate('Our_Restaurants'); ?></span>
                            </a>
                        </div>
                    </div>
                </section>

                <section class="section  event bg-black-10-1" aria-label="event">
                    <div class="container dp-container" style="display: flex; flex-direction: column;">
                        <div class="">
                            <div style="width:80%">
                                <!-- <img style="width: 250px;" class="sm:ml-52 xl:ml-80" src="<?php echo e(asset('assets/website/indexImages/seprator.png')); ?>" alt=""> -->
                            </div>
                            <!-- <p class="section-subtitle-4 label-7-0 text-start"></p> -->
                            <h2 class="section-title headline-2-0 text-start lg:my-5 lg:pl-19 lg:pr-19">
                                <?php echo translate('Discover_the_Rich_Cultural_Hub'); ?>

                            </h2>
                            <div class="dp text-justify"
                                style="display: flex; flex-direction: column; align-items: center;">
                                <p>
                                    <?php echo app()->getLocale() == 'ja' ? $dataAndra->andra_jp : $dataAndra->andra; ?>

                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section event  bg-black-10 pt-20 pb-11" aria-label="event" style="">
                    <div class="container">
                        <!-- <p class="section-subtitle-5 label-2-0 text-start"></p> -->
                        <!-- <img style="width: 250px" src="<?php echo e(asset('assets/website/indexImages/seprator.png')); ?>" alt=""> -->
                        <h2 class=" text-[#A07E55] headline-2-0 text-start lg:my-5  " style="padding-left:0rem;">
                            <?php echo translate('At_Andhra_Dining_we_always_Strive'); ?>

                        </h2>
                        <div
                            class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-3 lg:gap-40 md:gap-5 gap-10 mx-auto mt-20">
                            <div class="feature-card"
                                style="color: #6A432A; text-align: start; background-color: #E7E5DC; width: 100%; height: 100%;">
                                <div class="card-icon mx-auto"><img
                                        src=" <?php echo e(asset('assets/website/indexImages/features-icon-2.png')); ?> "
                                        width="100" height="100" loading="lazy" alt="icon"></div>
                                <p class="text-center text-lg leading-10 my-10 "
                                    style="text-align: start; font-size: xx-large; letter-spacing: 3px; color: #6A432A;font-family:var(--fontFamily-forum);">
                                    <?php echo translate('premium_quality'); ?>

                                </p>
                                <p class="text-center"
                                    style="color: #6A432A; font-family: 'DM Sans', sans-serif; line-height: 22px;font-size: 15px;">
                                    <?php echo translate('serve_our_customers_with_the_best'); ?>

                                </p>
                            </div>
                            <div class="feature-card"
                                style="color: #6A432A; text-align: start; background-color: #E7E5DC; width: 100%; height: 100%;">
                                <div class="card-icon mx-auto"><img
                                        src=" <?php echo e(asset('assets/website/indexImages/features-icon-1.png')); ?> "
                                        width="100" height="100" loading="lazy" alt="icon"></div>
                                <p class="text-center text-lg leading-10 my-10"
                                    style="text-align: start; font-size: xx-large; letter-spacing: 3px; color: #6A432A;font-family:var(--fontFamily-forum);">
                                    <?php echo translate('fresh_ingredients'); ?>

                                <p class="text-center"
                                    style="color: #6A432A; font-family: 'DM Sans', sans-serif; line-height: 22px;font-size: 15px;">
                                    <?php echo translate('We_prepare_delicious_South_Indian_food'); ?>

                                </p>
                            </div>
                            <div class="feature-card"
                                style="color: #6A432A; text-align: start; background-color: #E7E5DC;width: 100%; height: 100%;">
                                <div class="card-icon mx-auto"><img
                                        src=" <?php echo e(asset('assets/website/indexImages/features-icon-3.png')); ?> "
                                        width="100" height="100" loading="lazy" alt="icon"></div>
                                <p class="text-center text-lg leading-10 my-10"
                                    style="text-align: start; font-size: xx-large; letter-spacing: 3px; color: #6A432A; font-family:var(--fontFamily-forum);">
                                    <?php echo translate('homemade_masala'); ?>

                                </p>
                                <p class="text-center"
                                    style="color: #6A432A; font-family: 'DM Sans', sans-serif; line-height: 22px;font-size: 15px;">
                                    <?php echo translate('To_provide_the_most_authentic_taste'); ?>

                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="container h-full w-full flex gap-[10px] justify-center items-center bg-white"
                    style="max-width:100%;">
                    <div class="flex">
                        <div class="w-1/2" style="margin-right:15px;">
                            <img src="<?php echo e(asset('assets/website/indexImages/pasta.jpeg')); ?>" alt="Image 1"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="w-1/2" style="margin-left:15px;">
                            <img src="<?php echo e(asset('assets/website/indexImages/home-leftimg.jpeg')); ?>" alt="Image 2"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>



                <section style="" class="pb-14">
                    <div class="container"
                        style="background-color:#FFFFFF; display: flex; flex-direction: column ; justify-content:center; align-items: center;">
                        <div class="text-width" style=" display: flex;  ">
                            <h2 class="section-title headline-2-0 text-start my-5 pr-0 md:pr-0 lg:pr-[12rem]"
                                style="padding-left:0rem;">
                                <!-- <p class="section-subtitle-5 label-2-0 text-start"></p> -->
                                <img class="Excellence_seprator" class=""
                                    src="<?php echo e(asset('assets/website/indexImages/seprator.png')); ?>" alt="">
                                <?php echo translate('celebrating_excellence_award_winning_achievements'); ?>

                                <p><?php echo translate('Our Award-Winning Achievements'); ?></p>
                            </h2>
                        </div>
                        <div class="container text-5xl flex justify-center pt-5" style="background-color:#FFFFFF">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-x-20 gap-y-12 p-30">
                                <!-- card1 -->
                                <div class="text-center bg-white flex justify-end gap-y-6 flex-col "
                                    style="lg:width: 400px; height: 350px;">
                                    <div class="container">
                                        <img src="<?php echo e(asset('assets/website/indexImages/award1.png')); ?>"
                                            alt="Andhra Dining Ginza" class="mx-auto" style="height:25rem">
                                    </div>
                                    <div class="">
                                        <h2 class="text-4xl font-medium " style="color: #806543; letter-spacing: 2px">
                                            Michelin
                                            2016 and 2017</h2>
                                    </div>
                                </div>
                                <div class="text-center bg-white flex flex-col my-auto  justify-end"
                                    style="lg:width: 400px;      height: 350px;">
                                    <div class="container h-1/2 flex justify-end items-end my-auto">
                                        <img src="<?php echo e(asset('assets/website/indexImages/award3.png')); ?>"
                                            alt="Andhra Dining Ginza" class="mx-auto my-auto">
                                    </div>
                                    <div class="">
                                        <h2 class="text-4xl font-medium " style="color: #806543; letter-spacing: 2px">
                                            Tabelog
                                            2009 to 2023</h2>
                                    </div>
                                </div>

                                <div class="text-center bg-white flex flex-col justify-end "
                                    style="lg:width: 400px; height: 350px;">
                                    <div class="container">
                                        <img src="<?php echo e(asset('assets/website/indexImages/award2.png')); ?>"
                                            alt="Andhra Dining Ginza" class="mx-auto" style="height:30rem">
                                    </div>
                                    <div class="">
                                        <h2 class="text-4xl font-medium mt-4"
                                            style="color: #806543; letter-spacing: 2px">Trip
                                            2016 to 2023</h2>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </section>



                <d iv class="gtco-testimonials h-screen flex flex-col justify-center items-center "
                    style="background-color:#E7E5DC">
                    <h2 style="font-size:38px; color:#A07E55; font-family:var(--fontFamily-forum);"
                        class="text-center  font-normal text-gray-700 mb-10"><?php echo translate('customer_reviews'); ?></h2>
                    <div class="owl-carousel owl-carousel1 owl-theme">
                        <?php $__currentLoopData = $review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div>
                                <div class="card text-center"><img class="card-img-top"
                                        src="<?php echo e(asset('assets/website/indexImages/review1.svg')); ?>" alt="">
                                    <div class="card-body">
                                        <h5><?php echo e($item->name); ?></h5>
                                        <p class="card-text">“ <?php echo e($item->comment); ?> ” </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                    </div>
                    <div class="" style="">
                        <a class="open-modal-btn btn btn-primary" id="openModalBtn"
                            style="color:#A07E55; border-color:#A07E55; cursor:pointer;">
                            <span class="text text-1"
                                style="font-family: var(--fontFamily-dm_sans);"><?php echo translate('give_review'); ?></span>
                        </a>

                        <!-- Modal -->
                        <div class="custom-modal hidden" id="customModal">
                            <div class="modal-content">
                                <div class="feedback">
                                    <div class="feedback-wrapper">
                                        <div class="fe-top flex flex-row-2 items-start gap-14 justify-between">
                                            <h3><?php echo translate('give_us_your_feedback'); ?></h3>
                                            <div class="close-btn-wrapper">
                                                <img src="<?php echo e(asset('assets/website/indexImages/cancel.png')); ?>" class=""
                                                    id="closeModalBtn" alt="Close">
                                            </div>
                                        </div>
                                        <form action="<?php echo e(route('website.storeReview')); ?>" method="post" class="form">
                                            <?php echo csrf_field(); ?>
                                            <div class="rating">
                                                <input type="number" name="rating" hidden>
                                                <i class='bx bx-star star' style="--i: 0;"></i>
                                                <i class='bx bx-star star' style="--i: 1;"></i>
                                                <i class='bx bx-star star' style="--i: 2;"></i>
                                                <i class='bx bx-star star' style="--i: 3;"></i>
                                                <i class='bx bx-star star' style="--i: 4;"></i>
                                            </div>
                                            <input type="text" name="name"
                                                placeholder="<?php echo stripParagraphTags(translate('name')); ?>"
                                                class="feedback-text" required>
                                            <div class="email-phn">
                                                <div style="width: 100%; height: 100%;">
                                                    <input type="email" name="email"
                                                        placeholder="<?php echo stripParagraphTags(translate('email_optional')); ?>"
                                                        class="email">
                                                </div>
                                                <div style="width: 100%; height: 100%;">
                                                    <input type="tel" name="phone"
                                                        placeholder="<?php echo stripParagraphTags(translate('phone_number_optional')); ?>"
                                                        class="phonenumber">
                                                </div>
                                            </div>
                                            <input type="hidden" name="type" id="type" value="0">
                                            <textarea name="opinion" cols="30" rows="5"
                                                placeholder="<?php echo stripParagraphTags(translate('How was your experience dining at Andhra Dining?')); ?>"
                                                required></textarea>
                                            <div class="butn-group"
                                                style="padding:1.2rem 2rem; align-self: flex-end; width: 100%">
                                                <button type="submit"
                                                    class="butn butn submit"><?php echo stripParagraphTags(translate('submit')); ?></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </d>

                <section>
                    <div class=""
                        style=" position: relative; background-image: url('<?php echo e(asset('assets/website/indexImages/homebannerr.jpeg')); ?>'); background-repeat: no-repeat; background-size: cover; height: 400px;">
                        <div
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);">
                        </div>
                    </div>
                </section>
        </section>
    </article>
</main>

<!--
                                        - custom js link
                                      -->
<script src="./assets/js/script.js"></script>

<!--
                                        - ionicon link
                                      -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    < script >
        <?php if(session('success')): ?>
            iziToast.success({
                title: 'Success',
            message: '<?php echo e(session('
                                                                                                                                                                                                                                    success ')); ?>',
            position: 'topRight'
                                                                                            });
        <?php endif; ?>
</script>

<script>
        document.addEventListener('DOMContentLoaded', function() {
            const boxes = document.querySelectorAll('.box');

        window.addEventListener('scroll', checkBoxes);

        function checkBoxes() {
                const triggerBottom = (window.innerHeight / 5) * 4;

                boxes.forEach((box) => {
                    const boxTop = box.getBoundingClientRect().top;

        if (boxTop < triggerBottom) {
            box.classList.add('show');
                    } else {
            box.classList.remove('show');
                    }
                });
            }
        });

        const allStar = document.querySelectorAll('.rating .star')
        const ratingValue = document.querySelector('.rating input')

        allStar.forEach((item, idx) => {
            item.addEventListener('click', function () {
                let click = 0
                ratingValue.value = idx + 1

                allStar.forEach(i => {
                    i.classList.replace('bxs-star', 'bx-star')
                    i.classList.remove('active')
                })
                for (let i = 0; i < allStar.length; i++) {
                    if (i <= idx) {
                        allStar[i].classList.replace('bx-star', 'bxs-star')
                        allStar[i].classList.add('active')
                    } else {
                        allStar[i].style.setProperty('--i', click)
                        click++
                    }
                }
            })
        })


        var mySwiper = new Swiper('.swiper-5', {
            navigation: {
            nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
            },
        loop: true,
        autoplay: {
            delay: 3000,
        disableOnInteraction: true,
            },
        });
</script>

<script>
        var modal = document.getElementById('customModal');
        var openBtn = document.getElementById('openModalBtn');
        var closeBtn = document.getElementById('closeModalBtn');

        function openModal() {
            modal.classList.remove("hidden");
        }

        function closeModal() {
            modal.classList.add("hidden");
        }

        openBtn.addEventListener('click', openModal);
        closeBtn.addEventListener('click', closeModal);

        window.addEventListener('click', function(event) {
            if (event.target === modal) {
            closeModal();
            }
        });
</script>

<script>
        (function() {
            "use strict";

        var carousels = function() {
            $(".owl-carousel1").owlCarousel({
                loop: true,
                center: true,
                margin: 0,
                loop: true,
                autoplay: true,
                autoplayTimeout: 1500,
                responsiveClass: true,
                nav: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    680: {
                        items: 2,
                        nav: false,
                        loop: false
                    },
                    1000: {
                        items: 3,
                        nav: true
                    }
                }
            });
            };

        (function($) {
            carousels();
            })(jQuery);
        })();
</script>
<!--
            - ionicon link
          -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<!--  -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('extra_js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u700657081/domains/xcrinogroup.com/public_html/andhra/resources/views/website/dashboard.blade.php ENDPATH**/ ?>