@extends('website.layout.layout')
@section('extra_css')
<style>
  #child {
    text-align: right;
    /* height of parent*/
    line-height: 200px;
  }

  .rimages {
    position: relative;
    top: 0;
    transition: top 2s;
    width: 100%;
    height: 100%;
  }

  .rimages img {
    width: 100%;
    height: auto;
  }


  nav {
    position: fixed;
    /* top: 0;
    left: 0;
    z-index: 1000; */
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

  @media (min-width: 320px) {
    .text-overlay {
      position: absolute;
      top: 55%;
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
      top: 55%;
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
      top: 55%;
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
      padding: 60px;
    }
  }

  .zoom-animation img {
    animation: zoom-out 5s ease infinite alternate;
  }

  @keyframes zoom-out {
    0% {
      transform: scale(1.1);
      /* Initial scale (larger size) */
    }

    100% {
      transform: scale(1);
      /* Final scale (normal size) */
    }
  }

  /* .rimages mx-auto img {
    width:100%;
    height:790px;
  } */

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


  @media screen and (min-width: 320px) and (max-width: 375px) {

    .flavours_seprator {
      width: 20.5rem;
    }

    .chef_seprator {
      width: 18rem;
    }

    .Behind_seprator {
      width: 21.5rem;
    }
  }

  @media screen and (min-width: 375px) and (max-width: 425px) {
    .flavours_seprator {
      width: 22rem;
    }

    .chef_seprator {
      width: 18.5rem;
    }

    .Behind_seprator {
      width: 22.5rem;
    }
  }

  @media screen and (min-width: 425px) and (max-width: 768px) {
    .flavours_seprator {
      width: 23rem;
    }

    .chef_seprator {
      width: 19.5rem;
    }

    .Behind_seprator {
      width: 23.5rem;
    }
  }

  @media screen and (min-width: 768px) and (max-width: 1024px) {
    .flavours_seprator {
      width: 29rem;
    }

    .chef_seprator {
      width: 25rem;
    }

    .Behind_seprator {
      width: 30rem;
    }
  }

  @media screen and (min-width: 1024px) and (max-width: 1440px) {
    .flavours_seprator {
      width: 34rem;
    }

    .chef_seprator {
      width: 29rem;
    }

    .Behind_seprator {
      width: 35rem;
    }
  }

  @media screen and (min-width: 1440px) and (max-width: 2560px) {
    .flavours_seprator {
      width: 42rem;
    }

    .chef_seprator {
      width: 36rem;
    }

    .Behind_seprator {
      width: 43rem;
    }
  }
</style>
@endsection
@section('content')

<!--
    - #PRELOADER
  -->

<div class="preload" id="loader">
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
          <img src=" {{ asset('assets/website/indexImages/home3.png') }}" alt="Image">
          <div class="dark"></div>
          <div class="text-overlay banner-text" style="color: var(--white);
    font-family: var(--fontFamily-forum);
    font-size: var(--fontSize-display-1);
    line-height: var(--lineHeight-1);">
            <div>{!! translate('from_our_kitchen_to_your_heart') !!}</div>
          </div>
        </div>
      </section>

      <!-- our story -->

      <section class="section event bg-black-10-1" aria-label="event">
        <div class="container dp-container" style="display: flex; flex-direction: column;">
          <div class="lg:ml-[192px]" style="">
            <img class="flavours_seprator" src="{{ asset('assets/website/indexImages/seprator.png') }}" alt="">
            <!-- <p class="section-subtitle-3 label-2-0"></p> -->
            <h2 class=" headline-2-0 text-start" style="padding-left:0rem;">{!! translate('flavours_of_home') !!} </h2>
            <h2 class=" headline-2-0 text-start text-[28px]" style="padding-left:0rem;">
              {!! translate('discover_our_story') !!}
            </h2>
          </div>
          <!-- <img style="width: 425px; margin-left:192px " class=" sm:ml-56" src="{{ asset('assets/website/indexImages/seprator.png') }}" alt="">
          <h2 class="section-title headline-2-0 text-start">Flavours of Home: <br> <span style="font-size:45px;"> Discover Our Story </span></h2> -->
          <div class="dp text-justify pt-4" style="display: flex; flex-direction: column; align-items: center;">
            <p>

            </p>
          </div>
        </div>
      </section>


      <section style="padding:20px 0px; background-color:#FFFFFF;">
        <div class="grid grid-cols-2 gap-10 w-full" style="object-fit: contain;">
          <img src="{{ asset('assets/website/indexImages/about_curry.png') }}" alt="Image 1" class="w-full h-full">
          <img src="{{ asset('assets/website/indexImages/about_left.png') }}" alt="Image 2" class="w-full h-full">
        </div>
      </section>

      <!--
        - #FEATURES
      -->

      <section class="section about text-center md:pt-[100px]" aria-labelledby="about-label" id="about"
        style="background-color:#F2F2F2; text-align:left; ">


        <div class="abt container mx-auto w-full max-w-full" style="gap:80px;">



          <!-- <img style="width: 375px ; "   src="{{ asset('assets/website/indexImages/seprator.png') }}" alt="">
          <h1 style="color: #A07E55; " class="text-start headline-1 section-title" id="about-label">Chef Ramayana: <br> <span style="font-size:45px;"> Our Head Chef from Andhra </span></h1> -->

          <div class="about-content p-10 lg:p-0 md:p-0" style="margin:auto;">
            <div class="" style="">
              <img class="chef_seprator" src="{{ asset('assets/website/indexImages/seprator.png') }}" alt="">
              <!-- <p class="section-subtitle-3 label-2-0"></p> -->
              <h2 class=" headline-2-0 text-start" style="padding-left:0rem;">
                {!! app()->getLocale() == 'ja' ? $data->head_chef_name_jpn : $data->head_chef_name !!}:<br>
                {!! translate('head_chef_from_andhra') !!}
              </h2>
              <!-- <h2 class=" headline-2-0 text-start "
              style="padding-left:0rem; font-size:45px;" >{!! translate('our_head_chef_from_andhra') !!}</h2> -->
            </div>
            <p class="section-txt my-auto text-justify pt-4"
              style="font-family:var(--fontFamily-dm_sans); padding-right:5px;">
              {{ app()->getLocale() == 'ja' ? $data->head_chef_description_jpn : $data->head_chef_description }}
            </p>
          </div>
          <figure class="about-banner lg:h-full lg:object-fill xl:h-full xl:object-fill" style="margin-block-end:0px;">
            <img src="{{ asset('assets/website/indexImages/chef2.png') }}" loading="lazy" alt="about banner"
              class="w-100 h-100 object-cover" data-parallax-item data-parallax-speed="1">
          </figure>
        </div>
      </section>

      <section class="section about lg:pb-20 pb-10" aria-labelledby="about-label" id="about"
        style="background-color:#F2F2F2; text-align:left; padding-bottom:100px;">
        <div class="abt2 container mx-auto" style="margin:0px; gap:80px; max-width:2560px;">
          <figure class="chef-img lg:h-full lg:object-fill xl:h-full xl:object-fill">
            <img src="{{ asset('assets/website/indexImages/chef3.png') }}" width="600" height="600" loading="lazy"
              alt="about banner" class="w-100 h-100 object-cover" data-parallax-item data-parallax-speed="1">
            <div class="abs-img abs-img-2 has-before">
            </div>
          </figure>
          <div class="about-content-1 p-10 lg:p-0 md:p-0" style="margin:auto;">
            <div class="" style="">
              <img class="Behind_seprator" src="{{ asset('assets/website/indexImages/seprator.png') }}" alt="">
              <!-- <p class="section-subtitle-3 label-2-0"></p> -->
              <h2 class=" headline-2-0 text-start" style="padding-left:0rem;">{!! translate('Behind_the_Scenes') !!}
              </h2>
              <h2 class=" headline-2-0 text-start " style="padding-left:0rem; ">
                {!! translate('get_to_know_our_talented_chefs') !!}
              </h2>
            </div>
            <!-- <p class="section-subtitle-5 label-2-0 text-start mr-[55px]" style="margin-bottom:15px;"></p> -->
            <!-- <img style="width: 460px; margin-bottom:36px;" src="{{ asset('assets/website/indexImages/seprator.png') }}" alt="">
            <h1 style="color: #A07E55; margin-bottom:15px;" class="text-start headline-1 section-title" id="about-label">Behind the Scenes: <br> <span style="font-size:45px;">Get to know our Talented Chefs </span></h1> -->
            <p class="section-txt text-justify pt-4" style="font-family:var(--fontFamily-dm_sans); ">
              {{ app()->getLocale() == 'ja' ? $data->chef_description_jpn : $data->chef_description }}
            </p>
            <div class="contact-label"></div>
          </div>
        </div>
      </section>

      {{-- Award Section --}}
      {{-- <section class="section service text-center" aria-label="service"
        style="padding:0px;background-color: #FFFFFF;">
        <div class="container lg:h-full">
          <div class="flex justify-center items-center h-full">
            <div class="awards-grid grid grid-cols lg:grid-cols-2 md:grid-cols-2 place-items-center justify-center"
              style="padding-top:0px; padding-bottom:0px; margin:auto; height:100%;">
              <div style="padding-right: 50px" ;>
                <h1 style="color: #A07E55; text-align:left;" class="text-start headline-1 section-title"
                  id="about-label">Celebrating Excellence,
                  Our Award-Winning
                  Achievements</h1>
                <div class="flex flex-col"
                  style="text-align:left; color:#6A432A;font-size:20px; font-family:var(--fontFamily-dm_sans)">
                  <h2>
                    BEST RESTAURANT 2014</h2>
                  <h2>AWARDED BY TABELOG</h2>
                </div>
                <div class="flex flex-col" style="text-align:left; font-size: 28px; ">
                  <h2 style="color: #A07E55; font-family:var(--fontFamily-forum)">
                    Andhra Kitchen</h2>
                  <span style="color:#6A432A; font-size:17px;font-family:var(--fontFamily-dm_sans);">OKACHIMACHI</span>
                </div>
              </div>
              <div class="img-slider w-full">
                <div class="awards-logo">
                  <img src="public/assets/website/indexImages/award3.png" alt="">
                </div>

                <div class="awards-logo">
                  <img src="public/assets/website/indexImages/award4.png" alt="">
                </div>

                <div class="awards-logo">
                  <img src="public/assets/website/indexImages/award1.png" alt="">
                </div>

                <div class="awards-logo">
                  <img src="public/assets/website/indexImages/award2.png" alt="">
                </div>

                <div class="awards-logo">
                  <img src="public/assets/website/indexImages/award6.png" alt="">
                </div>

                <div class="awards-logo">
                  <img src="public/assets/website/indexImages/award5.jpeg" alt="">
                </div>
              </div>
            </div>
          </div>
      </section> --}}
  </main>
</div>


<!--
    - ionicon link
  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


</section>

@endsection

@section('extra_js')
@endsection