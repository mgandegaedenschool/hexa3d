 @extends('app')

@section('content')
    <header class="upper-container d-flex">
        <div class="container header-contain">
            <div class="row d-flex align-items-center img-text-nav py-3">
                <div class="col-4 upper-image-container">
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

          <form class="mb-5 password-form d-flex flex-column p-5" method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="password-form-header">
                <h1>
                    Réinitialiser votre mot de passe
                </h1>
            </div>


             <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <div class="form-row mb-3 password-form-body d-flex justify-content-center">
                <div class="form-group col-12 password-form-input">

                    <X-label for="InputId" :value="__('Email')">Entrez l'adresse mail que vous avez utilisée pour créer votre compte et nous vous enverrons un lien pour la réinitialisation de votre mot de passe.</label>

                    <x-input id="InputMailForgotMail" class="form-control" type="email" name="email" :value="old('email')" required autofocus placeholder="Votre adresse mail" />
                </div>
                    <input type="submit" value="Envoyer un lien" class="btn purple-btn send-password-link-btn py-2 px-4">
                </div>
            </form>
    </div>

@endsection 