<footer class="footer">
  <div class="container-footer">
    <div class="footer-logo">
      <div class="logo">
        <a href="">
          <img src="{{ asset('/storage/admin/logo.png') }}" alt="" />
        </a>
      </div>
      <div class="d-none">
        <a href="https://www.facebook.com/elisabethcibotsculpteur">
          </span><i class="fab fa-facebook-square"></i></span>
        </a>
        <div class="flex">
          <p class="chosen-lang">{{ Config::get('languages')[App::getLocale()] }}</p>
          <p>|</p>
          @foreach (Config::get('languages') as $lang => $language)
          @if ($lang != App::getLocale())
          <p><a href="{{ route('lang.switch', $lang) }}">{{$language}}</a></p>
          @endif
          @endforeach
        </div>
      </div>
      <div></div>
    </div>
    <div class="container-pags">
      <div>
        <div>{{ __('Art objects') }}</div>
        <ul>
          @foreach ($categoriesMenu as $categorie)
          <li><a href="">{{ $categorie->titre }}</a></li>
          @endforeach
        </ul>
      </div>
      <div>
        <div>{{ __('Current events') }}</div>
        <ul>
          @foreach ($actualiteMenu as $actualite)
          <li><a href="">{{ $actualite->titre }}</a></li>
          @endforeach
        </ul>
      </div>
      <div>
        <div>{{ __('Biography') }}</div>
        <ul>
          <li><a href="">Nulla porttitor</a></li>
          <li><a href="">Accumsan tincidunt</a></li>
          <li><a href="">Réalisations monumentales</a></li>
          <li><a href="">Proin eget tortor risus.</a></li>
        </ul>
      </div>
      <div>
        <div><a href="/#contactMe">{{ __('Contact') }}</a></div>
        <ul>
        </ul>
      </div>
    </div>
    <div class="menu-icon">
      </span></span>
      </span></span>
      </span></span>
    </div>
  </div>
  <div class="copyright">&copy; Elisabeth Cibot - <?php if (date('Y') != '2022') {
                                                    echo '2022 - ';
                                                  }
                                                  echo date('Y'); ?> - &copy; {{ __('ADAGP Reproductions and representations') }}</div>
</footer>