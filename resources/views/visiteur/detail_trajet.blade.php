@extends('layout')

@section('content')

<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Détail sur le trajet</h1>
            <ul class="breadcrumbs">
                <li><a href="{{route('index')}}">Accueil</a></li>
                <li class="active">Détail Trajet</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Rooms details page start -->
<div class="content-area rooms-details-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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

                <div class="detail-slider-full mb-40">
                    <!-- sidebar start -->
                    <div class="rooms-detail-slider sidebar-widget">
                        <!--  Rooms detail slider start -->
                        <div class="rooms-detail-slider rds simple-slider">
                            <div id="carousel-custom" class="carousel slide" data-ride="carousel">
                                <div class="carousel-outer">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item  active">
                                            <img src= {{asset($trajet->images)}} class="thumb-preview" alt="Chevrolet Impala">
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
                        <!-- Rooms detail slider end -->
                    </div>
                    <div class="col-lg-12">
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
                        <br>
                        
                        <div class="row">
                            <div class="col-lg-3">
                                <h4> <b> Type de transport : </b></h4>
                            </div>
                            <div class="col-lg-9">
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
                        <br>
                        @if($trajet->bateau != null)
                        <div class="row">
                            <div class="col-lg-3">
                                <h4> <b> Modèle de conteneur : </b></h4>
                            </div>
                            <div class="col-lg-9">
                                <input readonly type="text" name="" class="input-text form-control" value="{{$trajet->content_model}}" id="">
                            </div>
                        </div>
                        @endif
                        <br>
                        <div class="row">
                            <div class="col-lg-3">
                                <h4> <b> Volume total : </b></h4>
                            </div>
                            <div class="col-lg-9">
                                <input readonly type="text" name="" class="input-text form-control" value="{{$trajet->volume}}" id="">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-3">
                                <h4> <b> Espace total restant (Cm) : </b></h4>
                            </div>
                            <div class="col-lg-9">
                                <label for="">Longueur :</label>
                                <input readonly type="text" name="" class="input-text form-control" value="{{$trajet->length}}" id="">
                                <label for="">Largeur :</label>
                                <input readonly type="text" name="" class="input-text form-control" value="{{$trajet->width}}" id="">
                                <label for="">Hauteur :</label>
                                <input readonly type="text" name="" class="input-text form-control" value="{{$trajet->height}}" id="">
                                <label for="">Volume :</label>
                                <input readonly type="text" name="" class="input-text form-control" value="{{$trajet->volume}}" id="">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-3">
                                <h4> <b> Poids restant : </b></h4>
                            </div>
                            <div class="col-lg-9">
                                <input readonly type="text" name="" class="input-text form-control" value="{{$trajet->weight}}" id="">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-3">
                                <h4> <b>  Assurance : </b></h4>
                            </div>
                            <div class="col-lg-9">
                                <input readonly type="text" name="" class="input-text form-control" value="{{$trajet->assurance}}" id="">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-3">
                                <h4> <b>  Détail Assurance : </b></h4>
                            </div>
                            <div class="col-lg-9">
                                <input readonly type="text" name="" class="input-text form-control" value="{{$trajet->detail_assurance}}" id="">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-3">
                                <h4> <b>  Marchandise dangereuse : </b></h4>
                            </div>
                            <div class="col-lg-9">
                                <input readonly type="text" name="" class="input-text form-control" value="{{$trajet->danger_merchandise == 1 ? 'OUI':'NON'}}" id="">
                            </div>
                        </div>
                        <br>
                        @if($trajet->danger_merchandise == 1)
                        <div class="row">
                            <div class="col-lg-3">
                                <h4> <b>  Classe : </b></h4>
                            </div>
                            <div class="col-lg-9">
                                <input readonly type="text" name="" class="input-text form-control" value="{{$trajet->classe_merchandise}}" id="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <h4> <b>  Nature des marchandises non autorisées : </b></h4>
                            </div>
                            <div class="col-lg-9">
                                <input readonly type="text" name="" class="input-text form-control" value="{{$trajet->nature_merchandise}}" id="">
                            </div>
                        </div>
                        @endif
                        <br>
                        <div class="row">
                            <div class="col-lg-5">
                                <h4> <b>  Informations Complémentaires : </b></h4>
                            </div>
                            <div class="col-lg-7">
                                <textarea name="" id="" readonly  class="input-text form-control" cols="10" rows="10">{{$trajet->info_sup}}</textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-4">
                                <h4> <b>Prix du Cm3 ou Kgs : </b></h4>
                            </div>
                            <br>
                            <div class="col-lg-4">
                                <input readonly type="text" name="" class="input-text form-control" value="{{$trajet->tarif}}" id="">
                            </div>
                            <div class="col-lg-4">
                                <a href="{{route('trajets',$trajet->id)}}"><input readonly type="button" class="input-text form-control" style="background-color: #3ac4fa; color:white " value="Reserver maintemant"></a> 
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <h4> <b>Date de départ :</b></h4>
                            </div>
                            <br>
                            <div class="col-lg-4">
                                <input readonly type="text" name="" class="input-text form-control" value="{{date('d-m-y', strtotime($trajet->date_out))}}" id="">
                            </div>
                            <div class="col-lg-4">
                                <a href="{{route('tchat_transport',$trajet->id)}}"><input readonly type="button" class="input-text form-control" style="background-color: #3ac4fa; color:white " value="Contacter Transporteur"></a> 
                            </div>

                        </div>          

                        <br>
                        <div class="row">
                            <div class="pull-left" style="background-color: dodgerblue">
                               	<a href="{{route('message',['id_trajet'=>$trajet->id, 'id_exp'=>Auth::user()->id, 'id_dest'=>$trajet->id_user])}}">Contacter Transporteur</a>   
                            </div> 
							<div class="pull-right" style="background-color: dodgerblue">
                               	<a href="{{route('signalement',['id_trajet'=>$trajet->id, 'id_exp'=>Auth::user()->id])}}">Signaler le trajet</a>   
                            </div>   
                        </div>

                    </div>
                    <!-- sidebar end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Rooms details page end -->

@endsection