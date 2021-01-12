@extends('layout')

@section('content')
    <div>
        <div class="titleprof p-3 mb-2 col-lg-12 col-md-12 col-sm-12 text-center">
            <div class="row" >

            </div>
            <div class="col-lg-10 col-md-8 col-sm-6" >
                <div class="text-light" >
                    <h2 class="">ADINISTRATION</h2>

                </div>

            </div>
            <div class=" col-lg-2 col-md-4 col-sm-6">
                <img class="img-rounded img-responsive"  src="{{ Auth::user()->profilimage }}"/>
            </div>
        </div>
    </div>
    <div id="" class="col-lg-12 col-sm-12 col-md-12 compterow" style="margin-bottom: 20px">
        <div class="col-lg-3 col-md-3 col-sm12">
            <div>
                <p>Bonjour, {{ Auth::user()->name }}</p>
            </div>
            <div >
                <a href="" class="btn btn-primary">deconnexion</a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm12">

        </div>
        <div class="col-lg-3 col-md-3 col-sm12">


        </div>


    </div>
    <div class="text-center col-lg-12"> <h3>Annonces</h3></div>


    <div  class="col-12" >

        <div  class="col-lg-4 " >
            <div id="menugauche" class="container" >
                <div class="" style="background-color: dodgerblue">
                    <a  href="{{route('adminannonces')}}">Annonces</a>
                </div>
                <div class="" >
                    <a   href="{{route('adminreservations')}}" >Réservations</a>
                </div>
                <div style="" >
                    <a   href="{{route('admintrajets')}}" >Trajets</a>
                </div>
                <div class="" style="">
                    <a  href="{{route('adminpaiements')}}">Paiements</a>
                </div>
                <div class="" style="">
                    <a  href="{{route('admincontacts')}}">Contacts</a>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="col-lg-8">
                <table class="table table-responsive-lg table-bordered" style="text-align: center; font-size: 10px">
                    <tr>
                        <th class="" style="width: 500px;">Numéro annonce</th>
                        <th style="width: 300px;">Nom client</th>
                        <th style="width: 300px;">Date annonce</th>
                        <th style="width: 300px;">Lieu départ</th>
                        <th style="width: 300px;">Lieu d'arrivé</th>
                        <th style="width: 300px;">Date départ</th>
                        <th style="width: 300px;">Type transport</th>
                        <th style="width: 200px;">Statut annonce</th>
                    </tr>
                    @foreach($annonces as $annonce)
                    <tr>
                        <td>{{$annonce->id_annonce}}</td>
                        <td>{{Auth::user()->name}}</td>
                        <td>{{$annonce->id_annonce}}</td>
                        <td>{{$annonce->id_annonce}}</td>
                        <td>{{$annonce->id_annonce}}</td>
                        <td>{{$annonce->id_annonce}}</td>
                        <td>{{$annonce->id_annonce}}</td>
                        <td>
                            <select>
                                <option value="fr">Non intégré</option>
                                <option value="nl">Intégrée</option>
                                <option value="en">Intégration validée</option>
                            </select>

                        </td>
                    </tr>
                        @endforeach
                </table>
            </div>





        </div>
    </div>




@endsection