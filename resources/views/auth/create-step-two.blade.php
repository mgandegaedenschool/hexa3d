
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
        <form method="POST" action="{{ route('register.create.step.two.post') }}">
                @csrf
              
            <div class="form-row">
                <div class="form-group col-12 col-md-5 col-lg-5 py-3">
                    <label for="studies" class="mr-3 mb-0">Votre niveau d'études ?</label>
                    <div class="select-container">
                        <select class="custom-select custom-select-auth mb-3 form-control" id="studies" name="niv_etude">
                            <option value="brevet">Brevet</option>
                            <option value="bac">BAC</option>
                        </select>
                        <span class="focus"></span>
                    </div>
                </div>
                <div class="form-group col-12 col-md-5 col-lg-5 py-3">
                    <label for="studies" class="mr-3 mb-0">Votre étalonnage</label>
                    <div class="select-container">
                        <select class="custom-select custom-select-auth mb-3 form-control" id="etalonnage" name="etalonnage">
                            <option value="Adultes h/f">Adultes h/f</option>
                            <option value="Femmes">Femmes</option>
                            <option value="Hommes">Hommes</option>
                            <option value="Collégiens h/f">Collégiens h/f</option>
                            <option value="Collégiens">Collégiens</option>
                            <option value="Collégiennes ">Collégiennes </option>
                            <option value="Lycéens h/f">Lycéens h/f</option>
                            <option value="Lycéens ">Lycéens </option>
                            <option value="Lycéennes ">Lycéennes </option>
                        </select>

                        <span class="focus"></span>
                    </div>
                </div>
            </div>
            <div class="form-row d-flex justify-content-between mb-2">
                <div class="form-group col-12 col-md-5 col-lg-5">
                    <label for="scolarized" class="mr-3 mb-0">Êtes-vous scolarisé(e) ?</label>
                    <div class="select-container">
                        <select class="custom-select custom-select-auth mb-3 form-control dynamic-select" id="scolarized" name="scolarise">
                            <option value="non">Non</option>
                            <option value="oui">Oui</option>
                        </select>
                        <span class="focus"></span>
                    </div>
                </div>
                <div class="form-group col-12 col-md-5 col-lg-5 hidden-select-container hidden">
                    <label for="InputClasse" class="disabled-element-sch">Votre classe</label>
                    <input type="text" class="form-control disabled-element-sch" id="InputClasse" placeholder="Votre classe" name="classe">
                </div>
                <div class="form-group col-12 col-md-5 col-lg-5 hidden-select-container hidden">
                    <label for="InputSchool" class="disabled-element-sch">Votre établissement</label>
                    <input type="text" class="form-control disabled-element-sch" id="InputSchool" placeholder="Votre établissement" name="etablissement">
                </div>
                <div class="form-group col-12 col-md-5 col-lg-5 hidden-select-container hidden">
                    <label for="InputSection" class="disabled-element-sch">Votre section</label>
                    <input type="text" class="form-control disabled-element-sch" id="InputSection" placeholder="Votre section" name="section">
                </div>
            </div>

            <div class="d-flex justify-content-center align-items-center">
                <a href="{{route('register.create.step.one')}}" class="next-btn m-4"><i class='fas fa-chevron-left'></i> Précédent</a>
                <button type="submit" class="next-btn d-inline-block m-4">Suivant <i class='fas fa-chevron-right'></i></button>
            </div>
        </form>
    </div>
</main>

@endsection