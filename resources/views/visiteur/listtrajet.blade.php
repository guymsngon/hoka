@extends('layout')

@section('content')

<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Liste des trajets </h1>
            <ul class="breadcrumbs">
                <li><a href="{{route('index')}}">Accueil</a></li>
                <li class="active">Trajets</li>
            </ul>
        </div>
    </div>
</div>

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
<br>

    <!-- Rooms detail section start -->
    <div class="content-area rooms-detail-section">
        <div class="container">
            @if(session('result'))
                <div class="alert alert-danger" role="alert">
                    <center>
                        {{session('result')}}
                    </center>
                </div>
            @endif
            <div class="row">
            @foreach($trajets as $trajet)
                <div class="col-lg-12 col-md-12 col-xs-12">
                    
                    <!-- sidebar start -->
                    <div class="rooms-detail-slider sidebar-widget">
                        <!-- Heading courses start -->
                        <div class="heading-rooms  clearfix sidebar-widget">
                            <div class="pull-left">
                                <h3>TRAJET  </h3>
                                <p>
                                    Trajet Proposé par:
                                </p>
                                <h3>
                                    <span>{{App\User::find($trajet->id_user)->name}} {{App\User::find($trajet->id_user)->last_name}}</span>
                                </h3>
                            </div>
                            <div class="pull-right">
                                <h3><span>{{$trajet->id}}</span></h3>
                                <h5>Code du trajet</h5>
                                <p><i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i></p>
                            </div>
                        </div>
                        <!-- Heading courses end -->
                        <hr>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="rooms-detail-slider simple-slider mb-40 ">
                                    <div id="carousel-custom" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-outer">
                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <img src= {{$trajet->images}} class="thumb-preview" alt="Chevrolet Impala">
                                                </div>
                                            </div>
                                            <!-- Controls -->
                                            <a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
                                                <span class="slider-mover-left t-slider-l" aria-hidden="true">
                                                    <i class="fa fa-angle-left"></i>
                                                </span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
                                                <span class="slider-mover-right t-slider-r" aria-hidden="true">
                                                    <i class="fa fa-angle-right"></i>
                                                </span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <h4>  <b> Lieu de départ : </b> <input type="text" name="" class="form-control" value="{{$trajet->country_out}}" readonly id="">  </h4>
                                
                                <h4> <b> Lieu d'arrivée : </b><input type="text" name="" class="form-control" value="{{$trajet->country_in}}" readonly id="">  </h4>
                                
                                <h4> <b> Type de transport : </b>
                                @if($trajet->bateau != null)
                                    <input type="text" name="" class="form-control" value="{{'Bateau'}}" readonly id="">
                                @elseif($trajet->route != null)
                                    <input type="text" name="" class="form-control" value="{{'Route'}}" readonly id="">
                                @elseif($trajet->avion != null)
                                    <input type="text" name="" class="form-control" value="{{'Avion'}}" readonly id="">
                                @elseif($trajet->train != null)
                                    <input type="text" name="" class="form-control" value="{{'Train'}}" readonly id="">
                                @else
                                    <input type="text" name="" class="form-control" value="{{'Inconnu'}}" readonly id="">
                                @endif
                                </h4>
                                
                                <h4> <b> Espace total restant (Cm) : </b>  
                                    <div class="pull-right">
                                        <i><small>Longueur :</small>  {{$trajet->length.' ' }}||</i> 
                                        <i> <small>Largeur :</small>  {{$trajet->width.' ' }}||</i> 
                                        <i> <small>Hauteur :</small>  {{$trajet->height.' ' }}||</i> 
                                        <i> <small>Volume :</small>  {{$trajet->volume }}</i> 
                                    </div>
                                </h4>
                                
                                
                                <h4> <b> Poids restant : </b><input type="text" name="" class="form-control" value="{{$trajet->weight}} {{$trajet->weight_unity}}" readonly id=""> </h4>
                                <h4> <b> Assurance : </b><input type="text" name="" class="form-control" value="{{$trajet->assurance}}" readonly id="">  </h4>
                                <hr>
                                <h3> <b> Prix du Cm3 : </b><input type="text" name="" class="form-control" value="{{$trajet->tarif}}" readonly id=""> </h3>
                            </div>

                            <hr>
                            <div class="container-fluid">
                                <div class="pull-right">
                                    <a class="btn search-button btn-theme btn-round next-step" href="{{route('trajets',$trajet->id)}}">Reserver</a>       
                                </div>
                                <div class="pull-left">
                                    <a class="btn search-button btn-theme btn-round next-step" href="{{route('detailtrajet',$trajet->id)}}">Détails</a>   
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
    <!-- Rooms detail section end -->
@endsection