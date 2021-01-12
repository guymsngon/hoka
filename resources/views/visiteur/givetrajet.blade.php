@extends('layout')

@section('content')

<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>PROPOSITION</h1>
            <ul class="breadcrumbs">
                <li><a href="{{route('home')}}">Accueil</a></li>
                <li class="active">Proposition de Trajets</li>
            </ul>
        </div>
    </div>
</div>
</br>
<div class="container">
    <div class="container">
        <div class="search-contents search-contents-3">
            <form method="post" action="{{ route('searchtrajet') }}">
                <div class="row search-your-details">
                    <div class="col-md-12">
                        <div class="search-your-rooms">
                            <h4>Rechercher Votre <span>Trajets</span></h4>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-6">
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
                    <div class="col-md-2 col-sm-2 col-xs-6">
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
                    <div class="col-md-2 col-sm-2 col-xs-6">
                    <div class="form-group">
                                <input type="text" name="date_out" class="btn-default datepicker" required placeholder="Date de départ">
                            </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-6">
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

<center>
    <div class="container">
    <br>
        <div class="row">
            <div class="col-lg-3" onclick="Traite0()" id="0" style="background-color: #3ac4fa"> Temps</div>
            <div class="col-lg-2" onclick="Traite1()" id="1"  >Lieu</div>
            <div class="col-lg-2" onclick="Traite2()" id="2" >Mensurations</div>
            <div class="col-lg-2" onclick="Traite3()" id="3" >Validation</div>
            <div class="col-lg-3" onclick="Traite4()" id="4" >Annonces</div>
        </div>
    </div>
</center>

