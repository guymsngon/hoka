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
                        <h3>Code de confirmation d'adresse</h3>
                        <!-- Form start -->
                        <form method="POST" action="{{route('postconfirm', [$code,$id]) }}">
                        @csrf
                            <div class="form-group">
                                <p>Confirmez que cette adresse e-mail vous appartient. Entrez le code qui apparaît dans l’e-mail envoyé à xxxxxx@xxxx.com</p>
                            </div>
                            <div class="form-group">
                                <input id="code" type="number" class="input-text" placeholder="Ex: 2134" name="code" required >
                            </div>
                            <div class="mb-0">
                                <button type="submit" class="btn-md btn-theme btn-block">Continuer</button>
                            </div>
                        </form>
                        <!-- Form end -->
                    </div>
                    <div class="footer">
                        <span>
                            <a href="{{route('resend',[$code,$id])}}">Renvoyer le mail</a>
                        </span>
                    </div>
                <!-- Form content box end -->
            </div>
        </div>
    </div>
</div>
@endsection
