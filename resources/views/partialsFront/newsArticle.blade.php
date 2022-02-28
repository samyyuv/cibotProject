<x-public-view>
  <section class="news-article">
    <a href="{{ route('actualites.index') }}"><i class="fa-solid fa-arrow-left"></i>{{ __('All the current events') }}</a>
    <div class="news-container">
      <div>
        <p>{{ $actualite->sous_titre }} ??? sous-titre </p>
        <h2>{{ $actualite->titre }}</h2>

        <p class="body-text">{{ $actualite->description }}</p>

        <a>{{ __('Voir sur map') }}</a>
      </div>
      <img src="https://picsum.photos/680/590" alt="">
    </div>

    <div class="news-other">
      <h2>{{ __('Other news') }}</h2>
      <div class="actualites-container show">
        @foreach ($actualites as $actualite)
        <div class="actualites-container-topic card">
          <div>
            <img src="https://picsum.photos/680" alt="">
            <div class="cross"> <a href="{{ route('actualites.show', $actualite) }}"> <span></span> <span></span></a>
            </div>
          </div>
          <p>{{ $actualite->created_at->format('d M Y') }}</p>
          <h3>{{ $actualite->titre }}</h3>
          <p class="body-text">{{ Str::limit($actualite->description, 200) }}</p>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  @include('partialsFront.latestWorksSlide')
</x-public-view>