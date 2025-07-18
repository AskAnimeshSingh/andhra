<header class="header" data-header id="myHeader">
  <div class="container">
    @if(request()->is('/') == "/")
    <a href="{{ route('website.dashboard')}}" class="logo">
      <img src="{{ asset('assets/website/indexImages/changed_logo.png') }}" alt="Andhra Dining Logo" width="150"
      height="150" class="logo-img start">
      <!-- <p style=" line-height:12px; margin-top:2px; font-size:medium;">Andhra Dining <span style="font-size:xx-small; text-align:center">EST 2009</span> </p> -->
    </a>
  @else
  <a href="{{ route('website.dashboard')}}" class="logo">
    <img src="{{ asset('assets/website/indexImages/changed_logo.png') }}" alt="Andhra Dining Logo" width="150"
    height="150" class="logo-img start">
    <!-- <p style=" line-height:12px; margin-top:2px; font-size:medium;">Andhra Dining <span style="font-size:xx-small; text-align:center">EST 2009</span> </p> -->
  </a>
@endif
    <nav class="navbar" data-navbar>

      <button class="close-btn" aria-label="close menu" data-nav-toggler>
        <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
      </button>

      <a href="#" class="logo">
        <img src="{{ asset('assets/website/indexImages/changed_logo.png') }}" width="100" height="30" alt="Andhra">
      </a>


      <ul class="navbar-list">

        <li class="navbar-item">
          <a href="{{ route('website.dashboard')}}" class="navbar-link hover-underline">
            <div class="separator"></div>

            <span class="span menu-color">{!! translate('Home') !!}</span>
          </a>
        </li>

        <li class="navbar-item">
          <a href="{{ route('website.aboutus')}}" class="navbar-link hover-underline">
            <div class="separator"></div>

            <span class="span menu-color">{!! translate('About Us') !!}</span>
          </a>
        </li>

        <li class="navbar-item">
          <a href="{{ route('website.branchIndex') }}" class="navbar-link hover-underline">
            <div class="separator"></div>

            <span class="span menu-color">{!! translate('Branches') !!}</span>
          </a>
        </li>

        <li class="navbar-item">
          <a href="{{ route('website.ayurveda') }}" class="navbar-link hover-underline">
            <div class="separator"></div>

            <span class="span menu-color">{!! translate('Ayurveda') !!}</span>
          </a>
        </li>

        <li class="navbar-item">
          <a href="{{ route('website.gallery') }}" class="navbar-link hover-underline">
            <div class="separator"></div>

            <span class="span menu-color">{!! translate('Gallery') !!}</span>
          </a>
        </li>
      </ul>

    </nav>

    <a href="{{ route('website.reservation.index') }}"
      class="btn btn-secondary menu-color menu-border inline-block bg-transparent  px-6 py-2 text-xl tracking-wider hover:bg-white  hover:border-gray-400 transition duration-300 ease-in-out"
      style="border-width: 1px;">
      <span class="text-lg font-medium text-1 span">{!! translate('Reservation') !!}</span>
    </a>


    <!-- <a href="{{ route('website.reservation.index') }}" class="btn btn-secondary">
    </a> -->



    <div class="flag lg:flex" style="margin: 0 20px;">
      <ul class="navbar-list" style="gap:5px">
        <li class="navbar-item">
          <a href="{{ route('locale.switch', 'en') }}" class="navbar-link  hover-underline md:menu-color">en</a>
        </li>
        <li class="navbar-item ">
          <span class="navbar-link md:menu-color">|</span>
        </li>
        <li class="navbar-item">
          <a href="{{ route('locale.switch', 'ja') }}" class="navbar-link hover-underline md:menu-color">日本語</a>
        </li>
      </ul>
    </div>

    <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
      <span class="line line-1"></span>
      <span class="line line-2"></span>
      <span class="line line-3"></span>
    </button>

    <div class="overlay" data-nav-toggler data-overlay></div>

  </div>
</header>
</div>
</header>