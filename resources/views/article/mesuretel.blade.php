@extends('layout')

@section('content')

    <div class="col-lg-12">
        <H1 class="text-center font-weight-bolder">LE FRET ET SON SERVICE</H1>
    </div>
    <div>
        <div class="col-lg-4">
            <div>
                <h3>SOMMAIRE</h3>
            </div>
        </div>
        <div class="container">
            <div class="col-lg-8 lnr-text-align-justify text-justify">
                <div>
                    <p>Grâce à la dynamique du commerce mondial, les flux de transport se multiplient et s’internationalisent.
                        Le transport de fret est en plein essor et il est un rouage essentiel et incontournable de l’économie moderne. </p>
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