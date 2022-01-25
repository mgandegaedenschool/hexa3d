{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Name -->
            <div class="mt-4">
                <x-label for="firstname" :value="__('Fistname')" />
                <x-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstName')" required autofocus />
            </div>
            <div class="mt-4">
                <x-label for="lastname" :value="__('Lastname')" />
                <x-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastName')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>
            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="mt-4">
                <x-label for="username" :value="__('Username')" />
                <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('userName')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="niv_etude" :value="__('niv_etude')" />
                <x-input id="niv_etude" class="block mt-1 w-full" type="text" name="niv_etude" :value="old('niv_etude')" required autofocus />
            </div>
            <div class="mt-4">
                <x-label for="classe" :value="__('classe')" />
                <x-input id="classe" class="block mt-1 w-full" type="text" name="classe" :value="old('section')" required autofocus />
            </div>
            <div class="mt-4">
                <x-label for="section" :value="__('Section')" />
                <x-input id="section" class="block mt-1 w-full" type="text" name="section" :value="old('section')" required autofocus />
            </div>
            <div class="mt-4">
                <x-label for="sexe" :value="__('sexe')" />
                <x-input id="sexe" class="block mt-1 w-full" type="text" name="sexe" :value="old('sexe')" required autofocus />
            </div>
            <div class="mt-4">
                <x-label for="age" :value="__('age')" />
                <x-input id="age" class="block mt-1 w-full" type="number" name="age" :value="old('age')" required autofocus />
            </div>
            <div class="mt-4">
                <x-label for="scolarise" :value="__('scolarise')" />
                <x-input id="scolarise" class="block mt-1 w-full" type="number" name="scolarise" :value="old('scolarise')" required autofocus />
            </div>
            <div class="mt-4">
                <x-label for="etablissement" :value="__('etablissement')" />
                <x-input id="etablissement" class="block mt-1 w-full" type="text" name="etablissement" :value="old('etablissement')" required autofocus />
            </div>
            <div class="mt-4">
                <x-label for="emploi_actuel" :value="__('emploi_actuel')" />
                <x-input id="emploi_actuel" class="block mt-1 w-full" type="text" name="emploi_actuel" :value="old('emploi_actuel')" required autofocus />
            </div>
            <div class="mt-4">
                <x-label for="salarie" :value="__('Salarie')" />
                <x-input id="salarie" class="block mt-1 w-full" type="number" name="salarie" :value="old('salarie')" required autofocus />
            </div>
            <div class="mt-4">
                <x-label for="specialite" :value="__('Specialite')" />
                <x-input id="specialite" class="block mt-1 w-full" type="text" name="specialite" :value="old('specialite')" required autofocus />
            </div>
            <div class="mt-4">
                <x-label for="etat" :value="__('etat')" />
                <x-input id="etat" class="block mt-1 w-full" type="text" name="etat" :value="old('etat')" required autofocus />
            </div>
   
            <div class="mt-4">
                <x-label for="emploi_envisage" :value="__('emploi_envisage')" />
                <x-input id="emploi_envisage" class="block mt-1 w-full" type="text" name="emploi_envisage" :value="old('emploi_envisage')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
       
    </x-auth-card>
</x-guest-layout> --}}

@extends('app')
@section('content')
    <header class="upper-container d-flex">
        <div class="container header-contain">
            <div class="row d-flex align-items-center img-text-nav py-3">
                <div class="col-4 upper-image-container">
                    <img src="http://via.placeholder.com/640x360" alt="spirale grise et blanche" class="img-fluid">
                </div>
                <h6 class="text-uppercase col-8 col-md-2 upper-title my-2">questionnaires d'intérêts professionnels</h6>
            </div>
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
                        <label for="InputStudies">Votre niveau d'études</label>
                        <input type="text" class="form-control" id="InputStudies" name="niv_etude" placeholder="Votre niveau d'études">
                    </div>
                </div>
                <div class="form-row d-flex justify-content-between hidden-field p-3 mb-2">
                    <div class="form-group col-12 col-md-5 col-lg-5">
                        <div class="form-check d-flex align-items-center flex-wrap schol">
                            <label for="inlineRadio4" class="mr-3 mb-0">Êtes-vous scholarisé(e) ?</label>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input radioSch" type="radio" name="scolarise" id="inlineRadio3" value="1">
                                <label class="form-check-label" for="inlineRadio3">Oui</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input radioSch" type="radio" name="scolarise" id="inlineRadio4" value="0" checked>
                                <label class="form-check-label" for="inlineRadio4">Non</label>
                            </div>  
                        </div>

                        <label for="InputStudies" class="hidden disabled-element-sch">Votre classe</label>
                        <input type="text" class="form-control disabled-element-sch hidden" id="InputClass" name="classe" placeholder="Votre classe">
                        <label for="InputStudies" class="hidden disabled-element-sch">Votre niveau votre établissement</label>
                        <input type="text" class="form-control disabled-element-sch hidden" id="InputSchool"  name="etablissement" placeholder="Votre établissement">
                        <label for="InputStudies" class="hidden disabled-element-sch">Votre section</label>
                        <input type="text" class="form-control disabled-element-sch hidden" id="InputSection" name="section" placeholder="Votre section">
                    </div>
                    <div class="form-group col-12 col-md-5 col-lg-5">
                        <div class="form-check d-flex align-items-center flex-wrap salary">
                            <label for="inputScholarized" class="mb-0 mr-3">Êtes-vous salarié(e) ?</label>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input radioSal" type="radio" name="salarie" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">Oui</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input radioSal" type="radio" name="salarie" id="inlineRadio2" value="0" checked>
                                <label class="form-check-label" for="inlineRadio2">Non</label>
                            </div>
                        </div>

                        <label for="InputStudies" class="hidden disabled-element-sal">Votre état</label>
                        <input type="text" class="form-control disabled-element-sal hidden" id="InputStatus" name="etat" placeholder="Votre état">
                    </div>

                </div>

                <div class="d-flex justify-content-center align-items-center">
                    <button type="submit" class="next-btn d-inline-block mx-auto my-0 pb-4">Suivant <i class='fas fa-chevron-right'></i></button>
                </div>
            </form>     

                
        </div>

    </main>

@endsection