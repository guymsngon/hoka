@extends('layout')

@section('content')

<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>RESERVATION</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Accueil</a></li>
                <li class="active">Reservation</li>
            </ul>
        </div>
    </div>
</div>
</br>
<div class="container">
    <div class="container">
        <div class="search-contents search-contents-3">
            <form method="GET">
                <div class="row search-your-details">
                    <div class="col-md-12">
                        <div class="search-your-rooms">
                            <h4>Rechercher Votre <span>Trajets</span></h4>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-6">
                        <div class="form-group">
                            <select class="selectpicker search-fields form-control-2" name="adults">
                                <option>Lieu de départ </option>
                                <option>Yaoundé</option>
                                <option>Douala</option>
                                <option>Limbe</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-6">
                        <div class="form-group">
                            <select class="selectpicker search-fields form-control-2" name="adults">
                                <option>Lieu d'arrivée </option>
                                <option>Yaoundé</option>
                                <option>Douala</option>
                                <option>Limbe</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-6">
                        <div class="form-group">
                            <input type="text" class="btn-default datepicker" placeholder="Date de départ">
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-6">
                        <div class="form-group">
                            <select class="selectpicker search-fields form-control-2" name="children">
                                <option>Type de colis</option>
                                <option>type 1</option>
                                <option>type 2</option>
                                <option>type 3</option>
                                <option>type 4</option>
                                <option>type 5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-6">
                        <div class="form-group">
                            <button class="search-button btn-theme">Rechercher</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Rooms section start -->
