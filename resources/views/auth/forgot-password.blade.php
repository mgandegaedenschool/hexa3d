@extends('app')

@section('content')
    <header class="upper-container d-flex">
        <div class="container header-contain">
            <div class="row d-flex align-items-center img-text-nav py-3">
                <div class="col-4 upper-image-container">
                    <img src="https://via.placeholder.com/640x360" alt="spirale grise et blanche" class="img-fluid">
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

        <form class="mb-5 reset-password-form d-flex flex-column p-5">
            <div class="reset-form-header">
                <h1>
                    Réinitialiser votre mot de passe
                </h1>
            </div>

            <div class="form-row mb-3 reset-form-body">
                <div class="form-group col-12 reset-form-input">
                    <label for="InputId">Entrez l'adresse mail que vous avez utilisé pour créer votre compte et nous vous enverrons un lien pour la réinitialisation de votre mot de passe.</label>
                    <input type="text" class="form-control" id="InputMailForgotMail" placeholder="Votre adresse mail">
                </div>


                <input type="submit" value="Envoyer un lien de réinitialisation de mot de passe" class="btn purple-btn btn-block send-password-link-btn py-2 px-4">

            </div>
        </form>
    </div>

@endsection