<!-- Rooms section start -->
<div class="contact-1 content-area-6">
    <div class="container">
        @if(session('error'))
            <div class="alert alert-danger" role="alert">
                {{session('error')}}
            </div>
        @endif
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
        @endif
        <!-- Main title -->
        <div class="main-title">
            <h1>PROPOSER UN TRAJET </h1>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-7 col-sm-6">
                <!-- Contact form start -->
                <div class="contact-form">
                    <form id="contact_form"class="md-form" method="post" action="{{route('trajet.store')}}" enctype=multipart/form-data>
                    @csrf
                        <!-- time -->
                        <div id="time" style="display:block">
                            <div class="col-lg-12 col-md-6 col-sm-12">
                                <div class="form-group fullname">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-4">
                                            <label for="">Choisir le type de transport :</label>
                                        </div>
                                        <div class="col-lg-2 col-sm-2">
                                            <div class="checkbox">
                                                <div class="ez-checkbox pull-left">
                                                    <label style="color:#3ac4fa">
                                                    <input class="form-check-input" type="checkbox" onclick="isbateu()" name="bateau" value="1" id="bateau">
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
                                                    <input class="form-check-input" type="checkbox" name="avion" value="1" id="remember">
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
                                                    <input class="form-check-input" type="checkbox" name="route" value="1" id="remember">
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
                                                    <input class="form-check-input" type="checkbox" name="train" value="1" id="remember">
                                                        Train
                                                    </label>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3"><label for="">Date de départ :</label></div>
                                <div class="col-lg-5"><input type="date" name="date_out" class="input-text form-control form-control" id=""></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-3"><label for="">Date de d'arrivée :</label></div>
                                <div class="col-lg-5"><input type="date" name="date_in" class="input-text form-control form-control" id=""></div>
                            </div>
                            <br>
                            <a onclick="lieu()" class="pull-right btn-md btn-theme">Suivant</a>
                        </div>
                        <!-- end time -->

                        <!-- lieu -->
                        <div id="lieu" style="display:none">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group fullname">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label for="">Lieu de départ :</label>
                                        </div>
                                        
                                        <div class="col-lg-1">
                                            <label for=""><h6>Pays :</h6> </label>
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="text" name="country_out" class="input-text form-control" placeholder="Ex: France">
                                        </div>
                                        <div class="col-lg-1">
                                            <label for=""><h6>Ville :</h6> </label>
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="text" name="town_out" class="input-text form-control" placeholder="Ex: Paris">
                                        </div><div class="col-lg-1">
                                            <label for=""><h6>Adresse :</h6> </label>
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="text" name="address_out" class="input-text form-control" placeholder="Ex: Rue 4208">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label for="">Lieu d'arrivé : </label>
                                    </div>
                                    
                                    <div class="col-lg-1">
                                        <label for=""><h6>Pays :</h6> </label>
                                    </div>
                                    <div class="col-lg-2">
                                        <input type="text" name="country_in" class="input-text form-control" placeholder="Ex: France">
                                    </div>
                                    <div class="col-lg-1">
                                        <label for=""><h6>Ville :</h6> </label>
                                    </div>
                                    <div class="col-lg-2">
                                        <input type="text" name="country_in" class="input-text form-control" placeholder="Ex: Paris">
                                    </div><div class="col-lg-1">
                                        <label for=""><h6>Adresse :</h6> </label>
                                    </div>
                                    <div class="col-lg-2">
                                        <input type="text" name="address_in" class="input-text form-control" placeholder="Ex: Rue 4208">
                                    </div>
                                </div>
                                <br>
                            </div>
                            <a  onclick="mensu()" class="pull-right btn-md btn-theme">Suivant</a>
                            <a  onclick="time()" class="pull-left btn-md btn-theme">Précedent</a>
                        </div>
                        <!-- end lieu -->

                        <!-- mensu -->
                        <div id="mensu" style="display:none">
                            <div class="container">
                                <div class="col-lg-5 col-md-6 col-sm-12">
                                    </br>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="">Incoterm : </label>
                                        </div>
                                        <div class="col-lg-8">
                                            <select class="form-control input-text" name="incorterm">
                                                <option value="FOB">FOB</option>
                                                <option value="CIF">CIF</option>
                                                <option value="Autre">Autre</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6 col-sm-12">
                                    </br>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for=""> Modèle de conteneur : </label>
                                        </div>
                                        <div class="col-lg-8">
                                            <select class="form-control input-text" name="content_model">
                                                <option value=""> Modèle de conteneur:</option>
                                                <option value="model 1">model 1</option>
                                                <option value="model 2">Model 2</option>
                                                <option value="model 3">Model 3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    </br>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="">Mensurations de L'espace total : </label>
                                        </div>
                                        <div class="col-lg-3 col-md-12 col-sm-6">
                                            <label for=""><h6>Longueur :</h6>   </label>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="number" name="length" class="input-text form-control" placeholder="Ex:4">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            
                                        </div>
                                        <div class="col-lg-3 col-md-12 col-sm-6">
                                            <label for=""><h6>Largeur :</h6>   </label>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="number" name="width" class="input-text form-control" placeholder="Ex:3">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            
                                        </div>
                                        <div class="col-lg-3 col-md-12 col-sm-6">
                                            <label for=""><h6>Hauteur :</h6>   </label>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="number" name="height" class="input-text form-control" placeholder="Ex:2">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    </br>
                                    <div class="form-group fullname">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6">
                                                <label for="">Unité de Poids : </label>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                <div class="checkbox">
                                                    <div class="ez-checkbox pull-left">
                                                        <label style="color:black">
                                                        <input class="form-check-input" type="checkbox" name="weight_unity" value="Kgs" id="remember">
                                                            kgs
                                                        </label>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                <div class="checkbox">
                                                    <div class="ez-checkbox pull-left">
                                                        <label style="color:black">
                                                        <input class="form-check-input" type="checkbox" name="weight_unity" value="Ibs" id="remember">
                                                            Ibs
                                                        </label>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    </br>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="">Poids total : </label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input type="number" name="weight" class="input-text form-control" placeholder="Ex: 30 (en cm²)">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <div class="form-group fullname">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6">
                                                <label for="">Assurance : </label>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-6">
                                                <div class="checkbox">
                                                    <div class="ez-checkbox pull-left">
                                                        <label style="color:black">
                                                        <input class="form-check-input" onclick="OnAssurance()" type="checkbox" value="oui" name="" id="assOn">
                                                            Oui
                                                        </label>
                                                        <select name="assurance"  class="form-control input-text" id="assu" disabled>
                                                            <option value="choix1">choix1</option>
                                                            <option value="choix2">choix2</option>
                                                            <option value="choix3">choix3</option>
                                                        </select>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-6">
                                                <div class="checkbox">
                                                    <div class="ez-checkbox pull-left">
                                                        <label style="color:black">
                                                        <input class="form-check-input" onclick="OffAssurance()" type="checkbox" value="Aucune" name="noAss" id="assoff">
                                                            Non
                                                        </label>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="">Detail Assurance : </label>
                                        </div>
                                        <div class="col-lg-8">
                                            <textarea name="detail_assurance" class="input-text form-control" placeholder="Ex: Les détails de l'assurance"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <div class="form-group fullname">
                                        <div class="row">
                                            <div class="col-lg-8 col-sm-6">
                                                <label for="">Autoriser des Marchandises dangereuses ?  </label>
                                            </div>
                                            <div class="col-lg-2 col-md-12 col-sm-6">
                                                <div class="checkbox">
                                                    <div class="ez-checkbox pull-left">
                                                        <label style="color:black">
                                                        <input class="form-check-input" checked type="checkbox" name="danger_merchandise" value="1" id="deviceOn">
                                                            Oui
                                                        </label>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-12 col-sm-6">
                                                <div class="checkbox">
                                                    <div class="ez-checkbox pull-left">
                                                        <label style="color:black">
                                                        <input class="form-check-input" onclick="dangerDevice()" type="checkbox" name="danger_merchandise" value="0" id="deviceOff">
                                                            Non
                                                        </label>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    </br>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="">Si oui, préciser la classe ? :</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <select class="selectpicker search-fields form-control-2" required id="classe" name="classe_merchandise">
                                                <option>Seletionnez une Classe </option>
                                                <option>Classe A</option>
                                                <option>Classe B</option>
                                                <option>Classe C</option>
                                            </select>
                                            <small id="emailHelp" class="form-text text-muted"><a href="http://" style="color:#3ac4fa">Voir page de présentation tableau de classe et conditions</a></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    </br>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="">Nature des marchandises non autorisées : </label>
                                        </div>
                                        <div class="col-lg-8">
                                            <textarea name="nature_merchandise" class="input-text form-control" placeholder="Ex: Nature des marchandises"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    </br>
                                    </br>
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <label for="">Images de l'espace de stockage : </label>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="file-field">
                                                <div class="btn btn-primary btn-sm float-left">
                                                    <input type="file" name="images">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    </br>
                                    </br>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="">Numéro de Téléphone : </label>
                                            <input type="tel" name="phone" class="form-control" id="" placeholder="Ex: +231 655 77 77 65">
                                            <small><i><b>statut vérification (vérifié ou Non vérifié)</b></i></small>
                                        </div>
                                        <div class="pull-right">
                                            <a href="http://">Envoyer le code de vérification</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 clearfix">
                                    </br>
                                    <label for="">Information complémentaire </label>
                                    <div class="form-group message">
                                        <textarea class="input-text form-control" name="info_sup" placeholder="Saisir votre méssage"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    </br>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group fullname">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label for=""><h3><b> Prix transport :</b></h3> </label>
                                                    </div>
                                                    <div class="col-lg-7">
                                                    <small>(Prix en cm3)</small>
                                                        <input type="text" name="tarif" class="form-control" placeholder="Ex: 12 000">
                                                        <small style="color: red">Une déduction de xx % sera déduit pour nos frais de commission</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <a onclick="validate()" class="pull-right btn-md btn-theme">Suivant</a>
                                <a onclick="lieu()" class="pull-left btn-md btn-theme">Précedent</a>
                            </div>
                        </div>
                        <!-- end mensu -->
                        
                        <!-- vallidate -->
                        <div id="validate" style="display:none">
                            <div class="col-lg-12 col-md-6 col-sm-12">
                                <div class="form-group fullname">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-4">
                                            <label for="">Choisir le type de transport :</label>
                                        </div>
                                        <div class="col-lg-2 col-sm-2">
                                            <div class="checkbox">
                                                <div class="ez-checkbox pull-left">
                                                    <label style="color:#3ac4fa">
                                                    <input class="form-check-input" type="checkbox" onclick="isbateu()" name="bateau" value="1" id="bateau">
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
                                                    <input class="form-check-input" type="checkbox" name="avion" value="1" id="remember">
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
                                                    <input class="form-check-input" type="checkbox" name="route" value="1" id="remember">
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
                                                    <input class="form-check-input" type="checkbox" name="train" value="1" id="remember">
                                                        Train
                                                    </label>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3"><label for="">Date de départ :</label></div>
                                <div class="col-lg-5"><input type="date" name="date_out" class="input-text form-control form-control" id=""></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-3"><label for="">Date de d'arrivée :</label></div>
                                <div class="col-lg-5"><input type="date" name="date_in" class="input-text form-control form-control" id=""></div>
                            </div>
                            <!--  -->
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group fullname">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label for="">Lieu de départ :</label>
                                        </div>
                                        
                                        <div class="col-lg-1">
                                            <label for=""><h6>Pays :</h6> </label>
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="text" name="country_out" class="input-text form-control" placeholder="Ex: France">
                                        </div>
                                        <div class="col-lg-1">
                                            <label for=""><h6>Ville :</h6> </label>
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="text" name="town_out" class="input-text form-control" placeholder="Ex: Paris">
                                        </div><div class="col-lg-1">
                                            <label for=""><h6>Adresse :</h6> </label>
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="text" name="address_out" class="input-text form-control" placeholder="Ex: Rue 4208">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label for="">Lieu d'arrivé : </label>
                                    </div>
                                    
                                    <div class="col-lg-1">
                                        <label for=""><h6>Pays :</h6> </label>
                                    </div>
                                    <div class="col-lg-2">
                                        <input type="text" name="country_in" class="input-text form-control" placeholder="Ex: France">
                                    </div>
                                    <div class="col-lg-1">
                                        <label for=""><h6>Ville :</h6> </label>
                                    </div>
                                    <div class="col-lg-2">
                                        <input type="text" name="country_in" class="input-text form-control" placeholder="Ex: Paris">
                                    </div><div class="col-lg-1">
                                        <label for=""><h6>Adresse :</h6> </label>
                                    </div>
                                    <div class="col-lg-2">
                                        <input type="text" name="address_in" class="input-text form-control" placeholder="Ex: Rue 4208">
                                    </div>
                                </div>
                                <br>
                            </div>
                            <!--  -->
                            <div class="container">
                                <div class="col-lg-5 col-md-6 col-sm-12">
                                    </br>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="">Incoterm : </label>
                                        </div>
                                        <div class="col-lg-8">
                                            <select class="form-control input-text" name="incorterm">
                                                <option value="FOB">FOB</option>
                                                <option value="CIF">CIF</option>
                                                <option value="Autre">Autre</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6 col-sm-12">
                                    </br>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for=""> Modèle de conteneur : </label>
                                        </div>
                                        <div class="col-lg-8">
                                            <select class="form-control input-text" name="content_model">
                                                <option value=""> Modèle de conteneur:</option>
                                                <option value="model 1">model 1</option>
                                                <option value="model 2">Model 2</option>
                                                <option value="model 3">Model 3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    </br>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="">Mensurations de L'espace total : </label>
                                        </div>
                                        <div class="col-lg-3 col-md-12 col-sm-6">
                                            <label for=""><h6>Longueur :</h6>   </label>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="number" name="length" class="input-text form-control" placeholder="Ex:4">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            
                                        </div>
                                        <div class="col-lg-3 col-md-12 col-sm-6">
                                            <label for=""><h6>Largeur :</h6>   </label>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="number" name="width" class="input-text form-control" placeholder="Ex:3">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            
                                        </div>
                                        <div class="col-lg-3 col-md-12 col-sm-6">
                                            <label for=""><h6>Hauteur :</h6>   </label>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="number" name="height" class="input-text form-control" placeholder="Ex:2">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    </br>
                                    <div class="form-group fullname">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6">
                                                <label for="">Unité de Poids : </label>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                <div class="checkbox">
                                                    <div class="ez-checkbox pull-left">
                                                        <label style="color:black">
                                                        <input class="form-check-input" type="checkbox" name="weight_unity" value="Kgs" id="remember">
                                                            kgs
                                                        </label>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                <div class="checkbox">
                                                    <div class="ez-checkbox pull-left">
                                                        <label style="color:black">
                                                        <input class="form-check-input" type="checkbox" name="weight_unity" value="Ibs" id="remember">
                                                            Ibs
                                                        </label>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    </br>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="">Poids total : </label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input type="number" name="weight" class="input-text form-control" placeholder="Ex: 30 (en cm²)">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <div class="form-group fullname">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6">
                                                <label for="">Assurance : </label>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-6">
                                                <div class="checkbox">
                                                    <div class="ez-checkbox pull-left">
                                                        <label style="color:black">
                                                        <input class="form-check-input" onclick="OnAssurance()" type="checkbox" value="oui" name="" id="assOn">
                                                            Oui
                                                        </label>
                                                        <select name="assurance"  class="form-control input-text" id="assu" disabled>
                                                            <option value="choix1">choix1</option>
                                                            <option value="choix2">choix2</option>
                                                            <option value="choix3">choix3</option>
                                                        </select>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-6">
                                                <div class="checkbox">
                                                    <div class="ez-checkbox pull-left">
                                                        <label style="color:black">
                                                        <input class="form-check-input" onclick="OffAssurance()" type="checkbox" value="Aucune" name="noAss" id="assoff">
                                                            Non
                                                        </label>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="">Detail Assurance : </label>
                                        </div>
                                        <div class="col-lg-8">
                                            <textarea name="detail_assurance" class="input-text form-control" placeholder="Ex: Les détails de l'assurance"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <div class="form-group fullname">
                                        <div class="row">
                                            <div class="col-lg-8 col-sm-6">
                                                <label for="">Autoriser des Marchandises dangereuses ?  </label>
                                            </div>
                                            <div class="col-lg-2 col-md-12 col-sm-6">
                                                <div class="checkbox">
                                                    <div class="ez-checkbox pull-left">
                                                        <label style="color:black">
                                                        <input class="form-check-input" checked type="checkbox" name="danger_merchandise" value="1" id="deviceOn">
                                                            Oui
                                                        </label>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-12 col-sm-6">
                                                <div class="checkbox">
                                                    <div class="ez-checkbox pull-left">
                                                        <label style="color:black">
                                                        <input class="form-check-input" onclick="dangerDevice()" type="checkbox" name="danger_merchandise" value="0" id="deviceOff">
                                                            Non
                                                        </label>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    </br>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="">Si oui, préciser la classe ? :</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <select class="selectpicker search-fields form-control-2" required id="classe" name="classe_merchandise">
                                                <option>Seletionnez une Classe </option>
                                                <option>Classe A</option>
                                                <option>Classe B</option>
                                                <option>Classe C</option>
                                            </select>
                                            <small id="emailHelp" class="form-text text-muted"><a href="http://" style="color:#3ac4fa">Voir page de présentation tableau de classe et conditions</a></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    </br>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="">Nature des marchandises non autorisées : </label>
                                        </div>
                                        <div class="col-lg-8">
                                            <textarea name="nature_merchandise" class="input-text form-control" placeholder="Ex: Nature des marchandises"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    </br>
                                    </br>
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <label for="">Images de l'espace de stockage : </label>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="file-field">
                                                <div class="btn btn-primary btn-sm float-left">
                                                    <input type="file" name="images">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    </br>
                                    </br>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="">Numéro de Téléphone : </label>
                                            <input type="tel" name="phone" class="form-control" id="" placeholder="Ex: +231 655 77 77 65">
                                            <small><i><b>statut vérification (vérifié ou Non vérifié)</b></i></small>
                                        </div>
                                        <div class="pull-right">
                                            <a href="http://">Envoyer le code de vérification</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 clearfix">
                                    </br>
                                    <label for="">Information complémentaire </label>
                                    <div class="form-group message">
                                        <textarea class="input-text form-control" name="info_sup" placeholder="Saisir votre méssage"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    </br>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group fullname">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label for=""><h4><b> Prix Unitaire :</b></h4> </label>
                                                    </div>
                                                    <div class="col-lg-7">
                                                    <small>(Prix en cm3)</small>
                                                        <input type="text" name="tarif" class="form-control" placeholder="Ex: 12 000">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group fullname">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label for=""><h4><b> Frais Hokaafoza:</b></h4> </label>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <input type="text" name="tarif" class="form-control" placeholder="Ex: 12 000">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group fullname">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label for=""><h4><b> Montant Global à Percevoir :</b></h4> </label>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <input type="text" name="tarif" class="form-control" placeholder="Ex: 12 000">
                                                        <small style="color: red">Une déduction de xx % sera déduit pour nos frais de commission</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <input type="submit" style="background-color: #3ac4fa; color:white" value="Valider" class="pull-right btn-md btn-theme">
                                <a onclick="lieu()" class="pull-left btn-md btn-theme">Précedent</a>
                            </div>

                        </div>
                        <!-- end vallidate -->
                    </form>
                </div>   
                <!-- Contact form end -->
            </div>
        </div>            
    </div>            
