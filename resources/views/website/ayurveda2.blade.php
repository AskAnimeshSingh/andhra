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
    height: 100%;
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
            <img src=" {{ asset('assets/website/indexImages/ayurveda.jpg') }}" alt="Image">
            <div class="dark"></div>
            <div class="text-overlay branches-hero" style="margin-right: 32px">
              The Healing Power of <br /> Ayurveda
            </div>
          </div>
        </section>
        <section class="section event bg-black-10-1" aria-label="event">
          <div class="container dp-container" style="display: flex; flex-direction: column;">
            <p class="section-subtitle-4 label-7-0 text-start"></p>
            <h2 class="section-title headline-2-0 text-start">Healing Through Food:<br />
              Our Commitment to Ayurvedic Wisdom</h2>
            <div class="dp" style="display: flex; flex-direction: column; align-items: center; text-align: justify">
              <p>
                Ayurveda offers a holistic approach to health and well-being, focusing on the interconnectedness of all aspects of life.
                For centuries, Ayurveda has acclaimed the virtues of spices not only for their culinary appeal but also for their
                medicinal properties. Our culinary philosophy revolves around the belief that food is not just nourishment for the body
                but also medicine for the soul. With a focus on holistic wellness, we meticulously select and blend Ayurvedic spices to
                create dishes that not only delight the palate but also promote balance and vitality.
              </p><br />
              <p>
                Here at Andhra Dining, we embrace this sacred philosophy, with a deep commitment to holistic wellness, we handpick
                and blend Ayurvedic spices with meticulous care, crafting dishes that not only tantalize the taste buds but also restore
                balance and vitality to the spirit. Whether you're looking to spice up your meals or enhance your wellness routine, our
                curated selection of Ayurvedic spices offers something for everyone.
              </p>
            </div>
          </div>
        </section>

        <!-- carousel -->
        <div class="carousel">
          <!-- list item -->
          <div class="list">
            <div class="item">
              <img src=" {{ asset('assets/website/indexImages/turmeric.png ') }} " class="w-full h-full object-cover" />
              <div class="absolute inset-0 bg-black opacity-50"></div>
              <div class="ayurveda-content">
                <!-- <div class="author">Ayurveda</div> -->
                <div class="title">Turmeric</div>
                <div class="des">
                  <!-- lorem 50 -->
                  Known for its vibrant golden color, turmeric contains
                  curcumin, a potent antioxidant and anti-inflammatory compound.
                  Turmeric is believed to support joint health, aid digestion,
                  boost immunity, and promote overall well-being.
                </div>
              </div>
            </div>
            <div class="item">
              <img src=" {{ asset('assets/website/indexImages/ginger.jpg') }} " class="w-full h-full object-cover" />
              <div class="absolute inset-0 bg-black opacity-50"></div>
              <div class="ayurveda-content">
                <!-- <div class="author">Ayurveda</div> -->
                <div class="title">Ginger</div>
                <div class="des">
                  With its warming properties, ginger is valued for its ability
                  to soothe digestive issues such as nausea, indigestion, and
                  bloating. Ginger also has anti-inflammatory and
                  immune-boosting properties, making it a popular remedy for
                  colds and flu.
                </div>
              </div>
            </div>
            <div class="item">
              <img src=" {{ asset('assets/website/indexImages/cumin.jpg') }} " class="w-full h-full object-cover" />
              <div class="absolute inset-0 bg-black opacity-50"></div>
              <div class="ayurveda-content">
                <!-- <div class="author">Ayurveda</div> -->
                <div class="title">Cumin</div>
                <div class="des">
                  Cumin seeds are rich in iron and antioxidants, making
                  them beneficial for digestion, immune function, and overall
                  health. Cumin is believed to stimulate digestion, reduce
                  bloating and gas, and support detoxification.
                </div>
              </div>
            </div>
            <div class="item">
              <img src=" {{ asset('assets/website/indexImages/cloves.jpg') }} " class="w-full h-full object-cover" />
              <div class="absolute inset-0 bg-black opacity-50"></div>
              <div class="ayurveda-content">
                <!-- <div class="author">Ayurveda</div> -->
                <div class="title">Cloves</div>
                <div class="des">
                  These aromatic flower buds are packed with antioxidants and
                  have potent anti-inflammatory and analgesic properties. Cloves
                  are often used to relieve toothaches, aid digestion, and
                  support oral health.
                </div>
              </div>
            </div>
            <div class="item">
              <img src=" {{ asset('assets/website/indexImages/coriander.png') }} " class="w-full h-full object-cover" />
              <div class="absolute inset-0 bg-black opacity-50"></div>
              <div class="ayurveda-content">
                <!-- <div class="author">Ayurveda</div> -->
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
            </div>
            <div class="item">
              <img src=" {{ asset('assets/website/indexImages/cardamom.jpg') }} " class="w-full h-full object-cover" />
              <div class="absolute inset-0 bg-black opacity-50"></div>
              <div class="ayurveda-content">
                <!-- <div class="author">Ayurveda</div> -->
                <div class="title">Cardamom</div>
                <div class="des">
                  Known as the "queen of spices," cardamom is prized for its
                  distinct flavor and medicinal properties. It is often used to
                  aid digestion, freshen breath, and alleviate symptoms of
                  respiratory conditions like coughs and congestion.
                </div>
              </div>
            </div>

            <button class="slider-btn prev" data-prev-btn id="prev">
              <ion-icon name="chevron-back"></ion-icon>
            </button>

            <button class="slider-btn next" data-next-btn id="next">
              <ion-icon name="chevron-forward"></ion-icon>
            </button>
          </div>

          <!-- list thumnail -->
          <div class="thumbnail">
            <div class="item">
              <img src=" {{ asset('assets/website/indexImages/turmeric.png') }} " />
              <div class="ayurveda-content">
                <div class="title">Turmeric</div>
                <div class="description">Golden Spice</div>
              </div>
            </div>
            <div class="item">
              <img src=" {{ asset('assets/website/indexImages/ginger.jpg') }} " />
              <div class="ayurveda-content">
                <div class="title">Ginger</div>
                <div class="description">Elixir Root</div>
              </div>
            </div>
            <div class="item">
              <img src=" {{ asset('assets/website/indexImages/cumin.jpg') }} " />
              <div class="ayurveda-content">
                <div class="title">Cumin</div>
                <div class="description">Aromatic Seed</div>
              </div>
            </div>
            <div class="item">
              <img src=" {{ asset('assets/website/indexImages/cloves.jpg') }} " />
              <div class="ayurveda-content">
                <div class="title">Cloves</div>
                <div class="description">Spice Buds</div>
              </div>
            </div>
            <div class="item">
              <img src=" {{ asset('assets/website/indexImages/coriander.png') }} " />
              <div class="ayurveda-content">
                <div class="title">Coriander</div>
                <div class="description">Herb Harmony</div>
              </div>
            </div>
            <div class="item">
              <img src=" {{ asset('assets/website/indexImages/cardamom.jpg.') }} " />
              <div class="ayurveda-content">
                <div class="title">Cardamom</div>
                <div class="description">Scented Pods</div>
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
