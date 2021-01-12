@extends('layouts.app')

@section('content')

<div class="contact-bg overview-bgi">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Form content box start -->
                <div class="form-content-box">
                    <!-- logo -->
                    <a href="{{route('index')}}" class="clearfix alpha-logo">
                        LOGO
                    </a>
                    <!-- details -->
                    <div class="details">
                        @if(session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{session('error')}}
                            </div>
                        @endif
                        <h3>Connectez-vous a votre compte</h3>
                        <!-- Form start -->
                        <form method="POST" action="{{ route('logins') }}">
                        @csrf
                            <div class="form-group">
                                <input id="email" type="email" class="input-text" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>

                            <div class="form-group">
                                <input id="password" type="password" class="input-text" placeholder="Password" name="password" required autocomplete="current-password">
                            </div>
                            <div class="checkbox">
                                <div class="ez-checkbox pull-left">
                                    <label>
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                        Se souvenir 
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a class="link-not-important pull-right" href="{{ route('password.request') }}">
                                    Mot de passe oublié ?
                                    </a>
                                @endif
                                <div class="clearfix"></div>
                            </div>
                            <div class="mb-0">
                                <button type="submit" class="btn-md btn-theme btn-block">Connexion</button>
                            </div>
                        </form>
                        <!-- Form end -->
                    </div>
                    <!-- Footer -->
                    <div class="footer">
                        <span>
                            N'etes vous  pas membre ? <a href="{{route('register')}}">S'inscrire ici</a>
                        </span>
                    </div>
                </div>
                <!-- Form content box end -->
            </div>
        </div>
    </div>
</div>
@endsection
