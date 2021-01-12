@extends('layout')

@section('content')

<div class="banner banner-style-3 banner-max-height">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/banner/banner-slider-3.jpg" alt="banner-slider-3">
                <div class="carousel-caption banner-slider-inner banner-top-align">
                    <div class="banner-content banner-content-left text-left">
                    <h1 data-animation="animated fadeInDown delay-05s">Bienvenue sur<span> Hokaafoza</span></h1>
                    <p data-animation="animated fadeInUp delay-1s">LA RAPIDITE ET LA FIABILITE <br> DE L’EXPEDITION A VOTRE PORTEE</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="slider-mover-left" aria-hidden="true">
                <i class="fa fa-angle-left"></i>
            </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="slider-mover-right" aria-hidden="true">
                <i class="fa fa-angle-right"></i>
            </span>
            <span class="sr-only">Next</span>
        </a>

        <!-- Search area box start -->
        <div class="search-area-box-3 hidden-xs hidden-sm">
            <div class="search-contents">
                <form method="post" action="{{ route('searchtrajet') }}">
                    @csrf
                    <div class="col-lg-12 col-pad col-pad-2">
                        <div class="search-your-rooms">
                            <h2 class="hidden-xs hidden-sm">Rechercher Votre <span>Trajets</span></h2>
                        </div>
                    </div>
                    <div class="search-your-details">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields form-control-2" required name="place_out">
                                    <option value="">Lieu de départ </option>
                                    <option value="Yaoundé">Yaoundé</option>
                                    <option value="Douala">Douala</option>
                                    <option value="Limbe">Limbe</option>
                                    <option value="Paris">Paris</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields form-control-2" required name="place_in">
                                    <option value="">Lieu d'arrivée </option>
                                    <option value="Yaoundé">Yaoundé</option>
                                    <option value="Douala">Douala</option>
                                    <option value="Limbe">Limbe</option>
                                    <option value="Paris">Paris</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <input type="text" name="date_out" class="btn-default datepicker" required placeholder="Date de départ">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields form-control-2" required name="transport">
                                    <option value="">Type de transport</option>
                                    <option value="1">Bateau</option>
                                    <option value="2">Route</option>
                                    <option value="3">Train</option>
                                    <option value="4">Avions</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <button type="submit" class="search-button btn-theme">Rechercher</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Search area box end -->
    </div>
</div>
<!-- Banner end -->

