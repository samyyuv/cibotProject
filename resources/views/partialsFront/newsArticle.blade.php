<x-public-view>
  <section class="news-article">
    <a href="{{ route('actualites.index') }}" class="link">
      <i class="fa-solid fa-arrow-left"></i>{{ __('All the events and exhibitions') }}</a>
    <div class="news-container">
      <div>
        @if ('en' == App::getLocale() && $actualite->titre_en != null)
        <h2>{{ $actualite->titre_en }}</h2>
        <p class="body-text">{!! $actualite->description_en !!}</p>
        @else
        <h2>{{ $actualite->titre }}</h2>
        <p class="body-text">{!! $actualite->description !!}</p>

        @endif
        {{--extra photos--}}
        <div class="img-container">
          @foreach ($actualite->photos as $photo)
          <div class="">
            <img src="{{ asset('/storage/' . $photo->photo) }}" alt="image">
          </div>
          @endforeach
        </div>
      </div>
      {{--main photos--}}
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
          @if ('en' == App::getLocale())
          <p>{{ $actualite->created_at->format('M d Y') }}</p>
          @else
          <p>{{ $actualite->created_at->locale('fr_FR')->isoFormat('ll') }}</p>
          @endif
          @if ('en' == App::getLocale() && $actualite->titre_en != null)
          <a href="{{ route('actualites.show', $actualite) }}" class="link">
            <h3>{{ $actualite->titre }}</h3>
          </a>
          @else
          <p class="body-text">{!! Str::limit($actualite->description, 149) !!}</p>
          @endif

        </div>
        @endforeach
      </div>
    </div>
  </section>
  @include('partialsFront.latestWorksSlide')
</x-public-view>