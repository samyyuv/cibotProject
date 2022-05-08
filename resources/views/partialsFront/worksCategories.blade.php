<x-public-view>
  <section class="arts">
    @foreach ($collection->oeuvres as $oeuvre)
    <div class="title-art <?= $slugedNames[$oeuvre->categorie->id] ?>">
      <h5>{{ $oeuvre->collection->titre }}</h5>
      <h1>{{ $oeuvre->categorie->titre }}</h1>
    </div>
    @endforeach

    <div class="arts-btn menu-btns" id="btn-arts">
      <ul class="dropdown">
        @foreach ($categories as $cat)
        <li id="<?= $slugedNames[$cat[1]] ?>" class="btn-art btn" onclick="selectBtnArts('<?= $slugedNames[$cat[1]] ?>')">
          <a>{{ $cat[0] }}</a> <i class="fa-solid fa-chevron-down"></i>
        </li>
        @endforeach
      </ul>
    </div>


    @foreach ($oeuvresByCategorie as $key => $oeuvres)
    <div class="art <?= $slugedNames[$key] ?>">

      <div class="art-container">
        @foreach($oeuvres as $oeuvre)


        <div onclick="openShow({{$key}}, {{ $oeuvre->id }});currentSlide({{ $loop->index }});setPhotoShow(<?= $oeuvre->id ?>)">
          @foreach ($oeuvre->photos as $photo)
          @if ($loop->first)
          <a href="#">
            <img id="<?= $photo->oeuvre_id; ?>" src="{{ asset('/storage/' . $photo->photo) }}" alt="">

            <div class="cross">
              <span></span>
              <span></span>
            </div>
          </a>
          @endif
          @endforeach
        </div>

        @endforeach
      </div>
    </div>
    @endforeach
    </div>

    <div id="overlay"></div>
    {{--artwork individuel--}}
    @foreach ($oeuvresByCategorie as $key => $oeuvres)
    <div id="slideshow-{{$key}}" class="slideshow <?= $slugedNames[$key] ?>" id="slideshow">
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
          <div class="scrollme">
            @foreach($oeuvres as $oeuvre)
            <li id=<?= $oeuvre->id ?> class="slide-1-{{$key}} fade">
              <div>
                <div class="slideshow-2" id="slideshow-2">
                  <div class="slideshow-2-container">
                    <button href="" class="slideshow-2-container-button" onclick="plusSlides2(-1)">
                      <i class="material-icons">chevron_left</i>
                    </button>
                    <button href="" class="slideshow-2-container-button" onclick="plusSlides2(1)">
                      <i class="material-icons">chevron_right</i>
                    </button>
                    <ul>
                      @foreach ($oeuvre->photos as $photo)
                      <li class="slide2-{{$oeuvre->id}} fade">
                        <div>
                          <img src="{{ asset('/storage/' . $photo->photo) }}" alt="image">
                        </div>
                      </li>
                      @endforeach
                    </ul>
                  </div>
                </div>
                <div class="texts">
                  <h5>{{ $oeuvre->categorie->titre }}</h5>
                  <h2>{{ $oeuvre->titre }}</h2>
                  <p>{{ $oeuvre->description }}</p>
                  <a href="">Voir la série "{{ $oeuvre->collection->titre }}"</a>
                </div>
              </div>
            </li>
            @endforeach
          </div>
        </ul>
      </div>
    </div>
    @endforeach

  </section>
</x-public-view>