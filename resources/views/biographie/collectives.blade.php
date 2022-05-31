<x-public-view>
  @include('biographie.menuBiographie')

  <div class="biographie-presentation collectives">
    <div>
      <img src="{{ asset('/storage/' . $oeuvresImg[4]->photos[0]->photo) }}" alt="{{$oeuvresImg[4]->titre}}">
      <div>
        <h2>{{ __('Collective exhibitions') }} </h2>
        @if ('fr' == App::getLocale())
        <div>
          <h3>2022</h3>
          <ul>
            <li>Présidente de la <span class="strong">Biennale d’Art Contemporain de Nogent s/Marne – 8ème édition</span> « Les arts au cœur de Nogent » (94)</li>
            <li>15 – 20 février – <span class="strong">Grand Palais Ephémère, Paris</span></li>
          </ul>
        </div>

        <div>
          <h3>2021</h3>
          <ul>
            <li>10 – 19 juillet – Invitée avec le Groupe Figuration Actuelle de COMPARAISONS au <span class="strong">36eme Salon international</span> et <span class="strong">2eme Biennale</span> de Vittel, Vittel (88)</li>
            <li>Juillet – 5 septembre – Invitée pour l’exposition « Chevauchées fantastiques » – <span class="strong">Château de COMPER (56)</span></li>
            <li>16 septembre – 16 octobre – Invitée de la 20ème édition d’<span class="strong">ArtCité 2021, Fontenay-s/Bois (94)</span></li>
            <li>Invitée « Grandes signatures » au <span class="strong">Salon de Malakoff (92)</span></li>
            <li>27 – 31 octobre – <span class="strong">Salon d’Automne, Paris</span></li>
            <li>Art en Capital – <span class="strong">Salon du Dessin et Salon Comparaisons, Grand Palais, Paris</span></li>
          </ul>
        </div>

        <div>
          <h3>2020</h3>
          <ul>
            <li>12 – 16 février – Salon du dessin et de la peinture à l’eau, <span class="strong">Art Capital, Grand Palais, Paris</span></li>
            <li>26 février – 3 mars, « Le Chat », Artista in-formato 2020, <span class="strong">Venezia Viva, Italie</span></li>
            <li>10 – 17 octobre – <span class="strong">59ème Salon de la ville de Vincennes (94)</span></li>
          </ul>
        </div>

        <div>
          <h3>2019</h3>
          <ul>
            <li>13 – 17 février, <span class="strong">Salon Comparaisons, Grand Palais, Paris</span></li>
            <li>27 avril – 27 mai, « La carta da Giocco » Artista in-formato 2019, <span class="strong">Venezia Viva, Italie</span></li>
            <li>28 mai – 12 juin, « 20 regards sur la femme », <span class="strong">Orangerie du Sénat, Paris</span> (Galerie Marie-Thérèse Boyrié)</li>
            <li>1er juillet – 15 novembre, 11e Biennale de sculpture – « Hommage à Antoniucci VOLTI », <span class="strong">Bois-Guilbert (76)</span></li>
            <li>6 – 22 septembre, « Jeux d’eaux », <span class="strong">Carré des Coignard, Nogent s/Marne (94)</span></li>
            <li>5 – 13 octobre, <span class="strong">54ème Grand Prix de Barbizon, Barbizon (77)</span></li>
            <li>9 – 15 octobre, Invitée d’honneur, « Une touche d’art à Coupvray », <span class="strong">Coupvray, (77)</span></li>
            <li>10 – 13 octobre, <span class="strong">Salon d’Automne, Paris</span></li>
            <li>13 – 20 octobre, <span class="strong">50ème Salon des arts, Cholet (49)</span></li>
          </ul>
        </div>

        <div>
          <h3>2018</h3>
          <ul>
            <li>8 – 24 juin, Exposition « Sculpture, peinture », <span class="strong">Nogent-sur-Marne (94)</span></li>
            <li>11 juillet -15 septembre, Arts d’été, <span class="strong">Châtenay-Malabry (92)</span></li>
            <li>15 juillet – 16 septembre, »20 regards sur la femme » – Sculptures dans la ville, <span class="strong">Sarrebourg (57)</span></li>
          </ul>
        </div>

        <div>
          <h3>2017</h3>
          <ul>
            <li>15 au 19 février, <span class="strong">Salon Comparaisons, Art Capital, Grand Palais, Paris</span></li>
            <li>7 au 10 décembre, <span class="strong">Salon des Beaux Arts (SNBA), Carrousel du Louvre, Paris</span></li>
            <li>14 décembre – 14 janvier 2018, Bestiario – Artista in formato 22×22, <span class="strong">Venezia Viva, Italie</span></li>
          </ul>
        </div>

        <div>
          <h3>2016</h3>
          <ul>
            <li>26 juillet – 7 août, Sculptures, <span class="strong">Orangerie du Sénat, Paris</span></li>
            <li>8 au 11 décembre, <span class="strong">Salon des Beaux Arts, Paris</span></li>
          </ul>
        </div>
        <div>
          <h3>2015</h3>
          <ul>
            <li>17 – 20 décembre, <span class="strong">Salon de la Société Nationale des Beaux-Arts, Carrousel du Louvre, Paris</span></li>
            <li>25 – 29 novembre, <span class="strong">Salon « Comparaisons », ART CAPITAL, Grand Palais, Paris</span></li>
            <li>1er juillet-30 septembre, <span class="strong">9ème Biennale de sculptures de Bois-Guilbert (76)</span></li>
          </ul>
        </div>
        <div>
          <h3>2014</h3>
          <ul>
            <li>11 – 14 décembre, <span class="strong">Salon de la Société Nationale des Beaux-Arts, Carrousel du Louvre, Paris</span></li>
            <li>24 – 31 novembre, <span class="strong">Salon Comparaisons, Grand Palais, Paris</span></li>
          </ul>
        </div>
        <div>
          <h3>2013</h3>
          <ul>
            <li>13 oct – 1er novembre, « Bronze, Chefs-d’œuvre de France », <span class="strong">Musée de la Ville, Zweibrücken, Allemagne</span></li>
            <li>1er juillet-30 septembre, <span class="strong">8ème Biennale de sculptures de Bois-Guilbert (76)</span></li>
          </ul>
        </div>
        <div>
          <h3>2012</h3>
          <ul>
            <li>27 nov. – 2 déc., <span class="strong">salon Comparaisons, Art en Capital, Grand Palais, Paris</span></li>
            <li>1er au 27 octobre, <span class="strong">ARTCITE 2012 « Essentiels », Fontenay-sous-Bois (94)</span></li>
          </ul>
        </div>
        <div>
          <h3>2011</h3>
          <ul>
            <li>22 – 27 novembre 2011, <span class="strong">salon Comparaisons, Art en Capital, Grand Palais, Paris</span></li>
            <li>Juillet – août – septembre – octobre, <span class="strong">Galerie Besseiche, Saint-Tropez (83)</span></li>
            <li>Juillet – août – sept, <span class="strong">7ème Biennale de sculptures de Bois-Guilbert (76)</span></li>
            <li>Printemps – été, <span class="strong">Galerie Izart, Pont-Aven (29)</span></li>
            <li>24 mars – 24 avril, <span class="strong">Manège royal de Saint-Germain en Laye (78)</span></li>
          </ul>
        </div>
        <div>
          <h3>2010</h3>
          <ul>
            <li>21 – 28 nov., <span class="strong">salon Comparaisons, Art en Capital Grand Palais, Paris</span></li>
            <li>15 janvier – 7 février <span class="strong">« Une cité d’Artistes », salle d’exposition de l’Hôtel de Ville, La Celle St-Cloud (78)</span></li>
          </ul>
        </div>
        <div>
          <h3>2009</h3>
          <ul>
            <li>3 – 7 nov., <span class="strong">salon Comparaisons, Art en Capital, Grand Palais, Paris, groupe « Sensibilité classique » de G.Ramon</span></li>
            <li>29 oct. – 21 nov., « Souvenir de Corot », <span class="strong">Salon de Ville d’Avray (78)</span></li>
            <li>25 juillet – 25 septembre, <span class="strong">Chapelle des Jésuites, Chaumont en Haute-Marne</span></li>
            <li>Juillet, <span class="strong">Galerie Juris and Perl, Venise (Italie)</span></li>
            <li>14 mai -14 septembre, <span class="strong">Galerie « Artistes en lumière », Paris</span></li>
          </ul>
        </div>
        <div>
          <h3>2008</h3>
          <ul>
            <li>1er déc. – 28 février 09, <span class="strong">« Artistes choisis », Chamalières (63)</span></li>
            <li>21 nov. – 30 nov., <span class="strong">salon Comparaisons, Art en capital, Grand Palais, Paris</span></li>
            <li>4 avril – 5 mai, <span class="strong">Chapelle des Jésuites, Collège Diderot, Langres (52)</span></li>
          </ul>
        </div>

        @elseif ('en' == App::getLocale())
        <div>
          <h3>2020</h3>
          <ul>
            <li>February 12 – 16, Salon du dessin et de la peinture à l’eau, <span class="strong">Art Capital, Grand Palais, Paris</span></li>
            <li>Special Guest <span class="strong">Salon des Arts de VITTEL</span> avec le groupe de G.Ramon Sculptures</li>
            <li>Special Guest « Grandes signatures » au <span class="strong">Salon de MALAKOFF (92)</span></li>
          </ul>
        </div>
        <div>
          <h3>2019</h3>
          <ul>
            <li>13 – 17 février, <span class="strong">Salon Comparaisons, Grand Palais, Paris</span></li>
            <li>27 avril – 27 mai, “La carta da Giocco” Artista in-formato 2019, <span class="strong">"Venezia Viva, Italy</span></li>
            <li>28 mai – 12 juin, “20 regards sur la femme”, <span class="strong">Orangerie du Sénat</span>, Paris (Galerie Marie-Thérèse Boyrié)</li>
            <li>1er juillet – 15 novembre, 11e Biennale de sculpture – “Hommage à Antoniucci VOLTI”, <span class="strong">"Bois-Guilbert (76)</span></li>
            <li>6 – 22 septembre, “Jeux d’eaux”, <span class="strong">"Carré des Coignard, Nogent s/Marne (94)</span></li>
            <li>5 – 13 octobre, <span class="strong">"54ème Grand Prix de Barbizon, Barbizon (77)</span></li>
            <li>9 – 15 octobre, Invitée d’honneur, “Une touche d’art à Coupvray”, <span class="strong">"Coupvray, (77)</span></li>
            <li>10 – 13 octobre, <span class="strong">"Salon d’Automne, Paris</span></li>
            <li>13 – 20 octobre, <span class="strong">"50ème Salon des arts, Cholet (49)</span></li>
          </ul>
        </div>
        <div>
          <h3>2018</h3>
          <ul>
            <li>8 – 24 juin, Exposition « Sculpture, peinture », <span class="strong">Nogent-sur-Marne (94)</span></li>
            <li>11 juillet -15 septembre, Arts d’été, <span class="strong">"Châtenay-Malabry (92)</span></li>
            <li>15 juillet – 16 septembre,”20 regards sur la femme” – Sculptures dans la ville, <span class="strong">"Sarrebourg (57)</span></li>
          </ul>
        </div>
        <div>
          <h3>2017</h3>
          <ul>
            <li>15 au 19 février, <span class="strong">Salon Comparaisons, Art Capital, Grand Palais, Paris</span></li>
            <li>7 au 10 décembre, <span class="strong">"Salon des Beaux Arts (SNBA), Carrousel du Louvre, Paris</span></li>
            <li>14 décembre – 14 janvier 2018, Bestiario – Artista in formato 22×22, <span class="strong">"Venezia Viva, Italy</span></li>
          </ul>
        </div>
        <div>
          <h3>2016</h3>
          <ul>
            <li>26 juillet – 7 août, Sculptures, <span class="strong">"Orangerie du Sénat, Paris</span></li>
            <li>8 au 11 décembre, <span class="strong">"Salon des Beaux Arts, Paris</span></li>
          </ul>
        </div>
        <div>
          <h3>2015</h3>
          <ul>
            <li>17 – 20 décembre, <span class="strong">"Salon de la Société Nationale des Beaux-Arts, Carrousel du Louvre, Paris</span></li>
            <li>25 – 29 novembre, <span class="strong">"Salon « Comparaisons », ART CAPITAL, Grand Palais, Paris</span></li>
            <li>1er juillet-30 septembre, <span class="strong">"9ème Biennale de sculptures de Bois-Guilbert (76)</span></li>
          </ul>
        </div>
        <div>
          <h3>2014</h3>
          <ul>
            <li>11 – 14 décembre, <span class="strong">Salon de la Société Nationale des Beaux-Arts, Carrousel du Louvre, Paris</span></li>
            <li>24 – 31 novembre, <span class="strong">Salon « Comparaisons » Grand Palais, Paris</span></li>
          </ul>
        </div>
        <div>
          <h3>2013</h3>
          <ul>
            <li>13 oct – 1er novembre, « Bronze, French masterpieces », <span class="strong">City Museum, Zweibrücken, Germany</span></li>
            <li>1er juillet-30 septembre, <span class="strong">8ème Biennale de sculptures de Bois-Guilbert (76)</span></li>
          </ul>
        </div>
        <div>
          <h3>2012</h3>
          <ul>
            <li>27 nov. – 2 déc., <span class="strong">salon Comparaisons, <span class="strong">Art en Capital, Grand Palais, Paris</span></li>
            <li>1er au 27 octobre, <span class="strong">ARTCITE 2012 « Essentials », Fontenay-sous-Bois (94)</span></li>
          </ul>
        </div>
        <div>
          <h3>2011</h3>
          <ul>
            <li>22 – 27 novembre 2011, <span class="strong">salon Comparaisons, Art en Capital, Grand Palais, Paris</span></li>
            <li>Juillet – août – septembre – octobre, <span class="strong">Galerie Besseiche, Saint-Tropez (83)</span></li>
            <li>Juillet – août – sept, <span class="strong">7ème Biennale de sculptures de Bois-Guilbert (76)</span></li>
            <li>Printemps – été, <span class="strong">Galerie Izart, Pont-Aven (29)</span></li>
            <li>24 mars – 24 avril, <span class="strong">Manège royal de Saint-Germain en Laye (78)</span></li>
          </ul>
        </div>
        <div>
          <h3>2010</h3>
          <ul>
            <li>21 – 28 nov., salon Comparaisons, <span class="strong">Art en Capital – Grand Palais, Paris</span></li>
            <li>15 janvier – 7 février <span class="strong">« A city of artists », salle d’exposition de l’Hôtel de Ville, La Celle St-Cloud (78)</span></li>
          </ul>
        </div>
        <div>
          <h3>2009</h3>
          <ul>
            <li>3 – 7 nov., <span class="strong">salon Comparaisons, Art en Capital, Grand Palais, Paris</span>, groupe <span class="strong">« Classical sensibility »</span> de G.Ramon</li>
            <li>29 oct. – 21 nov., <span class="strong">« In remembrance of Corot », Salon de Ville d’Avray (78)</span></li>
            <li>25 juillet – 25 septembre, <span class="strong">Chapelle des Jésuites, Chaumont en Haute-Marne</span></li>
            <li>Juillet, <span class="strong">Galerie Juris and Perl, Venise (Italie)</span></li>
            <li>14 mai -14 septembre, <span class="strong">Galerie « Artistes en lumière », Paris</span></li>
          </ul>
        </div>
        <div>
          <h3>2008</h3>
          <ul>
            <li>1er déc. – 28 février 09, « Selected Artists », <span class="strong">Chamalières (63)</span></li>
            <li>21 nov. – 30 nov., <span class="strong">salon Comparaisons, Art en capital, Grand Palais, Paris</span></li>
            <li>4 avril – 5 mai, <span class="strong">Chapelle des Jésuites, Collège Diderot, Langres (52)</span></li>
        </div>
        @endif
      </div>
    </div>
  </div>
  </section>
  {{--@include('partialsFront.latestWorksSlide')--}}
</x-public-view>