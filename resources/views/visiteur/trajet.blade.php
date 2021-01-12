@extends('layout')

@section('content')

<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>RESERVATION</h1>
            <ul class="breadcrumbs">
                <li><a href="{{route('index')}}">Accueil</a></li>
                <li class="active">Reservation</li>
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
            <div class="col-lg-3" onclick="Traite0()" id="0" style="background-color: #3ac4fa"> Trajet</div>
            <div class="col-lg-2" onclick="Traite1()" id="1"  >Assurance</div>
            <div class="col-lg-2" onclick="Traite2()" id="2" >Coordonnées</div>
            <div class="col-lg-2" onclick="Traite3()" id="3" >Paiement</div>
            <div class="col-lg-3" onclick="Traite4()" id="4" >Confirmation</div>
        </div>
    </div>
</center>
<!-- Rooms section start -->
<div class="contact-1 content-area-6">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>VOTRE RESERVATION A PORTEE DE MAIN</h1>
        </div>
        <div class="row">
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
        </div>
        <div class="col-lg-12 col-md-7 col-sm-6">
            <!-- Contact form start -->
            <div class="contact-form">
                <form id="contact_form" method="post" action="{{route('reservation.update',$trajet->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <!-- trajet -->
                    <div class="container" style="display:block" id="tra">
                        <div class="col-lg-12 col-md-6 col-sm-12">
                                <div class="form-group fullname">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="">Code Trajets : </label>
                                            <input type="text" readonly name="full-name"  class="form-control input-text" value="HKAOA{{$trajet->id}}">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="">Espace Disponible : </label>
                                            <input type="number" readonly name="full-name" id="vr" class="form-control input-text" value="{{$trajet->volume}}">
                                        </div>
                                        <div class="col-lg-4 col-sm-2">
                                        <label for="">Type de transport :</label>
                                            @if($trajet->bateau != null)
                                            <input type="text" readonly name="full-name"  class="form-control input-text" value="Bateau">
                                            @elseif($trajet->route != null)
                                            <input type="text" readonly name="full-name"  class="form-control input-text" value="Route">
                                            @elseif($trajet->avion != null)
                                            <input type="text" readonly name="full-name"  class="form-control input-text" value="Avion">
                                            @elseif($trajet->train != null)
                                            <input type="text" readonly name="full-name"  class="form-control input-text" value="Train">
                                            @else
                                            <input type="text" readonly name="full-name"  class="form-control input-text" value="Inconnu">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-12">
                                <div class="form-group fullname">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label for="">Pays de départ :</label>
                                            <input type="text" readonly value="{{$trajet->country_out}}" name="full-name" class="form-control input-text">
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="">Ville de départ :</label>
                                            <input type="text" readonly value="{{$trajet->town_out}}" name="full-name" class="form-control input-text">
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="">Adresse de départ :</label>
                                            <input type="text" readonly value="{{$trajet->address_out}}" name="full-name" class="form-control input-text">
                                        </div>
                                        @if($trajet->bateau != null)
                                        <div class="col-lg-3">
                                            <label for="">Incorterm  :</label>
                                            <input type="text" readonly value="{{$trajet->incorterm}}" id="bat" name="bat" class="form-control input-text">
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-12">
                                <div class="form-group fullname">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label for="">Pays d’arrivée :</label>
                                            <input type="text" readonly value="{{$trajet->country_in}}" name="full-name" class="form-control input-text">
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="">Ville d’arrivée :</label>
                                            <input type="text" readonly value="{{$trajet->town_in}}" name="full-name" class="form-control input-text">
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="">Adresse d’arrivée :</label>
                                            <input type="text" readonly value="{{$trajet->address_in}}" name="full-name" class="form-control input-text">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <center><h3>Mensurations du colis</h3></center><br>
                        
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group fullname">
                                    <div class="row">
                                        <div class="col-lg-3" id="L1">
                                            <label for="">Longueur 1:</label>
                                            <input type="number" id="leng1" name="length1" class="form-control input-text" value = 0>
                                        </div>
                                        <div class="col-lg-2" id="L2" style="display:none">
                                            <label for="">Longueur 2:</label>
                                            <input type="number" id="leng2" name="length2" class="form-control input-text" value = 0>
                                        </div>
                                        <div class="col-lg-2" id="L3" style="display:none">
                                            <label for="">Longueur 3:</label>
                                            <input type="number" id="leng3" name="length3" class="form-control input-text" value = 0>
                                        </div>
                                        <div class="col-lg-2" id="L4" style="display:none">
                                            <label for="">Longueur 4:</label>
                                            <input type="number" id="leng4" name="length4" class="form-control input-text" value = 0>
                                        </div>
                                        <div class="col-lg-3" id="L5" style="display:none">
                                            <label for="">Longueur 5:</label>
                                            <input type="number" id="leng5" name="length5" class="form-control input-text" value = 0>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group fullname">
                                    <div class="row">
                                        <div class="col-lg-3" id="l1">
                                            <label for="">Largeur 1:</label>
                                            <input type="number" id="width1" name="width1" class="form-control input-text" value = 0>
                                        </div>
                                        <div class="col-lg-2" id="l2" style="display:none">
                                            <label for="">Largeur 2:</label>
                                            <input type="number" id="width2" name="width2" class="form-control input-text" value = 0>
                                        </div>
                                        <div class="col-lg-2" id="l3" style="display:none">
                                            <label for="">Largeur 3:</label>
                                            <input type="number" id="width3" name="width3" class="form-control input-text" value = 0>
                                        </div>
                                        <div class="col-lg-2" id="l4" style="display:none">
                                            <label for="">Largeur 4:</label>
                                            <input type="number" id="width4" name="width4" class="form-control input-text" value = 0>
                                        </div>
                                        <div class="col-lg-3" id="l5" style="display:none">
                                            <label for="">Largeur 5:</label>
                                            <input type="number" id="width5" name="width5" class="form-control input-text" value = 0>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group fullname">
                                    <div class="row">
                                        <div class="col-lg-3" id="H1">
                                            <label for="">Hauteur 1:</label>
                                            <input type="number" id="h1" name="height1" class="form-control input-text" value = 0>
                                        </div>
                                        <div class="col-lg-2" id="H2" style="display:none">
                                            <label for="">Hauteur 2:</label>
                                            <input type="number" id="h2" name="height2" class="form-control input-text" value = 0>
                                        </div>
                                        <div class="col-lg-2" id="H3" style="display:none">
                                            <label for="">Hauteur 3:</label>
                                            <input type="number" id="h3" name="height3" class="form-control input-text" value = 0>
                                        </div>
                                        <div class="col-lg-2" id="H4" style="display:none">
                                            <label for="">Hauteur 4:</label>
                                            <input type="number" id="h4" name="height4" class="form-control input-text" value = 0>
                                        </div>
                                        <div class="col-lg-3" id="H5" style="display:none">
                                            <label for="">Hauteur 5:</label>
                                            <input type="number" id="h5" name="height5" class="form-control input-text" value = 0>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group fullname">
                                    <div class="row">
                                        <div class="col-lg-3" id="P1">
                                            <label for="">Poids 1:</label>
                                            <input type="number" id="p1" name="weight1" class="form-control input-text" value = 0>
                                        </div>
                                        <div class="col-lg-2" id="P2" style="display:none">
                                            <label for="">Poids 2:</label>
                                            <input type="number" id="p2" name="weight2" class="form-control input-text" value = 0>
                                        </div>
                                        <div class="col-lg-2" id="P3" style="display:none">
                                            <label for="">Poids 3:</label>
                                            <input type="number" id="p3" name="weight3" class="form-control input-text" value = 0>
                                        </div>
                                        <div class="col-lg-2" id="P4" style="display:none">
                                            <label for="">Poids 4:</label>
                                            <input type="number" id="p4" name="weight4" class="form-control input-text" value = 0>
                                        </div>
                                        <div class="col-lg-3" id="P5" style="display:none">
                                            <label for="">Poids 5:</label>
                                            <input type="number" id="p5" name="weight5" class="form-control input-text" value = 0>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group fullname">
                                    <div class="row">
                                        <div class="col-lg-3" id="I1">
                                            <div class="file-field">
                                                <div class="btn btn-primary btn-sm float-left">
                                                    <input type="file" name="images1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2" id="I2" style="display:none">
                                            <div class="file-field">
                                                <div class="btn btn-primary btn-sm float-left">
                                                    <input type="file" name="images2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2" id="I3" style="display:none">
                                            <div class="file-field">
                                                <div class="btn btn-primary btn-sm float-left">
                                                    <input type="file" name="images3">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2" id="I4" style="display:none">
                                            <div class="file-field">
                                                <div class="btn btn-primary btn-sm float-left">
                                                    <input type="file" name="images4">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3" id="I5" style="display:none">
                                            <div class="file-field">
                                                <div class="btn btn-primary btn-sm float-left">
                                                    <input type="file" name="images5">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group fullname">
                                    <div class="row">
                                        <div class="col-lg-3" id="V1">
                                            <label for="">Volume 1:</label>
                                            <input type="number" readonly id="v1" name="volume1" class="form-control input-text" value = 0>
                                        </div>
                                        <div class="col-lg-2" id="V2" style="display:none">
                                            <label for="">Volume 2:</label>
                                            <input type="number" readonly id="v2" name="volume2" class="form-control input-text" value = 0>
                                        </div>
                                        <div class="col-lg-2" id="V3" style="display:none">
                                            <label for="">Volume 3:</label>
                                            <input type="number" readonly id="v3" name="volume3" class="form-control input-text" value = 0>
                                        </div>
                                        <div class="col-lg-2" id="V4" style="display:none">
                                            <label for="">Volume 4:</label>
                                            <input type="number" readonly id="v4" name="volume4" class="form-control input-text" value = 0>
                                        </div>
                                        <div class="col-lg-3" id="V5" style="display:none">
                                            <label for="">Volume 5:</label>
                                            <input type="number" readonly id="v5" name="volume5" class="form-control input-text" value = 0>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group fullname">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            
                                        </div>
                                        <div class="col-lg-2" id="S2" style="display:none">
                                            <center><a onclick="Del2()" class="btn btn-danger">Supprimer Colis 2</a></center>
                                        </div>
                                        <div class="col-lg-2" id="S3" style="display:none">
                                            <center><a onclick="Del3()" class="btn btn-danger">Supprimer Colis 3</a></center>
                                        </div>
                                        <div class="col-lg-2" id="S4" style="display:none">
                                            <center><a onclick="Del4()" class="btn btn-danger">Supprimer Colis 4</a></center>
                                        </div>
                                        <div class="col-lg-3" id="S5" style="display:none">
                                            <center><a onclick="Del5()" class="btn btn-danger">Supprimer Colis 5</a></center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group fullname">
                                    <div class="row">
                                        <div class="col-lg-3" id="N2">
                                            <center><a onclick="Newcolis2()" class="btn btn-success">Ajouter Un Autre Colis</a></center>
                                        </div>
                                        <div class="col-lg-3" id="N3" style="display:none">
                                            <center><a onclick="Newcolis3()" class="btn btn-success">Ajouter Un Autre Colis</a></center>
                                        </div>
                                        <div class="col-lg-3" id="N4" style="display:none">
                                            <center><a onclick="Newcolis4()" class="btn btn-success">Ajouter Un Autre Colis</a></center>
                                        </div>
                                        <div class="col-lg-3" id="N5" style="display:none">
                                            <center><a onclick="Newcolis5()" class="btn btn-success">Ajouter Un Autre Colis</a></center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="col-lg-12">
                                    <h4><label for="">Poids total : </label></h4>
                                    <input type="number" readonly id="pt" name="tot_weight" class="form-control input-text">
                                </div>
                                <div class="col-lg-12">
                                    <h4><label for="">Volume total : </h4><small style="color:red"><b id="alt" style="display:none">Le volume de vos colis est supérieur au volume restant</b> </small> </label>
                                    <input type="number" readonly id="vt" name="tot_volume" class="form-control input-text">
                                </div>
                                <div class="col-lg-12">
                                <br>
                                    <center><a onclick="result()" class="btn btn-primary"> CALCULER LES DIMENSSIONS </a></center>
                                </div>
                            </div>
                            
                            <div class="col-lg-12 col-md-6 col-sm-12">
                                <br>
                                <div class="row">    
                                    <div class="col-lg-6">
                                        <label for="">Unité de Poids : </label>
                                        <input type="text" readonly value="{{$trajet->weight_unity}}" name="full-name" class="form-control input-text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-12">
                                <br>
                                <div class="form-group fullname">
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6">
                                            <label for="">Marchandises dangereuses ? </label>
                                        </div>
                                        <div class="col-lg-3 col-md-12 col-sm-6">
                                            <div class="checkbox">
                                                <div class="ez-checkbox pull-left">
                                                    <label style="color:black">
                                                    <input class="form-check-input" type="checkbox" value="oui" name="danger_merchandise" id="remember">
                                                        Oui
                                                    </label>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-12 col-sm-6">
                                            <div class="checkbox">
                                                <div class="ez-checkbox pull-left">
                                                    <label style="color:black">
                                                    <input class="form-check-input" type="checkbox" value="non" name="danger_merchandise" id="remember">
                                                        Non
                                                    </label>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 clearfix">
                                <label for="">Information complémentaire</label>
                                <div class="form-group message">
                                    <textarea class="form-control input-text" name="info_sup" placeholder="Saisir votre méssage"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                </br>
                                </br>
                                <div class="">
                                    <a id="confirm_ass" onclick="assurance()" class="btn-md btn-theme">Continuer</a>
                                    <!-- <button type="submit" id="confirm_btn" class="btn-md btn-theme">Reserver Maintenant</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- assurance -->
                    <div class="container" style="display:none" id="ass">
                        <div class="main-title">
                            <h2>Vue d'ensemble de la reservation</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-7 col-sm-6">
                                <!-- Contact form start -->
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group fullname">
                                        <label for="">Type de transport :</label>
                                        @if($trajet->bateau != null)
                                        <input type="text" readonly name="full-name"  class="form-control input-text" value="Bateau">
                                        @elseif($trajet->route != null)
                                        <input type="text" readonly name="full-name"  class="form-control input-text" value="Route">
                                        @elseif($trajet->avion != null)
                                        <input type="text" readonly name="full-name"  class="form-control input-text" value="Avion">
                                        @elseif($trajet->train != null)
                                        <input type="text" readonly name="full-name"  class="form-control input-text" value="Train">
                                        @else
                                        <input type="text" readonly name="full-name"  class="form-control input-text" value="Inconnu">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <div class="form-group fullname">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label for="">Pays de départ :</label>
                                                <input type="text" readonly value="{{$trajet->country_out}}" name="full-name" class="form-control input-text">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="">Ville de départ :</label>
                                                <input type="text" readonly value="{{$trajet->town_out}}" name="full-name" class="form-control input-text">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="">Adresse de départ :</label>
                                                <input type="text" readonly value="{{$trajet->address_out}}" name="full-name" class="form-control input-text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <div class="form-group fullname">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label for="">Pays d'arrivé :</label>
                                                <input type="text" readonly value="{{$trajet->country_in}}" name="full-name" class="form-control input-text">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="">Ville d'arrivé :</label>
                                                <input type="text" readonly value="{{$trajet->town_in}}" name="full-name" class="form-control input-text">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="">Adresse d'arrivé :</label>
                                                <input type="text" readonly value="{{$trajet->address_in}}" name="full-name" class="form-control input-text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <div class="form-group fullname">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <h4><label for=""> Nombre total de colis :</label></h4>
                                                <input type="text" r$trajet}" name="full-name" class="form-control input-text">
                                            </div>
                                            <div class="col-lg-4">
                                                <h4><label for=""> Poids total des colis :</label></h4>
                                                <input type="text" r$trajet}}" name="full-name" class="form-control input-text">
                                            </div>
                                            <div class="col-lg-4">
                                                <h4><label for=""> Volume total des colis :</label></h4>
                                                <input type="text" r$trajet}}" name="full-name" class="form-control input-text">
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                                <!-- Contact form end -->
                            </div>
                        </div>
                        <div class="main-title">
                            <h2>Assurance du Colis</h2>
                        </div>
                        <div class="col-lg-12 col-md-7 col-sm-6">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3" style="background-color: #3ac4fa" >  
                                    <center>
                                        <input class="form-check-input" type="checkbox" value="aucune" name="type_paiement" id="remember">
                                    <label><h4>Aucune Assurance</h4> </label>
                                    </center>                              
                                        
                                        <label for="">Cout :</label><br>
                                        <input type="text" readonly value="Gratuit" name="full-name" class="form-control input-text">
                                        <br>
                                        <label for="">Responsabilité en cas de dommages :</label>
                                        <input type="text" readonly value="0" name="full-name" class="form-control input-text">
                                        <br>
                                        <label for="">Responsabilité en cas de perte :</label>
                                        <input type="text" readonly value="0" name="full-name" class="form-control input-text">
                                        <br>
                                        <label for="">Responsabilité civile :</label>
                                        <input type="text" readonly value="0" name="full-name" class="form-control input-text">
                                        <br>
                                        <label for=""></label>
                                    </div>
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-3" style="background-color: #3ac4fa" >  
                                        <center>
                                            <input class="form-check-input" type="checkbox" value="aucune" name="type_paiement" id="remember">
                                            <label><h4>Assurance Basic</h4> </label>
                                        </center>                              
                                        <label for="">Cout :</label><br>
                                        <input type="text" readonly value="xxxxx" name="full-name" class="form-control input-text">
                                        <br>
                                        <label for="">Responsabilité en cas de dommages :</label>
                                        <input type="text" readonly value="xxxxx" name="full-name" class="form-control input-text">
                                        <br>
                                        <label for="">Responsabilité en cas de perte :</label>
                                        <input type="text" readonly value="xxxxx" name="full-name" class="form-control input-text">
                                        <br>
                                        <label for="">Responsabilité civile :</label>
                                        <input type="text" readonly value="xxxxx" name="full-name" class="form-control input-text">
                                        <br>
                                        <label for=""></label>
                                    </div>
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-3" style="background-color: #3ac4fa" >  
                                        <center>
                                            <input class="form-check-input" type="checkbox" value="aucune" name="type_paiement" id="remember">
                                            <label><h4>Assurance Premium</h4> </label>
                                        </center>                              
                                        <label for="">Cout :</label><br>
                                        <input type="text" readonly value="xxxxx" name="full-name" class="form-control input-text">
                                        <br>
                                        <label for="">Responsabilité en cas de dommages :</label>
                                        <input type="text" readonly value="xxxxx" name="full-name" class="form-control input-text">
                                        <br>
                                        <label for="">Responsabilité en cas de perte :</label>
                                        <input type="text" readonly value="xxxxx" name="full-name" class="form-control input-text">
                                        <br>
                                        <label for="">Responsabilité civile :</label>
                                        <input type="text" readonly value="xxxxx" name="full-name" class="form-control input-text">
                                        <br>
                                        <label for=""></label>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                        <a id="confirm_ass" onclick="coordonne()" class="btn-md btn-theme">Continuer</a>
                    </div>

                    <!-- Coordonnée -->
                    <div class="container" style="display:none" id="coor">
                        <div class="container">
                            <div class="main-title" style="background-color: #3ac4fa">
                                <h1>Coordonnées Expéditeur</h1>
                            </div>
                            <input class="form-check-input" type="checkbox" value="aucune" name="type_paiement" id="remember">
                            <label><h4>Monsieur</h4> </label>
                            <input class="form-check-input" type="checkbox" value="aucune" name="type_paiement" id="remember">
                            <label><h4>Madame</h4> </label>
                            <div class="col-lg-12 col-md-7 col-sm-6">
                                <div class="form-group fullname">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="">Nom :</label>
                                            <input type="text" name="full-name" class="form-control input-text">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="">Prénom :</label>
                                            <input type="text" name="full-name" class="form-control input-text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-7 col-sm-6">
                                <div class="form-group fullname">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="">Adresse :</label>
                                            <input type="text" name="full-name" class="form-control input-text">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="">Ville :</label>
                                            <input type="text" name="full-name" class="form-control input-text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-7 col-sm-6">
                                <div class="form-group fullname">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="">Pays :</label>
                                            <input type="text" name="full-name" class="form-control input-text">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="">Code Postal :</label>
                                            <input type="text" name="full-name" class="form-control input-text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-7 col-sm-6">
                                <div class="form-group fullname">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="">Indicatif du Pays :</label>
                                            <input type="text" name="full-name" class="form-control input-text">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="">Numéro de Téléphone :</label>
                                            <input type="text" name="full-name" class="form-control input-text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="container">
                            <div class="main-title" style="background-color: #3ac4fa">
                                <h1>Coordonnées Destinataire</h1>
                            </div>
                            <input class="form-check-input" type="checkbox" value="aucune" name="type_paiement" id="remember">
                            <label><h4>Monsieur</h4> </label>
                            <input class="form-check-input" type="checkbox" value="aucune" name="type_paiement" id="remember">
                            <label><h4>Madame</h4> </label>
                            <div class="col-lg-12 col-md-7 col-sm-6">
                                <div class="form-group fullname">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="">Nom :</label>
                                            <input type="text" name="full-name" class="form-control input-text">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="">Prénom :</label>
                                            <input type="text" name="full-name" class="form-control input-text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-7 col-sm-6">
                                <div class="form-group fullname">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="">Adresse :</label>
                                            <input type="text" name="full-name" class="form-control input-text">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="">Ville :</label>
                                            <input type="text" name="full-name" class="form-control input-text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-7 col-sm-6">
                                <div class="form-group fullname">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="">Pays :</label>
                                            <input type="text" name="full-name" class="form-control input-text">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="">Code Postal :</label>
                                            <input type="text" name="full-name" class="form-control input-text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-7 col-sm-6">
                                <div class="form-group fullname">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="">Indicatif du Pays :</label>
                                            <input type="text" name="full-name" class="form-control input-text">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="">Numéro de Téléphone :</label>
                                            <input type="text" name="full-name" class="form-control input-text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input class="form-check-input" type="checkbox" value="aucune" name="type_paiement" id="remember">
                        <label><b>En cochant cette case vous acceptez les conditions ci-dessous</b></label><br>
                        <p>- J’ai bien vérifié que les noms/prénoms des expéditeurs/recepteurs sont bien orthographiés </p>
                        <p>- J’ai bien vérifié que l’adresse e-mail sur laquelle je souhaite recevoir tous mes documents est correcte ainsi que le numéro <br>
                            de téléphone que j'ai indiqué (toute erreur peut entraîner des frais supplémentaires).</p>
                        <p>- Je suis en règle avec les autorités locales (et de transit le cas échéant) pour les formalités de police, de douane et de santé</p><br>
                        <a id="confirm_coor" onclick="paiement()" class="btn-md btn-theme">Continuer</a>
                    </div>

                    <!--Paiement -->
                    <div class="container" style="display:none" id="pay">
                        <!-- <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="">Visa, MasterCard...</label>
                                    <input type="button" style="background-color:#3ac4fa; color:white" value="VISA,MASTERCARD" name="num_card" id="" class="form-control input-text"> 
                                </div>
                                <div class="col-lg-4">
                                    <label for="">Numéro de carte</label>
                                    <input type="text" name="num_card" id="" class="form-control input-text">
                                </div>
                                <div class="col-lg-4">
                                    <label for="">Nom sur la carte</label>
                                    <input type="text" name="num_card" id="" class="form-control input-text">
                                </div>
                            </div>
                        </div> -->
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div id="paypal-button-container"></div>
                                </div>
                                <div class="col-lg-6">
                                    <label for="">Mobile Money</label>
                                    <input type="button" style="background-color:white; color:#3ac4fa" value="Mobile Money" name="num_card" id="" class="form-control input-text">
                                    <label for="">Code de sécurité</label>
                                    <input type="text" name="num_card" id="" class="form-control input-text">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="">Date d'expiration</label>
                                    <input type="text" name="num_card" id="" class="form-control input-text">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                        <br>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="">Mémoriser la carte</label>
                                    <input type="checkbox" name="save_card" id="">
                                </div>
                                <div class="col-lg-6">
                                    <input type="button" style="background-color:#3ac4fa; color:white" value="Payer Maintenant" name="num_card" id="" class="form-control input-text">
                                </div>
                            </div>
                        </div>
                        <p style="color:#3ac4fa">En réservant votre trajet, vous acceptez les Conditions Générales de Vente de HokaaFoza</p>
                    </div>

                </form>
            </div>   
            <!-- Contact form end -->
        </div>            
    </div>            
