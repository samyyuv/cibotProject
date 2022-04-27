<header class="header-menu">
  <div class="header-container">
    <div class="nav-top">
      <a href="/"><img class="logo" src="{{ asset('/storage/admin/logo.png') }}" alt="" /></a>
      <div class="menu-icon menu-nav" id="ham">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <nav class="nav-drill">
      <ul class="nav-items">
        <li class="nav-expand" data-dropdown>
          <a class="nav-link nav-expand-link" href="#">
            {{ __('Art objects') }}
          </a>
          <i class="fas fa-chevron-right"></i>
          <ul class="nav-items nav-expand-content nav-container" data-dropdown-button>
            @foreach ($categoriesMenu as $categorie)
            <li class="nav-expand column">
              <div><a class="nav-link nav-expand-link" href="{{ route('categories.show', $categorie) }}">
                  {{ $categorie->titre }}
                </a></div>
              <i class="fas fa-chevron-right"></i>
              <ul class="nav-items nav-expand-content">
                @foreach ($categorie->oeuvres as $oeuvre)
                <li>
                  <a class="nav-link" href="#">
                    {{ $oeuvre->titre }}
                  </a>
                </li>
                @endforeach
              </ul>
            </li>
            @endforeach

            <div class="img-menu">
              <div>
                <img src="https://picsum.photos/600" alt="" />
              </div>
              <div>
                <div>
                  <a href="" class="link">
                    <p>{{ $oeuvreMenu->titre }} - {{ $oeuvreMenu->date->format('Y') }} - {{ $oeuvreMenu->categorie->titre }}</p>
                  </a>
                </div>
              </div>
            </div>

          </ul>
        </li>


        <li><a class="nav-link" href="{{ route('actualites.index') }}">{{ __('News') }}</a></li>
        <li><a class="nav-link" href="/biographie">{{ __('Biography') }}</a></li>
        <li>
          <a class="nav-link" href="/#contactMe">{{ __('Contact') }}</a>
        </li>
        <li>
          <div class="menu-language">
            <a href="https://www.facebook.com/elisabethcibotsculpteur">
              <span><i class="fab fa-facebook-square"></i></span>
            </a>
            <div>
              <p class="chosen-lang">{{ Config::get('languages')[App::getLocale()] }}</p>
              <p>|</p>
              @foreach (Config::get('languages') as $lang => $language)
              @if ($lang != App::getLocale())
              <p><a href="{{ route('lang.switch', $lang) }}">{{$language}}</a></p>
              @endif
              @endforeach
            </div>
          </div>
        </li>
      </ul>

      @include('partialsFront.miniFooter')
    </nav>
  </div>
</header>