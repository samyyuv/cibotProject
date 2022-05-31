<x-public-view>
  @include('biographie.menuBiographie')
  <div class="biographie-presentation monuments">
    <div>
      <img src="{{ asset('/storage/' . $oeuvresImg[2]->photos[0]->photo) }}" alt="{{$oeuvresImg[2]->titre}}">
      <div>
        <h2>{{ __('Monuments') }}</h2>
        @if ('fr' == App::getLocale())
        <div>
          <h3>2021</h3>
          <ul>
            <li>Ville de Metz, <span class="strong">Monument à Charles de Gaulle</span> (bronze sur socle 4,50 m) Inauguration le 18 juin 2021.</li>
          </ul>
        </div>
        <div>
          <h3>2020</h3>
          <ul>
            <li>Ville de Sarrebourg, <span class="strong">statue de Charles de Gaulle</span> (plâtre 3,5 m), Hôtel de Ville.</li>
          </ul>
        </div>
        <div>
          <h3>2019</h3>
          <ul>
            <li>Ville de Nogent-sur-Marne, <span class="strong">Jean-Paul II</span> (bronze 3,30 m), parvis de l’Église Saint Saturnin.</li>
            <li>Ville de Pithiviers, <span class="strong">buste monumental du Général de Gaulle</span> (bronze 2,20 m), place du Général de Gaulle – Inauguration le 11 novembre</li>
          </ul>
        </div>
        <div>
          <h3>2018</h3>
          <ul>
            <li>Ville de Labastide-Murat, <span class="strong">Joachim Murat</span> (bronze 1,80 m), place de la mairie, mise en place en novembre 2018.</li>
          </ul>
        </div>
        <div>
          <h3>2016</h3>
          <ul>
            <li>Ville de Lalbenque, <span class="strong">« Lo Trufaire »</span> Le trufficulteur (bronze 1,20 m), marches de l’Hôtel de Ville.</li>
          </ul>
        </div>
        <div>
          <h3>2014</h3>
          <ul>
            <li>Ville de Sarrebourg, <span class="strong">Tellina</span> (bronze 1,50 m), angle Grand-rue et rue Foch, mise en place août 2014.</li>
          </ul>
        </div>
        <div>
          <h3>2013</h3>
          <ul>
            <li>Ville de Calais, <span class="strong">Monument à Charles de Gaulle et Yvonne Vendroux</span> (bronze 3m), Place d’Armes.</li>
          </ul>
        </div>
        <div>
          <h3>2011</h3>
          <ul>
            <li>Ville de Lyon, <span class="strong">Monument en hommage à Jean-Paul II</span> (bronze 3 m H) Parvis de la
              Basilique de Fourvière – Inauguration le 5 octobre 2011.</li>
            <li>COGEDIM, <span class="strong">Monument en hommage à la communauté italienne de Nogent</span>. « La Valnurese »
              (bronze 2.50 m H), Nogent-sur-Marne, patio de la résidence « La petite Italie » Inauguration le 21 septembre 2012.</li>
          </ul>
        </div>
        <div>
          <h3>2007</h3>
          <ul>
            <li>Ville de Drancy, <span class="strong">Monument en hommage à Charles de Gaulle</span>.</li>
          </ul>
        </div>
        <div>
          <h3>2005</h3>
          <ul>
            <li>Ville de Nantes,<span class="strong"> Monument « Le Capitaine Nemo et Jules Verne »</span>.</li>
          </ul>
        </div>
        <div>
          <h3>2000</h3>
          <ul>
            <li>Ville de Pontault-Combault, <span class="strong">Buste monumental de François Mitterrand</span>.</li>
          </ul>
        </div>
        <div>
          <h3>1997</h3>
          <ul>
            <li>Ville de Béthune, <span class="strong">Buste monumental de François Mitterrand</span>.</li>
            <li>Ville de Vouziers, <span class="strong">Silhouette de François Mitterrand avec son chien</span>.</li>
            <li>Ville de Béthune, <span class="strong">Buste monumental de Willy Brandt</span>.</li>
          </ul>
        </div>
        @elseif ('en' == App::getLocale())
        <div>
          <h3>2020</h3>
          <ul>
            <li>Ville de Sarrebourg, <span class="strong">statue de Charles de Gaulle</span> (bronze 3,50 m), City Hall.</li>
            <li>Ville de Béthune, <span class="strong">buste de Charles de Gaulle</span> (bronze).</li>
          </ul>
        </div>
        <div>
          <h3>2019</h3>
          <ul>
            <li>Ville de Nogent-sur-Marne, <span class="strong">Jean-Paul II</span> (bronze 3,30 m), parvis de l’Église Saint Saturnin.</li>
            <li>Ville de Pithiviers, <span class="strong">buste monumental du Général de Gaulle</span> (bronze 2,20 m), place du Général de Gaulle– Unveiling November 11.</li>
          </ul>
        </div>
        <div>
          <h3>2018</h3>
          <ul>
            <li>Ville de Labastide-Murat, <span class="strong">Joachim Murat</span> (bronze 1,80 m), place de la mairie, mise en place en novembre 2018.</li>
          </ul>
        </div>
        <div>
          <h3>2016</h3>
          <ul>
            <li>Ville de Lalbenque, <span class="strong">“Lo Trufaire” Le trufficulteur</span> (bronze 1,20 m), Staircase of the City Hall.</li>
          </ul>
        </div>
        <div>
          <h3>2014</h3>
          <ul>
            <li>Ville de Sarrebourg, <span class="strong">Tellina</span> (bronze 1,50 m), angle Grand-rue et rue Foch, Unveiling August 2014.</li>
          </ul>
        </div>
        <div>
          <h3>2013</h3>
          <ul>
            <li>Ville de Calais, <span class="strong">Monument à Charles de Gaulle et Yvonne Vendroux</span> (bronze 3m), Place d’Armes.</li>
          </ul>
        </div>
        <div>
          <h3>2011</h3>
          <ul>
            <li>Ville de Lyon, <span class="strong">Monument en hommage à Jean-Paul II</span> (bronze 3 m H) Parvis de la Basilique de Fourvière – Unveiling 5 octobre 2011.</li>
            <li>COGEDIM, <span class="strong">Monument en hommage à la communauté italienne de Nogent-sur-Marne</span> « La Valnurese » (bronze 2.50 m H), Unveiling september 21 – 2012.</li>
          </ul>
        </div>
        <div>
          <h3>2007</h3>
          <ul>
            <li>Ville de Drancy, <span class="strong">Charles de Gaulle Hommage Monument</span>.</li>
          </ul>
        </div>
        <div>
          <h3>2005</h3>
          <ul>
            <li>Ville de Nantes, <span class="strong">« Capitaine Nemo and Jules Verne » Monument</span>.</li>
          </ul>
        </div>
        <div>
          <h3>2000</h3>
          <ul>
            <li>Ville de Pontault-Combault, <span class="strong">Buste monumental de François Mitterrand</span>.</span></li>
          </ul>
        </div>
        <div>
          <h3>1997</h3>
          <ul>
            <li>Ville de Béthune, <span class="strong">Buste monumental de François Mitterrand</span>.</li>
            <li>Ville de Vouziers, <span class="strong">Silhouette de François Mitterrand avec son chien</span>.</li>
            <li>Ville de Béthune, <span class="strong">Buste monumental de Willy Brandt</span>.</li>
          </ul>
        </div>
        @endif
      </div>
    </div>
  </div>
  </section>
  {{--@include('partialsFront.latestWorksSlide')--}}
</x-public-view>