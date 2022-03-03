<header class="header-menu">
  <div class="header-container">
    <div class="nav-top">
      <a href="/"><img class="logo" src="{{ asset('/storage/admin/logo.png') }}" alt="" /></a>
      <div class="menu-icon" id="ham">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <nav class="nav-drill">
      <ul class="nav-items">
        <li class="nav-expand" data-dropdown>
          <a class="nav-link nav-expand-link" href="#">
            {{ __('art objects') }}
          </a>
          <i class="fas fa-chevron-right"></i>
          <ul class="nav-items nav-expand-content left nav-container" data-dropdown-button>
            @foreach ($categoriesMenu as $categorie)
            <li class="nav-expand">
              <a class="nav-link nav-expand-link" href="{{ route('categories.show', $categorie) }}">
                {{ $categorie->titre }}
              </a>
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
            {{--<li class="nav-expand">
              <a class="nav-link nav-expand-link" href="#">
                Menu DOS
              </a>
              <i class="fas fa-chevron-right"></i>
              <ul class="nav-items nav-expand-content">
                <li>
                  <a class="nav-link" href="#">
                    Level 3
                  </a>
                </li>
                <li>
                  <a class="nav-link" href="#">
                    Level 3 Directory
                  </a>
                </li>
                <li>
                  <a class="nav-link" href="#">
                    Level 3 Contact
                  </a>
                </li>
                <li>
                  <a class="nav-link" href="#">
                    Level 3 Quick links
                  </a>
                </li>
                <li>
                  <a class="nav-link" href="#">
                    Level 3 Launchpad
                  </a>
                </li>
                <li>
                  <a class="nav-link" href="#">
                    Launchpad
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-expand">
              <a class="nav-link nav-expand-link" href="#">
                Menu TRES
              </a>
              <i class="fas fa-chevron-right"></i>
              <ul class="nav-items nav-expand-content">
                <li>
                  <a class="nav-link" href="#">
                    Level 3
                  </a>
                </li>
                <li>
                  <a class="nav-link" href="#">
                    Level 3
                  </a>
                </li>
                <li>
                  <a class="nav-link" href="#">
                    Level 3
                  </a>
                </li>
                <li>
                  <a class="nav-link" href="#">
                    Level 3 links
                  </a>
                </li>
                <li>
                  <a class="nav-link" href="#">
                    Level 3
                  </a>
                </li>
                <li>
                  <a class="nav-link" href="#">
                    64546498
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-expand">
              <a class="nav-link nav-expand-link" href="#">
                Menu CUATRO
              </a>
              <i class="fas fa-chevron-right"></i>
              <ul class="nav-items nav-expand-content">
                <li>
                  <a class="nav-link" href="#">
                    Level 3
                  </a>
                </li>
                <li>
                  <a class="nav-link" href="#">
                    Level 3 PERRO
                  </a>
                </li>
                <li>
                  <a class="nav-link" href="#">
                    Level 3 PERRO
                  </a>
                </li>
                <li>
                  <a class="nav-link" href="#">
                    Level 3 PERRO PERRO
                  </a>
                </li>
                <li>
                  <a class="nav-link" href="#">
                    Level 3 PERRO
                  </a>
                </li>
                <li>
                  <a class="nav-link" href="#">
                    PERRO
                  </a>
                </li>
              </ul>
            </li>--}}
            <div class="img-menu">
              <div>
                <img src="https://picsum.photos/600" alt="" />
              </div>
              <div>
                <div>
                  <p>{{ $oeuvreMenu->titre }} - {{ $oeuvreMenu->date->format('Y') }} - {{ $oeuvreMenu->categorie->titre }}</p>
                </div>
              </div>
            </div>

          </ul>
        </li>
        <li><a class="nav-link" href="{{ route('actualites.index') }}">{{ __('current events') }}</a></li>
        <li><a class="nav-link" href="/biographie">{{ __('biography') }}</a></li>
        <li>
          <a class="nav-link" href="#contactMe">{{ __('contact') }}</a>
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

      <div class="menu-footer">
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
        <div class="menu-CR">&copy; Elisabeth Cibot - <?php if (date('Y') != '2022') {
                                                        echo '2022 - ';
                                                      }
                                                      echo date('Y'); ?> - &copy; {{ __('ADAGP Reproductions and representations') }}</div>
      </div>
    </nav>
  </div>
</header>