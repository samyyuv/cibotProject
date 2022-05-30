<x-public-view>
  @include('biographie.menuBiographie')

  <div class="biographie-presentation hello">
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
  </section>
  {{--@include('partialsFront.latestWorksSlide')--}}
</x-public-view>