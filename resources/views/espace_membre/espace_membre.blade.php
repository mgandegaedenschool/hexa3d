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
                        <a href="{{--{{route('logout')}}--}}">Déconnexion</a>
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
                    <h2>Mes informations</h2>
                    <div class="information-drop-icon">
                        <i class="far fa-eye icon-eye-view"></i>
                    </div>
                </div>
                <div class="dropped-information disabled-element-eye height-none">
                    <div class="personal-infos infos-div">
                        <div class="user-informations"><p>Identifiant (ou mail) :</p><span>AT</span></div>
                        <div class="user-informations"><p>Mot de passe :</p><span>*****</span></div>
                        <div class="user-informations"><p>Nom :</p><span>Toujours</span></div>
                        <div class="user-informations"><p>Prénom :</p><span>Adam</span></div>
                        <div class="user-informations"><p>Age :</p><span>24 ans</span></div>
                        <div class="user-informations"><p>Sexe :</p><span>Homme</span></div>
                    </div>
                    <div class="school-infos infos-div">
                        <div class="user-informations"><p>Niveau d'études :</p><span>Bac +2</span></div>
                        <div class="user-informations"><p>Scolarisé(e) :</p><span>Oui</span></div>
                        <div class="user-informations"><p>Classe :</p><span>BTS Hôtellerie</span></div>
                        <div class="user-informations"><p>Etablissement :</p><span>Lycée Saint Vincent de Paul</span></div>
                        <div class="user-informations"><p>Section :</p><span>Hôtellerie</span></div>
                    </div>
                    <div class="job-infos infos-div">
                        <div class="user-informations"><p>Salarié :</p><span>Oui</span></div>
                        <div class="user-informations"><p>Etat :</p><span>Alternant</span></div>
                        <div class="user-informations"><p>Emploi actuel :</p><span>Assistant accueil</span></div>
                        <div class="user-informations"><p>Emploi envisagé :</p><span>Restaurateur</span></div>
                        <div class="user-informations"><p>Spécialité :</p><span>Accueil client</span></div>
                    </div>
                    <a href="{{route('espace_membre.espace_membre_edit')}}" class="btn purple-btn send-password-link-btn py-2 px-4">Modifier</a>
                </div>

            </div>
            <div class="container-fluid my-tests">
                <h2>Mon espace test</h2>
                <div class="test-space">
                    <div class="test-current py-5">
                        <h3>Test 1 : HEXA 3D</h3>
                        <p class="test-status test-done"><i class="fas fa-check"></i> Terminé</p>
                        <p class="test-done-date">Date de passage : <span>03-11-2021</span></p>
                    </div>
                    <div class="test-current py-5">
                        <h3>Test 2 : IRMR3</h3>
                        <p class="test-status test-ongoing"><i class="fas fa-spinner"></i> En cours</p>
                        <a href="" class="continue-test test-btn btn purple-btn py-2 px-4">Reprendre le test</a>
                    </div>
                    <div class="test-current py-5">
                        <h3>Test 1 : HEXA 3D</h3>
                        <p class="test-status test-to-begin"><i class="fas fa-spinner"></i> Nouveau</p>
                        <a href="" class="take-test btn test-btn purple-btn py-2 px-4">Commencer le test</a>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
