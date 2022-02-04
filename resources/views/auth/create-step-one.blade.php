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
    <main class="mt-5 pt-4">
        <div class="container">

                <h3 class="font-weight-bold text-center">Avant de commencer le test, merci de renseigner les informations suivantes :</h3>
                <div class="pages d-flex align-items-center justify-content-center my-4">
                    {{-- change the style when the steps advance --}}
                    <p class='step my-0 mx-3 active-step'>Identité</p>
                    <i class='fas fa-chevron-right <?php if(isset($_GET['step']) && $_GET['step'] >= 2){
                        echo 'active-chevron';
                    } ?>'></i>
                    <p class='step my-0 mx-3 <?php if(isset($_GET['step']) && $_GET['step'] >= 2){
                        echo 'active-step';
                    } ?>'>Scolarité</p>
                    <i class='fas fa-chevron-right <?php if(isset($_GET['step']) && $_GET['step'] >= 3){
                        echo 'active-chevron';
                    } ?>'></i>
                    <p class='step my-0 mx-3 <?php if(isset($_GET['step']) && $_GET['step'] >= 3){
                        echo 'active-step';
                    } ?>'>Professionel</p>
                </div>
        </div>
        <div class="container">

        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <form method="POST" action="{{ route('register.create.step.one.post','step=2') }}">
                    @csrf 
        
                <div class="form-row d-flex justify-content-between">
                    <div class="form-group col-12 col-md-5 col-lg-5">
                        <label for="InputId">Votre identifiant </label>
                        <x-input type="text" class="form-control" id="InputId" name="username" :value="old('username')" placeholder="Votre identifiant" />
                    </div>
                    <div class="form-group col-12 col-md-5 col-lg-5">
                        <label for="InputId">Votre adresse mail</label>
                        <x-input type="text" class="form-control" id="InputId" name="email" :value="old('email')" placeholder="Votre adresse mail" />
                    </div>
                </div>
                <div class="form-row d-flex justify-content-between">
                    <div class="form-group col-12 col-md-5 col-lg-5">
                        <label for="InputPassword1">Votre mot de passe</label>
                        <x-input type="password" class="form-control" id="InputPassword1" name="password" :value="old('password')" placeholder="Votre mot de passe (plus de 8 caractères)" />
                    </div>
                
                        <div class="form-group col-12 col-md-5 col-lg-5">
                        <label for="inputName">Votre nom</label>
                        <x-input type="text" class="form-control" id="inputName"  name="lastname" :value="old('lastname')" placeholder="Votre nom" />
                    </div>
                </div>
                <div class="form-row d-flex justify-content-between">
                    
                    <div class="form-group col-12 col-md-5 col-lg-5">
                        <label for="inputFirstName">Votre prénom</label>
                        <x-input type="text" class="form-control" id="inputFirstName" name="firstname" :value="old('firstname')" placeholder="Votre prénom" />
                    </div>
                     <div class="form-group col-12 col-md-5 col-lg-5">
                        <label for="inputAge">Votre âge</label>
                        <x-input type="number" class="form-control" id="inputAge" name="age" :value="old('age')" placeholder="Votre âge" />
                    </div>
                </div>

                <div class="form-row d-flex justify-content-between">
                   
                    <div class="form-group col-12 col-md-5 col-lg-5">
                        <label for="inputSexe">Votre sexe</label>
                        <select class="form-control" id="inputSexe" name="sexe">
                            <option>--Votre sexe--</option>
                            <option value="homme">Homme</option>
                            <option value="femme">Femme</option>
                            <option value="autre">autre</option>
                        </select>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <button type="submit" class="next-btn d-inline-block mx-auto my-0 pb-4">Suivant <i class='fas fa-chevron-right'></i></button>
                </div>
            </form>
        </div>
    </main>

@endsection