<x-public-view>
  <section class="biographie">
    <h1>{{ __('biography') }}</h1>

    <div class="biographie-btn">
      <ul class="biographie-dropdown" id="bio-drop">
        <li class="btn active" onclick="selectBtnBio('hello')"><a>{{ __('Presentation') }}</a> <i class="fa-solid fa-chevron-down"></i></li>
        <li class="btn" onclick="selectBtnBio('awards')"><a>{{ __('Awards') }}</a> <i class="fa-solid fa-chevron-down"></i></li>
        <li class="btn" onclick="selectBtnBio('monuments')"><a>{{ __('Monuments') }}</a> <i class="fa-solid fa-chevron-down"></i></li>
        <li class="btn" onclick="selectBtnBio('personal')"><a>{{ __('Solo exhibitions') }}</a> <i class="fa-solid fa-chevron-down"></i></li>
        <li class="btn" onclick="selectBtnBio('collectives')"><a>{{ __('Collective exhibitions') }}</a> <i class="fa-solid fa-chevron-down"></i></li>
        <li class="btn" onclick="selectBtnBio('evenements')"><a>{{ __('Events') }}</a> <i class="fa-solid fa-chevron-down"></i></li>
        <li class="btn" onclick="selectBtnBio('permanence')"><a>{{ __('Galleries') }}</a> <i class="fa-solid fa-chevron-down"></i></li>
      </ul>
    </div>

    <div class="biographie-presentation hello show">
      <div>
        <img src="https://picsum.photos/406/341" alt="">
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
        <img src="https://picsum.photos/406/340" alt="">
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
        <img src="https://picsum.photos/405/341" alt="">
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
        <img src="https://picsum.photos/406/342" alt="">
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
        <img src="https://picsum.photos/406/339" alt="">
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
        <img src="https://picsum.photos/405/340" alt="">
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
        <img src="https://picsum.photos/406/341" alt="">
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
  @include('partialsFront.latestWorksSlide')
</x-public-view>