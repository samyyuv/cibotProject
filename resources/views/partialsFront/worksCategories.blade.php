<x-public-view>
  <section class="art">
    <h5>{{ $categorie->titre }}</h5>
    <h1>{{ __('recent works') }}</h1>

    <div class="art-container">

      <?php
      $i = 0;
      foreach ($categorie->oeuvres as $oeuvre) {

      ?>
        @foreach ($oeuvre->photos as $photo)
        <?php

        ++$i;
        ?>
        @if ($loop->first)

        <div onclick="openShow();currentSlide(<?= $i; ?>)">
          <a href="#">
            <img src="{{ asset('/storage/' . $photo->photo) }}" alt="">

            <div class="cross">
              <span></span>
              <span></span>
            </div>
          </a>
        </div>
        @endif

        @endforeach
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
        @foreach ($categorie->oeuvres as $oeuvre)
        @foreach ($oeuvre->photos as $photo)
        <li class="slide-1 fade">
          <div>
            <img src="{{ asset('/storage/' . $photo->photo) }}" alt="image">
            <div>
              <h5>{{ $oeuvre->categorie->titre }}</h5>
              <h2>{{ $oeuvre->titre }}</h2>
              <p>{{ $oeuvre->description }}</p>
              <a href="">Voir la série "{{ $oeuvre->collection->titre }}"</a>
            </div>
          </div>
        </li>
        @endforeach
        @endforeach
      </ul>
    </div>
  </section>

</x-public-view>