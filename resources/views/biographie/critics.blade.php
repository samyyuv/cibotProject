<x-public-view>
  @include('biographie.menuBiographie')

  <div class="biographie-presentation criticsBtn">
    <div>
      <img src="{{ asset('/storage/' . $oeuvresImg[7]->photos[0]->photo) }}" alt="image">
      <div>
        <h2>{{ __('Critics') }}</h2>
        @if ('fr' == App::getLocale())
        <div>
          <div class="arrow-container">
            <h3>Élisabeth Cibot, Droit au cœur</h3>
            <div class="arrow" id="first" onclick="selectCritic('first')">
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
          <div class="arrow-container">
            <h3>Lydia Harambourg - Genèse de la sculpture du Pape Jean-Paul II</h3>
            <div class="arrow" id="lydia" onclick="selectCritic('lydia')">
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
          <div class="arrow-container">
            <h3>Martial Raysse - janvier 2011</h3>
            <div class="arrow" id="martial" onclick="selectCritic('martial')">
              <i class="fa-solid fa-chevron-down"></i>
            </div>
          </div>
          <div class="critics martial">
            <p>Il est aujourd’hui rare de rencontrer un véritable sculpteur qui possède toute l’étendue du savoir-faire quant à la statuaire. C’est le cas d’Élisabeth Cibot, et en plus dans sa pratique personnelle, elle fait montre d’un style tout à fait personnel et poétique.</p>
          </div>
        </div>
        <div>
          <div class="arrow-container">
            <h3>Aline Jaulin</h3>
            <div class="arrow" id="aline" onclick="selectCritic('aline')">
              <i class="fa-solid fa-chevron-down"></i>
            </div>
          </div>
          <div class="critics aline">
            <p>Elisabeth Cibot apparait comme le chef de file de ce que l’on pourrait appeler la deuxième génération de verriers français. Si, à vingt-cinq ans elle possède déjà la maîtrise du matériaux et du dessin, elle possède également celle de l’esprit par un sens développé de la synthèse. Le travail de cette jeune artiste ne souffre d’aucun hasard, d’aucune hésitation, mais dénote au contraire une belle assurance. Tournée vers le graphisme et attirée par le plan qu’elle fait parfois s’onduler, Elisabeth Cibot laisse libre cours à ses impulsions, à une gestuelle épanouie, vivante et expressive.</p>
            <p>Consciente des limites imposées par la surface même du verre qu’elle grave, elle cherche au contraire l’harmonie entre contour, ligne et lumière. A l’évidence, la contrainte est un état qu’elle ignore. Ce qui pourrait l’être devient chez elle le point de départ de multiples champs d’investigation, la source d’un langage volubile qui rejoint parfois le fantastique, parfois l’abstraction, parfois encore un certain classicisme. A travers des pièces aussi différentes que le sont ses plats, ses stores, ses luminaires, ses panneaux ou ses paravents, on retrouve toujours cette verve nerveuse et cette liberté du trait. Une liberté quasi sensuelle qui joue, ici, avec la lumière, là, avec la couleur, pour surgir à la surface du verre avec fougue dans un grand accent de sincérité.</p>
          </div>
        </div>
        <div>
          <div class="arrow-container">
            <h3>Victor Barker</h3>
            <div class="arrow" id="victor" onclick="selectCritic('victor')">
              <i class="fa-solid fa-chevron-down"></i>
            </div>
          </div>
          <div class="critics victor">
            <img src="{{ asset('/storage/admin/victorBarker.jpg') }}" alt="" />
          </div>
        </div>
        <div>
          <div class="arrow-container">
            <h3>François Bernheim - compositeur</h3>
            <div class="arrow" id="bernheim" onclick="selectCritic('bernheim')">
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
          <div class="arrow-container">
            <h3>Patrice de la Perrière - Univers des Arts</h3>
            <div class="arrow" id="patrice" onclick="selectCritic('patrice')">
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
          <div class="arrow-container">
            <h3>Julien Denoun</h3>
            <div class="arrow" id="denoun" onclick="selectCritic('denoun')">
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
          <div class="arrow-container">
            <h3>Jean-Philippe Ricard - décembre 2007</h3>
            <div class="arrow" id="ricard" onclick="selectCritic('ricard')">
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
          <div class="arrow-container">
            <h3>Ricardo Licata</h3>
            <div class="arrow" id="licata" onclick="selectCritic('licata')">
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
            <div class="arrow-container">
              <h3>Jean-Philippe Ricard - décembre 2007</h3>
              <div class="arrow" id="ricard" onclick="selectCritic('ricard')">
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
            <div class="arrow-container">
              <h3>Victor Barker</h3>
              <div class="arrow" id="victor" onclick="selectCritic('victor')">
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
    </section>
    {{--@include('partialsFront.latestWorksSlide')--}}
</x-public-view>