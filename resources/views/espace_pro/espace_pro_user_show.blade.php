@extends('app')

@section('content')
    <header class="upper-container d-flex espace-pro-header">
        <div class="header-contain espace-pro-header-contain">
            <div class="row d-flex align-items-center img-text-nav icon-qip-pro">
                @include('espace_membre.header_img_inc')
            </div>
            <div class="espace-pro-profil-pro">
                <div class="espace-pro-profil-text-n-link">
                    <p class="espace-pro-profil-text">Mon espace test</p>
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
                </div>

            </div>
            <div class="container-fluid pro-my-tests my-tests">

                <div class="d-flex justify-content-center justify-content-md-between justify-content-lg-between align-items-start align-items-md-center flex-column flex-md-row flex-lg-row">
                    <h2>Mon espace test</h2>
                    @include('espace_pro.espace_pro_test_inc')
                </div>
                <div class="test-space">
                    <div class="test-current py-5">
                        <section class="pro-info-test d-flex flex-column flex-md-row flex-lg-row justify-content-between">
                            <h3>Test 1 : HEXA 3D</h3>
                            <p class="test-status test-done"><i class="fas fa-check"></i> Terminé</p>
                        </section>
                        <section class="pro-result-test">
                            <p class="test-done-date">Date de passage : <span>03-11-2021</span></p>
                            <h4 class="mt-4">Les résultats</h4>
                            <p class="mb-5">Téléchargez ci-dessous les résultats sous forme de pdf</p>

                            <form action="" method="post">

                                <div class="form-row d-flex justify-content-between flex-row">

                                    <div class="form-group d-flex col-12 col-md-5 col-lg-5 mb-5">
                                        <div class="pro-select-number mr-4">
                                            <span>1</span>
                                        </div>
                                        <div class="pro-test-select w-100">
                                            <label for="inputEta" class="mb-3">Choisissez l'étalonnage :</label>
                                            <select class="custom-select custom-select-auth form-control" id="inputEta" name="etalonnage">
                                                <option>Choisir l'étalonnage</option>
                                                <option value=""></option>
                                                <option value=""></option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group d-flex col-12 col-md-5 col-lg-5 mb-5">
                                        <div class="pro-select-number mr-4">
                                            <span>2</span>
                                        </div>
                                        <div class="pro-test-select w-100">
                                            <label for="inputType" class="mb-3">Choisissez votre type de résultats :</label>
                                            <select class="custom-select custom-select-auth form-control" id="inputType" name="type">
                                                <option>Choisir vos résultats</option>
                                                <option value=""></option>
                                                <option value=""></option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row d-flex justify-content-between flex-row">
                                    <div class="form-group d-flex col-12 col-md-5 col-lg-5 mb-5">
                                        <div class="pro-select-number mr-4">
                                            <span>3</span>
                                        </div>
                                        <div class="pro-test-select w-100">
                                            <label for="inputAction" class="mb-3">Choisissez une action :</label>
                                            <select class="custom-select custom-select-auth form-control" id="inputAction" name="action">
                                                <option>Choisir une action</option>
                                                <option value=""></option>
                                                <option value=""></option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group d-flex col-12 col-md-5 col-lg-5 mb-5">
                                        <div class="pro-select-number mr-4">
                                            <span>4</span>
                                        </div>
                                        <div class="pro-test-valid w-100">
                                            <label for="inputValid" class="mb-3">Et valider :</label>
                                            <button type="submit" class="purple-btn valid-btn py-2 px-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.334 21.715" width="17" height="17" class="pro-download-icon">
                                                    <g id="Group_330" data-name="Group 330" transform="translate(-1265.967 -1300.999)">
                                                        <path id="Union_1" data-name="Union 1" d="M0,8.244H5.156V0h4.76V8.244h5.156L7.536,17.67Z" transform="translate(1270.098 1300.999)" fill="#fff"/>
                                                        <path id="Path_47" data-name="Path 47" d="M3270.321,18096v6.127h20.334V18096" transform="translate(-2002.854 -16780.914)" fill="none" stroke="#fff" stroke-width="3"/>
                                                    </g>
                                                </svg>

                                                Valider
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>
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