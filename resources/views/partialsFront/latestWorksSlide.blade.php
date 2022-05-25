<section class="slider">
  <div class="slider-wrap">
    <div class="slider-content">
      <div class="slider-title">
        <div class="title">{{ __('Latest works') }}</div>
        <p class="body-text intro">Curabitur aliquet quam id dui posuere blandit. Cras ultricies ligula sed magna dictum porta.</p>
      </div>
      <div class="slider-arts item">
        @foreach ($oeuvres as $oeuvre)
        @foreach ($oeuvre->photos as $photo)
        @if ($photo->position === 0)
        <div class="slide-2 card">
          <div>
            <a href="/collections/{{ $oeuvre->collection_id }}" onclick="activeArtLinkExtended('{{ $oeuvre->categorie->id }}', '{{ $oeuvre->id }}')">
              <img src="{{ asset('/storage/' . $photo->photo) }}" alt="">
              <div class="cross">
                <span></span>
                <span></span>
              </div>
            </a>
          </div>
          <p>{{ $oeuvre->date->format('d M Y') }}</p>
          <p><a class="link" href="{{ route('collections.show', $oeuvre->collection->id) }}" onclick="activeArtLink('<?= $slugedNames[$oeuvre->categorie->id] ?>')">
              {{ $oeuvre->categorie->titre }}
            </a></p>
          <h3>
            <a href="/collections/{{ $oeuvre->collection_id }}" onclick="activeArtLinkExtended('{{ $oeuvre->categorie->id }}', '{{ $oeuvre->id }}')" class="link">
              {{ $oeuvre->titre }}</a>
          </h3>
          <p class="body-text">{{ Str::limit($oeuvre->description, 120) }}</p>
        </div>
        @endif
        @endforeach
        @endforeach
      </div>
    </div>
  </div>
</section>