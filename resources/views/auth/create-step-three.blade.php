
@extends('app')
@section('content')
<header class="upper-container d-flex">
    <div class="container d-flex header-contain">
        @include('espace_membre.header_img_inc')
    </div>
</header>
<main>
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

        <form method="POST" action="{{ route('register.create.step.three.post') }}">
            @csrf
            <div class="form-row d-flex justify-content-between mb-2">
                <div class="form-group col-12 col-md-5 col-lg-5">
                    <label for="salarized" class="mr-3 mb-0">Êtes-vous salarié(e) ?</label>
                    <div class="select-container">
                        <select class="custom-select custom-select-auth mb-3 form-control dynamic-select" id="salarized" name="salarie">
                            <option value="non">Non</option>
                            <option value="oui">Oui</option>
                        </select>
                        <span class="focus"></span>
                    </div>

                </div>
                <div class="form-group col-12 col-md-5 col-lg-5 hidden-select-container hidden">
                    <label for="etat" class="mr-3 mb-0">Votre etat</label>
                    <div class="select-container">
                        <select class="custom-select custom-select-auth mb-3 form-control" id="etat" name="etat">
                            <option value="">Votre etat</option>
                            <option value="etat1">etat 1</option>
                            <option value="etat2">etat 2</option>
                        </select>
                        <span class="focus"></span>
                    </div>
                </div>
            </div>
            <div class="form-row d-flex justify-content-between">
                <div class="form-group col-12 col-md-5 col-lg-5">
                    <label for="inputJob">Votre emploi actuel</label>
                    <input type="text" class="form-control" id="inputJob" placeholder="Votre emploi actuel" name="emploi_actuel">
                </div>
                <div class="form-group col-12 col-md-5 col-lg-5">
                    <label for="inputWantedJob">Votre emploi envisagé</label>
                    <input type="text" class="form-control" id="inputWantedJob" placeholder="Votre emploi envisagé" name="emploi_envisage">
                </div>
            </div>
            <div class="form-row d-flex">
                <div class="form-group col-12">
                    <label for="inputSpe">Votre spécialité</label>
                    <input type="text" class="form-control" id="inputSpe" placeholder="Votre spécialité" name="specialite">
                </div>
            </div>
            <div class="btn-container align-items-center justify-content-start">
                <a href="{{route('register.create.step.two')}}" class="next-btn ml-auto my-4"><i class='fas fa-chevron-left'></i> Précédent</a>
                <input type="submit" class="submit-form-register btn btn-lg purple-btn my-4 py-2 align-self-end" value="Envoyer">
            </div>
        </form>
    </div>
</main>

@endsection