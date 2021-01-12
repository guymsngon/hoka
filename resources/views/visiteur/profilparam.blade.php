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
                <div class="user-profilesinglepage" id="avatar-header">
                    <div class="avatar-header">
                        <div class="avatar-wrapper">
                            <img class="profile-pic" src="{{Auth::user()->profilimage}}"/>
                            <div class="upload-button">
                                <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                            </div>
                            <input class="file-upload" type="file" accept="image/*"/>
                        </div>


                    </div>

                </div>
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
            <a class="" href="{{route('profiltrajet')}}">Mes trajets</a>
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
                <div class="" style="background-color: dodgerblue">
                    <a  href="{{route('profilparam')}}">Profil</a>
                </div>
                <div   >
                    <a   href="{{route('profilpaiement')}}" >Paiment</a>
                </div>
                <div >
                    <a  href="{{route('profilhistory')}}" >Historique</a></li>
                </div>

            </div>
        </div>
        <div class="container">
            <div id="formprofil1" class="col-lg-8">
                {{--form pour profil--}}
                <form method="post" action="{{ route('users.update',Auth::user()->id ) }}" enctype="multipart/form-data" >

                    <div class="form-group">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-lg-3">
                                <label>Nom</label>
                            </div >
                            <div class="col-lg-3">
                                <input type="text" name="name" class="form-control input-text " value="{{ Auth::user()->last_name }}" disabled/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <label>Prenom</label>
                            </div >
                            <div class="col-lg-3">
                                <input type="text" name="last_name" class="form-control input-text" value="{{ Auth::user()->name }}" disabled/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <label>Date de naissance</label>
                            </div >
                            <div class="col-lg-3">
                                <input type="date" name="borndate" class="form-control input-text" value="{{ Auth::user()->borndate }}" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <label>Telephone</label>
                            </div >
                            <div class="col-lg-3">
                                <input type="text" name="phone" class="form-control input-text" value="{{ Auth::user()->phone }}" disabled/>
                            </div>
                            <div class="col-lg-3">
                                <label>Mobile</label>
                            </div >
                            <div class="col-lg-3">
                                <input type="text" name="phone2" class="form-control input-text" value="{{ Auth::user()->phone2 }}" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <label>Adresse</label>
                            </div >
                            <div class="col-lg-3">
                                <input type="text" name="code_postal" class="form-control input-text" value="{{ Auth::user()->code_postal }}" disabled/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <label>Ville</label>
                            </div >
                            <div class="col-lg-3">
                                <input type="text" name="town" class="form-control input-text" value="{{ Auth::user()->town }}" disabled/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <label>Pays</label>
                            </div >
                            <div class="col-lg-3">
                                <input type="text" name="country" class="form-control input-text" value="{{ Auth::user()->country }}" disabled/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <label>No CNI/Passport</label>
                            </div >
                            <div class="col-lg-3">
                                <input type="number" name="cni" value="{{ Auth::user()->cni }}" class="form-control input-text" />
                            </div>
                            <div class="col-lg-3">
                                <div class="btn btn-primary form-control input-text">
                                    <input type="file" value="{{ Auth::user()->imgcni }}" name="imgcni" name="images">
                                    @error('imgcni')
                                        <span>
                                            <strong class="invalid-feedback" role="alert">
                                                {{$message}}
                                            </strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="btn btn-primary form-control input-text">
                                    <input type="file" name="imgcni2" value="{{ Auth::user()->imgcni2 }}">
                                    @error('imgcni2')
                                    <span>
                                            <strong class="invalid-feedback" role="alert">
                                                {{$message}}
                                            </strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">

                        </div>
                        <div class="col-lg-12">

                        </div>
                        <div class="row" style="margin-top: 3%">
                            <div class="col-lg-3">
                                <label>Societe</label>
                            </div >


                            <div class="col-lg-3">
                                <input type="text" name="name_societe" class="form-control input-text" value="{{ Auth::user()->name_societe }}" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <label>NIU</label>
                            </div >
                            <div class="col-lg-3">
                                <input type="number" name="siret" value="{{ Auth::user()->siret }}" class="form-control input-text"/>
                            </div>
                            <div class="col-lg-3">
                                <div class="btn btn-primary form-control input-text ">
                                    <input type="file" value="{{ Auth::user()->imagesoc }}" name="imagesoc" name="images">
                                    @error('imagesoc')
                                    <span>
                                            <strong class="invalid-feedback" role="alert">
                                                {{$message}}
                                            </strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                            <div class="col-lg-3">
                                <button class="btn-primary form-control" type="submit">Valider</button>
                            </div>
                        </div>
                </form>


                {{--form pour le mot de passe--}}
                <form method="post" action="{{ route('change.password') }}">
                    <div class="form-group">
                        <div class="">
                            @csrf



                            @foreach ($errors->all() as $error)

                                <p class="text-danger">{{ $error }}</p>

                            @endforeach
                            <div class="col-lg-12">
                                <H4>Reinitialisation mot de passe</H4>

                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <label>Ancien MDP</label>
                                </div >
                                <div class="col-lg-3">
                                    <input name="current_password" type="password" class="form-control input-text" required/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <label>Nouveau MDP</label>
                                </div >
                                <div class="col-lg-3">
                                    <input name="new_password" type="password" class="form-control input-text" required/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <label>Confirmation MDP</label>
                                </div >
                                <div class="col-lg-3">
                                    <input name="new_confirm_password" type="password" class="form-control input-text" required/>
                                </div>
                                <div class="col-lg-3">
                                    <button class="btn-primary form-control" type="submit">Valider</button>
                                </div>
                            </div>
                            <div>
                                <h5>Langues</h5>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-sm-2">
                                    <label>Francais</label>
                                </div>
                                <div class="col-lg-1">
                                    <input type="checkbox">
                                </div>
                                <div class="col-lg-2 col-sm-2">
                                    <label>Anglais</label>
                                </div>
                                <div>
                                    <input type="checkbox">
                                </div>
                            </div>
                        </div>


                    </div>
            </form>

            </div>




    </div>
    </div>




@endsection