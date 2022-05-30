<x-public-view>
  @include('biographie.menuBiographie')

  <div class="biographie-presentation evenements">
    <div>
      <img src="{{ asset('/storage/' . $oeuvresImg[5]->photos[0]->photo) }}" alt="image">
      <div>
        <h2>{{ __('Events') }}</h2>
        @if ('fr' == App::getLocale())
        <div>
          <h3>2021</h3>
          <ul>
            <li>18 juin, <span class="strong">inauguration du Monument à Charles de Gaulle, Metz (57)</span></li>
          </ul>
        </div>
        <div>
          <h3>2019</h3>
          <ul>
            <li>11 novembre, <span class="strong">inauguration du Buste de Charles de Gaulle, Pithiviers (45)</span></li>
          </ul>
        </div>
        <div>
          <h3>2018</h3>
          <ul>
            <li>3 novembre, <span class="strong">inauguration de la statue de Joachim Murat, Labastide-Murat (46)</span></li>
          </ul>
        </div>
        <div>
          <h3>2014</h3>
          <ul>
            <li>16 août, <span class="strong">mise en place de la sculpture bronze « TELLINA », Sarrebourg (57)</span></li>
          </ul>
        </div>
        <div>
          <h3>2013</h3>
          <ul>
            <li>20 octobre, <span class="strong">Inauguration du Buste du Général de Gaulle, Hondschotte (59)</span></li>
            <li>9 novembre, <span class="strong">Inauguration du monument à Charles et Yvonne de Gaulle, Place d’Armes, Calais (62)</span></li>
          </ul>
        </div>

        @elseif ('en' == App::getLocale())
        <div>
          <h3>2018</h3>
          <ul>
            <li>3 novembre, <span class="strong">Unveiling statue de Joachim Murat, Labastide-Murat (46)</span></li>
          </ul>
        </div>
        <div>
          <h3>2014</h3>
          <ul>
            <li>16 aout, <span class="strong">mise en place de la sculpture bronze « TELLINA », Sarrebourg (57)</span></li>
          </ul>
        </div>
        <div>
          <h3>2013</h3>
          <ul>
            <li>20 octobre, <span class="strong">Unveiling Buste of Général de Gaulle, Hondschotte (59)</span></li>
            <li>9 novembre, <span class="strong">Unveiling Charles et Yvonne de Gaulle Monument, Place d’Armes, Calais (62)</span></li>
          </ul>
        </div>
        @endif
      </div>
    </div>
  </div>

  </section>
  {{--@include('partialsFront.latestWorksSlide')--}}
</x-public-view>