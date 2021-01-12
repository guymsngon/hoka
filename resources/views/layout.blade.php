<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from storage.googleapis.com/theme-vessel/hotel-alpha/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jun 2020 18:41:24 GMT -->
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TFC5925');</script>
    <!-- End Google Tag Manager -->
    <title>Hokaafoza | Réservation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-submenu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/linearicons/style.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{asset('css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{asset('css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{asset('css/flickity.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{asset('css/flickity.min.css')}}">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{asset('css/skins/blue-light-2.css')}}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/ie10-viewport-bug-workaround.css')}}">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script  src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script  src="{{asset('js/ie-emulation-modes-warning.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script  src="js/html5shiv.min.js"></script>
    <script  src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TFC5925"
                    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="page_loader"></div>

    <!-- Main header start -->
    <header class="main-header main-header-4">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navigation" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="{{route('index')}}" class="logo">
                        <h3>Logo</h3>
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="navbar-collapse collapse" role="navigation" aria-expanded="true" id="app-navigation">
                    <ul class="nav navbar-nav pull-right">
                        <li><a href="{{route('search')}}"><i class="fa fa-search"></i>  Rechercher un Trajet</a></li>
                        <li><a href="{{route('givetrajet')}}"><i class="fa fa-plus"></i> Proposer un Trajet</a></li>
                        <li><a href="{{route('annonce')}}"><i class="fa fa-plus"></i>  Proposer une Annonce</a></li>
                        @guest
                            <li><a href="{{route('register')}}"><i class="fa fa-user-circle-o"></i>    Inscription</a></li>
                            <li><a href="{{route('login')}}"><i class="fa fa-user-circle"></i>     Connexion</a></li>
                        @else
                            <li><a href="{{route('profilparam')}}"><i class="fa fa-user-circle-o"></i>SALUT, {{ Auth::user()->name }}</a></li>
                            <li><a href="{{route('logout')}}"><i class="fa fa-user-circle"></i>     Deconnexion</a></li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- Main header end -->

    @yield('content')

    <!-- Footer start -->
    <footer class="main-footer clearfix">
        <div class="container">
            <!-- Footer info-->
            <div class="footer-info">
                <div class="row">
                    <!-- Contact Us -->
                    <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-item">
                            <div class="main-title-2">
                                <h1>Contactez nous</h1>
                            </div>
                            <ul class="personal-info">
                                <li>
                                    <a href="">                                
                                        <i class="fa fa-question"></i>
                                        Foire aux Questions
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-phone"></i>
                                        Nous contacter
                                    </a>
                                </li>
                                <li>
                                    <a href="">                                
                                        <i class="fa fa-id-card"></i>
                                        Qui somme nous 
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Gallery -->
                    <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-item gallery">
                            <div class="main-title-2">
                                <h1>A propos</h1>
                            </div>
                            <ul class="personal-info">
                                <li>
                                    <a href="">
                                        <i class="fa fa-info"></i>
                                        Comment ça marche
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-map"></i>
                                        Trajets Quotidiens
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-lightbulb-o"></i>
                                        Informations légales 
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-lightbulb-o"></i>
                                        Nos prestations et services
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Newsletter -->
                    <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-item">
                            <div class="main-title-2">
                                <h1>Social</h1>
                            </div>
                            <ul class="personal-info">
                                <li><a href="staff.html"><i class="fa fa-facebook"></i>     Facebook</a></li>
                                <li><a href="staff-2.html" ><i class="fa fa-twitter"></i>   Twitter</a></li>
                                <li><a href="staff-2.html"><i class="fa fa-instagram"></i>  Instagram</a></li>
                                <li><a href="staff-2.html"><i class="fa fa-youtube"></i>    Youtube</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer end -->

    <!-- Copy right start -->
    <div class="copy-right">
        <div class="container">
            &copy;  2020 <a href="http://themevessel.com/" target="_blank">Hokaafoza</a>. Tout droit reservés. 
        </div>
    </div>
    <!-- Copy end right-->

    <script  src="{{asset('js/jquery-2.2.0.min.js')}}"></script>
    <script  src="{{asset('js/bootstrap.min.js')}}"></script>
    <script  src="{{asset('js/bootstrap-submenu.js')}}"></script>
    <script  src="{{asset('js/jquery.mb.YTPlayer.js')}}"></script>
    <script  src="{{asset('js/wow.min.js')}}"></script>
    <script  src="{{asset('js/bootstrap-select.min.js')}}"></script>
    <script  src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <script  src="{{asset('js/jquery.scrollUp.js')}}"></script>
    <script  src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script  src="{{asset('js/jquery.filterizr.js')}}"></script>
    <script  src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
    <script  src="{{asset('js/app.js')}}"></script>
    <script  src="{{asset('js/flickity.pkgd.js')}}"></script>
    <script  src="{{asset('js/flickity.pkgd.min.js')}}"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script  src="{{asset('js/ie10-viewport-bug-workaround.js')}}"></script>
    <!-- Custom javascript -->
</body>

<!-- Mirrored from storage.googleapis.com/theme-vessel/hotel-alpha/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jun 2020 18:41:33 GMT -->
</html>