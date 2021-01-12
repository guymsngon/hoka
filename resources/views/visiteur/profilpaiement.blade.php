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
    <div  class="col-12" style="margin-top: 20px">

        <div  class="col-lg-2 ">
            <div id="menugauche" class="container" >
                <div class="" style="">
                    <a  href="{{route('profilparam')}}">Profil</a>
                </div>
                <div style="background-color: dodgerblue"  >
                    <a   href="{{route('profilpaiement')}}" >Paiement</a>
                </div>
                <div >
                    <a  href="{{route('profilhistory')}}" >Historique</a></li>
                </div>

            </div>
        </div>


            <div class="container">

                <div id="formpaiement" class="col-lg-10">

                    <form method="post" action="{{url('profilpaiementupdate1/'.$modepaiement->id_paiement)}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-3 labelpaiement">
                                    <label>PayPal</label>
                                </div>
                                <div class="col-lg-1">
                                    <label> </label>
                                </div>
                                <div class="col-lg-3">
                                    <input class="form-control input-text" type="text" name="paypal" placeholder="....." value="{{$modepaiement->paypal}}" />
                                </div>
                                <div class="col-lg-2" style="font-size: 10px">
                                    <label >Par defaut</label>
                                </div >
                                <div class="col-lg-1">
                                    <input type="checkbox" name="ispaypalchecked" value="{{$modepaiement->ispaypalchecked}}"  @if($modepaiement->ispaypalchecked==1) checked=checked @endif/>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <H5 style="text-decoration: underline">Paiement mobile</H5>
                            </div>
                            <div class="form-group">
                                <div class="row ">
                                    <div class="col-lg-3 labelpaiement">
                                        <label>MTN MoMo</label>
                                        <input type="checkbox" name="ismomo" value="{{$modepaiement->ismomo}}"  @if($modepaiement->ismomo ==1 ) checked @endif>
                                    </div>
                                    <div class="col-lg-1" style="font-size: 10px">
                                        <label>No Tel </label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control input-text" type="text" name="mtnmomo" value="{{$modepaiement->mtnmomo}}"/>
                                    </div>
                                    <div class="col-lg-2" style="font-size: 10px">
                                        <label>Par defaut</label>
                                    </div >
                                    <div class="col-lg-1">
                                        <input type="checkbox" name="ismobilechecked" value="{{$modepaiement->ismobilechecked}}"  @if($modepaiement->ismobilechecked ==1 ) checked @endif/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-lg-3 labelpaiement">
                                        <label>Orange Money</label>
                                        <input type="checkbox" name="isom" value="{{$modepaiement->isom}}"  @if($modepaiement->isom ==1 ) checked @endif>
                                    </div>
                                    <div class="col-lg-1" style="font-size: 10px">
                                        <label>No Tel </label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control input-text" type="text" name="orangemoney" value="{{$modepaiement->orangemoney}}"/>
                                    </div>
                                    <div class="col-lg-2">
                                        <label></label>
                                    </div >
                                    <div class="col-lg-1">
                                        <label></label>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-lg-3 labelpaiement">
                                        <label>Express Union</label>
                                        <input type="checkbox" name="iseu" value="{{$modepaiement->iseu}}"  @if($modepaiement->iseu ==1 ) checked @endif>
                                    </div>
                                    <div class="col-lg-1" style="font-size: 10px">
                                        <label>No Tel </label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control input-text" type="text" name="expressunion" value="{{$modepaiement->expressunion}}" />
                                    </div>

                                    <div class="col-lg-2">
                                        <label></label>
                                    </div >
                                    <div class="col-lg-1">
                                        <label></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">

                                        <label></label>
                                    </div>
                                    <div class="col-lg-3 ">
                                        <button type="submit" class="form-control btn btn-primary">enregistrer</button>




                                    </div>
                                    <div class="col-lg-3">

                                        <label></label>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </form>

                    <form action="{{url('profilpaiementupdate2/'.$modepaiement->id_paiement)}}" method="post">
                        @csrf
                            <div>
                                <H5 style="text-decoration: underline">carte bancaire</H5>
                            </div>
                            <div class="form-group">
                                <div class="row ">
                                    <div class="col-lg-3 labelpaiement">
                                        <label>Visa</label>
                                        <input type="checkbox" name="isvisa" value="{{$modepaiement->isvisa}}"  @if($modepaiement->isvisa ==1 ) checked @endif>
                                    </div>
                                    <div class="col-lg-1" style="font-size: 10px">
                                        <label>Nom titulaire </label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input name="visaname" class="form-control input-text" type="text" value="{{$modepaiement->visaname}}"/>
                                    </div>
                                    <div class="col-lg-2" style="font-size: 10px">
                                        <label>Par defaut</label>
                                    </div >
                                    <div class="col-lg-1">
                                        <input type="checkbox" name="iscartebancaire" value="{{$modepaiement->iscartebancaire}}"  @if($modepaiement->iscartebancaire ==1 ) checked @endif/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-lg-3 labelpaiement">
                                        <label>MasterCard</label>
                                        <input type="checkbox" name="ismaster" value="{{$modepaiement->ismaster}}"  @if($modepaiement->ismaster ==1 ) checked @endif>
                                    </div>
                                    <div class="col-lg-1" style="font-size: 10px">
                                        <label>No carte </label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control input-text" type="text" name="visanumber" value="{{$modepaiement->visanumber}}"/>
                                    </div>
                                    <div class="col-lg-2">
                                        <label></label>
                                    </div >
                                    <div class="col-lg-1">
                                        <label></label>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-lg-3 labelpaiement">
                                        <label></label>
                                    </div>
                                    <div class="col-lg-1" style="font-size: 10px">
                                        <label> date exp </label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control input-text" type="text" name="visadate" value="{{$modepaiement->visadate}}"/>
                                    </div>
                                    <div class="col-lg-2" style="font-size: 10px">
                                        <label></label>
                                    </div >
                                    <div class="col-lg-1">

                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-lg-3 labelpaiement">
                                        <label></label>
                                    </div>
                                    <div class="col-lg-1" style="font-size: 10px">
                                        <label> Crytogramme </label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input name="visacrypto" class="form-control input-text" type="text"  value="{{$modepaiement->visacrypto}}"/>
                                    </div>
                                    <div class="col-lg-2" style="font-size: 10px">
                                        <label></label>
                                    </div >
                                    <div class="col-lg-1">

                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-lg-3 labelpaiement">
                                        <label></label>
                                    </div>
                                    <div class="col-lg-1" style="font-size: 10px">
                                        <label></label>
                                    </div>
                                    <div class="col-lg-3">
                                        <button type="submit" class="btn btn-primary form-control">enregistrer</button>
                                    </div>

                                    <div class="col-lg-2" style="font-size: 10px">
                                        <label></label>
                                    </div >
                                    <div class="col-lg-1">

                                    </div>
                                </div>
                            </div>
                    </form>

                    <form>
                        @csrf
                            <div>
                                <H5 style="text-decoration: underline">Compte Bancaire</H5>
                            </div>
                            <div class="form-group">
                                <div class="row ">
                                    <div class="col-lg-2 labelpaiement">
                                        <label></label>

                                    </div>
                                    <div class="col-lg-2" style="font-size: 10px">
                                        <label>Pays domiciliation </label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control input-text" type="text" />
                                    </div>
                                    <div class="col-lg-2" style="font-size: 10px">
                                        <label></label>
                                    </div >
                                    <div class="col-lg-1">

                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-lg-2 labelpaiement">
                                        <label></label>
                                    </div>
                                    <div class="col-lg-2" style="font-size: 10px">
                                        <label>Titulaire du compte </label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control input-text" type="text" />
                                    </div>
                                    <div class="col-lg-2">
                                        <label></label>
                                    </div >
                                    <div class="col-lg-1">
                                        <label></label>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-lg-2 labelpaiement">
                                        <label></label>
                                    </div>
                                    <div class="col-lg-2" style="font-size: 10px">
                                        <label> Nom de la Banque </label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control input-text" type="text" />
                                    </div>
                                    <div class="col-lg-2" style="font-size: 10px">
                                        <label></label>
                                    </div >
                                    <div class="col-lg-1">

                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-lg-2 labelpaiement">
                                        <label></label>
                                    </div>
                                    <div class="col-lg-2" style="font-size: 10px">
                                        <label> IBAN </label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control input-text" type="text" />
                                    </div>
                                    <div class="col-lg-2" style="font-size: 10px">
                                        <label></label>
                                    </div >
                                    <div class="col-lg-1">

                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-lg-2 labelpaiement">
                                        <label></label>
                                    </div>
                                    <div class="col-lg-2" style="font-size: 10px">
                                        <label> BIC(ou SWIFT) </label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control input-text" type="text" />
                                    </div>
                                    <div class="col-lg-2" style="font-size: 10px">
                                        <label></label>
                                    </div >
                                    <div class="col-lg-1">

                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-lg-2 labelpaiement">
                                        <label></label>
                                    </div>
                                    <div class="col-lg-2" style="font-size: 10px">
                                        <label> RIB(fichier) </label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control input-text" type="file" />
                                    </div>
                                    <div class="col-lg-3" style="font-size: 10px">
                                        <button class=" form-control btn btn-primary">inserer</button>
                                    </div >
                                    <div class="col-lg-1">

                                    </div>
                                </div>
                                <div>
                                    <H5 style="text-decoration: underline">Appro Compte Credit</H5>
                                </div>
                                <form>
                                    <div class="row ">
                                        <div class="col-lg-4" style="font-size: 10px">
                                            <input class="form-control" type="number"/>
                                        </div>
                                        <div class="col-lg-3">
                                            <button class="form-control btn btn-primary">Valider </button>
                                        </div>
                                        <div class="col-lg-3">
                                            <select class=" form-control"  name="transport">
                                                <option>Mobile Money</option>
                                                <option>Carte Visa</option>
                                                <option>Carte Mastercard</option>

                                            </select>
                                        </div>

                                    </div>
                                </form>

                            </div>

                    </form>

                </div>

            </div>





    </div>




@endsection