<x-public-view>
  <section class="arts">
    @foreach ($categories as $cat)
    <div id="{{$slugedNames[$cat->id]}}" class="title-art">
      <h5>{{ $collection->titre }}</h5>
      <h1>{{ $cat->titre }}</h1>
    </div>
    @endforeach

    <div class="arts-btn menu-btns" id="btn-arts">
      <ul class="dropdown">
        @foreach ($categories as $cat)
        <li>
          <a id="{{$slugedNames[$cat->id]}}" class="btn-art btn" href="{{ url("/collections/{$collection->id}/categories/{$cat->id}") }}" onclick="activeArtLink('{{$slugedNames[$cat->id]}}')">{{ $cat->titre }}</a><i class="fa-solid fa-chevron-down"></i>
        </li>
        @endforeach
      </ul>
    </div>


    @foreach ($categories as $cat)
    <div class="art {{$slugedNames[$cat->id]}}">
      <div class="art-container">
        @foreach($cat->oeuvres as $oeuvre)
        <div onclick="openShow({{$cat->id}}, {{ $oeuvre->id }});currentSlide({{ $loop->index }});setPhotoShow(<?= $oeuvre->id ?>)">
          @foreach ($oeuvre->photos as $photo)
          @if ($photo->position === 0)
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
    @foreach ($categories as $cat)
    <div id="slideshow-{{$cat->id}}" class="slideshow {{$slugedNames[$cat->id]}}">
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
          @foreach($cat->oeuvres as $oeuvre)
          <li id=<?= $oeuvre->id ?> class="slide-1-{{$cat->id}} cardSlide fade">
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
                <a class="link" href="">Voir la série "{{ $oeuvre->collection->titre }}"</a>
              </div>
            </div>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
    @endforeach

  </section>
</x-public-view>