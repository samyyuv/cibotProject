<x-public-view>
  <section class="home">
    <div class="home-message">
      <h1>{{ __('Welcome') }}</h1>
      <p>Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in
        faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque,
        auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus.
        Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit,
        eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula
        elementum sed sit amet dui.</p>
    </div>
    <div class="home-slider">
      <div class="home-slides">

        <div class="home-slide slide fade">
          <img src="https://picsum.photos/755" alt="">
          <a href="#" class="home-slider-details">Nom de l’oeuvre - Année - Technique →</a>
        </div>
        <div class="home-slide slide fade">
          <img src="https://picsum.photos/755" alt="">
          <a href="#" class="home-slider-details">OTRO de l’oeuvre - Année - Technique →</a>
        </div>
        <div class="home-slide slide fade">
          <img src="https://picsum.photos/755" alt="">
          <a href="#" class="home-slider-details">autre de l’oeuvre - Année - Technique →</a>
        </div>

        <div class="navigation-manual">
          <span onclick="actualSlide(1)" class="navigation-manual-btn"></span>
          <span onclick="actualSlide(2)" class="navigation-manual-btn"></span>
          <span onclick="actualSlide(3)" class="navigation-manual-btn"></span>

        </div>
      </div>
  </section>

  <section class="news">
    <div class="news-title">
      <h4>{{ __('Current events') }}</h4>
      <a class="news-btn" href="{{ route('actualites.index') }}">{{ __('All') }}</a>
    </div>
    <div class="news-img">
      <img src="https://picsum.photos/828/500" alt="">
    </div>
    <div class="news-presentation card">
      <h2>{{ $actualite->titre }}</h2>
      <p>{{ $actualite->created_at->format('d M Y') }}</p>
      <p class="body-text">{{ Str::limit($actualite->description, 150) }}</p>
      <a href="{{ route('actualites.index') }}">{{ __('All the current events') }}</a>
    </div>
  </section>

  @include('partialsFront.latestWorksSlide')

</x-public-view>