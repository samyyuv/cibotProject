<x-public-view>
  <section class="arts">
    <div id="{{$slugedNames[$categorie->id]}}" class="title-art show">
      @foreach ($categorie->oeuvres as $oeuvre)
      @if ($loop->first)
      <h5>{{ $oeuvre->collection->titre }}</h5>
      @endif
      @endforeach
      <h1>{{ $categorie->titre }}</h1>
    </div>

    <div class="arts-btn menu-btns" id="btn-arts">
      <ul class="dropdown">
        @foreach ($categorieByCollection as $categorieBtn)
        <li id="{{$slugedNames[$categorieBtn[1]]}}" class="btn-art btn">
          <a href="{{ url("/collections/{$collection->id}/categories/{$categorieBtn[1]}" ) }}" onclick="activeArtLink('{{$slugedNames[$categorieBtn[1]]}}')">
            {{ $categorieBtn[0] }}
          </a><i class="fa-solid fa-chevron-down"></i>
        </li>
        @endforeach
      </ul>
    </div>


    <div class="art {{$slugedNames[$categorie->id]}}">
      <div class="art-container">
        @foreach ($categorie->oeuvres as $key => $oeuvre)
        @foreach ($oeuvre->photos as $photo)
        @if ($photo->position === 0)
        <div onclick="openShow({{$oeuvre->categorie_id}}, {{ $oeuvre->id }});currentSlide({{ $key }});setPhotoShow(<?= $oeuvre->id ?>)">
          <a href="#">
            <img id="<?= $photo->oeuvre_id; ?>" src="{{ asset('/storage/' . $photo->photo) }}" alt="">
            <div class="cross">
              <span></span>
              <span></span>
            </div>
          </a>
        </div>
        @endif
        @endforeach
        @endforeach
      </div>
    </div>

    <div id="overlay"></div>

    <div id="slideshow-{{$categorie->id}}" class="slideshow {{$slugedNames[$categorie->id]}}">
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
          <li id=<?= $oeuvre->id ?> class="slide-1-{{$categorie->id}} cardSlide fade">
            <div class="slideshow-2">
              <div class="slideshow-2-container">
                @if (count($oeuvre->photos) > 1)
                <button href="" class="slideshow-2-container-button" onclick="plusSlides2(-1)">
                  <i class="material-icons">chevron_left</i>
                </button>
                <button href="" class="slideshow-2-container-button" onclick="plusSlides2(1)">
                  <i class="material-icons">chevron_right</i>
                </button>
                @endif
                <ul>
                  <?php $sortedPhoto = App\Http\Controllers\CollectionController::getPhotosByOeuvreSortedByPosition($oeuvre->id) ?>
                  @foreach ($sortedPhoto as $photo)
                  <li class="slide2-{{$oeuvre->id}} fade">
                    <img class="slideshow-img" src="{{ asset('/storage/' . $photo->photo) }}" alt="image">
                  </li>
                  @endforeach
                </ul>
              </div>
              <div class="texts">
                <h5>{{ $oeuvre->categorie->titre }}</h5>
                <h2>{{ $oeuvre->titre }}</h2>
                <p>{!! $oeuvre->description !!}</p>
              </div>
            </div>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </section>
</x-public-view>