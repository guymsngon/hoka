@extends('layout')

@section('content')

    <div class="col-lg-12">
        <H1 class="text-center font-weight-bolder">Google Measure Le top des Applications des mesures à votre portée</H1>
    </div>
    <div>
        <div class="col-lg-4">
            <div>
                <h3>SOMMAIRE</h3>
            </div>
        </div>
        <div class="container col-lg-8">
            <div class="col-lg-12 text-justify">
                <div>

                    <h3>L’application qui mesure tout avec l’appareil photo débarque sur tous les smartphones  </h3>
                    <p>Cette semaine, nous avions envie de vous parler de Measure, une application de Google permettant de mesurer les objets autour de soi. Si elle n’est pas parfaite,
                        elle est assez pratique à utiliser. </p>
                    <img src="" width="500px" height="300px">
                    <p>Google Measure : l’application qui mesure tout avec l’appareil photo débarque sur tous les smartphones compatibles ARCore</p>
                    <p>Google Measure, la toute nouvelle application de mesure pour les smartphones Android, vient d’être mise à jour pour prendre en charge tous les smartphones
                        qui supportent ARCore. Google Measure utilise la réalité augmentée pour mesurer n’importe quel objet et distances permettant par exemple de calculer
                        un volume ou encore la surface d’une pièce. Les smartphones compatibles ARCore sont relativement nombreux dans le milieu et haut de gamme sur des smartphones
                        sortis depuis moins de trois ans, mais qui se voit prendre ses arque depuis quelques temps.</p>
                    <p> Cette application très utile permet de mesurer tout ce qui se trouve dans votre environnement immédiat sans utiliser de mètre : à la place, la caméra, et de savants calculs d’ARCore,
                        font le nécessaire. Outre la mesure de distances et d’objets, Google Measure permet également de mesurer des surfaces et des volumes. La première fois que l’on ouvre l’application,
                        des instructions s’affichent pour correctement calibrer l’image. </p>

                </div>
                <div>
                    <h3>Comment ça marche?</h3>
                    <p>Pour mesurer il suffit alors de taper sur un point, puis sur un autre. L’application permet d’enregistrer vos mesures pour pouvoir les utiliser ensuite ou alors vous Appuyez sur l’une
                        des deux icônes et faites-la glisser sur l’image que vous êtes en train de filmer. Une ligne colorée se trace alors sur l’écran et vous n’avez plus qu’à déplacer ses extrémités pour qu’elles
                        correspondent aux dimensions du meuble dont vous voulez connaître la taille</p>
                    <div class="col-lg-4">
                        <img src="" />
                    </div>
                    <div class="col-lg-8">
                        <p> Aussi, la plateforme a besoin d’une poignée de secondes pour repérer une surface plane horizontale qu’elle va prendre comme référence pour effectuer ses mesures. Celle-ci est représentée
                            par les points blancs que vous pouvez apercevoir dans les captures d’écran.</p>

                    </div>
                    <div class="col-lg-4">
                        <img src="" />
                    </div>
                    <div class="col-lg-8">
                        <p>« Mais, cette ventilateur il fait bien 75 centimètres à vue de nez, non ? » « Ah, j’aurais dit plus ! » Google veut mettre fin à ce genre de conversations stériles avec son application e baptisée Measure.
                            Comme son nom l’indique, ce service permet de mesurer des objets et pour cela il utilise la caméra arrière de votre smartphone.</p>

                    </div>


                </div>
                <div>
                    <p>Google Measure existe depuis quelques années déjà, mais cela fait seulement quelques semaines que presque la totalité des appareils Android peut en profiter. Le fonctionnement est très simple : il suffit
                        d’ouvrir l’application puis de pointer l’appareil photo vers l’objet — ou la personne — de votre choix. Vous avez ensuite deux outils à votre disposition qui s’affichent en bas de l’écran. Celui de droite
                        permet de mesurer la longueur tandis que celui de gauche est pour la hauteur.</p>
                </div>
                <p>Nous tenons à vous rappeler juste  que l’application est disponible sur PLAYSTORE. Donc il suffit juste de le télécharger et de l’installer sur votre smartphone et c’est partir pour une nouvelle experience avec <b>GOOGLE MEASURE</b></p>
            </div>
        </div>
    </div>


    <div class="text-center">
        <h2> Découvrez en plus</h2>
    </div>
    <!-- Articles carousel secion start -->
    <div class="testimonials-1">
        <div class="carousel" data-flickity='{ "groupCells": 1 , "autoPlay":3500 }'>

            <div class="carousel-cell col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-pad">
                        <img src="IMAGES/coo.png" alt="staff-5" class="img-responsive">
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 content">
                        <!-- Title -->
                        <h2 class="title ">
                            <a href="{{route('lefret')}}">LE FRET ET SON SERVICE</a>
                        </h2>
                        <!-- paragraph -->
                        <p>Grâce à la dynamique du commerce mondial, les flux de transport se multiplient et s’internationalisent. Le transport de fret est en plein essor</p>
                        <!-- btn -->
                        <a href="{{route('lefret')}}" class="read-more-btn">Lire Plus...</a>
                    </div>
                </div>
            </div><div class="carousel-cell col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-pad">
                        <img src="IMAGES/coo.png" alt="staff-5" class="img-responsive">
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 content">
                        <!-- Title -->
                        <h2 class="title">
                            <a href="{{route('commentemballer')}}">COMMENT BIEN EMBALLER VOS COLIS</a>
                        </h2>
                        <!-- paragraph -->
                        <p>Vous souhaitez expédier un colis mais n'êtes pas sûr de comment l'emballer ? Pour éviter que votre colis arrive en mauvais état</p>
                        <!-- btn -->
                        <a href="{{route('commentemballer')}}" class="read-more-btn">Lire Plus...</a>
                    </div>
                </div>
            </div><div class="carousel-cell col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-pad">
                        <img src="IMAGES/coo.png" alt="staff-5" class="img-responsive">
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 content">
                        <!-- Title -->
                        <h2 class="title">
                            <a href="{{route('ccassurance')}}">COMMENT CHOISIR UNE POLICE D’ASSURANCE TRANSPORT</a>
                        </h2>
                        <!-- paragraph -->
                        <p>L’assurance transport permet de couvrir en totalité ou en partie le dommage subi par  </p>
                        <!-- btn -->
                        <a href="{{route('ccassurance')}}" class="read-more-btn">Lire Plus...</a>
                    </div>
                </div>
            </div><div class="carousel-cell col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-pad">
                        <img src="IMAGES/coo.png" alt="staff-5" class="img-responsive">
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 content">
                        <!-- Title -->
                        <h2 class="title">
                            <a href="{{route('isassurance')}}">L’IMPORTANCE DE SOUSCRIRE A UNE ASSURANCE POUR VOS MARCHANDISES</a>
                        </h2>
                        <!-- paragraph -->
                        <p>Le transport routier est largement apprécié par les sociétés, mais </p>
                        <!-- btn -->
                        <a href="{{route('isassurance')}}" class="read-more-btn">Lire Plus...</a>
                    </div>
                </div>
            </div><div class="carousel-cell col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-pad">
                        <img src="IMAGES/coo.png" alt="staff-5" class="img-responsive">
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 content">
                        <!-- Title -->
                        <h2 class="title">
                            <a href="{{route('fretroutier')}}">LE TRANSPORT ROUTIER DES MARCHANDISES</a>
                        </h2>
                        <!-- paragraph -->
                        <p>Le transport de cargaison par la route est un classique dans le domaine des marchandises et reste un choix</p>
                        <!-- btn -->
                        <a href="{{route('fretroutier')}}" class="read-more-btn">Lire Plus...</a>
                    </div>
                </div>
            </div>
            <div class="carousel-cell col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-pad">
                        <img src="IMAGES/coo.png" alt="staff-5" class="img-responsive">
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 content">
                        <!-- Title -->
                        <h2 class="title">
                            <a href="{{route('topappli')}}">TOP DES QPPLICQTIONS DE MESURE A VOTRE PORTEE</a>
                        </h2>
                        <!-- paragraph -->
                        <p> L’application qui mesure tout avec l’appareil photo débarque sur tous les smartphones </p>
                        <!-- btn -->
                        <a href="{{route('topappli')}}" class="read-more-btn">Lire Plus...</a>
                    </div>
                </div>
            </div>
            <div class="carousel-cell col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-pad">
                        <img src="IMAGES/coo.png" alt="staff-5" class="img-responsive">
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 content">
                        <!-- Title -->
                        <h2 class="title">
                            <a href="{{route('difftransport')}}">LES DIFFICULTES LIEES AU TRANSPORT ROUTIER DES MARCHANDISES</a>
                        </h2>
                        <!-- paragraph -->
                        <p>Accidents de la route, accidents liés à la manutention lors du chargement ou du déchargement du véhicule</p>
                        <!-- btn -->
                        <a href="{{route('difftransport')}}" class="read-more-btn">Lire Plus...</a>
                    </div>
                </div>
            </div>
            <div class="carousel-cell col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-pad">
                        <img src="IMAGES/coo.png" alt="staff-5" class="img-responsive">
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 content">
                        <!-- Title -->
                        <h2 class="title">
                            <a href="{{route('marchandisedanger')}}">LES MARCHANDISES DANGEREUSES</a>
                        </h2>
                        <!-- paragraph -->
                        <p>Une matière est classée dangereuse lorsqu’elle est susceptible d’entraîner des conséquences graves </p>
                        <!-- btn -->
                        <a href="{{route('marchandisedanger')}}" class="read-more-btn">Lire Plus...</a>
                    </div>
                </div>
            </div>
            <div class="carousel-cell col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-pad">
                        <img src="IMAGES/coo.png" alt="staff-5" class="img-responsive">
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 content">
                        <!-- Title -->
                        <h2 class="title">
                            <a href="{{route('mesuretel')}}">MESURER UNE DISTANCE AVEC L’APPAREIL PHOTO DE VOTRE SMARTPHONE ANDROID</a>
                        </h2>
                        <!-- paragraph -->
                        <p>Prendre des mesures de distance est une des choses que l’homme a toujours fait et qui a probable</p>
                        <!-- btn -->
                        <a href="{{route('mesuretel')}}" class="read-more-btn">Lire Plus...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial secion end -->




@endsection