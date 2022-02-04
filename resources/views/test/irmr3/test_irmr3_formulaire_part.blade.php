@extends('app')
<?php $bgc = 'grey-background'; ?>
@section('content')
    @include('test.irmr3.header_irmr3_inc')

    <?php if (isset($_GET['step']) && $_GET['step'] == 3){ ?>
    <div class="container">
        <h3 class="part-title font-weight-bold">Ecran <?=$_GET['part']??'' ?>/9</h3>
            <div class="row no-gutters text-center font-weight-bold">
                <div class="col-12 col-md-6 col-lg-6"></div>
                <div class="col-4 col-md-2 col-lg-2">
                    <p class="mb-2">0</p>
                    <p class="irmr3-bareme">Ce métier ne m'attire pas</p>
                </div>
                <div class="col-4 col-md-2 col-lg-2">
                    <p class="mb-2">1</p>
                    <p class="irmr3-bareme">Ce métier m'est indifférent</p>
                </div>
                <div class="col-4 col-md-2 col-lg-2">
                    <p class="mb-2">2</p>
                    <p class="irmr3-bareme">Ce métier fait partie de mes préférés</p>
                </div>
            </div>
    </div>

<div class="container irmr3-test-container">

        <form action="{{route('test.test_irmr3_formulaire_part',['step'=>3 ,'part'=>2 ])}}" method="post">
        @csrf
        <div class="form-row irmr3-form-row mb-3">
            <div class="p-0 col-12 col-md-6 col-lg-6">
                <p class="job">Exploitant agricole <span class="hidden-definition">définition du métier au survol ..</span></p>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="exp_agricole" value="0|plein_air">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="exp_agricole" value="2|plein_air">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="exp_agricole" value="2|plein_air">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
        </div>
        <div class="form-row irmr3-form-row mb-3">
            <div class="p-0 col-12 col-md-6 col-lg-6">
                <p class="job">Ingénieur en bâtiment<span class="hidden-definition">définition du métier au survol</span></p>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="inge_batiment" value="0|techniques">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="inge_batiment" value="1|techniques">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="inge_batiment" value="2|techniques">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
        </div>
        <div class="form-row irmr3-form-row mb-3">
            <div class="p-0 col-12 col-md-6 col-lg-6">
                <p class="job">Assistant de gestion<span class="hidden-definition">définition du métier au survol</span></p>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="ass_gestion" value="0|calcul">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="ass_gestion" value="0|calcul">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="ass_gestion" value="0|calcul">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
        </div>
        <div class="form-row irmr3-form-row mb-3">
            <div class="p-0 col-12 col-md-6 col-lg-6">
                <p class="job">Chercheur scientifique<span class="hidden-definition">définition du métier au survol</span></p>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="chercheur_sci" value="0|scientifiques">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="chercheur_sci" value="1|scientifiques">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="chercheur_sci" value="2|scientifiques">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
        </div>
        <div class="form-row irmr3-form-row mb-3">
            <div class="p-0 col-12 col-md-6 col-lg-6">
                <p class="job">Directeur commercial<span class="hidden-definition">définition du métier au survol</span></p>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="dir_commercial" value="0|contacts personnels">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="dir_commercial" value="1|Contacts personnels">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="dir_commercial" value="2|contacts personnels">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
        </div>
        <div class="form-row irmr3-form-row mb-3">
            <div class="p-0 col-12 col-md-6 col-lg-6">
                <p class="job">Artiste peintre<span class="hidden-definition">définition du métier au survol</span></p>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="peintre" value="0|esthétiques">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="peintre" value="1|esthétiques">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="peintre" value="2|esthétiques">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
        </div>
        <div class="form-row irmr3-form-row mb-3">
            <div class="p-0 col-12 col-md-6 col-lg-6">
                <p class="job">Journaliste<span class="hidden-definition">définition du métier au survol</span></p>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="journaliste" value="0|littéraires">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="journaliste" value="1|littéraires">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="journaliste" value="2|littéraires">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
        </div>
        <div class="form-row irmr3-form-row mb-3">
            <div class="p-0 col-12 col-md-6 col-lg-6">
                <p class="job">Pianiste de concert<span class="hidden-definition">définition du métier au survol</span></p>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="pianiste" value="0|musicaux">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="pianiste" value="1|musicaux">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="pianiste" value="2|musicaux">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
        </div>
        <div class="form-row irmr3-form-row mb-3">
            <div class="p-0 col-12 col-md-6 col-lg-6">
                <p class="job">Professeur des écoles<span class="hidden-definition">définition du métier au survol</span></p>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="professeur_sco" value="0|service_social">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="professeur_sco" value="1|service_social">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="professeur_sco" value="2|service_social">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
        </div>
        <div class="form-row irmr3-form-row mb-3">
            <div class="p-0 col-12 col-md-6 col-lg-6">
                <p class="job">Directeur administratif et financier<span class="hidden-definition">définition du métier au survol</span></p>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="dir_administratif" value="0|travail_de_bureau">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="dir_administratif" value="1|travail_de_bureau">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="dir_administratif" value="2|travail_de_bureau">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
        </div>
        <div class="form-row irmr3-form-row mb-3">
            <div class="p-0 col-12 col-md-6 col-lg-6">
                <p class="job">Imprimeur<span class="hidden-definition">définition du métier au survol</span></p>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="imprimeur" value="0|Imprimeur">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="imprimeur" value="1|imprimeur">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="imprimeur" value="2|Imprimeur">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
        </div>
        <div class="form-row irmr3-form-row mb-3">
            <div class="p-0 col-12 col-md-6 col-lg-6">
                <p class="job">Médecin<span class="hidden-definition">définition du métier au survol</span></p>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="medecin" value="0|medicaux">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="medecin" value="1|medicaux">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
            <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                <input type="radio" class="position-absolute test-radio-input" name="medecin" value="2|medicaux">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
        </div>
        <section class="next-previous-container d-flex justify-content-between flex-column flex-md-row flex-lg-row mt-4">
            <div class="d-flex justify-content-center justify-content-md-start justify-content-lg-start align-items-center py-4">
                <a href="#" class="next-btn next-btn-irmr3 d-inline-block mx-4 my-0"><i class="fas fa-question-circle"></i> Besoins d'aide ?</a>
            </div>
            <div class="d-flex justify-content-center justify-content-md-end justify-content-lg-end align-items-center py-4">
                <a href="{{route('test.test_irmr3_consignes')}}?step=2" class="next-btn next-btn-irmr3 d-inline-block mx-4 my-0"><i class='fas fa-chevron-left mr-3'></i> Précédent</a>
                {{-- <a href="?step=3&part=2" class="next-btn next-btn-irmr3 d-inline-block mx-4 my-0">Suivant <i class='fas fa-chevron-right ml-3'></i></a> --}}
             <input type="submit" value="Suivant" class="next-btn next-btn-irmr3 d-inline-block mx-4 my-0"> <i class='fas fa-chevron-right ml-3'></i>
            </div>
        </section>
    </form>
   
</div>

<section class="pb-4">
    <div class="irmr3-explain container p-4">
        <ul>
            Pour chaque série de métiers :
            <li>- Donnez la <span class="font-weight-bold">note 2</span> correspond aux quatre <span class="font-weight-bold">métiers que vous préférez</span></li>
            <li>- Donnez la <span class="font-weight-bold">note 0</span> correspond aux quatre <span class="font-weight-bold">métiers que vous rejetez</span></li>
            <li>- Donnez la <span class="font-weight-bold">note 1</span> correspond aux quatre <span class="font-weight-bold">métiers restants</span></li>
        </ul>
    </div>
</section>

<?php } ?>

@endsection