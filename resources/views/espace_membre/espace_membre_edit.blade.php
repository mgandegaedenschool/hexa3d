<?php $bgc = 'grey-background' ?>
@extends('app')

@section('content')
    <header class="upper-container d-flex espace-pro-header">
        <div class="header-contain espace-pro-header-contain">
            <div class="row d-flex align-items-center img-text-nav icon-qip-pro">
                @include('espace_membre.header_img_inc')
            </div>
            <div class="espace-pro-profil-pro">
                <div class="espace-pro-profil-text-n-link">
                    <p class="espace-pro-profil-text">Adam NOM</p>
                    <p class="espace-pro-profil-link">
                        <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                            </svg>retour à mon espace personnel</a>
                    </p>
                </div>
                <div class="espace-pro-profil-icon-div">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person " viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                    </svg>
                </div>

            </div>
        </div>
    </header>
    <div class="global-container">
        <div class="container mx-auto main-profile-div">
            <div class="container-fluid my-infos mb-5">
                <div class="information-drop">
                    <h2>Modifier mes informations</h2>
                    <div class="information-drop-icon">
                        <i class="fas fa-times icon-eye-view"></i>
                    </div>
                </div>
                <div class="dropped-information disabled-element-eye height-yes">
                    <form action="{{route('espace_membre.espace_membre')}}" method="post">
                        <div class="personal-infos infos-div">
                            <div class="user-informations"><label for="identifiant">Identifiant (ou mail) :</label><input type="text" class="form-control mx-4" value="AT" id="identifiant" name="identifiant"></div>
                            <div class="user-informations"><label for="mdp">Mot de passe :</label><input type="text" class="form-control mx-4" value="*****" id="mdp" name="mdp"></div>
                            <div class="user-informations"><p>Nom :</p><input type="text" class="form-control mx-4" value="Toujours" id="toujours" name="nom"></div>
                            <div class="user-informations"><label for="prenom">Prénom :</label><input type="text" class="form-control mx-4" value="Adam" id="prenom" name="prenom"></div>
                            <div class="user-informations"><label for="age">Age :</label><input type="text" class="form-control mx-4" value="24 ans" id="age"></div>
                            <div class="user-informations"><label for="sexe">Sexe :</label><input type="text" class="form-control mx-4" value="Homme" id="sexe"></div>
                        </div>
                        <div class="school-infos infos-div">
                            <div class="user-informations"><label for="niv_etude">Niveau d'études :</label><input type="text" class="form-control mx-4" value="Bac+2" id="niv_etude" name="niv_etude"></div>
                            <div class="user-informations"><label for="scolarise">Scolarisé(e) :</label><input type="text" class="form-control mx-4" value="Oui" id="scolarise" name="scolarise"></div>
                            <div class="user-informations"><label for="classe">Classe :</label><input type="text" class="form-control mx-4" value="BTS Hôtellerie" id="classe" name="classe"></div>
                            <div class="user-informations"><label for="etablissement">Etablissement :</label><input type="text" class="form-control mx-4" value="Lycée Saint Vincent de Paul" id="etablissement" name="etablissement"></div>
                            <div class="user-informations"><label for="section">Section :</label><input type="text" class="form-control mx-4" value="Hôtellerie" id="section" name="section"></div>
                        </div>
                        <div class="job-infos infos-div">
                            <div class="user-informations"><label for="salarie">Salarié :</label><input type="text" class="form-control mx-4" value="Oui" id="salarie" name="salarie"></div>
                            <div class="user-informations"><label for="etat">Etat :</label><input type="text" class="form-control mx-4" value="Alternant" id="etat" name="etat"></div>
                            <div class="user-informations"><label for="emploi_actuel">Emploi actuel :</label><input type="text" class="form-control mx-4" value="Assistant accueil" id="emploi_actuel" name="emploi_actuel"></div>
                            <div class="user-informations"><label for="emploi_envisage">Emploi envisagé :</label><input type="text" class="form-control mx-4" value="Restaurateur" id="emploi_envisage" name="emploi_envisage"></div>
                            <div class="user-informations"><label for="specialite">Spécialité :</label><input type="text" class="form-control mx-4" value="Accueil client" id="specialite" name="specialite"></div>
                        </div>
                        <input type="submit" class="btn purple-btn user-edit-validate-btn py-2 px-4" value="Enregistrer les modifications">
                    </form>
                </div>
            </div>
            <div class="container-fluid my-tests">
                <h2 class="mb-4">Mon espace test</h2>
                <div class="test-space">
                    <div class="test-current py-5">
                        <section class="pro-info-test d-flex flex-column flex-md-row flex-lg-row justify-content-between">
                            <h3>Test 1 : HEXA 3D</h3>
                            <p class="test-status test-done"><i class="fas fa-check"></i> Terminé</p>
                        </section>
                        <p class="test-done-date">Date de passage : <span class="font-weight-bold">03-11-2021</span></p>
                    </div>
                    <div class="test-current py-5">
                        <section class="pro-info-test d-flex flex-column flex-md-row flex-lg-row justify-content-between">
                            <h3>Test 2 : IRMR3</h3>
                            <p class="test-status test-ongoing"><i class="fas fa-spinner"></i> En cours</p>
                        </section>
                        <a href="" class="continue-test test-btn btn purple-btn py-2 px-4">Reprendre le test</a>
                    </div>
                    <div class="test-current py-5">
                        <section class="pro-info-test d-flex flex-column flex-md-row flex-lg-row justify-content-between">
                            <h3>Test 2 : IRMR3</h3>
                            <p class="test-status test-to-begin"><i class="fas fa-spinner"></i> Nouveau</p>
                        </section>
                        <a href="" class="take-test btn test-btn purple-btn py-2 px-4">Commencer le test</a>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
