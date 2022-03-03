<section class="slider">
  <div class="slider-content">
    <div class="slider-title">
      <div class="title">{{ __('Latest works') }}</div>
      <p class="body-text intro">Curabitur aliquet quam id dui posuere blandit. Cras ultricies ligula sed magna dictum porta.</p>
    </div>
    <div class="slider-arts">
      @foreach ($oeuvres as $oeuvre)
      <div class="slide-2 card">
        <img src="https://picsum.photos/350" alt="">
        <p>{{ $oeuvre->date->format('d M Y') }}</p>
        <p>{{ $oeuvre->categorie->titre }}</p>
        <h3><a href="">{{ $oeuvre->titre }}</a></h3>
        <p class="body-text">{{ Str::limit($oeuvre->description, 120) }}</p>
      </div>
      @endforeach
    </div>
  </div>
</section>