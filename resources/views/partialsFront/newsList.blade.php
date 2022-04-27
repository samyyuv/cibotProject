<x-public-view>
  <section class="actualites">
    <h1>{{ __('news') }}</h1>

    <div class="actualites-btn" id="btn-news">
      <a id="all" class="btn-act active" onclick="selectBtnAct('all')">{{ __('All the events and exhibitions') }}</a>
      <a id="latest" class="btn-act" onclick="selectBtnAct('latest')">{{ __('Latest news') }}</a>
      <a id="expo" class="btn-act" onclick="selectBtnAct('expo')">{{ __('Expo events') }}</a>
      <a id="inProgress" class="btn-act" onclick="selectBtnAct('inProgress')">{{ __('Artwork in progress') }}</a>
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
        <p>{{ $actualite->created_at->format('d M Y') }}</p>
        <a href="{{ route('actualites.show', $actualite) }}" class="link">
          <h3>{{ $actualite->titre }}</h3>
        </a>
        <p class="body-text">{{ Str::limit($actualite->description, 200) }}</p>
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
        <p>{{ $actualite->created_at->format('d M Y') }}</p>
        <a href="{{ route('actualites.show', $actualite) }}" class="link">
          <h3>{{ $actualite->titre }}</h3>
        </a>
        <p class="body-text">{{ Str::limit($actualite->description, 200) }}</p>
      </div>
      @endforeach
    </div>

    <div class="actualites-container expo">

    </div>

    <div class="actualites-container inProgress">

    </div>
  </section>
</x-public-view>