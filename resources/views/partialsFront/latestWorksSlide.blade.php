<section class="slider">
  <div class="slider-content">
    <div class="slider-title">
      <div class="title">{{ __('Latest works') }}</div>
      <p class="body-text intro">Curabitur aliquet quam id dui posuere blandit. Cras ultricies ligula sed magna dictum porta.</p>
    </div>
    <div class="slider-arts">

      @foreach ($oeuvres as $oeuvre)
      @foreach ($oeuvre->photos as $photo)
      @if ($loop->first)
      <div class="slide-2 card">
        <div>
          <a href="#">
            <img src="{{ asset('/storage/' . $photo->photo) }}" alt="">

            <div class="cross">
              <span></span>
              <span></span>
            </div>
          </a>
        </div>
        <p>{{ $oeuvre->date->format('d M Y') }}</p>
        <p><a href="{{ route('categories.show', $oeuvre->categorie->id) }}">
            {{ $oeuvre->categorie->titre }}
          </a></p>
        <a href="#">
          <h3>{{ $oeuvre->titre }}</h3>
        </a>
        <p class="body-text">{{ Str::limit($oeuvre->description, 120) }}</p>
      </div>
      @endif
      @endforeach
      @endforeach
    </div>
  </div>
</section>