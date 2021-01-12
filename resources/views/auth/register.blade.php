@extends('layouts.app')

@section('content')
<div class="contact-bg overview-bgi">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <!-- Form content box start -->
                <div class="form-content-box" >
                    <!-- logo -->
                    <a style="color:white" href="{{route('index')}}" class="clearfix alpha-logo">
                        LOGO
                    </a>
                    <!-- details -->
                    <div class="container">
                    @if(session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{session('error')}}
                        </div>
                    @endif
                        <h3 style="color:white">Créez votre compte</h3>
                        <!-- Form start -->
                        <form method="POST" action="{{ route('registers') }}">
                            @csrf
                            <div class="row">
                                <div class= "col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input id="name" type="text" class="input-text" placeholder="Nom *" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    </div>
                                </div>
                            
                                <div class= "col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input id="last_name" type="text" class="input-text" placeholder="Prénom" name="last_name" value="{{ old('last_name') }}"  autocomplete="last_name" autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class= "col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input id="phone" type="number" class="input-text" placeholder="Phone *" name="phone"  value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                    </div>
                                </div>
                                <div class= "col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input id="email" type="email" class="input-text" placeholder="Email* " name="email" value="{{ old('email') }}" required autocomplete="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class= "col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input id="code_postal" type="text" class="input-text" placeholder="Code Postal" name="code_postal" value="{{ old('code_postal') }}"  autocomplete="code_postal" autofocus>
                                    </div>
                                </div>
                            
                                <div class= "col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input id="ville" type="text" class="input-text" placeholder="Ville *" name="town" value="{{ old('town') }}" required autocomplete="town" autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class= "col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input id="pays" type="text" class="input-text" placeholder="Pays *" name="country" value="{{ old('country') }}" required autocomplete="country" autofocus>
                                    </div>
                                </div>
                            
                                <div class= "col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input id="courrie" type="text" class="input-text" placeholder="Courriel" name="courrie" value="{{ old('courrie') }}" autocomplete="courrie" autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class= "col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input id="password" type="password" class="input-text" placeholder="Mot de passe *" name="password" required autocomplete="new-password">
                                    </div>
                                </div>
                            
                                <div class= "col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input id="password_confirmation" type="password" class="input-text" placeholder="Mot de passe Confirmation *" name="password_confirmation" required autocomplete="new-password_confirmation">
                                    </div>
                                </div>
                            </div>
                            <div class="checkbox">
                                <div class="ez-checkbox pull-left">
                                    <label style="color:white">
                                        <input class="form-check-input" onclick="isSociety()" type="checkbox" name="ste" id="ste">
                                            Etes vous une société ?
                                    </label>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input id="name_societe" type="text" class="input-text" placeholder="Nom de la Société *" name="name_societe" value="{{ old('name_societe') }}" disabled autocomplete="name_societe" autofocus>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input id="siret" type="number" class="input-text" placeholder="N° de Siret *" name="siret" value="{{ old('siret') }}" disabled autocomplete="siret" autofocus>
                                    </div>
                                </div>
                            </div>

                            <div class="checkbox">
                                <div class="ez-checkbox pull-left">
                                    <label style="color:white">
                                    <input class="form-check-input" type="checkbox" required name="" id="remember">
                                        J'accepte les conditions générale de vente ainsi que les conditions d'utilisation 
                                    </label>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="checkbox">
                                <div class="ez-checkbox pull-left">
                                    <label style="color:white">
                                    <input class="form-check-input" type="checkbox" required name="" id="remember">
                                        J'accepte de recevoir les offres commerciales Hokaafoza
                                    </label>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="mb-0">
                                <button type="submit" class="btn-md btn-theme btn-block">Je crée mon compte</button>
                            </div>
                        </form>
                        </br>
                        <!-- Form end -->
                        <div class="footer">
                            <span>
                                N'etes vous déjà membre ? <a href="{{route('login')}}">Connectez-vous ici</a>
                            </span>
                        </div>
                    </div>
                    <!-- Footer -->
                </div>
                <!-- Form content box end -->
            </div>
        </div>
    </div>
</div>
<script>
    function isSociety(){
        document.getElementById("name_societe").disabled = !document.getElementById("name_societe").disabled;
        document.getElementById("siret").disabled = !document.getElementById("siret").disabled;
    }
</script>
@endsection
