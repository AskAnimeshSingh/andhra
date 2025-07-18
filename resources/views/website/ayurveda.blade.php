@extends('website.layout.layout')
@section('extra_css')
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


  @media screen and (min-width: 320px) and (max-width: 375px) {

    .healing_seprator {
      width: 25rem;
    }
  }

  @media screen and (min-width: 375px) and (max-width: 425px) {
    .healing_seprator {
      width: 27rem;
    }
  }

  @media screen and (min-width: 425px) and (max-width: 768px) {
    .healing_seprator {
      width: 28rem;
    }
  }

  @media screen and (min-width: 768px) and (max-width: 1024px) {
    .healing_seprator {
      width: 36rem;
    }
  }

  @media screen and (min-width: 1024px) and (max-width: 1440px) {
    .healing_seprator {
      width: 41rem;
    }
  }

  @media screen and (min-width: 1440px) and (max-width: 2560px) {
    .healing_seprator {
      width: 51rem;
    }
  }
</style>
@endsection
@section('content')

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
          <img src=" {{ asset('assets/website/indexImages/aurveda_banner.png') }}" alt="Image">
          <div class="dark"></div>
          <div class="text-overlay banner-text" style="color: var(--white);
            font-family: var(--fontFamily-forum);
            font-size: var(--fontSize-display-1);
            line-height: var(--lineHeight-1);">
            <div>{!! translate('the_healing_power') !!}</div>
          </div>
      </section>
      <section class="section event bg-black-10-1" aria-label="event">
        <div class="container dp-container" style="display: flex; flex-direction: column;">
          <!-- <img style="width: 550px; margin-top:2rem" class="xl:ml-72 sm:ml-60 " src="{{ asset('assets/website/indexImages/seprator.png') }}" alt="">
          <h2 class="section-title headline-2-0 text-start">Healing Through Food:<br /> <span style="font-size:45px;">
            Our Commitment to Ayurvedic Wisdom
          </span>
        </h2> -->
          <div class="lg:ml-[192px]" style="">
            <img class="healing_seprator" src="{{ asset('assets/website/indexImages/seprator.png') }}" alt="">
            <!-- <p class="section-subtitle-3 label-2-0"></p> -->
            <h2 class=" headline-2-0 text-start" style="padding-left:0rem;">{!! translate('healing_through_food-h') !!}
            </h2>
            <h2 class=" headline-2-0 text-start " style="padding-left:0rem;">
              {!! translate('our_commitment_to_ayurvedic_wisdom') !!}
            </h2>
          </div>
          <div class="dp pt-20" style="display: flex; flex-direction: column; align-items: center; text-align: justify">
            {{-- <p>
              Ayurveda offers a holistic approach to health and well-being, focusing on the interconnectedness of all
              aspects of life.
              For centuries, Ayurveda has acclaimed the virtues of spices not only for their culinary appeal but also
              for their
              medicinal properties. Our culinary philosophy revolves around the belief that food is not just nourishment
              for the body
              but also medicine for the soul. With a focus on holistic wellness, we meticulously select and blend
              Ayurvedic spices to
              create dishes that not only delight the palate but also promote balance and vitality.
            </p><br />
            <p>
              Here at Andhra Dining, we embrace this sacred philosophy, with a deep commitment to holistic wellness, we
              handpick
              and blend Ayurvedic spices with meticulous care, crafting dishes that not only tantalize the taste buds
              but also restore
              balance and vitality to the spirit. Whether you're looking to spice up your meals or enhance your wellness
              routine, our
              curated selection of Ayurvedic spices offers something for everyone.
            </p> --}}
            {!! app()->getLocale() == 'ja' ? $info->ayurveda_description_jpn : $info->ayurveda_description !!}

          </div>
        </div>
      </section>

      <!-- carousel -->
      <div class="carousel">

        <div class="list">
          <div class="item">
            <img src=" {{ asset('assets/website/indexImages/turmeric.png ') }} " class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="ayurveda-content">
              <div class="title">{!! translate('turmeric') !!}</div>
              <div class="des">
                {{-- Known for its vibrant golden color, turmeric contains
                curcumin, a potent antioxidant and anti-inflammatory compound.
                Turmeric is believed to support joint health, aid digestion,
                boost immunity, and promote overall well-being. --}}
                {!! translate('turmeric_info') !!}
              </div>
            </div>
          </div>
          <div class="item">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="ayurveda-content">
              <div class="title">{!! translate('ginger') !!}</div>
              <div class="des">
                {{-- With its warming properties, ginger is valued for its ability
                to soothe digestive issues such as nausea, indigestion, and
                bloating. Ginger also has anti-inflammatory and
                immune-boosting properties, making it a popular remedy for
                colds and flu. --}}
                {!! translate('ginger_info') !!}
              </div>
            </div>
          </div>
          <div class="item">
            <img src=" {{ asset('assets/website/indexImages/cumin.jpg') }} " class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="ayurveda-content">
              <div class="title">{!! translate('cumin') !!} </div>
              <div class="des">
                {{-- Cumin seeds are rich in iron and antioxidants, making
                them beneficial for digestion, immune function, and overall
                health. Cumin is believed to stimulate digestion, reduce
                bloating and gas, and support detoxification. --}}
                {!! translate('cumin_info') !!}
              </div>
            </div>
          </div>
          <div class="item">
            <img src=" {{ asset('assets/website/indexImages/clove1.jpg') }} " class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="ayurveda-content">
              <div class="title">{!! translate('cloves') !!}</div>
              <div class="des">
                {{-- These aromatic flower buds are packed with antioxidants and
                have potent anti-inflammatory and analgesic properties. Cloves
                are often used to relieve toothaches, aid digestion, and
                support oral health. --}}
                {!! translate('cloves_info') !!}
              </div>
            </div>
          </div>
          {{-- <div class="item">
            <img src=" {{ asset('assets/website/indexImages/coriander.jpg') }} " class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="ayurveda-content">
              <div class="title">Coriander</div>
              <div class="des">
                Both the seeds and leaves of coriander offer numerous health
                benefits. Coriander seeds are known for their digestive
                properties and may help alleviate symptoms of irritable bowel
                syndrome (IBS) and other gastrointestinal issues. Coriander
                leaves are rich in vitamins and antioxidants and may help
                lower cholesterol and blood pressure.
              </div>
            </div>
          </div> --}}
          <div class="item">
            <img src=" {{ asset('assets/website/indexImages/cardamom.jpg') }} " class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="ayurveda-content">
              <div class="title">{!! translate('cardamom') !!}</div>
              <div class="des">
                {{-- Known as the "queen of spices," cardamom is prized for its
                distinct flavor and medicinal properties. It is often used to
                aid digestion, freshen breath, and alleviate symptoms of
                respiratory conditions like coughs and congestion. --}}
                {!! translate('cardamom_info') !!}

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
            <img src=" {{ asset('assets/website/indexImages/turmeric.png') }} " />
            <div class="ayurveda-content">
              <div class="title">{!! translate('turmeric') !!}</div>
              <div class="description">{!! translate('golden_spice') !!}</div>
            </div>
          </div>
          <div class="item">
            <img src=" {{ asset('assets/website/indexImages/ginger.jpg') }} " />
            <div class="ayurveda-content">
              <div class="title">{!! translate('ginger') !!}</div>
              <div class="description">{!! translate('elixir_root') !!}</div>
            </div>
          </div>
          <div class="item">
            <img src=" {{ asset('assets/website/indexImages/cumin.jpg') }} " />
            <div class="ayurveda-content">
              <div class="title">{!! translate('cumin') !!}</div>
              <div class="description">{!! translate('aromatic_seed') !!}</div>
            </div>
          </div>
          <div class="item">
            <img src=" {{ asset('assets/website/indexImages/cloves.jpg') }} " />
            <div class="ayurveda-content">
              <div class="title">{!! translate('cloves') !!}</div>
              <div class="description">{!! translate('spice_buds') !!}</div>
            </div>
          </div>
          {{-- <div class="item">
            <img src=" {{ asset('assets/website/indexImages/coriander.jpg') }} " />
            <div class="ayurveda-content">
              <div class="title">Coriander</div>
              <div class="description">Herb Harmony</div>
            </div>
          </div> --}}
          <div class="item">
            <img src=" {{ asset('assets/website/indexImages/cardamom.jpg') }} " />
            <div class="ayurveda-content">
              <div class="title">{!! translate('cardamom') !!}</div>
              <div class="description">{!! translate('scented_pods') !!}</div>
            </div>
          </div>
        </div>
      </div>
    </article>
  </main>

  <script src="assets/js/script.js"></script>
  <script src="./assets/js/ayurveda.js"></script>

  @endsection


  @section('extra_js')
  @endsection