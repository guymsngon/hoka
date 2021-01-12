@extends('layout')

@section('content')
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>CONTACT TRANSPORTEUR</h1>
            <ul class="breadcrumbs">
                <li><a href="{{route('index')}}">Accueil</a></li>
                <li class="active">Contact</li>
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
<div class="contact-1 content-area-6">
    <div class="container" >
        <div class="pull-left">
        <div class="row">
            <div class="col-lg-4">
                <label for="">TRANSPORTEUR</label>
            </div>
            <div class="col-lg-8">
                <input type="text" name="" class="form-control input-text" id="">
            </div>
        </div>
        </div>
        <div class="pull-right">
            <h5> </h5>
            <p> <b>Note :</b>    <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-half-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i></p>
        </div>
        <div class="container"></div>
        <div class="row">
            <div class="col-lg-4">
                <label for="">CODE</label>
                <input type="text" name="" class="form-control input-text" id="">
            </div>
            <div class="col-lg-8">
                <label for="">Titre</label>
                <input type="text" name="" class="form-control input-text" id="">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <h4>  <b> Lieu de départ  </b></h4>
            </div>
            <div class="col-lg-3">
                <label for="">Pays :</label>
                <input readonly type="text" name="" class="input-text form-control" value="{{$trajet->country_out}}" id="">
            </div>
            <div class="col-lg-3">
                <label for="">Ville :</label>
                <input readonly type="text" name="" class="input-text form-control" value="{{$trajet->town_out}}" id="">
            </div>
            <div class="col-lg-3">
                <label for="">Adresse :</label>
                <input readonly type="text" name="" class="input-text form-control" value="{{$trajet->address_out}}" id="">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <h4>  <b> Lieu d'arrivée  </b></h4>
            </div>
            <div class="col-lg-3">
                <label for="">Pays :</label>
                <input readonly type="text" name="" class="input-text form-control" value="{{$trajet->country_in}}" id="">
            </div>
            <div class="col-lg-3">
                <label for="">Ville :</label>
                <input readonly type="text" name="" class="input-text form-control" value="{{$trajet->town_in}}" id="">
            </div>
            <div class="col-lg-3">
                <label for="">Adresse :</label>
                <input readonly type="text" name="" class="input-text form-control" value="{{$trajet->address_in}}" id="">
            </div>
        </div>
        <div class="row">
            <br>
            <div class="col-lg-3">
                <h4>  <b> Type de transport :  </b></h4>
            </div>
            <div class="col-lg-3">
                @if($trajet->bateau != null)
                    <input readonly type="text" name="" class="input-text form-control" value="Bateau" id="">
                @elseif($trajet->route != null)
                    <input readonly type="text" name="" class="input-text form-control" value="Route" id="">
                @elseif($trajet->avion != null)
                    <input readonly type="text" name="" class="input-text form-control" value="Avion" id="">
                @elseif($trajet->train != null)
                    <input readonly type="text" name="" class="input-text form-control" value="Train" id="">
                @else
                    <input readonly type="text" name="" class="input-text form-control" value="Inconnu" id="">
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <h4>  <b> Volume Total :</b></h4>
            </div>
            <div class="col-lg-3">
                <input readonly type="text" name="" class="input-text form-control" value="{{$trajet->volume}}" id="">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <h4>  <b> Espace Total Restant : </b></h4>
            </div>
            <div class="col-lg-3">
                <label for="">Volume :</label>
                <input readonly type="text" name="" class="input-text form-control" value="{{$trajet->volume}}" id="">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <h4>  <b> Poids Restant  </b></h4>
            </div>
            <div class="col-lg-3">
                <label for="">Kgs :</label>
                <input readonly type="text" name="" class="input-text form-control" value="{{$trajet->weight}}" id="">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <h4>  <b> Prix du Cm3 ou Kgs : </b></h4>
            </div>
            <div class="col-lg-3">
                <label for="">Cm3 :</label>
                <input readonly type="text" name="" class="input-text form-control" value="{{$trajet->tarif}}" id="">
            </div>
        </div>
        <br>
        <div class="container"  style="background-color:black; height:1px"></div>
        <br>
        <div class="container">
            <div class="pull-left"> 
                <div class="container"  style="background-color:#3ac4fa; height:55px; width:400px"><br> <center><b>Message du tranporteur1</b></center></div>
            </div>
            <div class="container" ></div>
            <div class="pull-right">
                <br>
                <div class="container"  style="background-color:grey; height:55px; color:white; width:400px"><br> <center><b>Mon message 1 </b></center></div>
            </div>
            <div class="container" >
                <div class="col-lg-12 col-md-12 col-sm-12 clearfix">
                    <h4><label for=""> Votre Message</label></h4>
                    <div class="form-group message">
                        <textarea class="form-control input-text" id="info_sup" name="" style="background-color: #3ac4fa; color:white" placeholder="Saisir votre méssage"></textarea>
                    </div>
                    <div class="container"><a onclick="Validation()" class="btn-md btn-theme right">Envoyer</a></div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection