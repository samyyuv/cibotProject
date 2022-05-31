<x-public-view>
  @include('biographie.menuBiographie')

  <div class="biographie-presentation permanence">
    <div>
      <img src="{{ asset('/storage/' . $oeuvresImg[6]->photos[0]->photo) }}" alt="{{$oeuvresImg[6]->titre}}">
      <h2>{{ __('Galleries') }}</h2>
      @if ('fr' == App::getLocale())
      <ul>
        <li><span class="strong">Galerie Thomé</span>, 19 rue Mazarine, Paris 75006</li>
        <li><span class="strong">Galerie Vallois</span>, 35, rue de Seine, Paris 75006</li>
        <li><span class="strong">Galerie Anagama</span>, 5, rue du Bailliage, Versailles (78)</li>
        <li><span class="strong">Galerie Lionel Finck</span>, Passage de la Geôle, Versailles (78)</li>
        <li><span class="strong">Galerie Roz In Winter</span>, 33 Grande-Rue, Barbizon (77)</li>
        <li><span class="strong">Galerie Marie-Thérèse Boyrié</span>, Saint-Quirin (57) – site Internet</li>
        <li><span class="strong">Galerie Delaporte</span>, 12, avenue Émilie, Royan (17)</li>
        <li><span class="strong">Galerie de l’Horloge</span>, 5/7 rue Montauban, La Gacilly (56)</li>
        <li><span class="strong">Galerie Izart</span>, 13 rue du Port, Pont-Aven (29)</li>
        <li><span class="strong">Galerie – Atelier Le 56</span>, 56 rue de l’Hermitage, Nantes (44)</li>
        <li><span class="strong">Galerie Saint André</span>, Mont Saint-Aignan (76)</li>
        <li><span class="strong">Venezia Viva</span>, Venise, Italie</li>
        <li><span class="strong">Galerie Klaus Zöllner</span>, Sarrelouis, Allemagne</li>
        <li><span class="strong">Karin Carton Gallery</span>, Pasadena, California. USA</li>
        <li><span class="strong">Restaurant « Le Val de Beauté »</span>, Nogent-sur-Marne (94)</li>
      </ul>

      <div>
        <p>Sites de vente en ligne :</p>
        <ul>
          <li class="strong"><a href="https://bronzesonly.com/25-elisabeth-cibot">bronzesonly.com</a></li>
          <li class="strong"><a href="https://www.1stdibs.com/search/art/?q=cibot">1stdibs.com</a></li>
          </li>
        </ul>
      </div>

      @elseif ('en' == App::getLocale())
      <ul>
        <li><span class="strong">Galerie Marie-Thérèse Boyrié</span>, Saint-Quirin (57)</li>
        <li><span class="strong">Galerie Dans la cour des artistes</span>, Wissous (91) – website</li>
        <li><span class="strong">Galerie Thomé</span>, 19 rue Mazarine, Paris 75006</li>
        <li><span class="strong">Galerie Vallois</span>, 35, rue de Seine, Paris 75006</li>
        <li><span class="strong">Galerie Anagama</span>, 5, rue du Bailliage, Versailles (78)</li>
        <li><span class="strong">Galerie Delaporte</span>, 12, avenue Émilie, Royan (17)</li>
        <li><span class="strong">Galerie iZART</span>, 13 rue du Port, Pont-Aven (29)</li>
        <li><span class="strong">Galerie Saint André</span>, Mont Saint-Aignan (76)</li>
        <li><span class="strong">Galerie Klaus Zöllner</span>, Sarrelouis, Germany</li>
        <li><span class="strong">Karin Carton Gallery</span>, Pasadena, California. USA</li>
        <li><span class="strong">Venezia Viva</span>, Venise, Italy</li>
      </ul>

      <div>
        <span class="strong">On-line galleries :</span>
        <ul>
          <li><a href="https://bronzesonly.com/25-elisabeth-cibot">bronzesonly.com</a></li>

          <li><a href="https://www.1stdibs.com/search/art/?q=cibot">1stdibs.com</a></li>
        </ul>
      </div>

      @endif
    </div>
  </div>
  </section>
  {{--@include('partialsFront.latestWorksSlide')--}}
</x-public-view>