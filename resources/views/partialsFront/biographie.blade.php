<x-public-view>
  <section class="biographie">
    <h1>{{ __('Biography') }}</h1>

    <div class="biographie-btn menu-btns">
      <ul class="biographie-dropdown dropdown" id="bio-drop">
        <li id="hello" class="btn active" onclick="selectBtnBio('hello')"><a>{{ __('Presentation') }}</a> <i class="fa-solid fa-chevron-down"></i></li>
        <li id="awards" class="btn" onclick="selectBtnBio('awards')"><a>{{ __('Awards') }}</a> <i class="fa-solid fa-chevron-down"></i></li>
        <li id="monuments" class="btn" onclick="selectBtnBio('monuments')"><a>{{ __('Monuments') }}</a> <i class="fa-solid fa-chevron-down"></i></li>
        <li id="personal" class="btn" onclick="selectBtnBio('personal')"><a>{{ __('Solo exhibitions') }}</a> <i class="fa-solid fa-chevron-down"></i></li>
        <li id="collectives" class="btn" onclick="selectBtnBio('collectives')"><a>{{ __('Collective exhibitions') }}</a> <i class="fa-solid fa-chevron-down"></i></li>
        <li id="evenements" class="btn" onclick="selectBtnBio('evenements')"><a>{{ __('Events') }}</a> <i class="fa-solid fa-chevron-down"></i></li>
        <li id="permanence" class="btn" onclick="selectBtnBio('permanence')"><a>{{ __('Galleries') }}</a> <i class="fa-solid fa-chevron-down"></i></li>
        <li id="criticsBtn" class="btn" onclick="selectBtnBio('criticsBtn')"><a>{{ __('Critics') }}</a> <i class="fa-solid fa-chevron-down"></i></li>
        <li id="video" class="btn" onclick="selectBtnBio('video')"><a>{{ __('Videos') }}</a> <i class="fa-solid fa-chevron-down"></i></li>
      </ul>

    </div>

    <div class="biographie-presentation hello show">
      <div>
        <img src="{{ asset('/storage/' . $oeuvresImg[0]->photos[0]->photo) }}" alt="image">
        <h2>{{ __('Presentation') }}</h2>
        @if ('fr' == App::getLocale())
        <p>Née en 1960 dans une famille d’artistes collectionnant les bronzes de la Renaissance italienne,
          la sculpture a toujours fait partie de l’environnement d’Élisabeth Cibot. Elle la retrouve avec bonheur
          lors de ses études à l’ École Nationale Supérieure des Beaux-Arts de Paris, dans les ateliers d’Etienne Martin,
          Léopold Kretz et César. Diplômée en 1983 (section burin), elle est également assistante du peintre Riccardo
          Licata au Centro Internazionale di Grafica de Venise entre 1981 et 1983, puis « guest artist » auprès de la
          Glass School de Harvey Littleton à Spruce Pine (U.S.A) en 1983. De retour à Paris, elle obtient un atelier de
          la Ville en 1984. En parallèle, elle poursuit des études d’histoire de l’art et valide une première thèse en
          1984 en Archéologie romaine, puis un DEA en 1990 en Histoire des Techniques. L’année 1993 marque un retour
          à la statuaire de bronze et aux grands formats.</p>

        <p>Depuis 1997, elle travaille à Nogent-sur-Marne dans un atelier de la Fondation Nationale pour les Arts Graphiques et
          Plastiques. Ses œuvres se trouvent dans de nombreuses collections privées et publiques et sont présentées dans différentes
          galeries internationales.</p>

        @elseif ('en' == App::getLocale())
        <p>Elisabeth CIBOT has been surrounded by sculpture ever since her birth in 1960 into an artistic family, collectors of
          Italian Renaissance bronzes. It was therefore only natural that she should chose to study the art form at France’s
          major art school, the Ecole Nationale Supérieure de Beaux Arts under the direction of Etienne MARTIN, Léopold KRETZ
          and CESAR, graduating in 1983. She also worked with the painter Riccardo LICATA at the Centro Internazionale di Grafica
          in Venice from 1981 to 1983 and was guest artist at the Harvey LITTELTON Glass School at Spruce Pine, USA in 1983.
          On her return to Paris in 1984 she was awarded a studio belonging to the City Council. In parallel to her artistic creation
          she studied History of Art, presenting her first thesis, on Roman Archeology, in 1984 which was followed by a DEA
          (Diploma in Specialist Studies) in the History of Techniques in 1990. 1993 marked a return to bronze statuary and
          monumental work. </p>
        <p> Since 1997 she works in a studio in Nogent sur Marne, part of the Fondation Nationale pour les Arts Graphiques
          et Plastiques. Her sculpture can be found in numerous private and public collections and is presented in various
          international galleries. </p>
        @endif
      </div>
    </div>

    <div class="biographie-presentation awards">
      <div>
        <img src="{{ asset('/storage/' . $oeuvresImg[1]->photos[0]->photo) }}" alt="image">
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

    <div class="biographie-presentation monuments">
      <div>
        <img src="{{ asset('/storage/' . $oeuvresImg[2]->photos[0]->photo) }}" alt="image">
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

    <div class="biographie-presentation personal">
      <div>
        <img src="{{ asset('/storage/' . $oeuvresImg[3]->photos[0]->photo) }}" alt="image">
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

    <div class="biographie-presentation collectives">
      <div>
        <img src="{{ asset('/storage/' . $oeuvresImg[4]->photos[0]->photo) }}" alt="image">
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

    <div class="biographie-presentation permanence">
      <div>
        <img src="{{ asset('/storage/' . $oeuvresImg[6]->photos[0]->photo) }}" alt="image">
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

    <div class="biographie-presentation criticsBtn">
      <div>
        <img src="{{ asset('/storage/' . $oeuvresImg[7]->photos[0]->photo) }}" alt="image">
        <div>
          <h2>{{ __('Critics') }}</h2>
          @if ('fr' == App::getLocale())
          <div>
            <div class="arrow">
              <h3>Élisabeth Cibot, Droit au cœur</h3>
              <div id="first" onclick="selectCritic('first')">
                <i class="fa-solid fa-chevron-down"></i>
              </div>
            </div>
            <div class="critics first">
              <p>Grâce à une très entraînante gestuelle, Élisabeth Cibot anime ses personnages d’attitudes et de postures originales qui ne peuvent que nous séduire. Sachant aller au-delà des apparences, elle capte l’intériorité de ses modèles en l’exprimant avec une liberté d’expression et une sincérité authentiques. Elle confère ainsi à ses travaux une vérité esthétique communicative où l’on perçoit toute la sensualité du corps et de la vie qui le meut.</p>
              <p>Le monde d’Élisabeth Cibot est le théâtre de la fusion entre réalité et imaginaire, dont la cohérence et la force découlent d’une émotivité unique qu’elle sait transmettre à la matière sculptée, et qui toujours nous va droit au cœur.</p>
              <p>Les dernières réalisations de Élisabeth Cibot confirment, si besoin en était, le talent de cette femme sculpteur au caractère artistique bien trempé. En effet, qu’il s’agisse du monument dédié à Charles et Yvonne de Gaulle, les représentant avec force et distinction, ou encore de cet ange aux allures mystiques et protectrices, on se rend compte que Elisabeth Cibot peut répondre à tous les challenges et s’adapter à toutes les inspirations.</p>
              <p>La richesse de son œuvre lui permet de se situer en bonne place dans le panorama des artistes contemporains, au sein d’une discipline marquée par l’endurance primitive de l’éternité.</p>
              <p class="right">Patrice de la Perrière</p>
              <p class="right">Rédacteur en chef – Univers des Arts Magazine – Avril 2013</p>
            </div>
          </div>
          <div>
            <div class="arrow">
              <h3>Lydia Harambourg - Genèse de la sculpture du Pape Jean-Paul II</h3>
              <div id="lydia" onclick="selectCritic('lydia')">
                <i class="fa-solid fa-chevron-down"></i>
              </div>
            </div>
            <div class="critics lydia">
              <p>Avec la statue de Jean-Paul II, Elisabeth Cibot confirme son engagement pour une sculpture résolument ancrée dans la réalité marquée d’un humanisme rayonnant. En s’inscrivant dans la tradition de la sculpture monumentale figurative, elle revendique une continuité iconographique dont l’origine remonte à l’époque médiévale. Pérenne sur quatre siècles, le monument dédicatoire connaît des périodes fastes sous la Renaissance en Italie et en France, et à l’époque classique. Avec cette commande obtenue à la suite d’un concours, l’artiste se confronte aux plus grands portraitistes dont elle se révèle une héritière pertinente. Il fallait de la détermination, et une confiance infaillible dans son aptitude créatrice rendue possible par la maîtrise d’un métier dont elle a éprouvé les arcanes, pour oser un face à face avec l’image du Saint Père. L’enjeu était donc de taille et propre à réactiver une énergie originelle qui lui permit de réaliser antérieurement d’autres commandes : les monuments à François Mitterrand, Willy Brandt (bustes géants à Béthune, Pontault-Combault, Vouziers 1997), Le capitaine Némo, Hommage à Jules Verne (Nantes 2005), Statue en pied de De Gaulle pour la ville de Drancy (2007). A la suite de ses réalisations qui lui apportent une notoriété indiscutée, la question de la réalité reste posée.</p>
              <p>Dans ce continuum de la représentation figurée où l’œuvre d’art ne pas être un simple reflet photographique, le réalisme se charge d’un sens particulier, d’une vérité intérieure qui renvoie aux formes comme aux idées platoniciennes. Si l’image extérieure doit être de la plus grande exactitude pour une identification sans ambiguïté, la valeur morale, les qualités naturelles du modèle, son attitude comme expression du tempérament et de l’esprit, ainsi que le vêtement, tout doit servir la ressemblance physique au nom de la vérité du personnage immortalisé. Et voilà pour cet artiste l’aventure recommencée à son point initial pour une création nouvelle.</p>
              <p>Rompue aux techniques de la sculpture, Elisabeth Cibot maîtrise le dessin avec lequel elle a commencé son apprentissage. Arriver au volume en passant par la pratique du burin, ne surprend nullement chez celle qui fréquenta les ateliers d’Etienne Martin, de Léopold Kretz et de César, avant d’être l’assistante de Licata. La statuaire sort des limbes. Tout a commencé par le dessin et avec le dessin par un désir de la forme. Quand Elisabeth Cibot met en chantier la statue de Jean-Paul II dans son atelier de Nogent-sur-Marne, elle questionne par le crayon les structures et les gabarits, sans lesquels rien de la transposition de la nature ne peut-être entrepris. Elle recourt également au dessin pour les recherches de mouvements dans une composition verticale d’une figure en marche. Une première maquette de 30 cm est ébauchée suivie d’une seconde, haute de 1 mètre. L’action est déjà sous-jacente à la pensée pastorale qu’elle veut exprimer. Les variations graphiques témoignent de ses recherches, de ses doutes, de ses hésitations bientôt vécues charnellement avec la terre dans laquelle elle va construire sa sculpture. Elle sait qu’elle seule lui permettra d’atteindre à la synthèse définitive. Dans l’atelier, les documents s’accumulent, les photos comme les vidéos qui conservent l’image du pape, l’entourent de présences visuelles dont sa mémoire s’imprègne avant leur suspension dans un geste qui va retrouver intuitivement la justesse d’expression et la vérité de son sujet.</p>
              <p>Va-et-vient du dessin à la sculpture, du mental au geste, avant projection dans l’espace de la première intervention manuelle qui va « masser », autrement dit, le geste qui va placer les grandes masses, les plans puissants et larges pour installer le dessin de l’œuvre en cours, auxquels succèderont les plans plus petits. Une méthode dans la logique que préconisait Bourdelle avec la pratique de la triangulation héritée de Rodin. Du gigantesque bloc de terre placé sur la selle, émerge lentement la figure de Jean-Paul II, plus grande que nature (3 mètres de haut). Ajouter la matière, creuser pour une naissance renouvelée, une invention perpétuée, une levée de traces qui deviendront langage. La tension se resserre au fur et à mesure d’une introspection de plus en plus aiguë du regard cherchant à percer le mystère d’une personnalité sanctifiée. Le parti pris de la figure en mouvement de celui qui fut surnommé le « pape voyageur » correspond à la figure symbolique et allégorique du pèlerin. Le sculpteur choisit le moment où le pape, tourné vers la ville, va à sa rencontre pour la bénir. Un élan inscrit dans l’espace. Pour exprimer ce dynamisme indissociable de la ferveur du message, Elisabeth Cibot travaille à une succession de torsions, d’arêtes, de sillons, distribuant des axes pour un prolongement naturel du corps en marche, les bras projetés en avant pour accentuer son message universel de paix et d’amour. Le souverain pontife semble venir à notre rencontre. L’impulsion qu’exprime la matière renvoie à celle qui appelle à la naissance du monde de demain.</p>
              <p>Les contraintes d’un cahier des charges très strict n’ont pas jugulé la création de l’artiste. La conviction d’Elisabeth Cibot de faire œuvre d’art d’une commande publique, l’a confortée pour mener la sculpture à la phase finale dans laquelle elle s’impose à nous dans toute son évidence. Appelée à la dévotion, sacrée et pastorale, la représentation de Jean-Paul II est fidèle à un protocole vestimentaire traduit avec un naturalisme allant de pair avec la signalétique ecclésiastique : la simarre (soutane d’intérieure complétée par le mantelet), la ceinture, les mules. Ici, la pointe du buriniste retrouve sa précision dans les détails descriptifs. La rigueur, l’exigence sont des qualités partagées par les artistes qui refusent de faire de leur art, un exercice de virtuosité. Le modèle original achevé, il reste la délicate opération d’une double empreinte : une première empreinte à l’élastomère, couvert et solidifié par une chape en plâtre avant la fonte en bronze. Ciselure et patine achèveront de donner vie à la matière et l’incarner doublement dans une figure vivante et éternelle.</p>
              <p>Si la sculpture est l’art d’inventer les formes, celle d’Elisabeth Cibot a choisi de l’exercer en s’attachant à la figure humaine, enveloppe de l’esprit. Avec la figure en pied du pape Jean-Paul II, béatifié par Benoît XVI en 2011, elle renoue avec les maîtres du portrait en sculpture dans leur désir de transmettre une improbable totalité dans un espace incernable, mais de donner du sens à une entreprise où la main pactise avec l’esprit. Elle a réussi à incarner celui de Karol Wojtyla, devenu le 264ème chef de l’église catholique romaine en 1979, un homme appelé à la sainteté.</p>
              <p class="right">© Lydia Harambourg</p>
              <p class="right">Historienne Critique d’art</p>
              <p class="right">Membre correspondant de l’Institut, Académie des Beaux-Arts</p>
            </div>
          </div>
          <div>
            <div class="arrow">
              <h3>Martial Raysse - janvier 2011</h3>
              <div id="martial" onclick="selectCritic('martial')">
                <i class="fa-solid fa-chevron-down"></i>
              </div>
            </div>
            <div class="critics martial">
              <p>Il est aujourd’hui rare de rencontrer un véritable sculpteur qui possède toute l’étendue du savoir-faire quant à la statuaire. C’est le cas d’Élisabeth Cibot, et en plus dans sa pratique personnelle, elle fait montre d’un style tout à fait personnel et poétique.</p>
            </div>
          </div>
          <div>
            <div class="arrow">
              <h3>Aline Jaulin</h3>
              <div id="aline" onclick="selectCritic('aline')">
                <i class="fa-solid fa-chevron-down"></i>
              </div>
            </div>
            <div class="critics aline">
              <p>Elisabeth Cibot apparait comme le chef de file de ce que l’on pourrait appeler la deuxième génération de verriers français. Si, à vingt-cinq ans elle possède déjà la maîtrise du matériaux et du dessin, elle possède également celle de l’esprit par un sens développé de la synthèse. Le travail de cette jeune artiste ne souffre d’aucun hasard, d’aucune hésitation, mais dénote au contraire une belle assurance. Tournée vers le graphisme et attirée par le plan qu’elle fait parfois s’onduler, Elisabeth Cibot laisse libre cours à ses impulsions, à une gestuelle épanouie, vivante et expressive.</p>
              <p>Consciente des limites imposées par la surface même du verre qu’elle grave, elle cherche au contraire l’harmonie entre contour, ligne et lumière. A l’évidence, la contrainte est un état qu’elle ignore. Ce qui pourrait l’être devient chez elle le point de départ de multiples champs d’investigation, la source d’un langage volubile qui rejoint parfois le fantastique, parfois l’abstraction, parfois encore un certain classicisme. A travers des pièces aussi différentes que le sont ses plats, ses stores, ses luminaires, ses panneaux ou ses paravents, on retrouve toujours cette verve nerveuse et cette liberté du trait. Une liberté quasi sensuelle qui joue, ici, avec la lumière, là, avec la couleur, pour surgir à la surface du verre avec fougue dans un grand accent de sincérité.</p>
            </div>
          </div>
          <div>
            <div class="arrow">
              <h3>Victor Barker</h3>
              <div id="victor" onclick="selectCritic('victor')">
                <i class="fa-solid fa-chevron-down"></i>
              </div>
            </div>
            <div class="critics victor">
              <img src="{{ asset('/storage/admin/victorBarker.jpg') }}" alt="" />
            </div>
          </div>
          <div>
            <div class="arrow">
              <h3>François Bernheim - compositeur</h3>
              <div id="bernheim" onclick="selectCritic('bernheim')">
                <i class="fa-solid fa-chevron-down"></i>
              </div>
            </div>
            <div class="critics bernheim">
              <em>Si beaux dans l&rsquo;élégance, si beaux dans leur message, si beaux à croire qu&rsquo;ils dansent</em><br />
              <em>l&rsquo;amour, les personnages, sur « il mio rifugio »&#8230;</em><br />
              <em>la sculpture est parfaite</em><br />
              <em>le refuge est Cibot</em><br />
              <em>ce soir Elisabeth&#8230;</em>
              <p> « Il mio rifugio » pour <em>Tandem</em> de Patrice Leconte</p>
            </div>
          </div>
          <div>
            <div class="arrow">
              <h3>Patrice de la Perrière - Univers des Arts</h3>
              <div id="patrice" onclick="selectCritic('patrice')">
                <i class="fa-solid fa-chevron-down"></i>
              </div>
            </div>
            <div class="critics patrice">
              <p>Dans le cadre de l’année Jules Verne, Elisabeth Cibot vient de réaliser pour la ville de Nantes deux sculptures monumentales représentant Jules Verne adolescent assis sur un banc, contemplant le Capitaine Nemo, le héros de 20000 lieues sous les mers.</p>
              <p>Dans ces deux œuvres, on retrouve toute la verve d’Elisabeth Cibot dont le talent n’est plus à démontrer. En effet, cette femme sculpteur, à travers ses œuvres et ses expositions, nous prouve avec maestria la maîtrise de son art et surtout l’intériorité de ses sujets et de ses inspirations. De ses sculptures transparaissent d’une manière très communicative les émotions qui ont présidé à leur élaboration, la sensibilité exacerbée de leur auteur.</p>
              <p>Elisabeth Cibot a en elle un potentiel extraordinaire qui lui permet d’évoluer sans cesse et de nourrir son approche artistique de façon très cohérente. Ces deux nouvelles œuvres viennent encore conforter l’idée que l’on avait d’elle : une artiste au devenir flamboyant.</p>
            </div>
          </div>
          <div>
            <div class="arrow">
              <h3>Julien Denoun</h3>
              <div id="denoun" onclick="selectCritic('denoun')">
                <i class="fa-solid fa-chevron-down"></i>
              </div>
            </div>
            <div class="critics denoun">
              <h5><strong>Par quoi tient une rencontre…</strong></h5>
              <p>Car deux principes sont sûrs au sculpteur : la Terre et le Ciel. La Terre réserve et arrime les corps tandis que la tête se relève et tire vers le ciel. Homo erectus se tient droit, l’humain se conjugue à la possibilité d’un horizon. Relever la tête, deviner ce qui vient, inscrire le ciel étoilé dans sa marche, accepter la chute de chaque instant pour en faire une marche et bientôt une danse. Ensemble le funéraire et l’art constituent l’humain avec la même attention au vital.</p>
              <p>Sculpter une femme nue, une maternité c’est prolonger l’inquiétude paisible des premiers âges. Belle Vénus la callypige nous vient de la préhistoire. Idéellement, son socle est la main qui la saisit, entre désir d’étreinte et arme de poing, c’est selon et c’est un peu pareil.</p>
              <p>Les corps restent scarifiés par le passage de la lame, le polissage serait un mensonge sur l’origine. C’est donc paisible, toute souffrance bue. </p>
              <h5><strong>Vertical adagio</strong></h5>
              <p>La pesanteur des corps est la condition de la verticalité. Les Belles de Cibot naissent de la terre : enfantement, maternités. La perpétuation de l’humain tient dans son enracinement qui assure enveloppement, recueillement, protection. La corbeille des bras un refuge, à l’enfant comme à l’amant. La vulve chaque fois est celle, heureuse de Gaïa, innocemment couverte par le ciel Ouranos. Ce sont les Belles, issues de la Terre, assurées de leur droit, généreuses. Une odalisque s’arque, rêveuse d’ailleurs.</p>
              <h5><strong>Horizontal glissando</strong></h5>
              <p>Dressée c’est une autre histoire. L’élévation est un risque, ouvert par le désir. La danse, le jeu avec la verticalité, l’équilibre des corps jusque dans la rencontre. Chaque geste est unique et signe l’instant. Fortune est emblématique de cette tension jamais résolue. C’est une danse Shivaïque de création, une chaste apparition. La question du socle – sur quoi arrêter l’équilibre – est laissée ouverte par le cercle enchanté que dessine sa danse. Ce que tu joues n’est pas l’argent, n’est pas le gain, c’est l’instant terrible de tous les possibles. La roue tourne, la danseuse est belle, elle se rit et tu attends.</p>
              <p>L’arpenteur parcourt le monde au compas de ses pas et de sa charge. Sans contrainte pas de liberté et la beauté de la rencontre tient à ce qu’elle ouvre d’inédit. A se rencontrer, ce sera donc une danse. Valses, tangos, portés. L’équilibre est la condition de la rencontre. Assez rarement des sauts trompeurs mais plutôt des accords de pas. Horizontalité des lagunes, vénitienne ou languedociennes, horizontalité de la pampa, séjours toujours inspirants : mélancolie et destins très vaguement héroïques mais dépositaires de gestes précieux.</p>
              <h5><strong>Art du passage</strong></h5>
              <p>Parce que la sculpture est toujours une tenue, c’est par le dessin qu’Elisabeth Cibot explore ce que pourrait être la chute, la rupture. Suspensions, lents glissements depuis des barres d’exposition (supplices gymnastiques..) les corps tombent, saisis dans un « avant la chute » de moindre fracas. Cela tombe et c’est normal. Quelque chose a eu lieu et c’est passé.</p>
              <p>Elisabeth Cibot peint souvent debout sur une surface verticale. Les coulures valent signature de son attention. Le temps passe, la verticalité est un instant. Ainsi, les corps incarnés, les corps désirants sont d’abord une peinture du passage. Le tango, art du tangage de rencontre exprime cet absolu du moment. Mystère de l’accord sur fond de désastre sans importance. C’est sa musique d’atelier.</p>
              <p class="right"><em>Barbizon, 2011</em></p>
            </div>
          </div>
          <div>
            <div class="arrow">
              <h3>Jean-Philippe Ricard - décembre 2007</h3>
              <div id="ricard" onclick="selectCritic('ricard')">
                <i class="fa-solid fa-chevron-down"></i>
              </div>
            </div>
            <div class="critics ricard">
              <h5> <strong> Élisabeth Cibot : les grands formats</strong></h5>
              <p>Après une formation pluridisciplinaire en gravure, glyptique, dessin et sculpture à l’E.N.S. des Beaux-Arts de Paris dont elle est diplômée en 1981, Élisabeth Cibot a abordé chacune de ces techniques et y a excellé. En témoignent dessins, estampes, paravents de verre, aussi bien que statuaire en bronze et fontaines, qui ont ponctué la diversité de ses créations.</p>
              <p>Depuis près de quinze ans toutefois, c’est dans le bronze qu’elle a traduit l’essentiel de son inspiration. Pourtant, d’admirables sanguines préparatoires jalonnent ces années et constituent, elles aussi, la preuve de l’acuité de son observation et de la maîtrise souveraine de son trait sensible.</p>
              <p>Dans le même temps, plusieurs réalisations monumentales, dont le Capitaine Nemo et Jules Verne enfant pour la Ville de Nantes, et un Général De Gaulle saisissant de vie pour la ville de Drancy ont prouvé l’extraordinaire capacité d’Élisabeth Cibot à transcender la force de ses idées et à les traduire dans toutes les formes d’expression plastique. Créatrice débordant d’inspiration, d’énergie et de grâce, voici maintenant qu’Élisabeth Cibot nous offre de grands fusains au trait fulgurant comme l’évidence, des lavis au relief aussi expressif que ses sculptures.</p>
              <p>Homme, femme, couple sont les sujets permanents de l’interrogation d’EC. À travers ces couples dont la fusion charnelle ou l’abandon semblent presque désespérés- comme si leur sensualité était un déchirement, transparaît l’angoisse de l’artiste devant les difficultés de l’accord entre les êtres. La virtuosité technique d’EC lui sert de masque, mais nous reconnaissons bien ici sa quête incessante d’une harmonie impossible, sa lucidité qui refuse de se réfugier dans la représentation d’un épanouissement illusoire.</p>
              <p>Profondément humaine, nourrissant sa virtuosité de la vanité tragique de notre existence, EC est décidément un très grand artiste.</p>
              <p class="right">Jean-Philippe RICARD – December 2007</p>
            </div>
          </div>
          <div>
            <div class="arrow">
              <h3>Ricardo Licata</h3>
              <div id="licata" onclick="selectCritic('licata')">
                <i class="fa-solid fa-chevron-down"></i>
              </div>
            </div>
            <div class="critics licata">
              <p>Elisabeth Cibot m’a fait voir ses nouvelles oeuvres, à son retour de New-York, d’une technique révolutionnaire à base d’impression sur plaques de verre. Le résultat est très intéressant, aussi bien du point de vue expressif, relatif à sa personnalité, que du point de vue expérimental : le verre depuis l’antiquité jusqu’à aujourd’hui, n’a jamais été utilisé comme support chalcographique gravé à la pointe de diamant, à l’acide, à la roue et au jet de sable.</p>
              <p>La morsure est précise, sensible, inaltérable aux encrages successifs.</p>
              <p>L’adhérence de l’encre est parfaite et la couleur particulièrement bien rendue, en raison de la transparence du verre.</p>
              <p>Elisabeth Cibot a une formation de graveur classique, sur métal et sur pierre dure, effectuée à l’Ecole Nationale Supérieure des Beaux-Arts de Paris et une formation de techniques expérimentales à la Scuola Internazionale di Grafica.</p>
              <p>Les gravures sont des créations où des personnages évoluent dans des structures géométriques : ces figures sont d’un dessin très pur et précis, en rapport avec le monde intérieur d’Elisabeth Cibot, puisées dans ses sources les plus profondes, la danse et l’archéologie, deux parties de son être et de sa formation, forces primitives et constantes dans son essence d’artiste à la recherche d’un contenu et des possibilités de l’exprimer par les formes.</p>
            </div>
          </div>
          <div>

            @elseif ('en' == App::getLocale())
            <div>
              <div class="arrow">
                <h3>Jean-Philippe Ricard - décembre 2007</h3>
                <div id="ricard" onclick="selectCritic('ricard')">
                  <i class="fa-solid fa-chevron-down"></i>
                </div>
              </div>
              <div class="critics ricard">
                <h5><strong>Elisabeth Cibot : Larger than life</strong></h5>
                <p>After studying engraving, stone-carving, drawing and sculpture at the prestigious Paris Art School, the Ecole Nationale Supérieure des Beaux-Arts, where she graduated in 1981, Elisabeth Cibot excels in all four disciplines.</p>
                <p>Drawings, prints, screens in worked glass as well as bronze sculptures and fountains bear witness to her creative diversity and talent.</p>
                <p>For the past fifteen years or so, bronze has been the principal vector for her artistic inspiration.
                  However, admirable preparatory sketches in red chalk also punctuate these years, contributing to a
                  body of work in which acute observation and absolute mastery of the sensitive line are manifest.</p>
                <p>During this same period, several monumental works such as the statue of Captain Nemo and his
                  creator, Jules Verne, for the city of Nantes and an strikingly life-like General de Gaulle in Drancy,
                  near Paris, demonstrate Elisabeth Cibot’s extraordinary ability to stretch the boundaries her ideas and express them in every possible fine art form.</p>
                <p>A creative spirit, overflowing with inspiration, energy and grace, Elisabeth Cibot is now producing large charcoal studies drawn with searingly true strokes and washes whose contours are as expressive as her sculptures.</p>
                <p>Men, women, couples are the constant subjects of Elisabeth Cibot’s soul-searching. Through these
                  couples, whose varying states of carnal fusion or abandonment seem close to despair, – as if their
                  sensuality were a source of heartbreak, – transpires the artist’s distress at the lack of understanding
                  between beings. She wears her technical virtuosity like a mask but it is easy is detect her constant
                  quest for impossible harmony and her lucidity which refuses to hide behind representations of illusory
                  fulfilment.</p>
                <p>Profoundly humane, her virtuosity feeding on the tragic vanity of Man’s existence, Elisabeth Cibot is a truly great artist.</p>
                <p class="right">Jean-Philippe RICARD – December 2007</p>
              </div>
            </div>
            <div>
              <div class="arrow">
                <h3>Victor Barker</h3>
                <div id="victor" onclick="selectCritic('victor')">
                  <i class="fa-solid fa-chevron-down"></i>
                </div>
              </div>
              <div class="critics victor">
                <img src="{{ asset('/storage/admin/victorBarker.jpg') }}" alt="" />
              </div>
            </div>
            <div>
              @endif
            </div>
          </div>
        </div>
      </div>

      <div class="biographie-presentation video">
        <div>
          <h2>{{ __('Videos') }}</h2>
          <div>
            <iframe src="https://player.vimeo.com/video/107467775" frameborder="0" title="Elisabeth Cibot - 50 sculptures &agrave; la Cour des Comptes Europ&eacute;enne" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            <iframe src="http://www.dailymotion.com/embed/video/x160vhx" frameborder="0" allowfullscreen></iframe>
            <iframe src="http://www.dailymotion.com/embed/video/xyra9t" frameborder="0" allowfullscreen></iframe>
            <iframe src="http://www.dailymotion.com/embed/video/x11k789" frameborder="0" allowfullscreen></iframe>
            <iframe src="https://player.vimeo.com/video/70107054" frameborder="0" title="LA VALNURESE" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            <iframe src="https://player.vimeo.com/video/38087036" frameborder="0" title="La statue du Pape Jean-Paul II, sculpteur : Elisabeth Cibot" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
        </div>
      </div>

  </section>
  @include('partialsFront.latestWorksSlide')
</x-public-view>