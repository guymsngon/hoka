@extends('layout')

@section('content')

<div class="col-lg-12">
    <H1 class="text-center font-weight-bolder">COMMENT BIEN EMBALLER VOS COLIS</H1>
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
                <p>Vous souhaitez expédier un colis mais n'êtes pas sûr de comment l'emballer ? Pour éviter que votre colis
                    arrive en mauvais état ou soit bloqué lors de l'expédition, il est primordial de soigner son emballage. Cela vous
                    évitera tout désagrément et améliorera la satisfaction de votre client. Pour un emballage réussi, suivez simplement ces 4 étapes : </p>
                <img src="" style="height: 200px;width: 400px">

            </div>
            <div>
                <h3>1- Choisissez le type d'emballage adéquat</h3>
                <p>Selon la fragilité de votre produit, privilégiez un carton simple, double ou triple cannelure. Pour les objets de plus de 50 kilos, optez
                    pour la boîte en bois, en métal ou en plastique (sauf pour les cas dangereux)</p>
                <p>Evitez les formes atypiques car votre colis sera disposé sur une surface plane. Certains transporteurs refusent également tout colis qui n'aurait pas une forme classique.</p>
                <p>Veillez à adapter la taille de votre emballage à la taille de votre produit pour éviter trop de flottement. </p>


            </div>
            <div>
                <H4>⚠️ Attention ⚠️</H4>
                <p>Au moment de passer commande, inscrivez les dimensions extérieures de votre carton et non intérieures, souvent communiquées par les fournisseurs d'emballage. Vous éviterez ainsi toute refacturation par le transporteur.</p>
            </div>
            <div>
                <h3>2- Calez et disposez vos produits </h3>
                <p>Utilisez des matériaux comme le papier bulle (idéal pour les produits fragiles), papier kraft, polystyrène, coussins d'air comprimé ou encore des journaux.</p>
                <p>Si vous avez plusieurs objets dans un même carton, placez le plus lourd en bas du carton et répartissez le reste dans le carton. Veillez également à ne pas mettre deux objets fragiles en contact dans le même emballage.</p>
            </div>
            <div class="col-lg-12">
                <h3> 3- Fermez correctement l'emballage</h3>
                <p>Un doute sur le placement du ruban adhésif ? Nous vous conseillons la méthode en H, adaptée à tout type de colis, fragile ou non : placez le ruban sur toute la longueur du carton en haut et en bas, ainsi qu'aux 4 extrémités. Choisissez un ruban adhésif de 5 cm minimum. </p>
                <img class="col-lg-6" src="" style="height: 200px; width: 300px">
                <p class="col-lg-6">N'utilisez pas de ficelle ou d'emballage à poignée ou rabat, certains transporteurs pourraient refuser votre colis. DPD n'accepte pas les colis encerclés.</p>

            </div>
            <div>
                <h3>4- Préparez-vous pour l'expédition</h3>
                <p>Maintenant que votre colis est bien emballé et que votre carton est correctement fermé, il ne vous reste plus que la touche finale ! Imprimez votre bordereau et collez-le sur une surface plane, sur le haut de votre carton : il ne doit en aucun cas être masqué ou servir à
                    fermer le carton. Vous êtes maintenant prêt(e) à expédier !</p>
                <div class="col-lg-6">
                    <img class="" src="" style="height: 200px;width: 300px">
                </div>

                <div class="col-lg-6">
                    <p>Bon à savoir : </p>
                    <p>Certains transporteurs facturent au poids volumétrique : le poids de votre colis sera calculé sur la base de son volume et non de son poids. Dans ce cas, réduisez le volume de votre envoi en répartissant vos objets en plusieurs petits colis.</p>
                </div>
                <div>
                    <p>Un doute sur les dimensions de votre colis ? Découvrez l'importance des informations fournies lors de votre envoi.</p>
                </div>
                <div class="text-center">
                    <p>Restez informés !</p>
                </div>
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