<x-public-view>
  @include('biographie.menuBiographie')

  <div class="biographie-presentation personal">
    <div>
      <img src="{{ asset('/storage/' . $oeuvresImg[3]->photos[0]->photo) }}" alt="{{$oeuvresImg[3]->titre}}">
      <div>
        <h2>{{ __('Solo exhibitions') }}</h2>
        @if ('fr' == App::getLocale())
        <div>
          <h3> 2020 </h3>
          <ul>
            <li>1er février, « 15 œuvres sculpturales », <span class="strong">Galerie Thomé, Paris</span></li>
            <li>2 – 25 juillet, Sculptures, <span class="strong">Galerie Saint-André, 31 rue Édouard Fortier, Mont-Saint-Aignan (76)</span></li>
            <li>Novembre, Sculptures, <span class="strong">restaurant Le Tokiko, St Jean-de-Luz (64)</span></li>
          </ul>
        </div>

        <div>
          <h3> 2019 </h3>
          <ul>
            <li>5 avril – 30 avril 2019, « Bronzes only », <span class="strong">Galerie d’Art de Pontaillac, Royan (17)</span></li>
            <li>3 juin – 8 juillet, « Sculptures dans la ville », <span class="strong">Le Perreux-sur-Marne (94)</span></li>
            <li>3 – 26 octobre 2019, Sculptures, toiles et dessins, <span class="strong">Galerie Saint-André, Mont-Saint-Aignan (76)</span></li>
            <li>Restaurant « Le Val de Beauté », <span class="strong">1 rue du Val de Beauté, Nogent-sur-Marne (94)</span></li>
          </ul>
        </div>

        <div>
          <h3> 2018 </h3>
          <ul>
            <li>17 mai – 15 juillet, Sculptures monumentales, <span class="strong">4ème édition LaWissousArt, Wissous (91)</span></li>
            <li>3 juin – 1er juillet 2018, Sculpture de Verre,<span class="strong"> Galerie Anagama, Versailles (78)</span></li>
            <li>8 juin – 24 juin, « Sculptures, Bronzes, cristals et rakus », <span class="strong">Carré des Coignards, Nogent-sur-Marne (94)</span></li>
          </ul>
        </div>

        <div>
          <h3> 2017 </h3>
          <ul>
            <li>10 avril – 8 octobre, Sculptures monumentales, <span class="strong">Domaine de la Croix – groupe Bolloré, La-Croix-Valmer</span></li>
            <li> 10 avril – 8 octobre, Rakus, <span class="strong">Galerie Laurent Boyrié (Paris), Grimaud (83)</span></li>
            <li>7 – 28 juin, Sarrelouis, Île Vauban, <span class="strong">Galerie Claus Zöllner, Allemagne</span></li>
            <li>10 – 23 septembre 2017, Sculptures monumentales, Invitée d’honneur, <span class="strong">Château Conti, L’ Isle-Adam (95)</span></li>
            <li>14 décembre – 15 janvier 2018, Sculptures, sanguines et peintures, <span class="strong">Galerie 55, Bruxelles, Belgique</span></li>
          </ul>
        </div>

        <div>
          <h3> 2016 </h3>
          <ul>
            <li>5 mai – 30 juin, Sculptures, « La vie est belle », <span class="strong">Galerie Neuberg Arts, Le French May – Hong Kong – China</span></li>
            <li>12 – 28 mai, Bronzes et rakus – <span class="strong">Galerie Feuillantine, Paris (75005)</span></li>
            <li>18 – 23 mai, Sculptures, <span class="strong">Salon de Neuilly-s/Seine (92)</span></li>
            <li>6 – 13 juin, Peintures et Sculptures, <span class="strong">Neuilly Arts 2016 (92)</span></li>
            <li>6 juin – 20 septembre, Invitée d’honneur, <span class="strong">Festival impressioniste d’Osny – Osny (95)</span></li>
            <li>27 juillet – 7 août, Beautés divines ! avec la <span class="strong">Galerie Anagama, (Versailles) Orangerie du Sénat, Paris</span></li>
            <li>21 novembre – 11 décembre, Invitée d’honneur <span class="strong">Salon de Versailles (78)</span></li>
          </ul>
        </div>

        <div>
          <h3> 2015 </h3>
          <ul>
            <li>23 janvier – 1er février, Invitée d’honneur, <span class="strong">48ème Salon des Arts d’Alfortville, Alfortville (94)</span></li>
            <li>14 mai – 28 septembre, Parcours « Sculptures grand format », <span class="strong">Domaine des Roches, Briare (45)</span></li>
            <li>1er juillet – 30 septembre 2015, 9eme Biennale de sculpture, <span class="strong">Jardin des Sculptures, Bois-Guilbert (76)</span></li>
          </ul>
        </div>

        <div>
          <h3> 2014 </h3>
          <ul>
            <li>4 avril – 13 avril, invitée d’honneur, <span class="strong">Salon de Printemps, Verrières-le-Buisson (91)</span></li>
            <li>12 avril – 10 mai, <span class="strong">Galerie de Pontaillac, Royan (17)</span></li>
            <li> 1er – 30 sept., 50 sculptures à la Cour des Comptes Européenne, <span class="strong">Luxembourg</span></li>
            <li>9 octobre – 2 déc., Peintures, Sculptures, <span class="strong">Galerie Karin Carton, Versailles (78)</span></li>
          </ul>
        </div>

        <div>
          <h3> 2013 </h3>
          <ul>
            <li>16 mai – 16 juin : Éclats, Élisabeth Cibot Sculpteur, <span class="strong">Calais (62)</span></li>
            <li>18 juin – 7 octobre : Parcours de sculptures dans la ville, <span class="strong">Sarrebourg (57)</span></li>
            <li> 21 juillet – 9 septembre : 50 œuvres, Salle des fêtes. <span class="strong">Sarrebourg (57)</span></li>
            <li> 10 nov. 2013 – 10 mars 2014, Sculptures monumentales, Hôpital R. Schumann, <span class="strong">Metz (57)</span></li>
          </ul>
        </div>

        <div>
          <h3> 2012 </h3>
          <ul>
            <li>11 fév. – 10 mars 2012, Le mois du Bronze, <span class="strong">Galerie d’Art de Pontaillac, Royan (17)</span></li>
            <li> 27 juillet – 20 septembre, Sculptures, <span class="strong">Galerie 13, Honfleur (14)</span></li>
            <li> 24 mai – 20 juin, Sculptures et peintures, <span class="strong">Val de beauté – Nogent/Marne (94)</span></li>
            <li>24 nov. – 2 déc., Invitée d’honneur du <span class="strong">Salon de Saint-Denis</span>, Salle de la Légion d’Honneur, <span class="strong">Saint-Denis (93)</span></li>
            <li>1er– 29 décembre, <span class="strong">Galerie d’Art de Pontaillac, Royan (17)</span></li>
            <li>12 décembre – 17 février 2013, Corps & accords, <span class="strong">Galerie « Artistes en lumière », Paris (75016)</span></li>
          </ul>
        </div>

        <div>
          <h3> 2011 </h3>
          <ul>
            <li>21 avril – 15 mai, Sculptures et sanguines, <span class="strong">Galerie Artes, Barbizon (77)</span></li>
            <li>26 mai -19 juin, Parcours de sculptures, <span class="strong">Galerie Karine Carton, Versailles (92)</span></li>
            <li> 3 octobre – 16 octobre, invitée d’honneur, <span class="strong">Salon des Arts de Pontoise (95)</span></li>
            <li> 24 nov.-12 déc., Sculptures et dessins, <span class="strong">Hôtel des Coignards, Nogent/s-Marne (94)</span></li>
          </ul>
        </div>

        <div>
          <h3> 2010 </h3>
          <ul>
            <li>1er – 11 juillet, Orangerie de la Propriété Caillebotte, <span class="strong">Yerres (91)</span></li>
          </ul>
        </div>

        <div>
          <h3> 2009 </h3>
          <ul>
            <li>Mai, Galerie « Artistes en Lumière », <span class="strong">Paris (75016)</span></li>
            <li>Juin, invitée d’honneur, <span class="strong">Salon des Beaux-Arts de Chambourcy (73)</span></li>
            <li>Décembre, <span class="strong">Galerie Vallois, Paris (75006)</span></li>
          </ul>
        </div>

        <div>
          <h3> 2008 </h3>
          <ul>
            <li>6 mars – 12 avril, <span class="strong">Galerie Daniel Besseiche, Paris (75006)</span></li>
            <li>Juin – juillet, <span class="strong">Galerie Daniel Besseiche, Genève (Suisse)</span></li>
            <li> Juillet, dessins et sculptures, <span class="strong">Galerie « Segno Grafico », Venise (Italie)</span></li>
            <li> Octobre, show-room de la <span class="strong">Société BEMART Parquets, Paris</span></li>
            <li> 16 octobre – 16 nov., <span class="strong">Galerie Karin Carton, Versailles (92)</span></li>
          </ul>
        </div>

        <div>
          <h3> 2007 </h3>
          <ul>
            <li>Château des Bouillants, <span class="strong">Dammarie-les-Lys (77)</span></li>
          </ul>
        </div>

        <div>
          <h3> 2006 </h3>
          <ul>
            <li>Invitée d’honneur, <span class="strong">Ozoir-la-Ferrière (77)</span></li>
            <li><span class="strong">Galerie « Espace Bétemps », Genève (Suisse)</span></li>
            <li> Siège Social du <span class="strong">Crédit Mutuel de Brest, Brest</span></li>
            <li> <span class="strong">Fondation Taylor, Paris</span></li>
          </ul>
        </div>

        <div>
          <h3> 2004 </h3>
          <ul>
            <li><span class="strong">Galerie VRG, Paris</span></li>
            <li>Invitée d’honneur du <span class="strong">14ème Salon, Saint-Denis (91)</span></li>
          </ul>
        </div>

        <div>
          <h3> 2003 </h3>
          <ul>
            <li><span class="strong">Galerie Karin Carton, Versailles (92)</span></li>
          </ul>
        </div>

        <div>
          <h3> 2002 </h3>
          <ul>
            <li>Espace culturel, <span class="strong">Brunoy (94)</span></li>
            <li><span class="strong">Galerie Karin Carton, Versailles (92)</span></li>
            <li>Siège social du <span class="strong">Groupe OFIVALMO, Paris</span></li>
          </ul>
        </div>


        @elseif ('en' == App::getLocale())
        <div>
          <h3> 2020</h3>
          <ul>
            <li>July 2 – 25, Sculptures, <span class="strong">Galerie Saint-André, Mont-Saint-Aignan (76) Opening July 2</span></li>
          </ul>
        </div>

        <div>
          <h3> 2019 </h3>
          <ul>
            <li>5 avril – 30 avril 2019, “Bronzes only”, <span class="strong">Galerie d’Art de Pontaillac, Royan (17)</span></li>
            <li>3 juin – 8 juillet, “Sculptures dans la ville”, <span class="strong">Le Perreux-sur-Marne (94)</span></li>
            <li>3 – 26 octobre 2019, Sculptures, toiles et dessins, <span class="strong">Galerie Saint-André, Mont-Saint-Aignan </li>(76)</span></li>
            <li>Restaurant « Le Val de Beauté », <span class="strong">Nogent-sur-Marne (94)</span></li>
          </ul>
        </div>

        <div>
          <h3> 2018 </h3>
          <ul>
            <li>17 mai – 15 juillet, Sculptures monumentales, <span class="strong">4ème édition LaWissousArt, Wissous (91)</span></li>
            <li>3 juin – 1er juillet 2018, Glass Sculpture, <span class="strong">Anagama Gallery, Versailles (78)</span></li>
            <li>8 juin – 24 juin, “Sculptures, Bronzes, cristals et rakus”, <span class="strong">Carré des Coignards, Nogent-sur-Marne (94)</span></li>
          </ul>
        </div>

        <div>
          <h3> 2017 </h3>
          <ul>
            <li>10 avril – 8 octobre, Sculptures monumentales, <span class="strong">Domaine de la Croix – groupe Bolloré, La-Croix-Valmer</span></li>
            <li>10 avril – 8 octobre, Rakus, <span class="strong">Laurent Boyrié Gallery (Paris), Grimaud (83)</span></li>
            <li>7 – 28 juin, Sarrelouis, Île Vauban, <span class="strong">Claus Zöllner Gallery , Germany</span></li>
            <li>10 – 23 septembre 2017, Sculptures monumentales, Guest of Honour, <span class="strong">Château Conti, L’ Isle-Adam (95)</span></li>
            <li>14 décembre – 15 janvier 2018, Sculptures, sanguines et peintures, <span class="strong">55 Gallery, Bruxelles, Belgium</span></li>
          </ul>
        </div>

        <div>
          <h3> 2016 </h3>
          <ul>
            <li>5 mai – 30 juin, Sculptures, “La vie est belle”, <span class="strong">Galerie Neuberg Arts, Le French May – Hong Kong – China</span></li>
            <li>12 – 28 mai, Bronzes and rakus – <span class="strong">Feuillantine Gallery, Paris (75005)</span></li>
            <li>18 – 23 mai, Sculptures, <span class="strong">Salon de Neuilly-s/Seine (92)</span></li>
            <li>6 – 13 juin, Paintings and Sculptures, <span class="strong">Neuilly Arts 2016 (92)</span></li>
            <li>6 juin – 20 septembre, Guest of Honour, <span class="strong">Festival impressioniste d’Osny – Osny (95)</span></li>
            <li>27 juillet – 7 août, Divines Beauties ! with <span class="strong">Anagama Gallery, Orangerie du Sénat, Paris</span></li>
            <li>21 novembre – 11 décembre, Guest of Honour, <span class="strong">Salon de Versailles (78)</span></li>
          </ul>
        </div>

        <div>
          <h3> 2015 </h3>
          <ul>
            <li>14 mai – 28 septembre, « Sculptures grand format » – <span class="strong">Domaine des Roches – Briare (45)</span></li>
            <li>23 janvier – 1er février, Guest of honour, <span class="strong">48ème Salon des Arts d’Alfortville, Alfortville (94)</span></li>
          </ul>
        </div>

        <div>
          <h3> 2014 </h3>
          <ul>
            <li>9 octobre – 2 déc., Paintings, Sculptures, <span class="strong">Karin Carton Gallery, Versailles (78)</span></li>
            <li>1er – 30 sept., “50 sculptures at the European Court of auditors”, <span class="strong">Luxembourg</span></li>
            <li>12 avril – 10 mai, <span class="strong">Pontaillac Gallery, Royan (17)</span></li>
            <li>4 avril – 13 avril, Guest of honour, <span class="strong">Salon de Printemps, Verrières-le-Buisson (91)</span></li>
          </ul>
        </div>

        <div>
          <h3> 2013 </h3>
          <ul>
            <li>10 nov. 2013 – 10 mars 2014, “Monumental sculpture”, Hôpital R. Schuman, <span class="strong">Metz (57)</span></li>
            <li>18 juin – 7 octobre : “Parcours de sculptures”, Open-air sculptures in town, <span class="strong">Sarrebourg (57)</span></li>
            <li>21 juillet – 9 septembre : “50 art works”, Salle des fêtes, <span class="strong">Sarrebourg (57)</span></li>
            <li>16 mai – 16 juin : “Éclats, Elisabeth Cibot Sculpteur”, <span class="strong">Calais (62)</span></li>
          </ul>
        </div>

        <div>
          <h3> 2012 </h3>
          <ul>
            <li>1er– 29 décembre, <span class="strong">Galerie d’Art de Pontaillac, Royan (17)</span></li>
            <li>24 nov. – 2 déc., Guest of honour, <span class="strong">Salon de Saint-Denis</span>, Salle de la Légion d’Honneur, <span class="strong">Saint-Denis (93)</span></li>
            <li>27 juillet – 20 septembre, Sculptures, <span class="strong">Galerie 13, Honfleur (14)</span></li>
            <li>24 mai – 20 juin, Sculptures and paintings, <span class="strong">Val de beauté – Nogent/Marne (94)</span></li>
            <li>11 fév. – 10 mars 2012, “Bronze month”, <span class="strong">Galerie d’Art de Pontaillac, Royan (17)</span></li>
            <li>12 décembre – 17 février, “Corps & accords”, <span class="strong">Galerie « Artistes en lumière », Paris (75016)</span></li>
          </ul>
        </div>

        <div>
          <h3> 2011 </h3>
          <ul>
            <li>24 nov.-12 déc., Sculptures and drawings, <span class="strong">Hôtel des Coignards, Nogent/s-Marne (94)</span></li>
            <li>3 octobre – 16 octobre, Guest of honour, <span class="strong">Salon des Arts de Pontoise (95)</span></li>
            <li>26 mai -19 juin, “Parcours de sculptures”, Open-air sculptures, <span class="strong">Galerie Karine Carton, Versailles (92)</span></li>
            <li>21 avril – 15 mai, Sculptures et sanguines, <span class="strong">Galerie Artes, Barbizon (77)</span></li>
          </ul>
        </div>

        <div>
          <h3> 2010 </h3>
          <ul>
            <li>1er – 11 juillet, Orangerie de la Propriété Caillebotte, <span class="strong">Yerres (91)</span></li>
          </ul>
        </div>

        <div>
          <h3> 2009 </h3>
          <ul>
            <li>Décembre, Galerie Vallois, <span class="strong">Paris (75006)</span></li>
            <li>Juin, Guest of honour, <span class="strong">Salon des Beaux-Arts de Chambourcy (73)</span></li>
            <li>Mai, Galerie « Artistes en Lumière », <span class="strong">Paris (75016)</span></li>
          </ul>
        </div>

        <div>
          <h3> 2008 </h3>
          <ul>
            <li>16 octobre – 16 nov., <span class="strong">Galerie Karin Carton, Versailles (92)</span></li>
            <li>Octobre, show-room, <span class="strong">Société BEMART Parquets, Paris</span></li>
            <li>Juillet, Drawings and sculptures, <span class="strong">Galerie « Segno Grafico », Venice (Italy)</span></li>
            <li>Juin – juillet, Daniel Besseiche Gallery, <span class="strong">Genève (Switzerland)</span></li>
            <li>6 mars – 12 avril, Daniel Besseiche Gallery, <span class="strong">Paris (75006)</span></li>
          </ul>
        </div>

        <div>
          <h3> 2007 </h3>
          <ul>
            <li><span class="strong">Château des Bouillants, Dammarie-les-Lys (77)</span></li>
          </ul>
        </div>

        <div>
          <h3> 2006 </h3>
          <ul>
            <li>Guest of honour, <span class="strong">Ozoir-la-Ferrière (77)</span></li>
            <li><span class="strong">Galerie « Espace Bétemps », Genève (Switzerland)</span></li>
            <li>Headquarters of <span class="strong">Crédit Mutuel de Brest, Brest (29)</span></li>
            <li><span class="strong">Fondation Taylor, Paris</span></li>
          </ul>
        </div>

        <div>
          <h3> 2004 </h3>
          <ul>
            <li><span class="strong">Galerie VRG, Paris</span></li>
            <li>Guest of honour, <span class="strong">14ème Salon, Saint-Denis (91)</span></li>
          </ul>
        </div>

        <div>
          <h3> 2003 </h3>
          <ul>
            <li><span class="strong">Galerie Karin Carton, Versailles (92)</span></li>
          </ul>
        </div>

        <div>
          <h3> 2002 </h3>
          <ul>
            <li>Espace culturel, <span class="strong">Brunoy (94)</span></li>
            <li><span class="strong">Galerie Karin Carton, Versailles (92)</span></li>
            <li>Headquarters of <span class="strong">Groupe OFIVALMO, Paris</span></li>
          </ul>
        </div>
        @endif
      </div>
    </div>
  </div>
  </section>
  {{--@include('partialsFront.latestWorksSlide')--}}
</x-public-view>