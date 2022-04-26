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
        <div onclick=" openShow();currentSlide(<?= $i; ?>)">
          @foreach ($oeuvre->photos as $photo)


          <img src="{{ asset('/storage/' . $photo->photo) }}" alt="image">
          @endforeach
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

  <div id="overlay" onclick="closeShow()"></div>
  {{-- artwork individuel --}}
  <section class="slideshow" id="slideshow" data-slideshow>
    <div class="close" onclick="closeShow()">
      <span></span> <span></span>
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
            <img src="{{ asset('/storage/' . $photo->photo) }}" alt="image">
            <div>
              <h5>{{ $oeuvre->categorie->titre }}</h5>
              <h2>{{ $oeuvre->titre }}</h2>
              <p>{{ $oeuvre->description }}</p>
              <a href="">Voir "{{ $oeuvre->collection->titre }}"</a>
            </div>
          </div>
        </li>
        @endforeach
      </ul>
    </div>
  </section>

</x-public-view>