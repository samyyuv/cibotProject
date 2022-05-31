<x-public-view>
  @include('biographie.menuBiographie')

  <div class="biographie-presentation awards">
    <div>
      <img src="{{ asset('/storage/' . $oeuvresImg[1]->photos[0]->photo) }}" alt="{{$oeuvresImg[1]->titre}}">
      <div>
        <h2>{{ __('Awards') }}</h2>
        @if ('fr' == App::getLocale())
        <ul>
          <li><span class="year">2022</span> Présidente de la Biennale d’ Art Contemporain de Nogent sur Marne « Les Arts au cœur de Nogent », 8 ème édition.</li>
          <li><span class="year">2019</span> Prix de sculpture du Jury, 54ème Grand Prix de Barbizon.</li>
          <li><span class="year">2018</span> Médaille de sculpture de la Ville de Vincennes.</li>
          <li><span class="year">2017</span> Prix CONTI de sculpture, remis par Michel PONIATOWSKI le 9 /09/2017.</li>
          <li><span class="year">2015</span> Médaille d’Or de sculpture de la Société Nationale des Beaux-Arts.</li>
          <li><span class="year">2013</span> Prix Camille Claudel de sculpture de la Société Nationale des Beaux-Arts.</li>
          <li><span class="year">2009</span> Bourse de la Fondation Taylor.</li>
          <li><span class="year">2006</span> Prix Gabriel Diana de la Société Nationale des Beaux-Arts.</li>
          <li><span class="year">2005</span> Prix de la Fondation Taylor.</li>
          <li><span class="year">2004</span> Prix Paul Belmondo du Salon d’Automne.</li>
          <li><span class="year">2003</span> Prix de sculpture des Amis du salon d’Automne.</li>
          <li><span class="year">2000</span> Prix Michel Dumont, Salon des Artistes Français.</li>
          <li><span class="year">1997</span> Médaille de bronze du Salon des Artistes Français.</li>
        </ul>
        <p>Sociétaire du Salon d’Automne et de la Société Nationale des Beaux-Arts de Paris.</p>

        @elseif ('en' == App::getLocale())
        <ul>
          <li><span class="year">2019</span> Jury Prize of Sculpture, 54ème Grand Prix de Barbizon.</li>
          <li><span class="year">2018</span> Medal of sculpture awarded by the City of Vincennes.</li>
          <li><span class="year">2017</span> CONTI Prize of sculpture, handed over by Mr Michel PONIATOWSKI on september 9.</li>
          <li><span class="year">2015</span> Gold medal of sculpture awarded by Société Nationale des Beaux-Arts.</li>
          <li><span class="year">2013</span> Camille Claudel Prize of sculpture awarded by Société Nationale des Beaux-Arts.</li>
          <li><span class="year">2009</span> Fondation Taylor Grant.</li>
          <li><span class="year">2006</span> Gabriel Diana Prize awarded by Société Nationale des Beaux-Arts.</li>
          <li><span class="year">2005</span> Fondation Taylor Prize.</li>
          <li><span class="year">2004</span> Paul Belmondo Prize awarded by Salon d’Automne.</li>
          <li><span class="year">2003</span> Prize of sculpture awarded by Les Amis du Salon d’Automne.</li>
          <li><span class="year">2000</span> Michel Dumont Prize awarded by Salon des Artistes Français.</li>
          <li><span class="year">1997</span> Bronze medal awarded by Salon des Artistes Français.</li>
        </ul>
        <p>Sociétaire du Salon d’Automne et de la Société Nationale des Beaux-Arts de Paris.</p>
        @endif
      </div>
    </div>
  </div>
  </section>
  {{--@include('partialsFront.latestWorksSlide')--}}
</x-public-view>