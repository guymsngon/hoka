@extends('layout')

@section('content')
    <div>
        <div class="titleprof p-3 mb-2 col-lg-12 col-md-12 col-sm-12 text-center">
            <div class="row" >

            </div>
            <div class="col-lg-10 col-md-8 col-sm-6" >
                <div class="text-light" >
                    <h2 class="">MON COMPTE</h2>

                </div>

            </div>
            <div class=" col-lg-2 col-md-4 col-sm-6">
                <img class="img-rounded img-responsive"  src="{{ Auth::user()->profilimage }}"/>
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
    <div id="menuprofil" class="text-center  row container">
        <div class="col-lg-3 col-md-3 col-sm-3">
            <a class="" href="{{route('profilparam')}}">Mes trajets</a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
            <a class="" href="{{route('profilparam')}}">Mes reservations</a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
            <a class="" href="{{route('profilparam')}}">Tracking</a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3" style="background-color: dodgerblue">
            <a href="{{route('profilparam')}} ">Parametres du profil</a>
        </div>


    </div>

    <div  class="col-12" style="margin-top: 20px">

        <div  class="col-lg-4 ">
            <div id="menugauche" class="container" >
                <div class="" style="">
                    <a  href="{{route('profilparam')}}">Profil</a>
                </div>
                <div class="" >
                    <a   href="{{route('profilpaiement')}}" >Paiment</a>
                </div>
                <div style="background-color: dodgerblue" >
                    <a   href="profilhistory" >Historique</a></li>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="col-lg-8">
                <table class="table table-bordered">
                    <tr>
                        <th>Date</th>
                        <th>Heure</th>
                        <th>Libelé Transaction</th>
                        <th>Montant</th>
                        <th>Statut</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr><tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr><tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr><tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>





        </div>
    </div>




@endsection