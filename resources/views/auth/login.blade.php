@extends('app')

@section('content')
    <header class="upper-container d-flex">
        <div class="container header-contain">
            <div class="row d-flex align-items-center img-text-nav py-3">
                <div class="col-4 upper-image-container" style="max-width: 140px;">
                    <img src="{{asset('img/spiral_placeholder.png')}}" alt="spirale grise et blanche" class="img-fluid" style="width: 170px; height: 95px;">
                </div>
                <h6 class="text-uppercase col-8 col-md-2 upper-title my-2">questionnaires d'intérêts professionnels</h6>
            </div>
        </div>
    </header>

        <div class="container mx-auto main-div">
            <div class="icon-container mx-auto">
                <div class="icon-container-size">
                    <i class="far fa-user"></i>
                </div>

            </div>
            <form class="mb-5 form-connexion">
                <div class="form-row mb-4">
                    <div class="form-group col-12">
                        <label for="InputId">Votre identifiant ou mail</label>
                        <input type="text" class="form-control" id="InputIdLogin" placeholder="Votre identifiant ou mail">
                    </div>
                </div>
                <div class="form-row mb-5">
                    <div class="form-group col-12">
                        <label for="InputPassword1">Votre mot de passe</label>
                        <input type="password" class="form-control" id="InputPassword1Login" placeholder="Votre mot de passe">
                    </div>
                </div>

                <div class="text-center">
                    <input type="submit" value="Connexion" class="btn purple-btn py-2 px-5">

                    <p class="mt-5 forgot-password">Mot de passe oublié? <a class="reset-password-link" href="forgot-password">Réinitialisez-le</a></p>
                </div>

            </form>
        </div>

@endsection