<!-- Search area box 2 start -->
<div class="search-area-box-2 hidden-lg hidden-md">
    <div class="container">
        <div class="search-contents">
            <form method="post" action="{{ route('listtrajet') }}">
                @csrf
                <div class="row">
                    <div class="col-md-3 col-pad col-pad-2">
                        <div class="search-your-rooms">
                            <h3 class="hidden-xs hidden-sm">Rechercher</h3>
                            <h2 class="hidden-xs hidden-sm">Un <span>Trajet</span></h2>
                            <h2 class="hidden-xs hidden-sm">Rechercher Votre <span>Trajets</span></h2>
                        </div>
                    </div>
                    <div class="search-your-details">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields form-control-2" name="placeOut">
                                    <option>Lieu de départ </option>
                                    <option>Yaoundé</option>
                                    <option>Douala</option>
                                    <option>Limbe</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields form-control-2" name="placeIn">
                                    <option>Lieu d'arrivée </option>
                                    <option>Yaoundé</option>
                                    <option>Douala</option>
                                    <option>Limbe</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <input type="text" class="btn-default datepicker" name="date_out" placeholder="Date de départ">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields form-control-2" name="transport">
                                    <option>Type de transport</option>
                                    <option>type 1</option>
                                    <option>type 2</option>
                                    <option>type 3</option>
                                    <option>type 4</option>
                                    <option>type 5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <button type="submit" class="search-button btn-theme">Rechercher</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Search area box 2 end -->

    <!-- About Institute bg start -->
    <div class='about-institute-bg'>
        <div class="content-area-13 hotel-section">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="hotels-detail-slider simple-slider">
                                <div id="carousel-custom" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-outer">
                                        <!-- Carousel inner -->
                                        <div class="carousel-inner">
                                            <div class="item">
                                                <img src="IMAGES/motorcycle_.png" height='1000' width='580' alt="about-3">
                                            </div>
                                            <div class="item active left">
                                                <img src="IMAGES/road_trip.png" height='1000' width='580' alt="about-1">
                                            </div>
                                            <div class="item next left">
                                                <img src="IMAGES/bus_driver.png" height='1000' width='580' alt="about-2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="about-text">
                                <!-- title -->
                                <div class="main-title-2">
                                    <h1><span>TRANSPORTER DES COLIS </span>OU VOUS ALLEZ</h1>
                                </div>
                                <!-- paragraph -->
                                <p>Notre plateforme met en relation des transitaires et des particuliers avec nos différents utilisateurs afin de pouvoir acheminer des colis partout où ils vont :</p>
                                <p>	CREEZ UNE ANNONCE ?<br>
                                    Il suffit juste de vous inscrire sur la plateforme et de poster votre annonce de départ avec toutes les informations nécessaires.</p>
                                <p>	OU ALLEZ VOUS, ET QUAND ?<br>
                                    Il est impératif d’indiquer quelle est votre destination et quand vous ferez le déplacement.</p>
                                <p>	CONFIRMATION ?<br>
                                    Vous recevez par mail une validation en adéquation avec votre trajet, selon vos critères d’annonce.</p>
                                <p>	C’EST AVANTAGEUX<br>
                                    Vous avez l’occasion de rentabiliser votre espace. Alors Pourquoi se priver d’une telle solution ?</p>

                                <a href="{{route('givetrajet')}}" class="btn btn-sm btn-theme">PROPOSER UN TRAJET</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Institute bg end -->

    <!-- Description start -->
    <div class="gallery-secion content-area-11">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="card" style="background-color:#3ac4fa">
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title" style="color:white"> <b><i>Vous êtes transporteur</i></b> </h4>
                            <!-- Text -->
                            <ol>
                                <li>publiez un trajet</li>
                                <br>
                                <li>ajoutez des annonces à votre trajet</li>
                                <br>
                                <li>recevez les notifications des reservations</li>
                                <br>
                                <br>
                                <li>validez les réservations et vous êtes payé</li>
                                <br>
                            </ol>
                            <!-- Button -->
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-5">
                    <div class="card">

                    <div class="card" style="background-color:#3ac4fa">
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title" style="color:white"> <b><i>Vous désirez faire une reservation</i></b> </h4>
                            <!-- Text -->
                            <ol>
                                <li>recherchez un trajet</li>
                                <br>
                                <li>reservez votre trajet sur la plateforme</li>
                                <br>
                                <li>enrégistrez vos informations de paiement</li>
                                <br>
                                <li>publiez une annonce au cas où aucun trajet ne vous convient</li>
                                <br>
                            </ol>
                            <!-- Button -->
                        </div>
                    </div>
                    <!-- Card -->
                </div>
            </div>
        </div>
    </div>
    <!-- Description end -->

    <!-- Gallery secion start -->
    <div class="gallery-secion content-area-11">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1>TYPE DE TRANSPORTS</h1>
                <p>Cette plateforme vous propose plusieurs moyens de transports <i> (voies aériennes, voies maritimes, voies terrestres, 
                    voies ferroviaires)</i> pour vos expéditions, selon vos moyens et la taille de vos colis ; </p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="hotel-box">
                        <!--header -->
                        <div class="header clearfix">
                        <img src="IMAGES/air-journal_Air-France-A350-900-takeoff-dec19©Airbus.jpg" height='200' width='263' alt="staff-5">
                        </div>
                        <!-- Detail -->
                        <div class="detail clearfix">
                            <h3>
                                <a href="rooms-details.html">Avions</a>
                            </h3>
                            <p><?php $ch1 = 'La marchandise transportée par avion peut se 
                            contenter d’un emballage plus léger si leur pré ou post 
                            acheminement prend en compte leur fragilité. 
                            Il est compétitif pour des marchandises volumineuses à savoir : 
                            textile, médicale, équipements électronique et équipements électrique.'; echo substr($ch1 ,0 ,200).'...'?> </p>
                            <a href="#" class="read-more-btn">Lire Plus...</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="hotel-box">
                        <!--header -->
                        <div class="header clearfix">
                        <img src="IMAGES/navire-marchandise.jpg" alt="staff-5" height='200' width='263'>
                        </div>
                        <!-- Detail -->
                        <div class="detail clearfix">
                            <h3>
                                <a href="rooms-details.html">Bateaux</a>
                            </h3>
                            <p><?php $ch2 = 'En raison de la globalisation et de l’expansion du marché des transports, 
                            nous vous offrons également des services par bateaux ; 
                            Nous savons à quel point il est important de préserver l’état de 
                            votre marchandise à partir du moment où il est dans un conteneur 
                            jusqu’à ce que celui-ci franchit le seuil de votre porte, 
                            c’est pourquoi nous vous garantissons sa bonne conservation.'; echo substr($ch2 ,0 ,200).'...'?></p>
                            <a href="#" class="read-more-btn">Lire Plus...</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="hotel-box">
                        <!--header -->
                        <div class="header clearfix">
                        <img src="IMAGES/camions.jpg" alt="staff-5" height='200' width='263'>
                        </div>
                        <!-- Detail -->
                        <div class="detail clearfix">
                            <h3>
                                <a href="rooms-details.html">Camions</a>
                            </h3>
                            <p><?php $ch3 = 'Le choix est fait ici en fonction de la distance que doit parcourir la marchandise, 
                            mais également de sa valeur ou de sa périssabilité.'; echo substr($ch3 ,0 ,200).'...'?></p>
                            <a href="#" class="read-more-btn">Lire Plus...</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="hotel-box">
                        <!--header -->
                        <div class="header clearfix">
                            <img src="IMAGES/duisburg-port-600x400.jpg" alt="staff-5" height='200' width='263'>
                        </div>
                        <!-- Detail -->
                        <div class="detail clearfix">
                            <h3>
                                <a href="rooms-details.html">Trains</a>
                            </h3>
                            <p><?php $ch4 = 'Le choix est fait ici en fonction de la distance que doit parcourir la marchandise, 
                            mais également deLe transport des marchandises par train est en plein 
                            essor et est en même temps un grand défi sur la scène logistique des transports. 
                            Hokaafoza avec le transport ferroviaire est aussi une garantie même pour l’expédition des marchandises. 
                            Nous  réalisons le transport par train pour plusieurs types de cargaisons 
                            afin de garantir une livraison rapide et sans contretemps, 
                            grâce à notre large réseau de collaborateurs.'; echo substr($ch4 ,0 ,200).'...'?> 
                            <a href="#" class="read-more-btn">Lire Plus...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery secion end -->

    <!-- last publication -->
    <div class="gallery-secion content-area-11">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1>Dernières publications</h1>
            </div>
            <div class="row">
            @foreach($trajets as $trajet)
            <a href="{{route('detailtrajet', $trajet->id)}}">
                <div class="col-lg-4">
                    <!-- Card -->
                    <div class="card" style="background-color:#3ac4fa; color:white">
                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <center><h3 class="card-title" style="color:white"><b>{{$trajet->town_out}} - {{$trajet->town_in}}</b></h3></center> 
                            <!--Text-->
                            <ul style="color:black">
                                <li><b>Nom du transporteur : {{App\User::find($trajet->id_user)->name}}</b></li>
                                <li><b>Type de transport :{{$trajet->bateau != 1 ? $trajet->route != 1 ? $trajet->avion != 1 ? $trajet->train != 1 ?'Innconu':'Train':'Avion':'Route':'Bateau'}}</b></li>
                                <li><b>Date de départ : {{date('d / m / y', strtotime($trajet->date_out))}}</b></li>
                                <li><b>Volume Restant: {{$trajet->volume}} m3</b></li>
                                <li><b>Poids Restant: {{$trajet->weight}} {{$trajet->weight_unity}}</b></li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <ul style="color:white">
                                <br>
                                    <li>Email: <i class="fa fa-check-circle fa-2x" style="color:red" aria-hidden="true"></i></li>
                                    <br>
                                    <li>Tel: <i class="fa fa-check-circle fa-2x" style="color:red" aria-hidden="true"></i></li>
                                    <br>
                                    <li>cni: <i class="fa fa-check-circle fa-2x" style="color:red" aria-hidden="true"></i></li>
                                    <br>
                                </ul>
                            </div>
                            <div class="col-lg-9 col-sm-6">
                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="{{$trajet->images}}" alt="staff-5" height='165' width='262'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                    </a>
                </div>
            @endforeach
            </div>
        </div>
    </div>
    <!-- last publication end -->

    <!-- best trajet -->
    <div class="gallery-secion content-area-11">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1>Nos trajets réguliers</h1>
            </div>
            <div class="row">
            @foreach($trajets as $trajet)

                <div class="col-lg-4">
                    <p><i class="fa fa-star"style="color:gold;" aria-hidden="true"></i>
                    <i class="fa fa-star" style="color:gold;"aria-hidden="true"></i>
                    <i class="fa fa-star" style="color:gold;"aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" style="color:gold;"aria-hidden="true"></i>
                    <i class="fa fa-star-o" style="color:gold;"aria-hidden="true"></i></p>
                    <!-- Card -->
                    <div class="card" style="background-color:white;border-style: solid;border-color: #3ac4fa">
                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <center><h3 class="card-title" style="color:black"><b>{{$trajet->town_out}} - {{$trajet->town_in}}</b></h3></center> 
                        </div>
                    </div>
                    <br>
                    <!-- Card -->
                </div>
            @endforeach
            </div>
        </div>
    </div>
    <!-- best trajet end -->

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
            </div>
            <div class="carousel-cell col-lg-4 col-md-6 col-sm-6 col-xs-12">
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
