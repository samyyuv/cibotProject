<x-public-view>
  <section class="home">
    <div class="home-message">
      <h1>{{ __('Welcome') }}</h1>
      @if ('fr' == App::getLocale())
      <p>« L'art est un support à notre questionnement sur le monde et sur le sens
        de la vie, un chemin de connaissance de soi qui rend capable de s'ouvrir aux
        autres. Sur cette route, je cherche tout en bâtissant. »</p>

      @elseif ('en' == App::getLocale())
      <p>"Art sustains the way we question the world and the meaning of life;
        it unveils the sense of the self, and as such it enables us to open ourselves
        to the other. On this path, while searching, I keep on building."</p>

      @endif

    </div>
    <div class="home-slider">
      <div class="home-slides">
        @foreach ($oeuvresWelcome as $oeuvre)
        @foreach ($oeuvre->photos as $photo)
        @if ($loop->first)
        <div class="home-slide slide fade">
          <img src="{{ asset('/storage/' . $photo->photo) }}" alt="">
          <a href="#" class="home-slider-details">{{ $oeuvre->titre }} - {{ $oeuvre->date->format('Y') }} - {{ $oeuvre->collection->titre }} →</a>
        </div>
        @endif
        @endforeach
        @endforeach

        <div class="navigation-manual">
          <span onclick="actualSlide(1)" class="navigation-manual-btn"></span>
          <span onclick="actualSlide(2)" class="navigation-manual-btn"></span>
          <span onclick="actualSlide(3)" class="navigation-manual-btn"></span>

        </div>
      </div>
  </section>

  <section class="news">
    <div class="news-title">
      <h4>{{ __('Events and exhibitions') }}</h4>
      <a class="news-btn" href="{{ route('actualites.index') }}">{{ __('All') }}</a>
    </div>
    <div class="news-img">
      <img src="{{ asset('/storage/' . $actualite->photo) }}" alt="">
    </div>
    <div class="news-presentation card">
      <h2>{{ $actualite->titre }}</h2>
      <p>{{ $actualite->created_at->format('d M Y') }}</p>
      <p class="body-text">{{ Str::limit($actualite->description, 150) }}</p>
      <a href="{{ route('actualites.index') }}">{{ __('All the events and exhibitions') }}</a>
    </div>
  </section>

  @include('partialsFront.latestWorksSlide')
  @include('contactMe')


</x-public-view>