<div class="contact-1 content-area-6">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>VOTRE RESERVATION A PORTEE DE MAIN</h1>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                <!-- Contact form start -->
                <div class="contact-form">
                    <form id="contact_form" action="https://storage.googleapis.com/theme-vessel/hotel-alpha/index.html" method="GET" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group fullname">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label for="">Code Trajets : </label>
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="text" name="full-name" class="input-text" placeholder="Ex: 1244234 ">
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="">Espace : </label>
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="text" name="full-name" class="input-text" placeholder="Ex: moyen">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group fullname">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-4">
                                            <label for="">Type de transport : </label>
                                        </div>
                                        <div class="col-lg-2 col-sm-2">
                                            <div class="checkbox">
                                                <div class="ez-checkbox pull-left">
                                                    <label style="color:#3ac4fa">
                                                    <input class="form-check-input" type="checkbox" onclick="isbateu()" name="bateau" id="bateau">
                                                        Bateau
                                                    </label>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-sm-2">
                                            <div class="checkbox">
                                                <div class="ez-checkbox pull-left">
                                                    <label style="color:#3ac4fa">
                                                    <input class="form-check-input" type="checkbox" name="" id="remember">
                                                        Avion
                                                    </label>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-sm-2">
                                            <div class="checkbox">
                                                <div class="ez-checkbox pull-left">
                                                    <label style="color:#3ac4fa">
                                                    <input class="form-check-input" type="checkbox" name="" id="remember">
                                                        Route
                                                    </label>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-sm-2">
                                            <div class="checkbox">
                                                <div class="ez-checkbox pull-left">
                                                    <label style="color:#3ac4fa">
                                                    <input class="form-check-input" type="checkbox" name="" id="remember">
                                                        Train
                                                    </label>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="">Lieu de départ : </label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="full-name" class="input-text" placeholder="Ex: Paris">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="">Lieu d’arrivée : </label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="full-name" class="input-text" placeholder="Ex: Paris">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            </br>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="">Intercon : </label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="bat" name="bat" class="input-text" disabled placeholder="Ex:Text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            </br>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="">Nombres de colis : </label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="number" name="full-name" class="input-text" placeholder="Ex: 12">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            </br>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="">Dimensions totales : </label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="number" name="full-name" class="input-text" placeholder="Ex:20 (en cm)">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                                </br>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="">Mensurations des colis </label>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for=""> <i>Longueur :</i>  </label>
                                    </div>
                                    <div class="col-lg-1">
                                        <label for=""> <i>1er</i>  </label>
                                        <input type="number" name="full-name" class="input-text" placeholder="Ex:4">
                                    </div>
                                    <div class="col-lg-1">
                                        <label for=""> <i>2e</i>  </label>
                                        <input type="number" name="full-name" class="input-text" placeholder="Ex:4">
                                    </div>
                                    <div class="col-lg-1">
                                        <label for=""> <i>3e</i>  </label>
                                        <input type="number" name="full-name" class="input-text" placeholder="Ex:4">
                                    </div>
                                    <div class="col-lg-1">
                                        <label for=""> <i>4e</i>  </label>
                                        <input type="number" name="full-name" class="input-text" placeholder="Ex:4">
                                    </div>
                                    <div class="col-lg-1">
                                        <label for=""> <i>5e</i>  </label>
                                        <input type="number" name="full-name" class="input-text" placeholder="Ex:4">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-4">
                                        
                                    </div>
                                    <div class="col-lg-3">
                                        <label for=""> <i>Largeur :</i>  </label>
                                    </div>
                                    <div class="col-lg-1">
                                        <label for=""> <i>1er</i>  </label>
                                        <input type="number" name="full-name" class="input-text" placeholder="Ex:3">
                                    </div>
                                    <div class="col-lg-1">
                                        <label for=""> <i>2e</i>  </label>
                                        <input type="number" name="full-name" class="input-text" placeholder="Ex:3">
                                    </div>
                                    <div class="col-lg-1">
                                        <label for=""> <i>3e</i>  </label>
                                        <input type="number" name="full-name" class="input-text" placeholder="Ex:3">
                                    </div>
                                    <div class="col-lg-1">
                                        <label for=""> <i>4e</i>  </label>
                                        <input type="number" name="full-name" class="input-text" placeholder="Ex:3">
                                    </div>
                                    <div class="col-lg-1">
                                        <label for=""> <i>5e</i>  </label>
                                        <input type="number" name="full-name" class="input-text" placeholder="Ex:3">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-4">
                                        
                                    </div>
                                    <div class="col-lg-3">
                                        <label for=""> <i>Hauteur :</i>  </label>
                                    </div>
                                    <div class="col-lg-1">
                                        <label for=""> <i>1er</i>  </label>
                                        <input type="number" name="full-name" class="input-text" placeholder="Ex:2">
                                    </div>
                                    <div class="col-lg-1">
                                        <label for=""> <i>2e</i>  </label>
                                        <input type="number" name="full-name" class="input-text" placeholder="Ex:2">
                                    </div>
                                    <div class="col-lg-1">
                                        <label for=""> <i>3e</i>  </label>
                                        <input type="number" name="full-name" class="input-text" placeholder="Ex:2">
                                    </div>
                                    <div class="col-lg-1">
                                        <label for=""> <i>4e</i>  </label>
                                        <input type="number" name="full-name" class="input-text" placeholder="Ex:2">
                                    </div>
                                    <div class="col-lg-1">
                                        <label for=""> <i>5e</i>  </label>
                                        <input type="number" name="full-name" class="input-text" placeholder="Ex:2">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            </br>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="">Volume total : </label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="number" name="full-name" class="input-text" placeholder="Ex: 30 (en cm²)">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            </br>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="">Assurance :</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <select class="selectpicker search-fields form-control-2" name="adults">
                                            <option>Seletionnez une Assurance </option>
                                            <option>AXA</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                                </br>
                                <div class="form-group fullname">
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6">
                                            <label for="">Unité de Poids : </label>
                                        </div>
                                        <div class="col-lg-3 col-sm-3">
                                            <div class="checkbox">
                                                <div class="ez-checkbox pull-left">
                                                    <label style="color:black">
                                                    <input class="form-check-input" type="checkbox" name="" id="remember">
                                                        kgs
                                                    </label>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-3">
                                            <div class="checkbox">
                                                <div class="ez-checkbox pull-left">
                                                    <label style="color:black">
                                                    <input class="form-check-input" type="checkbox" name="" id="remember">
                                                        Ibs
                                                    </label>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group fullname">
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6">
                                            <label for="">Marchandises dangereuses ?  </label>
                                        </div>
                                        <div class="col-lg-3 col-sm-3">
                                            <div class="checkbox">
                                                <div class="ez-checkbox pull-left">
                                                    <label style="color:black">
                                                    <input class="form-check-input" type="checkbox" name="" id="remember">
                                                        Oui
                                                    </label>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-3">
                                            <div class="checkbox">
                                                <div class="ez-checkbox pull-left">
                                                    <label style="color:black">
                                                    <input class="form-check-input" type="checkbox" name="" id="remember">
                                                        Non
                                                    </label>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
                                <label for="">Information complémentaire </label>
                                <div class="form-group message">
                                    <textarea class="input-text" name="message" placeholder="Saisir votre méssage"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                                </br>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for=""> <h2>PRIX TOTAL :</h2> </label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="full-name" class="input-text" placeholder="Ex: 12 000">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                                </br>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for=""> <h4>Type de paiement</h4>  </label>
                                    </div>
                                    <div class="col-lg- col-sm-2">
                                        <div class="checkbox">
                                            <div class="ez-checkbox pull-left">
                                                <label style="color:#3ac4fa">
                                                <input class="form-check-input" type="checkbox" name="" id="remember">
                                                    VISA
                                                </label>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-2">
                                        <div class="checkbox">
                                            <div class="ez-checkbox pull-left">
                                                <label style="color:#3ac4fa">
                                                <input class="form-check-input" type="checkbox" name="" id="remember">
                                                    PAYPAL
                                                </label>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg- col-sm-2">
                                        <div class="checkbox">
                                            <div class="ez-checkbox pull-left">
                                                <label style="color:#3ac4fa">
                                                <input class="form-check-input" type="checkbox" name="" id="remember">
                                                    MASTERCARD
                                                </label>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-2">
                                        <div class="checkbox">
                                            <div class="ez-checkbox pull-left">
                                                <label style="color:#3ac4fa">
                                                <input class="form-check-input" type="checkbox" name="" id="remember">
                                                    MOBILE MONEY
                                                </label>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                </br>
                                </br>
                                <div class="">
                                    <button type="submit" class="btn-md btn-theme">Reserver Maintenant</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Contact form end -->
            </div>
        </div>
    </div>
</div>
<!-- Rooms  section end -->

<script>
    function isbateu(){
        document.getElementById("bat").disabled = !document.getElementById("bat").disabled;
    }
</script>

@endsection