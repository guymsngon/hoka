@extends('layout')

@section('content')

<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>RECHERCHER</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Accueil</a></li>
                <li class="active">Rechercher un Trajet</li>
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
</br>
<!-- Sub Banner end -->

@endsection