</div>
<!-- Rooms  section end -->


@endsection
<!-- Include the PayPal JavaScript SDK -->
<script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD"></script>

<script>
    // Render the PayPal button into #paypal-button-container
    paypal.Buttons({

        // Set up the transaction
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '0.01'
                    }
                }]
            });
        },

        // Finalize the transaction
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                // Show a success message to the buyer
                alert('Transaction completed by ' + details.payer.name.given_name + '!');
            });
        }


    }).render('#paypal-button-container');
</script>
<script>
     function assurance(){
        document.getElementById("ass").style.display = "block";
        document.getElementById("tra").style.display = "none";
        document.getElementById("0").style.backgroundColor = "white";
        document.getElementById("1").style.backgroundColor = "#3ac4fa";
    }

    function coordonne(){
        document.getElementById("ass").style.display = "none";
        document.getElementById("coor").style.display = "block";
        document.getElementById("1").style.backgroundColor = "white";
        document.getElementById("2").style.backgroundColor = "#3ac4fa";
    }

    function paiement(){
        document.getElementById("coor").style.display = "none"
        document.getElementById("pay").style.display = "block"
        document.getElementById("2").style.backgroundColor = "white";
        document.getElementById("3").style.backgroundColor = "#3ac4fa";
    }

    function Traite0(){
        document.getElementById("ass").style.display = "none"
        document.getElementById("coor").style.display = "none"
        document.getElementById("pay").style.display = "none"
        document.getElementById("tra").style.display = "block"
        document.getElementById("2").style.backgroundColor = "white";
        document.getElementById("0").style.backgroundColor = "#3ac4fa";
        document.getElementById("1").style.backgroundColor = "white";
        document.getElementById("3").style.backgroundColor = "white";
    }
    function Traite1(){
        document.getElementById("ass").style.display = "block"
        document.getElementById("coor").style.display = "none"
        document.getElementById("pay").style.display = "none"
        document.getElementById("tra").style.display = "none"
        document.getElementById("2").style.backgroundColor = "white";
        document.getElementById("0").style.backgroundColor = "white";
        document.getElementById("1").style.backgroundColor = "#3ac4fa";
        document.getElementById("3").style.backgroundColor = "white";
    }
    function Traite2(){
        document.getElementById("ass").style.display = "none"
        document.getElementById("coor").style.display = "block"
        document.getElementById("pay").style.display = "none"
        document.getElementById("tra").style.display = "none"
        document.getElementById("2").style.backgroundColor = "#3ac4fa";
        document.getElementById("0").style.backgroundColor = "white";
        document.getElementById("1").style.backgroundColor = "white";
        document.getElementById("3").style.backgroundColor = "white";
    }
    function Traite3(){
        document.getElementById("ass").style.display = "none"
        document.getElementById("coor").style.display = "none"
        document.getElementById("pay").style.display = "block"
        document.getElementById("tra").style.display = "none"
        document.getElementById("2").style.backgroundColor = "white";
        document.getElementById("0").style.backgroundColor = "white";
        document.getElementById("1").style.backgroundColor = "white";
        document.getElementById("3").style.backgroundColor = "#3ac4fa";
    }

    function Newcolis2(){
        if(getComputedStyle(document.getElementById("L2")).display == "none"){
            document.getElementById("L2").style.display = "block";
            document.getElementById("l2").style.display = "block";
            document.getElementById("H2").style.display = "block";
            document.getElementById("I2").style.display = "block";
            document.getElementById("V2").style.display = "block";
            document.getElementById("P2").style.display = "block";
            document.getElementById("S2").style.display = "block";
            document.getElementById("N3").style.display = "block";
            document.getElementById("N2").style.display = "none";
        }
    }
    function Newcolis3() {
        if( getComputedStyle(document.getElementById("L3")).display == "none"){
            document.getElementById("L3").style.display = "block";
            document.getElementById("l3").style.display = "block";
            document.getElementById("H3").style.display = "block";
            document.getElementById("I3").style.display = "block";
            document.getElementById("V3").style.display = "block";
            document.getElementById("P3").style.display = "block";
            document.getElementById("S3").style.display = "block";
            document.getElementById("N4").style.display = "block";
            document.getElementById("N3").style.display = "none";
        }
    }

    function Newcolis4() {
        if( getComputedStyle(document.getElementById("L4")).display == "none"){
            document.getElementById("L4").style.display = "block";
            document.getElementById("l4").style.display = "block";
            document.getElementById("H4").style.display = "block";
            document.getElementById("I4").style.display = "block";
            document.getElementById("V4").style.display = "block";
            document.getElementById("P4").style.display = "block";
            document.getElementById("S4").style.display = "block";
            document.getElementById("N5").style.display = "block";
            document.getElementById("N4").style.display = "none";
        }
    }

    function Newcolis5() {
        if(getComputedStyle(document.getElementById("L5")).display == "none"){
            document.getElementById("L5").style.display = "block";
            document.getElementById("l5").style.display = "block";
            document.getElementById("H5").style.display = "block";
            document.getElementById("I5").style.display = "block";
            document.getElementById("V5").style.display = "block";
            document.getElementById("P5").style.display = "block";
            document.getElementById("S5").style.display = "block";
        }
    }

    function Del2() {
        document.getElementById("L2").style.display = "none";
        document.getElementById("l2").style.display = "none";
        document.getElementById("H2").style.display = "none";
        document.getElementById("I2").style.display = "none";
        document.getElementById("V2").style.display = "none";
        document.getElementById("P2").style.display = "none";
        document.getElementById("S2").style.display = "none";
        document.getElementById("N2").style.display = "block";
        
        document.getElementById("L2").value = " ";
        document.getElementById("l2").value = " ";
        document.getElementById("H2").value = " ";
        document.getElementById("I2").value = " ";
        document.getElementById("V2").value = " ";
        document.getElementById("P2").value = " ";
    }
    function Del3() {
        document.getElementById("L3").style.display = "none";
        document.getElementById("l3").style.display = "none";
        document.getElementById("H3").style.display = "none";
        document.getElementById("I3").style.display = "none";
        document.getElementById("V3").style.display = "none";
        document.getElementById("P3").style.display = "none";
        document.getElementById("S3").style.display = "none";
        document.getElementById("N3").style.display = "none";
        
        document.getElementById("L3").value = " ";
        document.getElementById("l3").value = " ";
        document.getElementById("H3").value = " ";
        document.getElementById("I3").value = " ";
        document.getElementById("V3").value = " ";
        document.getElementById("P3").value = " ";
    }
    function Del4() {
        document.getElementById("L4").style.display = "none";
        document.getElementById("l4").style.display = "none";
        document.getElementById("H4").style.display = "none";
        document.getElementById("I4").style.display = "none";
        document.getElementById("V4").style.display = "none";
        document.getElementById("P4").style.display = "none";
        document.getElementById("S4").style.display = "none";
        document.getElementById("N4").style.display = "none";
        
        document.getElementById("L4").value = " ";
        document.getElementById("l4").value = " ";
        document.getElementById("H4").value = " ";
        document.getElementById("I4").value = " ";
        document.getElementById("V4").value = " ";
        document.getElementById("P4").value = " ";
    }
    function Del5() {
        document.getElementById("L5").style.display = "none";
        document.getElementById("l5").style.display = "none";
        document.getElementById("H5").style.display = "none";
        document.getElementById("I5").style.display = "none";
        document.getElementById("V5").style.display = "none";
        document.getElementById("P5").style.display = "none";
        document.getElementById("S5").style.display = "none";
        document.getElementById("N5").style.display = "none";
        
        document.getElementById("L5").value = " ";
        document.getElementById("l5").value = " ";
        document.getElementById("H5").value = " ";
        document.getElementById("I5").value = " ";
        document.getElementById("V5").value = " ";
        document.getElementById("P5").value = " ";
    }

    function result(){
        document.getElementById("v1").value = document.getElementById("leng1").value * document.getElementById("width1").value * document.getElementById("h1").value
        document.getElementById("v2").value = document.getElementById("leng2").value * document.getElementById("width2").value * document.getElementById("h2").value
        document.getElementById("v3").value = document.getElementById("leng3").value * document.getElementById("width3").value * document.getElementById("h3").value
        document.getElementById("v4").value = document.getElementById("leng4").value * document.getElementById("width4").value * document.getElementById("h4").value
        document.getElementById("v5").value = document.getElementById("leng5").value * document.getElementById("width5").value * document.getElementById("h5").value
        document.getElementById("pt").value = Number(document.getElementById("p1").value) + Number(document.getElementById("p2").value) + Number(document.getElementById("p3").value) + Number(document.getElementById("p4").value) + Number(document.getElementById("p5").value);
        document.getElementById("vt").value = Number(document.getElementById("v1").value) + Number(document.getElementById("v2").value) + Number(document.getElementById("v3").value) + Number(document.getElementById("v4").value) + Number(document.getElementById("v5").value);

        if(Number(document.getElementById("vt").value) > Number(document.getElementById("vr").value)){
            document.getElementById("alt").style.display = "block";
            document.getElementById("confirm_btn").style.display = "none";
        }else{
            document.getElementById("alt").style.display = "none";
            document.getElementById("confirm_btn").style.display = "block";
        }
    }
</script>