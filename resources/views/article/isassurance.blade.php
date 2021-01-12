@extends('layout')

@section('content')

    <div class="col-lg-12">
        <H1 class="text-center font-weight-bolder">L’IMPORTANCE DE SOUSCRIRE A UNE ASSURANCE POUR VOS MARCHANDISES</H1>
    </div>
    <div>
        <div class="col-lg-4">
            <div>
                <h3>SOMMAIRE</h3>
            </div>
        </div>
        <div class="container">
            <div class="col-lg-8 text-justify">
                <div>
                    <p>Le transport routier est largement apprécié par les sociétés, mais il comporte de sérieux risques au niveau des
                        dégradations et des vols. Vous ne pouvez donc pas faire l’impasse sur une assurance qui protégera tout au long de l’acheminement les
                        différentes marchandises. </p>

                </div>
                <div>
                    <h3>Couvrir les dommages causés lors d’un accident, d’un vol ou d’une degradation</h3>
                    <img src="" height="300px" width="500px">
                    <p>L’activité liée au transport des marchandises n’est malheureusement pas sans risque, vous n’êtes pas à l’abri d’une mauvaise surprise
                        lors d’un arrêt au bord de la route ou sur une aire d’autoroute. Si un vol ou une dégradation était au rendez-vous, une indemnité serait
                        rapidement déployée après une expertise consacrée aux pertes financières. Sans une telle assurance, ces dernières ne seront pas compensées,
                        les conséquences pour votre entreprise seront donc importantes surtout si les faits se produisent régulièrement.</p>
                </div>
                <div>
                    <h3>Assurer un seul voyage ou tous les transports de marchandises</h3>
                    <p>Au vu des avantages apportés, le retour sur investissement sera rapidement enregistré. Pour cette assurance, vous avez donc plusieurs possibilités.
                        La première concerne la protection pour un seul voyage, mais, si vous avez l’intention de multiplier les transports, la seconde option sera sans doute plus adaptée.
                        Ce niveau de protection vous permet de couvrir tous les acheminements. Il sera ainsi judicieux d’étudier vos besoins réels afin d’identifier la meilleure formule,
                        mais une assurance pour les marchandises demande une certaine préparation. Il sera impératif de rédiger en amont une liste concernant tous les produits transportés via les poids lourds.</p>

                </div>
                <div>
                    <h3>Identifiez le montant de la prime en fonction de vos besoins réels</h3>
                    <p>marchandise transportée aura aussi une incidence, plus la valeur sera élevée, plus le coût sera important. Vous êtes donc invité à choisir avec précision le niveau des garanties,
                        vous pourriez être face à une mauvaise surprise à cause d’une évaluation sous-estimée. Par rapport à vos besoins réels, le montant de la prime doit être adapté. Bien sûr, les contrats sont multiples,
                        car les entreprises possèdent leurs propres formules, d’où l’importance d’avoir recours à un professionnel qui maîtrise le domaine de l’assurance transport. Il ciblera rapidement le contrat répondant
                        à vos besoins afin de garantir le transport de vos marchandises sans difficulté.</p>
                </div>
                <div>
                    <p>PARTGEZ ZT DITES NOUS SI VOUS AVEZ AIME!!!</p>
                </div>
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