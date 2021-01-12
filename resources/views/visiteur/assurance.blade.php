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

<center><div class="container">
<br>
    <div class="row">
        <div class="col-lg-3" > Trajet</div>
        <div class="col-lg-2" id="1" style="background-color: #3ac4fa" >Assurance</div>
        <div class="col-lg-2" id="2" >Coordonnées</div>
        <div class="col-lg-2" id="3" >Paiement</div>
        <div class="col-lg-3" id="4" >Confirmation</div>
    </div>
</div></center>

<!-- Rooms section start -->
<div class="contact-1 content-area-6">
    <div class="container" >
        <!-- Main title -->
        <div class="contact-form">
            <form id="contact_form" method="post" action="#" enctype="multipart/form-data">
            @csrf
                <div class="container" style="display:block" id="ass">
                    <div class="main-title">
                        <h1>Vue d'ensemble de la reservation</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-7 col-sm-6">
                            <!-- Contact form start -->
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <label for="">Type de transport :</label>
                                @if(App\Trajet::find($reservation->id_trajet)->bateau != null)
                                <input type="text" readonly name="full-name"  class="input-text" value="Bateau">
                                @elseif(App\Trajet::find($reservation->id_trajet)->route != null)
                                <input type="text" readonly name="full-name"  class="input-text" value="Route">
                                @elseif(App\Trajet::find($reservation->id_trajet)->avion != null)
                                <input type="text" readonly name="full-name"  class="input-text" value="Avion">
                                @elseif(App\Trajet::find($reservation->id_trajet)->train != null)
                                <input type="text" readonly name="full-name"  class="input-text" value="Train">
                                @else
                                <input type="text" readonly name="full-name"  class="input-text" value="Inconnu">
                                @endif
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-12">
                                <div class="form-group fullname">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="">Pays de départ :</label>
                                            <input type="text" readonly value="{{App\Trajet::find($reservation->id_trajet)->country_out}}" name="full-name" class="input-text">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="">Ville de départ :</label>
                                            <input type="text" readonly value="{{App\Trajet::find($reservation->id_trajet)->town_out}}" name="full-name" class="input-text">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="">Adresse de départ :</label>
                                            <input type="text" readonly value="{{App\Trajet::find($reservation->id_trajet)->address_out}}" name="full-name" class="input-text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-12">
                                <div class="form-group fullname">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="">Pays d'arrivé :</label>
                                            <input type="text" readonly value="{{App\Trajet::find($reservation->id_trajet)->country_in}}" name="full-name" class="input-text">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="">Ville d'arrivé :</label>
                                            <input type="text" readonly value="{{App\Trajet::find($reservation->id_trajet)->town_in}}" name="full-name" class="input-text">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="">Adresse d'arrivé :</label>
                                            <input type="text" readonly value="{{App\Trajet::find($reservation->id_trajet)->address_in}}" name="full-name" class="input-text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-12">
                                <div class="form-group fullname">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h4><label for=""> Nombre total de colis :</label></h4>
                                            <input type="text" readonly value="{{$reservation->id_trajet}}" name="full-name" class="input-text">
                                        </div>
                                        <div class="col-lg-4">
                                            <h4><label for=""> Poids total des colis :</label></h4>
                                            <input type="text" readonly value="{{$reservation->tot_weight}}" name="full-name" class="input-text">
                                        </div>
                                        <div class="col-lg-4">
                                            <h4><label for=""> Volume total des colis :</label></h4>
                                            <input type="text" readonly value="{{$reservation->tot_volume}}" name="full-name" class="input-text">
                                        </div>
                                    </div>
                                </div>
                            </div>  
                            <!-- Contact form end -->
                        </div>
                    </div>
                    <div class="main-title">
                        <h1>Assurance du Colis</h1>
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
                                    <input type="text" readonly value="Gratuit" name="full-name" class="input-text">
                                    <br>
                                    <label for="">Responsabilité en cas de dommages :</label>
                                    <input type="text" readonly value="0" name="full-name" class="input-text">
                                    <br>
                                    <label for="">Responsabilité en cas de perte :</label>
                                    <input type="text" readonly value="0" name="full-name" class="input-text">
                                    <br>
                                    <label for="">Responsabilité civile :</label>
                                    <input type="text" readonly value="0" name="full-name" class="input-text">
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
                                    <input type="text" readonly value="xxxxx" name="full-name" class="input-text">
                                    <br>
                                    <label for="">Responsabilité en cas de dommages :</label>
                                    <input type="text" readonly value="xxxxx" name="full-name" class="input-text">
                                    <br>
                                    <label for="">Responsabilité en cas de perte :</label>
                                    <input type="text" readonly value="xxxxx" name="full-name" class="input-text">
                                    <br>
                                    <label for="">Responsabilité civile :</label>
                                    <input type="text" readonly value="xxxxx" name="full-name" class="input-text">
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
                                    <input type="text" readonly value="xxxxx" name="full-name" class="input-text">
                                    <br>
                                    <label for="">Responsabilité en cas de dommages :</label>
                                    <input type="text" readonly value="xxxxx" name="full-name" class="input-text">
                                    <br>
                                    <label for="">Responsabilité en cas de perte :</label>
                                    <input type="text" readonly value="xxxxx" name="full-name" class="input-text">
                                    <br>
                                    <label for="">Responsabilité civile :</label>
                                    <input type="text" readonly value="xxxxx" name="full-name" class="input-text">
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
                                        <input type="text" name="full-name" class="input-text">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="">Prénom :</label>
                                        <input type="text" name="full-name" class="input-text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-7 col-sm-6">
                            <div class="form-group fullname">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="">Adresse :</label>
                                        <input type="text" name="full-name" class="input-text">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="">Ville :</label>
                                        <input type="text" name="full-name" class="input-text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-7 col-sm-6">
                            <div class="form-group fullname">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="">Pays :</label>
                                        <input type="text" name="full-name" class="input-text">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="">Code Postal :</label>
                                        <input type="text" name="full-name" class="input-text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-7 col-sm-6">
                            <div class="form-group fullname">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="">Indicatif du Pays :</label>
                                        <input type="text" name="full-name" class="input-text">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="">Numéro de Téléphone :</label>
                                        <input type="text" name="full-name" class="input-text">
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
                                        <input type="text" name="full-name" class="input-text">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="">Prénom :</label>
                                        <input type="text" name="full-name" class="input-text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-7 col-sm-6">
                            <div class="form-group fullname">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="">Adresse :</label>
                                        <input type="text" name="full-name" class="input-text">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="">Ville :</label>
                                        <input type="text" name="full-name" class="input-text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-7 col-sm-6">
                            <div class="form-group fullname">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="">Pays :</label>
                                        <input type="text" name="full-name" class="input-text">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="">Code Postal :</label>
                                        <input type="text" name="full-name" class="input-text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-7 col-sm-6">
                            <div class="form-group fullname">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="">Indicatif du Pays :</label>
                                        <input type="text" name="full-name" class="input-text">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="">Numéro de Téléphone :</label>
                                        <input type="text" name="full-name" class="input-text">
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
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4">
                                <label for="">Visa, MasterCard...</label>
                                <input type="button" style="background-color:#3ac4fa; color:white" value="VISA,MASTERCARD" name="num_card" id="" class="input-text">
                            </div>
                            <div class="col-lg-4">
                                <label for="">Numéro de carte</label>
                                <input type="text" name="num_card" id="" class="input-text">
                            </div>
                            <div class="col-lg-4">
                            <label for="">Nom sur la carte</label>
                                <input type="text" name="num_card" id="" class="input-text">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4">
                                <label for="">Paypal</label>
                                <input type="button" style="background-color:white; color:#3ac4fa" value="PAYPAL" name="num_card" id="" class="input-text">
                            </div>
                            <div class="col-lg-4">
                                <a href=""></a>
                            </div>
                            <div class="col-lg-4">
                            <a href=""></a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4">
                            <label for="">Mobile Money</label>
                                <input type="button" style="background-color:white; color:#3ac4fa" value="Mobile Money" name="num_card" id="" class="input-text">
                            </div>
                            <div class="col-lg-4">
                                <label for="">Date d'expiration</label>
                                <input type="text" name="num_card" id="" class="input-text">
                            </div>
                            <div class="col-lg-4">
                            <label for="">Code de sécurité</label>
                                <input type="text" name="num_card" id="" class="input-text">
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
                                <input type="button" style="background-color:#3ac4fa; color:white" value="Payer Maintenant" name="num_card" id="" class="input-text">
                            </div>
                        </div>
                    </div>
                    <p style="color:#3ac4fa">En réservant votre trajet, vous acceptez les Conditions Générales de Vente de HokaaFoza</p>
                </div>
            </form>
        </div>          
    </div>            
</div>
<!-- Rooms  section end -->


<script>
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

</script>
@endsection
