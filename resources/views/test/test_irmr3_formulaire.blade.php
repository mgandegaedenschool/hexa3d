@extends('app')

@section('content')
    @include('test.header_irmr3_inc')

    <?php if (isset($_GET['step']) && $_GET['step'] == 3){ ?>
    <div class="container">
        <h3 class="part-title font-weight-bold">Ecran <?=$_GET['part']??'' ?>/9</h3>
            <div class="row no-gutters text-center font-weight-bold">
                <div class="col-12 col-md-6 col-lg-6"></div>
                <div class="col-4 col-md-2 col-lg-2">
                    <p class="mb-2">0</p>
                    <p class="irmr3-bareme">Ce métier ne m'attires pas</p>
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

    <?php if (isset($_GET['part']) && $_GET['part'] == 1){ ?>
{{-- test irmr part 1 --}}
    <div class="container irmr3-test-container">
            <form action="" method="post">
                <div class="form-row irmr3-form-row mb-3">
                    <div class="p-0 col-12 col-md-6 col-lg-6">
                        <p class="job">Exploitant agricole<span class="hidden-definition">définition du métier au survol</span></p>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="exp-agricole" value="0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="exp-agricole" value="1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="exp-agricole" value="2">
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
                        <input type="radio" class="position-absolute test-radio-input" name="inge-batiment" value="0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="inge-batiment" value="1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="inge-batiment" value="2">
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
                        <input type="radio" class="position-absolute test-radio-input" name="ass-gestion" value="0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="ass-gestion" value="1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="ass-gestion" value="2">
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
                        <input type="radio" class="position-absolute test-radio-input" name="chercheur-sci" value="0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="chercheur-sci" value="1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="chercheur-sci" value="2">
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
                        <input type="radio" class="position-absolute test-radio-input" name="dir-commercial" value="0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="dir-commercial" value="1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="dir-commercial" value="2">
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
                        <input type="radio" class="position-absolute test-radio-input" name="peintre" value="0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="peintre" value="1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="peintre" value="2">
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
                        <input type="radio" class="position-absolute test-radio-input" name="journaliste" value="0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="journaliste" value="1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="journaliste" value="2">
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
                        <input type="radio" class="position-absolute test-radio-input" name="pianiste" value="0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="pianiste" value="1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="pianiste" value="2">
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
                        <input type="radio" class="position-absolute test-radio-input" name="professeur-sco" value="0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="professeur-sco" value="1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="professeur-sco" value="2">
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
                        <input type="radio" class="position-absolute test-radio-input" name="dir-administratif" value="0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="dir-administratif" value="1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="dir-administratif" value="2">
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
                        <input type="radio" class="position-absolute test-radio-input" name="imprimeur" value="0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="imprimeur" value="1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="imprimeur" value="2">
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
                        <input type="radio" class="position-absolute test-radio-input" name="medecin" value="0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="medecin" value="1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="medecin" value="2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                </div>
            </form>
            <section class="next-previous-container d-flex justify-content-between flex-column flex-md-row flex-lg-row mt-4">
                <div class="d-flex justify-content-center justify-content-md-start justify-content-lg-start align-items-center py-4">
                    <a href="#" class="next-btn next-btn-irmr3 d-inline-block mx-4 my-0"><i class="fas fa-question-circle"></i> Besoins d'aide ?</a>
                </div>
                <div class="d-flex justify-content-center justify-content-md-end justify-content-lg-end align-items-center py-4">
                    <a href="{{route('test.test_irmr3_consignes')}}" class="next-btn next-btn-irmr3 d-inline-block mx-4 my-0"><i class='fas fa-chevron-left mr-3'></i> Précédent</a>
                    <a href="?step=3&part=2" class="next-btn next-btn-irmr3 d-inline-block mx-4 my-0">Suivant <i class='fas fa-chevron-right ml-3'></i></a>
                </div>
            </section>
    </div>

{{-- test irmr part 2 --}}
    <?php }elseif ($_GET['part'] == 2){ ?>
    <div class="container irmr3-test-container">
            <form action="" method="post">
                <div class="form-row irmr3-form-row mb-3">
                    <div class="p-0 col-12 col-md-6 col-lg-6">
                        <p class="job">Ingénieur mécanicien<span class="hidden-definition">définition du métier au survol</span></p>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="inge-mecanicien" value="0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="inge-mecanicien" value="1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="inge-mecanicien" value="2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                </div>
                <div class="form-row irmr3-form-row mb-3">
                    <div class="p-0 col-12 col-md-6 col-lg-6">
                        <p class="job">Statisticien<span class="hidden-definition">définition du métier au survol</span></p>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="statisticien" value="0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="statisticien" value="1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="statisticien" value="2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                </div>
                <div class="form-row irmr3-form-row mb-3">
                    <div class="p-0 col-12 col-md-6 col-lg-6">
                        <p class="job">Chimiste<span class="hidden-definition">définition du métier au survol</span></p>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="chimiste" value="0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="chimiste" value="1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="chimiste" value="2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                </div>
                <div class="form-row irmr3-form-row mb-3">
                    <div class="p-0 col-12 col-md-6 col-lg-6">
                        <p class="job">Animateur radio/télé<span class="hidden-definition">définition du métier au survol</span></p>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="animateur-radio" value="0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="animateur-radio" value="1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="animateur-radio" value="2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                </div>
                <div class="form-row irmr3-form-row mb-3">
                    <div class="p-0 col-12 col-md-6 col-lg-6">
                        <p class="job">Dessinateur publicitaire<span class="hidden-definition">définition du métier au survol</span></p>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="dess-publicitaire" value="0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="dess-publicitaire" value="1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="dess-publicitaire" value="2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                </div>
                <div class="form-row irmr3-form-row mb-3">
                    <div class="p-0 col-12 col-md-6 col-lg-6">
                        <p class="job">Romancier<span class="hidden-definition">définition du métier au survol</span></p>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="romancier" value="0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="romancier" value="1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="romancier" value="2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                </div>
                <div class="form-row irmr3-form-row mb-3">
                    <div class="p-0 col-12 col-md-6 col-lg-6">
                        <p class="job">Chef d'orchestre<span class="hidden-definition">définition du métier au survol</span></p>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="ch-orchestre" value="0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="ch-orchestre" value="1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="ch-orchestre" value="2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                </div>
                <div class="form-row irmr3-form-row mb-3">
                    <div class="p-0 col-12 col-md-6 col-lg-6">
                        <p class="job">Psychologue scolaire<span class="hidden-definition">définition du métier au survol</span></p>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="psychologue-sco" value="0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="psychologue-sco" value="1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="psychologue-sco" value="2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                </div>
                <div class="form-row irmr3-form-row mb-3">
                    <div class="p-0 col-12 col-md-6 col-lg-6">
                        <p class="job">Assistant de direction<span class="hidden-definition">définition du métier au survol</span></p>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="ass-direction" value="0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="ass-direction" value="1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="ass-direction" value="2">
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
                        <input type="radio" class="position-absolute test-radio-input" name="administratif" value="0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="administratif" value="1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="administratif" value="2">
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
                        <input type="radio" class="position-absolute test-radio-input" name="imprimeur" value="0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="imprimeur" value="1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="imprimeur" value="2">
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
                        <input type="radio" class="position-absolute test-radio-input" name="medecin" value="0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="medecin" value="1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="form-check col-4 col-md-2 col-lg-2 position-relative d-flex justify-content-center align-items-center">
                        <input type="radio" class="position-absolute test-radio-input" name="medecin" value="2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 position-absolute" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                </div>
            </form>
            <section class="next-previous-container d-flex justify-content-between flex-column flex-md-row flex-lg-row mt-4">
                <div class="d-flex justify-content-center justify-content-md-start justify-content-lg-start align-items-center py-4">
                    <a href="#" class="next-btn next-btn-irmr3 d-inline-block mx-4 my-0"><i class="fas fa-question-circle"></i> Besoins d'aide ?</a>
                </div>
                <div class="d-flex justify-content-center justify-content-md-end justify-content-lg-end align-items-center py-4">
                    <a href="?step=3&part=1" class="next-btn next-btn-irmr3 d-inline-block mx-4 my-0"><i class='fas fa-chevron-left mr-3'></i> Précédent</a>
                    <a href="?step=3&part=3" class="next-btn next-btn-irmr3 d-inline-block mx-4 my-0">Suivant <i class='fas fa-chevron-right ml-3'></i></a>
                </div>
            </section>

    </div>
    <?php }

    } ?>

    <section class="pb-4">
        <div class="irmr3-explain container p-4">
            <ul>
                Pour chaque série de métiers :
                <li>- Donnez la <span class="font-weight-bold">note 2</span> correspond aux quatres <span class="font-weight-bold">métiers que vous préférez</span></li>
                <li>- Donnez la <span class="font-weight-bold">note 0</span> correspond aux quatres <span class="font-weight-bold">métiers que vous rejetez</span></li>
                <li>- Donnez la <span class="font-weight-bold">note 1</span> correspond aux quatres <span class="font-weight-bold">métiers restants</span></li>
            </ul>
        </div>
    </section>

@endsection