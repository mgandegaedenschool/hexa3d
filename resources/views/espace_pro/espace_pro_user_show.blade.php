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
                <div class="d-flex justify-content-center justify-content-md-between justify-content-lg-between align-items-start align-items-md-center flex-column flex-md-row flex-lg-row mb-4">
                    <h2 class="mb-4">Mon espace test</h2>

                    <button type="button" class="purple-btn test-btn py-2 px-4" data-toggle="modal" data-target="#proAjoutTestModal">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-plus-lg pro-plus-icon mr-4" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                        </svg> Ajouter un test
                    </button>
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
                                            <button type="submit" class="purple-btn valid-btn py-2 px-4 d-flex align-items-center justify-content-between">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download pro-download-icon mr-4" viewBox="0 0 16 16"><path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/><path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/></svg>
                                                Valider
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <h4 class="mt-4">Lien du test</h4>
                                <label for="linkInput" class="mb-5">Lien du test à copier et à envoyer au bénéficiaire</label>
                                <div class="input_copy_wrapper">
                                    <div class="input_copy">
                                        <input type="text" disabled value="https://calendar.google.com/calendar/u/0/r/week/2021/10/21?tab=mc" class="txt linkInput">

                                        <span class="icon right">
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"><path d="M0 224C0 188.7 28.65 160 64 160H128V288C128 341 170.1 384 224 384H352V448C352 483.3 323.3 512 288 512H64C28.65 512 0 483.3 0 448V224zM224 352C188.7 352 160 323.3 160 288V64C160 28.65 188.7 0 224 0H448C483.3 0 512 28.65 512 64V288C512 323.3 483.3 352 448 352H224z"/></svg>
        </span>
                                    </div>

                                </div>

                                <div class="d-flex flex-column flex-md-row flex-lg-row justify-content-center mt-5">
                                    <button type="submit" class="pro-reset-n-delete-btn d-flex align-items-center py-3 px-4 mx-3 my-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise mr-4" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                                            <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                                        </svg> Réinitialiser le test
                                    </button>
                                    <button type="submit" class="pro-reset-n-delete-btn d-flex align-items-center py-3 px-4 mx-3 my-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash mr-4" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                        </svg> Supprimer le test
                                    </button>
                                </div>
                            </form>
                        </section>
                    </div>
                    <div class="test-current py-5">
                        <section class="pro-info-test d-flex flex-column flex-md-row flex-lg-row justify-content-between">
                            <h3>Test 2 : IRMR3</h3>
                            <p class="test-status test-ongoing"><i class="fas fa-spinner"></i> En cours</p>
                        </section>

                        <section class="pro-result-test">
                            <form action="" method="post">
                                <h4 class="mt-4">Lien du test</h4>
                                <label for="linkInput" class="mb-5">Lien du test à copier et à envoyer au bénéficiaire</label>
                                <div class="input_copy_wrapper">
                                    <div class="input_copy">
                                        <input type="text" disabled value="https://calendar.google.com/calendar/u/0/r/week/2021/10/21?tab=mc" class="txt linkInput">

                                        <span class="icon right">
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"><path d="M0 224C0 188.7 28.65 160 64 160H128V288C128 341 170.1 384 224 384H352V448C352 483.3 323.3 512 288 512H64C28.65 512 0 483.3 0 448V224zM224 352C188.7 352 160 323.3 160 288V64C160 28.65 188.7 0 224 0H448C483.3 0 512 28.65 512 64V288C512 323.3 483.3 352 448 352H224z"/></svg>
        </span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-md-row flex-lg-row justify-content-center mt-5">
                                    <button type="submit" class="pro-reset-n-delete-btn d-flex align-items-center py-3 px-4 mx-3 my-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise mr-4" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                                            <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                                        </svg> Réinitialiser le test
                                    </button>
                                    <button type="submit" class="pro-reset-n-delete-btn d-flex align-items-center py-3 px-4 mx-3 my-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash mr-4" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                        </svg> Supprimer le test
                                    </button>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection