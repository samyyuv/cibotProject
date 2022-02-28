<x-public-view>
  <section class="art">
    <h5>{{ __('sculpture') }}</h5>
    <h1>{{ __('recent works') }}</h1>

    <div class="art-container">

      <?php
      $i = 0;
      foreach ($oeuvres as $oeuvre) {
        ++$i;
      ?>
        <div onclick="openShow();currentSlide(<?= $i; ?>)">
          <img src="https://picsum.photos/600" alt="">
          <div class="cross">
            <a href="#"> <span></span>
              <span></span></a>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </section>
  <div id="overlay"></div>

  {{-- artwork individuel --}}
  <section class="slideshow" id="slideshow">
    <div class="close" onclick="closeShow()">
      <a href="#"> <span></span> <span></span></a>
    </div>
    <div class="slideshow-container">
      <button href="" class="slideshow-container-button" onclick="plusSlides(-1)">
        <i class="material-icons">chevron_left</i>
      </button>
      <button href="" class="slideshow-container-button" onclick="plusSlides(1)">
        <i class="material-icons">chevron_right</i>
      </button>
      <ul>
        @foreach ($oeuvres as $oeuvre)
        <li class="slide-1 fade">
          <div>
            <img src="https://picsum.photos/799" alt="">
            <div>
              <h5>{{ $oeuvre->categorie->titre }}</h5>
              <h2>{{ $oeuvre->titre }}</h2>
              <p>{{ $oeuvre->description }}</p>
              <a href="">Voir la série Autre Monde</a>
            </div>
          </div>
        </li>
        @endforeach
      </ul>
    </div>
  </section>

</x-public-view>