 {{-- @extends('app')

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

        </div> --}}

        {{-- <form class="mb-5 password-form d-flex flex-column p-5"> --}}
             {{-- <form class="mb-5 password-form d-flex flex-column p-5" method="POST" action="{{ route('password.update') }}">
                @csrf
            <div class="password-form-header">
                <h1>
                    Réinitialiser votre mot de passe
                </h1>
            </div>

            <div class="form-row mb-3 password-form-body d-flex justify-content-center">
                <div class="form-group col-12 password-form-input">
                    <label for="InputId">Votre adresse mail</label>
                    <input type="email" class="form-control" id="InputMailForgotMail" placeholder="Votre adresse mail">
                </div>
                <div class="form-group col-12 password-form-input">
                    <label for="InputId">Votre nouveau mot de passe</label>
                    <input type="password" class="form-control" id="InputMailForgotMail" placeholder="Votre nouveau mot de passe">
                </div>
                <div class="form-group col-12 password-form-input">
                    <label for="InputId">Confirmez votre mot de passe...</label>
                    <input type="password" class="form-control" id="InputMailForgotMail" placeholder="Confirmez votre mot de passe">
                </div>

                <input type="submit" value="Réinitialiser le mot de passe" class="btn purple-btn send-password-link-btn py-2 px-4">

            </div>
        </form>
    </div>

@endsection  --}}



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
     <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form class="mb-5 password-form d-flex flex-column p-5" method="POST" action="{{ route('password.update') }}">
            @csrf

            <div class="password-form-header">
                <h1>
                    Réinitialiser votre mot de passe
                </h1>
            </div>
<input type="hidden" name="token" value="{{ $request->route('token') }}">
            <div class="form-row mb-3 password-form-body d-flex justify-content-center">
                <div class="form-group col-12 password-form-input">
                    <label for="email">Votre adresse mail</label>
                         <x-input id="email" class="form-control" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                </div>
                <div class="form-group col-12 password-form-input">
                    <label for="InputId">Votre nouveau mot de passe</label>
                    
                      <x-input id="password" class="form-control" type="password" name="password" required />
                </div>
                <div class="form-group col-12 password-form-input">
                    <label for="InputId">Confirmez votre mot de passe...</label>
           <x-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required />
                </div>

                <input type="submit" value="Réinitialiser le mot de passe" class="btn purple-btn send-password-link-btn py-2 px-4">

            </div>
        </form>
    </div>

@endsection