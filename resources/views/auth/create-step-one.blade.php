
@extends('app')

@section('content')
<header class="upper-container d-flex">
    <div class="container d-flex header-contain">
        @include('espace_membre.header_img_inc')
    </div>
</header>
<main>
    <div class="container">
        <h3 class="font-weight-bold text-center mb-5">Avant de commencer le test, merci de renseigner les informations suivantes :</h3>
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
        <h3 class="font-weight-bold text-center">Avant de commencer le test, merci de renseigner les informations suivantes :</h3>
    </div>
    <div class="container">
        <form method="POST" action="{{ route('register.create.step.one.post') }}">
            @csrf

            <div class="form-row d-flex justify-content-between">
                <div class="form-group col-12 col-md-5 col-lg-5">
                    <label for="InputId">Votre identifiant </label>
                    <input type="text" class="form-control" id="InputId" name="username" placeholder="Votre identifiant ">
                </div>
                <div class="form-group col-12 col-md-5 col-lg-5">
                    <label for="InputId">Votre adresse mail</label>
                    <input type="text" class="form-control" id="InputId" name="email" placeholder="Votre adresse mail">
                </div>
            </div>
            <div class="form-row d-flex justify-content-between">
                <div class="form-group col-12 col-md-5 col-lg-5">
                    <label for="InputPassword1">Votre mot de passe</label>
                    <input type="password" class="form-control" id="InputPassword1" name="password" placeholder="Votre mot de passe">
                </div>

                <div class="form-group col-12 col-md-5 col-lg-5">
                    <label for="inputName">Votre nom</label>
                    <input type="text" class="form-control" id="inputName"  name="lastname" placeholder="Votre nom">
                </div>
            </div>
            <div class="form-row d-flex justify-content-between">
                <div class="form-group col-12 col-md-5 col-lg-5">
                    <label for="inputFirstName">Votre prénom</label>
                    <input type="text" class="form-control" id="inputFirstName" name="firstname" placeholder="Votre prénom">
                </div>
                <div class="form-group col-12 col-md-5 col-lg-5">
                    <label for="inputAge">Votre âge</label>
                    <input type="number" class="form-control" id="inputAge" name="age" placeholder="Votre âge">
                </div>
            </div>

            <div class="form-row d-flex justify-content-between">

                <div class="form-group col-12 col-md-5 col-lg-5">
                    <label for="inputSexe">Votre sexe</label>
                    <select class="form-control custom-select custom-select-auth" id="inputSexe" name="sexe">
                        <option>--Votre sexe--</option>
                        <option value="masculin">Homme</option>
                        <option value="feminin">Femme</option>
                        <option value="autre">autre</option>
                    </select>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <button type="submit" class="next-btn d-inline-block mx-auto my-4">Suivant <i class='fas fa-chevron-right'></i></button>
            </div>
        </form>
    </div>
</main>
@endsection