<x-public-view>
  <section class="biographie">
    <h1>{{ __('biographie') }}</h1>

    <div class="biographie-btn">
      {{--<a class="biographie-title">Présentation <i class="fa-solid fa-chevron-down"></i> </a>--}}
      <ul class="biographie-dropdown" id="bio-drop">
        <li class="btn active" onclick="selectBtnBio('hello')"><a>{{ __('Présentation') }}</a> <i class="fa-solid fa-chevron-down"></i></li>
        <li class="btn" onclick="selectBtnBio('distinctions')"><a>{{ __('Distinctions') }}</a> <i class="fa-solid fa-chevron-down"></i></li>
        <li class="btn" onclick="selectBtnBio('realisations')"><a>{{ __('Réalisations') }} <br>monumentales</a> <i class="fa-solid fa-chevron-down"></i></li>
        <li class="btn" onclick="selectBtnBio('personnelles')"><a>{{ __('Expositions') }} <br>personnelles</a> <i class="fa-solid fa-chevron-down"></i></li>
        <li class="btn" onclick="selectBtnBio('collectives')"><a>{{ __('Expositions') }} <br>collectives</a> <i class="fa-solid fa-chevron-down"></i></li>
        <li class="btn" onclick="selectBtnBio('evenements')"><a>{{ __('Événements') }}</a> <i class="fa-solid fa-chevron-down"></i></li>
        <li class="btn" onclick="selectBtnBio('permanence')"><a>{{ __('En permanence') }}</a> <i class="fa-solid fa-chevron-down"></i></li>
      </ul>
    </div>

    <div class="biographie-presentation hello show">
      <div>
        <img src="https://picsum.photos/406/341" alt="">
        <h2>{{ __('Présentation') }}</h2>
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
      </div>
    </div>

    <div class="biographie-presentation distinctions">
      <div>
        <img src="https://picsum.photos/406/340" alt="">
        <h2>{{ __('Distinctions') }}</h2>
        <p>Curabitur aliquet quam id dui posuere blandit. Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo,
          lacinia eget consectetur sed, convallis at tellus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa,
          convallis a pellentesque nec, egestas non nisi. Nulla quis lorem ut libero malesuada feugiat. Sed porttitor lectus nibh.
          Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Cras ultricies ligula sed magna dictum porta.
          Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Praesent sapien massa, convallis a pellentesque nec,
          egestas non nisi. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p>

        <p>Depuis 1997, elle travaille à Nogent-sur-Marne dans un atelier de la Fondation Nationale pour les Arts Graphiques et
          Plastiques. Ses œuvres se trouvent dans de nombreuses collections privées et publiques et sont présentées dans différentes
          galeries internationales.</p>
      </div>
    </div>

    <div class="biographie-presentation realisations">
      <div>
        <img src="https://picsum.photos/405/341" alt="">
        <h2>{{ __('Réalisations monumentales') }}</h2>
        <p>Nulla porttitor accumsan tincidunt. Proin eget tortor risus. Sed porttitor lectus nibh. Curabitur aliquet quam id dui posuere
          blandit. Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
          Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam
          vel, ullamcorper sit amet ligula. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim.
          Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
          Sed porttitor lectus nibh.</p>

        <p></p>
      </div>
    </div>

    <div class="biographie-presentation personnelles">
      <div>
        <img src="https://picsum.photos/406/342" alt="">
        <h2>{{ __('Expositions personnelles') }}</h2>
        <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus magna justo, lacinia eget consectetur sed,
          convallis at tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque,
          auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
          Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.
          Nulla quis lorem ut libero malesuada feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sapien massa,
          convallis a pellentesque nec, egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>

        <p></p>
      </div>
    </div>

    <div class="biographie-presentation collectives">
      <div>
        <img src="https://picsum.photos/406/339" alt="">
        <h2>{{ __('Expositions collectives') }}</h2>
        <p>Donec sollicitudin molestie malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue
          leo eget malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Proin eget tortor risus. Quisque velit nisi,
          pretium ut lacinia in, elementum id enim. Proin eget tortor risus. Praesent sapien massa, convallis a pellentesque nec, egestas non
          nisi. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla quis lorem ut libero malesuada feugiat. Praesent sapien massa,
          convallis a pellentesque nec, egestas non nisi. Cras ultricies ligula sed magna dictum porta.</p>

        <p></p>
      </div>
    </div>

    <div class="biographie-presentation evenements">
      <div>
        <img src="https://picsum.photos/405/340" alt="">
        <h2>{{ __('Événements') }}</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget tortor risus. Nulla porttitor accumsan tincidunt. Nulla porttitor
          accumsan tincidunt. Nulla quis lorem ut libero malesuada feugiat. Donec sollicitudin molestie malesuada. Curabitur aliquet quam id
          dui posuere blandit. Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Praesent sapien massa, convallis a pellentesque nec,
          egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque,
          auctor sit amet aliquam vel, ullamcorper sit amet ligula.</p>

        <p></p>
      </div>
    </div>

    <div class="biographie-presentation permanence">
      <div>
        <img src="https://picsum.photos/406/341" alt="">
        <h2>{{ __('En permanence') }}</h2>
        <p>Proin eget tortor risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sapien massa, convallis a pellentesque nec,
          egestas non nisi. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget
          malesuada. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Nulla porttitor accumsan
          tincidunt. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Nulla porttitor accumsan tincidunt. Pellentesque in
          ipsum id orci porta dapibus.</p>

        <p></p>
      </div>
    </div>


  </section>
  @include('partialsFront.latestWorksSlide')
</x-public-view>