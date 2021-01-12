@extends('layout')

@section('content')
 
<div class="container">

                 <div class="heading-rooms  clearfix sidebar-widget">
                        <div class="pull-left">
                            <h4>Trajet proposé par: </h4>
                            <p>
                                
                            </p>
                            <h4>
                                <span>{{App\User::find($trajet->id_user)->name}} {{App\User::find($trajet->id_user)->last_name}}</span>
                            </h4>
                        </div>
                        <div class="pull-right">
                            <h4><span>{{$trajet->id}}</span></h4>
                            <h5> </h5>
                            <p><i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i></p>
                        </div>
                    </div>
                    <!-- Heading courses end -->

<div class="col-lg-12">

							<div class="row">
                            <div class="col-lg-3">
                                <h4>  <b> Lieu de départ  </b></h4>
                            </div>
                            <div class="col-lg-3">
                                <h4> Pays : {{$trajet->country_out}}</h4>
                            </div>
                            <div class="col-lg-3">
                                <h4> Ville : {{$trajet->town_out}}</h4>
                            </div>
                            <div class="col-lg-3">
                                <h4> Adresse : {{$trajet->address_out}}</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <h4>  <b> Lieu d'arrivée  </b></h4>
                            </div>
                            <div class="col-lg-3">
                                <h4> Pays : {{$trajet->country_in}}</h4>
                            </div>
                            <div class="col-lg-3">
                                <h4> Ville : {{$trajet->town_in}}</h4>
                            </div>
                            <div class="col-lg-3">
                                <h4> Adresse : {{$trajet->address_in}}</h4>
                            </div>
                        </div>
                        <br>
                        
                        <div class="row">
                            <div class="col-lg-3">
                                <h4> <b> Type de transport : </b></h4>
                            </div>
                            <div class="col-lg-9">
                                <h4>@if($trajet->bateau != null)
                                {{'Bateau'}}
                                @elseif($trajet->route != null)
                                {{'Route'}}
                                @elseif($trajet->avion != null)
                                {{'Avion'}}
                                @elseif($trajet->train != null)
                                {{'Train'}}
                                 @endif
                                </h4>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-3">
                                <h4> <b> Volume total : </b></h4>
                            </div>
                            <div class="col-lg-9">
                                <h4>{{$trajet->volume}}</h4>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-3">
                                <h4> <b> Espace total restant (Cm) : </b></h4>
                            </div>
                            <div class="col-lg-9">
                                <h5>Longueur : {{$trajet->length}}</h5> 
                                <h5>Largeur : {{$trajet->width}}</h5> 
                                <h5>Hauteur : {{$trajet->height}}</h5> 
                                <h5>Volume : {{$trajet->volume}}</h5>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-3">
                                <h4> <b> Poids restant : </b></h4>
                            </div>
                            <div class="col-lg-9">
                                <h4>{{$trajet->weight}}</h4>
                            </div>
                        </div>
                        <br>
                        <div class="center">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h4> <b> Prix du Cm3 ou Kgs : </b> {{$trajet->tarif}} </h4>
                                    <h4> <b> Date de départ : </b> {{date('d-m-y', strtotime($trajet->date_out))}} </h4>
                                </div>
                            </div>
                        </div>
                    </div>

<div class="col-lg-8 text-justify">
    <br>
    <div class="col-sm-offset-4 col-sm-4">
		<div class="panel panel-info">
			<div class="panel-heading">Signalement</div>
			
			<div class="panel-body"> 
			
				<form method="POST" action="{{route('storeSignal')}}" accept-charset="UTF-8">
					@csrf
					<input name="expediteur" type="hidden" id="expediteur" value="{{ Auth::user()->id }}">
					<input name="trajet" type="hidden" id="trajet" value="{{ $trajet->id }}">

					<p>Selectionnez un probl�me </p>
					
					<div>
					  <input type="radio" id="fausse_info" name="signalement" value="fausse_info">
					  <label for="fausse_info">Fausse Information</label>
					</div>
					<div>
					  <input type="radio" id="double_annonce" name="signalement" value="double_annonce">
					  <label for="double_annonce">Double annonce</label>
					</div>
					<div>
					  <input type="radio" id="photo_derangeante" name="signalement" value="photo_derangeante">
					  <label for="photo_derangeante">Photo derangeante</label>
					</div>
					<div>
					  <input type="radio" id="faux_telephone" name="signalement" value="faux_telephone">
					  <label for="faux_telephone">Numero de telephone faux</label>
					</div>
					<div>
					  <input type="radio" id="profil_douteux" name="signalement" value="profil_douteux">
					  <label for="profil_douteux">Profil douteux</label>
					</div>
					<div>
					  <input type="radio" id="annulation" name="signalement" value="annulation">
					  <label for="annulation">Annulation du trajet</label>
					</div>										
					<br>
					<p><label for="detail">Decrivez le probl�me </label></p> 
					<textarea name="detail" id="detail"> </textarea><br>   
					<input type="submit" value="Envoyer !">	
				</form>			
			
			</div>
			
		</div>
	</div>
</div>
</div>
@endsection