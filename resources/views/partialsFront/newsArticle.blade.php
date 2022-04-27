<x-public-view>
  <section class="news-article">
    <a href="{{ route('actualites.index') }}">
      <i class="fa-solid fa-arrow-left"></i>{{ __('All the events and exhibitions') }}</a>
    <div class="news-container">
      <div>
        <p>{{ $actualite->sous_titre }} ??? sous-titre </p>
        <h2>{{ $actualite->titre }}</h2>

        <p class="body-text">{{ $actualite->description }}</p>
      </div>
      <img src="{{ asset('/storage/' . $actualite->photo) }}" alt="">
    </div>

    <div class="news-other">
      <h2>{{ __('Other news') }}</h2>
      <div class="actualites-container show">
        @foreach ($actualites as $actualite)
        <div class="actualites-container-topic card">
          <div>
            <a href="{{ route('actualites.show', $actualite) }}">
              <img src="{{ asset('/storage/' . $actualite->photo) }}" alt="">
              <div class="cross">
                <span></span> <span></span>
              </div>
            </a>
          </div>
          <p>{{ $actualite->created_at->format('d M Y') }}</p>
          <a href="{{ route('actualites.show', $actualite) }}" class="link">
            <h3>{{ $actualite->titre }}</h3>
          </a>
          <p class="body-text">{{ Str::limit($actualite->description, 200) }}</p>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  @include('partialsFront.latestWorksSlide')
</x-public-view>