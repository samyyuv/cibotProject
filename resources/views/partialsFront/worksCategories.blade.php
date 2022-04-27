<x-public-view>
  <section class="arts">
    <div class="arts-btn" id="btn-arts">
      <?php
      $i = 0;
      foreach ($collection->oeuvres as $oeuvre) {
        //foreach ($slugedNames as $name) {
      ?>
        <a id="<?= $slugedNames[$oeuvre->id] ?>" class="btn active" onclick="selectBtnArts('<?= $slugedNames[$oeuvre->id] ?>')">{{ $oeuvre->categorie->titre }}</a>
      <?php
      }
      //}
      ?>
    </div>
    <?php
    $i = 0;
    foreach ($collection->oeuvres as $oeuvre) {
    ?>
      <div class="art <?= $slugedNames[$oeuvre->id] ?>">
        <h5>{{ $oeuvre->collection->titre }}</h5>
        <h1>{{ $oeuvre->categorie->titre }}</h1>

        <div class="art-container">

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
        </div>
      </div>
      <div id="overlay"></div>
    <?php
    }
    ?>
    {{-- artwork individuel --}}
    <div class="slideshow" id="slideshow">
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
          @foreach ($collection->oeuvres as $oeuvre)
          <li class="slide-1 fade">
            <div>
              @foreach ($oeuvre->photos as $photo)
              <img src="{{ asset('/storage/' . $photo->photo) }}" alt="image">
              @endforeach
              <div>
                <h5>{{ $oeuvre->categorie->titre }}</h5>
                <h2>{{ $oeuvre->titre }}</h2>
                <p>{{ $oeuvre->description }}</p>
                <a href="">Voir la série "{{ $oeuvre->collection->titre }}"</a>
              </div>
            </div>
          </li>
          @endforeach
        </ul>
      </div>
    </div>

  </section>
</x-public-view>