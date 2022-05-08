<header class="header-menu">
  <div class="header-container">
    <div class="nav-top">
      <a href="/"><img class="logo" src="{{ asset('/storage/admin/logo.png') }}" alt="" /></a>
      <div class="menu-icon menu-nav" id="ham">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <nav class="nav-drill">
      <ul class="nav-items">
        <li class="nav-expand" data-dropdown>
          <a class="nav-link nav-expand-link" href="#">
            {{ __('Art objects') }}
          </a>
          <i class="fas fa-chevron-right"></i>
          <ul class="nav-items nav-expand-content nav-container" data-dropdown-button>
            @foreach ($collectionsMenu as $collection)
            <li class="nav-expand column">
              <div><a class="nav-link nav-expand-link" href="{{ route('collections.show', $collection) }}">
                  {{ $collection->titre }}
                </a></div>
              <i class="fas fa-chevron-right noshow"></i>
              <ul class="nav-items nav-expand-content noshow">


                @foreach ($collection->oeuvres as $oeuvre)
                <?php
                $art[] = $oeuvre->categorie->titre;
                $unique = array_unique($art);
                ?>
                @foreach ($unique as $categorieTitle)
                <li>
                  <a class="nav-link" href="{{ route('collections.show', $collection) }}" onclick="activeArtLink('<?= $slugedNames[$oeuvre->categorie->id] ?>')">
                    {{ $categorieTitle }}
                  </a>
                </li>
                @endforeach
                <?php
                $art = [];
                ?>
                @endforeach

              </ul>
            </li>
            @endforeach


            <div class="img-menu">
              <div>
                @foreach ($oeuvreMenu->photos as $photo)
                @if ($loop->first)
                <img src="{{ asset('/storage/' . $photo->photo) }}" alt="image">
                @endif
                @endforeach
              </div>
              <div>
                <div>
                  <a class="link" href="{{ route('collections.show', $oeuvreMenu->collection->id) }}" onclick="activeArtLink('<?= $slugedNames[$oeuvreMenu->categorie->id] ?>')">
                    <p>{{ $oeuvreMenu->titre }} - {{ $oeuvreMenu->date->format('Y') }} - {{ $oeuvreMenu->categorie->titre }}</p>
                  </a>
                </div>
              </div>
            </div>

          </ul>
        </li>


        <li><a class="nav-link" href="{{ route('actualites.index') }}">{{ __('News') }}</a></li>
        <li><a class="nav-link" href="/biographie">{{ __('Biography') }}</a></li>
        <li>
          <a class="nav-link" href="/contactez-nous">{{ __('Contact') }}</a>
        </li>
        <li>
          <div class="menu-language">
            <a href="https://www.facebook.com/elisabethcibotsculpteur">
              <span><i class="fab fa-facebook-square"></i></span>
            </a>
          </div>
        </li>
      </ul>

      @include('partialsFront.miniFooter')
    </nav>
  </div>
</header>