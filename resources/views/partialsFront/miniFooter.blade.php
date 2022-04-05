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