</div>
<!-- Rooms  section end -->

@endsection
<script>
    function isbateu(){
        document.getElementById("bat").disabled = !document.getElementById("bat").disabled;
        document.getElementById("model").disabled = !document.getElementById("model").disabled;
    }

    function dangerDevice(){
        document.getElementById("classe").disabled = !document.getElementById("classe").disabled;
    }

    function time(){
        document.getElementById("time").style.display = "block";
        document.getElementById("lieu").style.display = "none";
        document.getElementById("mensu").style.display = "none";
        document.getElementById("validate").style.display = "none";
        document.getElementById("0").style.backgroundColor = "#3ac4fa";
        document.getElementById("1").style.backgroundColor = "white";
        document.getElementById("2").style.backgroundColor = "white";
        document.getElementById("3").style.backgroundColor = "white";
        document.getElementById("4").style.backgroundColor = "white";
    }
    function lieu(){
        document.getElementById("time").style.display = "none";
        document.getElementById("lieu").style.display = "block";
        document.getElementById("mensu").style.display = "none";
        document.getElementById("validate").style.display = "none";
        document.getElementById("0").style.backgroundColor = "white";
        document.getElementById("1").style.backgroundColor = "#3ac4fa";
        document.getElementById("2").style.backgroundColor = "white";
        document.getElementById("3").style.backgroundColor = "white";
        document.getElementById("4").style.backgroundColor = "white";
    }
    function mensu(){
        document.getElementById("time").style.display = "none";
        document.getElementById("lieu").style.display = "none";
        document.getElementById("mensu").style.display = "block";
        document.getElementById("validate").style.display = "none";
        document.getElementById("0").style.backgroundColor = "white";
        document.getElementById("1").style.backgroundColor = "white";
        document.getElementById("2").style.backgroundColor = "#3ac4fa";
        document.getElementById("3").style.backgroundColor = "white";
        document.getElementById("4").style.backgroundColor = "white";
    }
    function validate(){
        document.getElementById("time").style.display = "none";
        document.getElementById("lieu").style.display = "none";
        document.getElementById("mensu").style.display = "none";
        document.getElementById("validate").style.display = "block";
        document.getElementById("0").style.backgroundColor = "white";
        document.getElementById("1").style.backgroundColor = "white";
        document.getElementById("2").style.backgroundColor = "white";
        document.getElementById("3").style.backgroundColor = "#3ac4fa";
        document.getElementById("4").style.backgroundColor = "white";
    }

    function Traite0(){
        document.getElementById("temps").style.display = "block"
        document.getElementById("lieu").style.display = "none"
        document.getElementById("mensu").style.display = "none"
        document.getElementById("valid").style.display = "none"
        document.getElementById("2").style.backgroundColor = "white";
        document.getElementById("0").style.backgroundColor = "#3ac4fa";
        document.getElementById("1").style.backgroundColor = "white";
        document.getElementById("3").style.backgroundColor = "white";
    }
    function Traite1(){
        document.getElementById("temps").style.display = "none"
        document.getElementById("lieu").style.display = "block"
        document.getElementById("mensu").style.display = "none"
        document.getElementById("valid").style.display = "none"
        document.getElementById("2").style.backgroundColor = "white";
        document.getElementById("1").style.backgroundColor = "#3ac4fa";
        document.getElementById("0").style.backgroundColor = "white";
        document.getElementById("3").style.backgroundColor = "white";
    }

    function Traite2(){
        document.getElementById("temps").style.display = "none"
        document.getElementById("lieu").style.display = "none"
        document.getElementById("mensu").style.display = "block"
        document.getElementById("valid").style.display = "none"
        document.getElementById("1").style.backgroundColor = "white";
        document.getElementById("2").style.backgroundColor = "#3ac4fa";
        document.getElementById("0").style.backgroundColor = "white";
        document.getElementById("3").style.backgroundColor = "white";
    }

    function Traite3(){
        document.getElementById("temps").style.display = "none"
        document.getElementById("lieu").style.display = "none"
        document.getElementById("mensu").style.display = "none"
        document.getElementById("valid").style.display = "block"
        document.getElementById("1").style.backgroundColor = "white";
        document.getElementById("3").style.backgroundColor = "#3ac4fa";
        document.getElementById("0").style.backgroundColor = "white";
        document.getElementById("2").style.backgroundColor = "white";
    }
</script>