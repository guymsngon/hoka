@extends('layout')

@section('content')
    <div class="titleprof ">
        <div class=" p-3 mb-2 col-lg-12 col-md-12 col-sm-12 text-center">
            <div class="row" >

            </div>
            <div class="col-lg-10 col-md-8 col-sm-6" >
                <div class="text-light" >
                    <h2 class="">MON COMPTE</h2>

                </div>

            </div>
            <div class=" col-lg-2 col-md-4 col-sm-6">
                <img class="img-rounded img-responsive" src="{{Auth::user()->profilimage}}"/>
            </div>
        </div>
    </div>
    <div id="" class="col-lg-12 col-sm-12 col-md-12 compterow" style="margin-bottom: 5px">
        <div class="col-lg-3 col-md-3 col-sm12">
            <div>
                <p>Bonjour, {{ Auth::user()->name }}</p>
            </div>
            <div >
                <a href="" class="btn btn-primary">deconnexion</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm12">
            <p>membre depuis le, {{Auth::user()->created_at}}</p>
        </div>
        <div class="col-lg-2 col-md-2 col-sm12">

            <i class="fa fa-bell"><span class="badge badge-info">{{$notifs}}</span></i>
        </div>
        <div class="col-lg-3 col-md-3 col-sm12">
            <p>Mes credits</p>

            <p>Mes credits</p>

        </div>


    </div>
    <div class="text-center  row">
        <div>
            <div id="menuprofil" class="col-lg-12">
                <div class="col-lg-3 col-md-3 col-sm-3" style="background-color: dodgerblue">
                    <a class="" href="{{route('profilparam')}}">Mes trajets</a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <a class="" href="{{route('profilparam')}}">Mes reservations</a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <a class="" href="{{route('profilparam')}}">Tracking</a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3" >
                    <a href="{{route('profilparam')}} ">Parametres du profil</a>
                </div>
            </div>
        </div>



    </div>
    @foreach($trajet as $mytrajet)
    <div  class="row" style="margin-top: 20px">

        <div class="col-lg-3">
            <div class="row">
                <div class="col-lg-4 div-border">
                    <p>code</p>
                </div>
                <div class="col-lg-8 div-border">
                    <p>{{$mytrajet->id}}</p>
                </div>
            </div>


            <div class="col-lg-8">
                <div class="">
                    <img class="" src="{{$mytrajet->images}}" style="height: 400px; width: 335px">
                </div>
            </div>
        </div>
        <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-7">
                        <label></label>
                    </div>
                    <div class="col-lg-3">
                        <label>statut</label>
                    </div>
                    <div class="col-lg-2 div-border" style="text-align: center">
                        <p disabled="true">en ligne</p>
                    </div>
                </div>
            <div class="row">
                <div class="col-lg-3">
                    <label><p style="text-decoration: underline">Lieu de départ:</p></label>
                </div>
                <div class="col-lg-1">
                    <label></label>
                </div>
                <div class="col-lg-3 div-border" style="text-align: center">
                    <p>{{$mytrajet->town_in}},{{$mytrajet->country_in}}</p>
                </div>
                <div class="col-lg-3">
                    <label></label>
                </div>
                <div class="col-lg-2 div-border" style="text-align: center;">
                    <p ><a style="color: red">Modifier</a></p>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-3">
                    <label><p style="text-decoration: underline">Lieu d'arrivé:</p></label>
                </div>
                <div class="col-lg-1">
                    <label></label>
                </div>
                <div class="col-lg-3 div-border" style="text-align: center">
                    <p>{{$mytrajet->town_out}},{{$mytrajet->country_out}}</p>
                </div>
                <div class="col-lg-3">
                    <label></label>
                </div>
                <div class="col-lg-2 div-border" style="text-align: center;">
                    <p ><a>Annuler</a></p>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-3">
                    <label><p style="text-decoration: underline">Type de transport:</p></label>
                </div>
                <div class="col-lg-1">
                    <label></label>
                </div>
                <div class="col-lg-3 div-border" style="text-align: center">
                    @if( $mytrajet->bateau ==1  )
                    <p >Bateau</p>

                    @elseif($mytrajet->avion==1)
                    <p >Avion</p>
                    @elseif($mytrajet->route==1)
                    <p >Route</p>
                    @elseif($mytrajet->train==1)
                    <p >Train</p>
                    @endif
                </div>
                <div class="col-lg-3">
                    <label></label>
                </div>
                <div class="col-lg-2 div-border" style="text-align: center;">
                    <p ><a>Mettre en VIP</a></p>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-3">
                    <label><p style="text-decoration: underline">Date de départ:</p></label>
                </div>
                <div class="col-lg-1">
                    <label></label>
                </div>
                <div class="col-lg-3 div-border" style="text-align: center">
                    <p>{{$mytrajet->date_out}}</p>
                </div>
                <div class="col-lg-3">
                    <label></label>
                </div>
                <div class="col-lg-2 div-border" style="text-align: center;">

                </div>

            </div>
            <div class="row">
                <div class="col-lg-3">
                    <label><p style="text-decoration: underline">Espace total restant:</p></label>
                </div>
                <div class="col-lg-1 div-border">
                    <p>Volume</p>
                </div>
                <div class="col-lg-3 div-border" style="text-align: center">
                    <p>{{$mytrajet->volume}}</p>
                </div>
                <div class="col-lg-3">
                    <label style="text-decoration: underline">espace réservé:</label>
                </div>
                <div class="col-lg-2 div-border" style="text-align: center;">
                    <p > </p>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-3">
                    <label><p style="text-decoration: underline"></p></label>
                </div>
                <div class="col-lg-1">
                    <label></label>
                </div>
                <div class="col-lg-3" style="text-align: center">
                    <p></p>
                </div>
                <div class="col-lg-3">
                    <label></label>
                </div>
                <div class="col-lg-2 " style="text-align: center;">
                    <p ></p>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-3">
                    <label><p style="text-decoration: underline">Poids Restant:</p></label>
                </div>
                <div class="col-lg-1 div-border">
                    <p>Kgs</p>
                </div>
                <div class="col-lg-3 div-border" style="text-align: center">
                    <p>{{$mytrajet->weight}}</p>
                </div>
                <div class="col-lg-3">
                    <label style="text-decoration: underline">Poids Réservé:</label>
                </div>
                <div class="col-lg-2 div-border" style="text-align: center;">
                    <p ></p>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-3">
                    <label><p style="text-decoration: underline">Assurance:</p></label>
                </div>
                <div class="col-lg-1">
                    <p></p>
                </div>
                <div class="col-lg-3 div-border" style="text-align: center">
                    <p disabled="">oui</p>
                </div>
                <div class="col-lg-3">
                    <label style="text-decoration: underline">Nbre de Réservation:</label>
                </div>
                <div class="col-lg-2 div-border" style="text-align: center;">
                    <p ></p>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-3">
                    <label><p style="text-decoration: underline">Prix du Cm3 ou Kgs:</p></label>
                </div>
                <div class="col-lg-1">

                </div>
                <div class="col-lg-3 div-border" style="text-align: center">
                    <p>{{$mytrajet->unity_price}}</p>
                </div>
                <div class="col-lg-3">
                    <label style="text-decoration: underline">Nbre de colis:</label>
                </div>
                <div class="col-lg-2 div-border" style="text-align: center;">
                    <p ></p>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-3">
                    <label><p style="text-decoration: underline">Montant total:</p></label>
                </div>
                <div class="col-lg-1">

                </div>
                <div class="col-lg-3 div-border" style="text-align: center">
                    <p>{{$mytrajet->town_in}}</p>
                </div>
                <div class="col-lg-3">
                    <label style="text-decoration: underline">Paiement reçu:</label>
                </div>
                <div class="col-lg-2 div-border" style="text-align: center;">
                    <p ></p>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-3">
                    <label><p style="text-decoration: underline"></p></label>
                </div>
                <div class="col-lg-1">
                    <p></p>
                </div>
                <div class="col-lg-3 " style="text-align: center">
                    <p></p>
                </div>
                <div class="col-lg-3">
                    <label style="text-decoration: underline"></label>
                </div>
                <div class="col-lg-2 " style="text-align: center;">
                    <p ></p>
                </div>

            </div>

        </div>




    </div>
    <div class="row">
        <div class="col-lg-3">
            <label></label>
        </div>
        <div class="col-lg-9">
            <div class="col-lg-4 div-border">
                <p><a>LISTE d'ENVIES</a></p>
            </div>
            <div class="col-lg-3">
                <p></p>
            </div>
            <div class="col-lg-5 div-border">
                <p><a>DETAILS RESERVATION</a></p>
            </div>
        </div>
    </div>
    @endforeach



@endsection