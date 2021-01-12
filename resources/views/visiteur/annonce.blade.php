@extends('layout')

@section('content')

<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>ANNONCES</h1>
            <ul class="breadcrumbs">
                <li><a href="{{route('index')}}">Accueil</a></li>
                <li class="active">Annonce</li>
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

    <div class="main-title">
        <h1>Publier votre annonce</h1>
    </div>
    <center><div class="container">
    <br>
        <div class="row">
            <div class="col-lg-3" onclick="Traite0()" id="0" style="background-color: #3ac4fa"> Temps</div>
            <div class="col-lg-2" onclick="Traite1()" id="1" >Lieu</div>
            <div class="col-lg-2" onclick="Traite2()" id="2" >Mensuration</div>
            <div class="col-lg-2" onclick="Traite3()" id="3" >Validation</div>
            <div class="col-lg-3" onclick="Traite4()" id="4" >Proposition</div>
        </div>
    </div></center>
    <!-- Rooms section start -->
<div class="contact-1 content-area-6">
    <div class="container" >
        <!-- Main title -->
        <div class="contact-form">
            <form id="contact_form" method="post" action="{{route('annonces.store')}}" enctype="multipart/form-data">
            @csrf
                <!-- date -->

                <div class=container id="temps" style="display:block">
                    <div class=container>
                        <div class="form-group fullname">
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <h4><label for="">Choisir le type de transport : </label></h4>
                                </div>
                                <div class="col-lg-2 col-sm-2">
                                    <div class="checkbox">
                                        <div class="ez-checkbox pull-left">
                                            <label style="color:#3ac4fa">
                                            <input class="form-check-input" type="checkbox" name="bateau" value="1" id="bateau">
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
                                            <input class="form-check-input" type="checkbox" name="avion" value="1" id="avion">
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
                                            <input class="form-check-input" type="checkbox" name="route" value="1" id="route">
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
                        
                                            <input class="form-check-input" type="checkbox" name="train" value="1" id="train">
                                                Train
                                            </label>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group fullname">
                            <div class=col-lg-6>
                                <label for="">Date de départ</label>
                                <input type="date" name="date_out" class="form-control input-text" id="date_out">
                            </div>    
                        </div>
                        <div class="form-group fullname">
                            <div class=col-lg-6>
                                <label for="">Date d'arrivé</label>
                                <input type="date" name="date_in" class="form-control input-text" id="date_in">
                                
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="pull-right"><a onclick="lieu()" class="btn-md btn-theme right">suivant</a></div>
                </div>

                <!-- lieu  -->

                <div class=container id="lieu" style="display:none">
                    <div class=container>
                        <div class="form-group fullname">
                            <div class="row">
                                <div class="col-lg-3 col-sm-4">
                                    <h4><label for="">Lieu de départ : </label></h4>
                                </div>
                                <div class="col-lg-3 col-sm-4"> <label for="">Pays</label> <input type="text" name="country_out" class= "form-control input-text" id="country_out"></div>
                                <div class="col-lg-3 col-sm-4"> <label for="">Ville</label> <input type="text" name="town_out" class= "form-control input-text" id="town_out"></div>
                                <div class="col-lg-3 col-sm-4"> <label for="">Adresse</label> <input type="text" name="address_out" class= "form-control input-text" id="address_out"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-sm-4">
                                    <h4><label for="">Lieu de d'arrivée : </label></h4>
                                </div>
                                <div class="col-lg-3 col-sm-4"> <label for="">Pays</label> <input type="text" name="country_in" class= "form-control input-text" id="country_in"></div>
                                <div class="col-lg-3 col-sm-4"> <label for="">Ville</label> <input type="text" name="town_in"class= "form-control input-text" id="town_in"></div>
                                <div class="col-lg-3 col-sm-4"> <label for="">Adresse</label> <input type="text" name="address_in"class= "form-control input-text" id="address_in"></div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="pull-right"><a onclick="mensu()" class="btn-md btn-theme right">suivant</a></div>
                </div>

                <!-- mensuration -->

                <div class="container" id="mensu" style="display:none">
                    <div class="col-lg-8">
                        <label for="">Incoterm</label>
                        <select name="incoterm" id="incoterm" class= "form-control input-text">
                            <option value="FOB">FOB</option>
                            <option value="CIF">CIF</option>
                            <option value="Autre">Autre</option>
                        </select>             
                    </div>
                    <div class="col-lg-8">
                        <label for="">Modèle de conteneur</label>
                        <select name="mod_cont" id="mod_cont" class= "form-control input-text">
                            <option value="Model 1">Model 1</option>
                            <option value="Model 2">Model 2</option>
                            <option value="Autre">Autre</option>
                        </select>             
                    </div>
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
                        <div class="form-group fullname">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <label for="">Unité de poids </label>
                                </div>
                                <div class="col-lg-3 col-md-12 col-sm-6">
                                    <div class="checkbox">
                                        <div class="ez-checkbox pull-left">
                                            <label style="color:black">
                                            <input class="form-check-input" type="checkbox" value="kg" name="kg" id="kg">
                                                Kgs
                                            </label>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12 col-sm-6">
                                    <div class="checkbox">
                                        <div class="ez-checkbox pull-left">
                                            <label style="color:black">
                                            <input class="form-check-input" type="checkbox" value="ibs" name="ibs" id="ibs">
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
                        <br>
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
                    <div class="col-lg-8 col-md-12 col-sm-12 clearfix">
                        <label for="">Détail Assurance</label>
                        <div class="form-group message">
                            <textarea class="form-control input-text" id="det_assu" name="det_assu" placeholder="Saisir votre méssage"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 clearfix">
                        <label for="">Information complémentaire</label>
                        <div class="form-group message">
                            <textarea class="form-control input-text" id="info_sup" name="info_sup" placeholder="Saisir votre méssage"></textarea>
                        </div>
                        <div class="pull-right"><a onclick="Validation()" class="btn-md btn-theme right">suivant</a></div>
                    </div>
                </div>

                <!-- validation -->

                <div class="container" id="valid" style="display:none">
                    <div class=col-lg-6>                    
                        <label for="">Votre type de transport</label>
                        <input type="text" readonly name="" class="form-control input-text" id="1a">
                                       
                        <label for="">Date de départ</label>
                        <input type="text" readonly name="" class="form-control input-text" id="2a">
                                       
                        <label for="">Date d'arrivée</label>
                        <input type="text" readonly name="" class="form-control input-text" id="3a">
                    </div>
                    <div class="container">
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-4">
                            <h4><label for="">Lieu de départ : </label></h4>
                        </div>
                        <div class="col-lg-3 col-sm-4"> <label for="">Pays</label> <input type="text" readonly name="" class= "form-control input-text" id="4a"></div>
                        <div class="col-lg-3 col-sm-4"> <label for="">Ville</label> <input type="text" readonly name=""class= "form-control input-text" id="5a"></div>
                        <div class="col-lg-3 col-sm-4"> <label for="">Adresse</label> <input type="text" readonly name=""class= "form-control input-text" id="6a"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-4">
                            <h4><label for="">Lieu de d'arrivée : </label></h4>
                        </div>
                        <div class="col-lg-3 col-sm-4"> <label for="">Pays</label> <input type="text" readonly name="" class= "form-control input-text" id="7a"></div>
                        <div class="col-lg-3 col-sm-4"> <label for="">Ville</label> <input type="text" readonly name=""class= "form-control input-text" id="8a"></div>
                        <div class="col-lg-3 col-sm-4"> <label for="">Adresse</label> <input type="text" readonly name=""class= "form-control input-text" id="9a"></div>
                    </div>
                    <div class="col-lg-8">
                        <label for="">Incoterm</label>
                        <input type="text" readonly name="" class= "form-control input-text" id="1b">             
                    </div>
                    <div class="col-lg-8">
                        <label for="">Modèle de conteneur</label>
                        <input type="text" readonly name="" class= "form-control input-text" id="2b">             
                    </div>
                    <div class="container">
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-4">
                            <h4><label for="">Mensuration Total: </label></h4>
                        </div>
                        <div class="col-lg-3 col-sm-4"> <label for="">Longueur</label> <input type="text" readonly name="" class= "form-control input-text" id="3b"></div>
                        <div class="col-lg-3 col-sm-4"> <label for="">Largeur</label> <input type="text" readonly name=""class= "form-control input-text" id="4b"></div>
                        <div class="col-lg-3 col-sm-4"> <label for="">Hauteur</label> <input type="text" readonly name=""class= "form-control input-text" id="5b"></div>
                    </div>
                    <div class=col-lg-6>                    
                        <label for="">Volume total Autorisé</label>
                        <input type="text" readonly name="" class="form-control input-text" id="6b">
                    </div>
                    <div class="container">
                    </div>
                    <div class=col-lg-6>                    
                        <label for="">Poids Total</label>
                        <input type="text" readonly name="" class="form-control input-text" id="7b">
                    </div>
                    <div class="container">
                    </div>
                    <div class=col-lg-6>                    
                        <label for="">Assurance</label>
                        <input type="text" readonly name="" class="form-control input-text" id="8b">
                    </div>
                    <div class="container">
                    </div>
                    <div class=col-lg-6>                    
                        <label for="">Détail Assurance</label>
                        <div class="form-group message">
                            <textarea class="form-control input-text" id="9b" readonly name="info_sup" placeholder="Saisir votre méssage"></textarea>
                        </div>
                    </div>
                    <div class=col-lg-12>                    
                        <label for="">Nature des marchandises Autorisées</label>
                        <div class="form-group message">
                            <textarea class="form-control input-text" id="" name="info_sup" placeholder="Saisir votre méssage"></textarea>
                        </div>
                    </div>
                    <div class=col-lg-6>                    
                        <label for="">Informations Complémentaires</label>
                        <div class="form-group message">
                            <textarea class="form-control input-text" id="1c" readonly name="info_sup" placeholder="Saisir votre méssage"></textarea>
                        </div>
                    </div>
                    <div class="container">
                    </div>
                    <div class="pull-right"><button class="form-control" style="background-color: #3ac4fa; color:white" type="submit">PUBLIER VOTRE ANNONCE</button></div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    let date_out; let date_in; let type_transport; let country_out; let town_out; let address_out;
    let country_in; let town_in; let address_in; let leng_tot; let width_tot; let height_tot; let weight_tot;
    let volume_tot; let  weight_unity;let assurance; let det_assu; let info_sup; let incoterm; let mod_cont;

    function lieu(){
        document.getElementById("lieu").style.display = "block";
        document.getElementById("temps").style.display = "none";
        document.getElementById("0").style.backgroundColor = "white";
        document.getElementById("1").style.backgroundColor = "#3ac4fa";
        date_out = document.getElementById("date_out").value;
        date_in = document.getElementById("date_in").value;
        if(document.querySelector('input[id="bateau"]').checked){
            type_transport = 'Bateau';
        }
        if(document.querySelector('input[id="route"]').checked){
            type_transport = 'Route';
        }
        if(document.querySelector('input[id="train"]').checked){
            type_transport = 'Train';
        }
        if(document.querySelector('input[id="avion"]').checked){
            type_transport = 'Avion';
        }
    }

    function mensu(){
        document.getElementById("lieu").style.display = "none";
        document.getElementById("mensu").style.display = "block";
        document.getElementById("1").style.backgroundColor = "white";
        document.getElementById("2").style.backgroundColor = "#3ac4fa";
        country_out = document.getElementById("country_out").value;
        town_out = document.getElementById("town_out").value;
        address_out = document.getElementById("address_out").value;
        country_in = document.getElementById("country_in").value;
        town_in = document.getElementById("town_in").value;
        address_in = document.getElementById("address_in").value;
    }

    function Validation(){
        document.getElementById("mensu").style.display = "none";
        document.getElementById("valid").style.display = "block";
        document.getElementById("2").style.backgroundColor = "white";
        document.getElementById("3").style.backgroundColor = "#3ac4fa";
        leng_tot = Number(document.getElementById("leng1").value) + Number(document.getElementById("leng2").value) + Number(document.getElementById("leng3").value) + Number(document.getElementById("leng4").value) + Number(document.getElementById("leng5").value);
        width_tot = Number(document.getElementById("width1").value) + Number(document.getElementById("width2").value) + Number(document.getElementById("width3").value) + Number(document.getElementById("width4").value) + Number(document.getElementById("width5").value);
        height_tot = Number(document.getElementById("h1").value) + Number(document.getElementById("h2").value) + Number(document.getElementById("h3").value) + Number(document.getElementById("h4").value) + Number(document.getElementById("h5").value);
        weight_tot = document.getElementById("pt").value;
        volume_tot = document.getElementById("vt").value;
        mod_cont = document.getElementById("mod_cont").value;
        incoterm = document.getElementById("incoterm").value;
        if(document.querySelector('input[id="kg"]').checked){
            weight_unity = 'kg';
        }
        if(document.querySelector('input[id="ibs"]').checked){
            weight_unity = 'ibs';
        }
        if(document.querySelector('input[id="assOn"]').checked){
            assurance = document.getElementById("assu").value;
        }
        if(document.querySelector('input[id="assoff"]').checked){
            assurance = document.getElementById("assoff").value;
        }
        det_assu = document.getElementById("det_assu").value;
        info_sup = document.getElementById("info_sup").value;
        document.getElementById("1a").value = type_transport;
        document.getElementById("2a").value = date_out;
        document.getElementById("3a").value = date_in;
        document.getElementById("4a").value = country_out;
        document.getElementById("5a").value = town_out;
        document.getElementById("6a").value = address_out;
        document.getElementById("7a").value = country_in;
        document.getElementById("8a").value = town_in;
        document.getElementById("9a").value = address_in;
        document.getElementById("1b").value = incoterm;
        document.getElementById("2b").value = mod_cont;
        document.getElementById("3b").value = leng_tot;
        document.getElementById("4b").value = width_tot;
        document.getElementById("5b").value = height_tot;
        document.getElementById("6b").value = volume_tot;
        document.getElementById("7b").value = weight_tot;
        document.getElementById("8b").value = assurance;
        document.getElementById("9b").value = det_assu;
        document.getElementById("1c").value = info_sup;
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

    function OnAssurance(){
        document.getElementById("assu").disabled = false;     
        document.getElementById("assoff").disabled = !document.getElementById("assoff").disabled;
    }
    
    function OffAssurance(){
        document.getElementById("assu").value = " ";
        document.getElementById("assOn").disabled = !document.getElementById("assOn").disabled;
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

@endsection()