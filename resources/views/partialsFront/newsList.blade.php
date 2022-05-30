<x-public-view>
  <section class="actualites">
    <h1>{{ __('News') }}</h1>

    <div class="actualites-btn menu-btns">
      <ul class="dropdown" id="btn-news">
        <li id="all" class="btn-act btn active" onclick="selectBtnAct('all')"><a>{{ __('All the events and exhibitions') }}</a><i class="fa-solid fa-chevron-down"></i></li>
        <li id="latest" class="btn-act btn" onclick="selectBtnAct('latest')"><a>{{ __('Latest news') }}</a><i class="fa-solid fa-chevron-down"></i></li>
      </ul>
    </div>

    <div class="actualites-container all show">
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
        <p>{{ Carbon\Carbon::parse($actualite->created_at)->format('M d Y') }}</p>
        @else
        <p>{{ Carbon\Carbon::parse($actualite->created_at)->locale('fr_FR')->isoFormat('ll') }}</p>
        @endif

        @if ('en' == App::getLocale() && $actualite->titre_en != null)
        <a href="{{ route('actualites.show', $actualite) }}" class="link">
          <h3>{{ $actualite->titre_en }}</h3>
        </a>
        <p class="body-text">{!! Str::limit($actualite->description_en, 149) !!}</p>
        @else
        <a href="{{ route('actualites.show', $actualite) }}" class="link">
          <h3>{{ $actualite->titre }}</h3>
        </a>
        <p class="body-text">{!! Str::limit($actualite->description, 149) !!}</p>
        @endif
      </div>
      @endforeach
    </div>

    <div class="actualites-container latest">
      @foreach ($lastestActualites as $actualite)
      <div class="actualites-container-topic card">
        <div>
          <a href="{{ route('actualites.show', $actualite) }}">
            <img src="{{ asset('/storage/' . $actualite->photo) }}" alt="">
            <div class="cross">
              <span></span>
              <span></span>
            </div>
          </a>
        </div>
        @if ('en' == App::getLocale())
        <p>{{ Carbon\Carbon::parse($actualite->created_at)->format('M d Y') }}</p>
        @else
        <p>{{ Carbon\Carbon::parse($actualite->created_at)->locale('fr_FR')->isoFormat('ll') }}</p>
        @endif

        @if ('en' == App::getLocale() && $actualite->titre_en != null)
        <a href="{{ route('actualites.show', $actualite) }}" class="link">
          <h3>{{ $actualite->titre_en }}</h3>
        </a>
        <p class="body-text">{!! Str::limit($actualite->description_en, 149) !!}</p>
        @else
        <a href="{{ route('actualites.show', $actualite) }}" class="link">
          <h3>{{ $actualite->titre }}</h3>
        </a>
        <p class="body-text">{!! Str::limit($actualite->description, 149) !!}</p>
        @endif
      </div>
      @endforeach
    </div>

    <div class="actualites-container expo">

    </div>

    <div class="actualites-container inProgress">

    </div>
  </section>
</x-public-view>