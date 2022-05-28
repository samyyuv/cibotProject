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
              <div><a class="nav-link nav-expand-link" href="{{ url("/collections/{$collection->id}/categories/1") }}">
                  {{ $collection->titre }}
                </a></div>
              <i class="fas fa-chevron-right noshow"></i>
              <ul class="nav-items nav-expand-content noshow">


                @foreach ($collection->oeuvres as $oeuvre)
                <?php
                $art[] = array($oeuvre->categorie->titre, $oeuvre->categorie->id);
                $unique = array_unique($art, SORT_REGULAR);
                ?>
                @endforeach
                @foreach ($unique as $categorieTitle)
                <li>
                  <a class="nav-link" href="{{ url("/collections/{$collection->id}/categories/{$categorieTitle[1]}") }}" onclick="activeArtLink('<?= $slugedNames[$categorieTitle[1]] ?>')">
                    {{ $categorieTitle[0] }}
                  </a>
                </li>
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
                  <a class="link" href="/collections/{{ $oeuvreMenu->collection_id }}/categories/{{ $oeuvreMenu->categorie_id }}" onclick="activeArtLink('<?= $slugedNames[$oeuvreMenu->categorie_id] ?>');activeArtLinkExtended('{{ $oeuvreMenu->categorie->id }}', '{{ $oeuvreMenu->id }}')">
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