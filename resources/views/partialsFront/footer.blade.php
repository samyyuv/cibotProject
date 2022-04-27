<footer class="footer">
  <div class="container-footer">
    <div class="footer-logo">
      <div class="logo">
        <a href="">
          <img class="logo" src="{{ asset('/storage/admin/logo.png') }}" alt="" />
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
          <p><a href="{{ route('lang.switch', $lang) }}" class="link">{{$language}}</a></p>
          @endif
          @endforeach
        </div>
      </div>
      <div></div>
      <div class="menu-icon menu-foot" id="hamon">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="footer-content">
      <ul class="footer-content-items">
        <li class="foot-expand">
          <a class="foot-expand-link foot-link-title link" href="/oeuvres">{{ __('Art objects') }}</a>
          <i class="fas fa-chevron-right"></i>
          <ul class="footer-content-items foot-expand-content">
            @foreach ($categoriesMenu as $categorie)
            <li>
              <div><a class="foot-link link" href="{{ route('categories.show', $categorie) }}">
                  {{ $categorie->titre }}
                </a></div>
            </li>
            @endforeach
          </ul>
        </li>

        <li class="foot-expand">
          <a class="foot-expand-link foot-link-title link" href="#">{{ __('News') }}</a>
          <i class="fas fa-chevron-right"></i>
          <ul class="footer-content-items foot-expand-content">
            <li><a class="foot-link link" href="/actualites" onclick="activeActualiteLink('all')">{{ __('All the events and exhibitions') }}</a></li>
            <li><a class="foot-link link" href="/actualites" onclick="activeActualiteLink('latest')">{{ __('Latest news') }}</a></li>
            <li><a class="foot-link link" href="/actualites" onclick="activeActualiteLink('expo')">{{ __('Expo events') }}</a></li>
            <li><a class="foot-link link" href="/actualites" onclick="activeActualiteLink('inProgress')">{{ __('Artwork in progress') }}</a></li>
          </ul>
        </li>
        <li class="foot-expand">
          <a class="foot-expand-link foot-link-title link" href="#">{{ __('Biography') }}</a>
          <i class="fas fa-chevron-right"></i>
          <ul id="btn-foot" class="footer-content-items foot-expand-content">
            <li><a class="foot-link foot-bio link" href="/biographie" onclick="activeBioLink('hello')">{{ __('Presentation') }}</a></li>
            <li><a class="foot-link foot-bio link" href="/biographie" onclick="activeBioLink('awards')">{{ __('Awards') }}</a></li>
            <li><a class="foot-link foot-bio link" href="/biographie" onclick="activeBioLink('monuments')">{{ __('Monuments') }}</a></li>
            <li><a class="foot-link foot-bio link" href="/biographie" onclick="activeBioLink('personal')">{{ __('Solo exhibitions') }}</a></li>
            <li><a class="foot-link foot-bio link" href="/biographie" onclick="activeBioLink('collectives')">{{ __('Collective exhibitions') }}</a></li>
            <li><a class="foot-link foot-bio link" href="/biographie" onclick="activeBioLink('evenements')">{{ __('Events') }}</a></li>
            <li><a class="foot-link foot-bio link" href="/biographie" onclick="activeBioLink('permanence')">{{ __('Galleries') }}</a></li>
          </ul>
        </li>
        <li>
          <a class="foot-link-title link" href="/#contactMe">{{ __('Contact') }}</a>
        </li>
      </ul>

      @include('partialsFront.miniFooter')
    </div>
  </div>
  <div class="copyright">&copy; Elisabeth Cibot - <?php if (date('Y') != '2022') {
                                                    echo '2022 - ';
                                                  }
                                                  echo date('Y'); ?> - &copy; {{ __('ADAGP Reproductions and representations') }}</div>
</footer>