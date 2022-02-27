<!-- Button trigger modal -->
<?php
$modalTitle = "Suppression";
$confirmationMessage = "Le bénéficiaire a bien été ajouté."

?>
 <div class="new-client-btn-div d-flex">
    <button type="button" class="purple-btn espace-pro-purple-btn" data-toggle="modal" data-target="#ajoutTest-yesMailModal">
        Nouveau client
    </button>
</div>
<!-- MODAL D'AJOUT DE BENEFICIAIRES -->
<div class="modal fade" id="ajoutTest-yesMailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-pro-dialog">
        <div class="modal-content modal-pro-content">

            <div class="modal-header modal-espace-pro-header">
                <div class="container-fluid modal-pro-header-contain">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un bénéficiaire</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                                <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                            </svg>
                        </span>
                    </button>
                </div>

            </div>
            <div class="modal-body">
                <div class="container-fluid">
                <form method="POST" action="{{ route('pro.store') }}"> 
                            @csrf 
                      

                         <div class="form-row d-flex justify-content-between">
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="inputTest">Choisissez le test à attribuer au bénéficiaire :</label>
                                <select class="form-control" id="inputTest" name='test'>
                                    <option>Choisir le test</option>
                                    <option value="irmr3d">IRMR3D</option>
                                    <option value="hexa3d">HEXA3D</option>
                                </select>
                            </div>
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="inputEta">Votre etalonnage</label>
                                <select class="form-control" id="inputEta" name="etalonnage">
                                    <option>Choisir l'étalonnage</option>
                                    <option value="collégien">Collégien </option>
                                    <option value="collégienne">Collégienne</option>
                                    <option value="lycéen">Lycéen</option>
                                    <option value="lycéenne">Lycéenne</option>
                                    <option value="adulte">Adulte</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-between">
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="inputMail">Entrer l'adresse mail du bénéficiaire :</label>
                                <input type="text" class="form-control" id="inputMail" placeholder="Adresse mail" name='email' >
                            </div>
                        </div>
                        <div class="modal-footer mt-4">
                            <input type="submit" class="btn btn-primary" value="Envoi de l'invitation">
                        </div>
                    </form>    
                </div>
            </div>
        </div>
    </div>
</div>


<!-- MODAL D'IMPORTATION DE BENEFICIAIRES -->
{{-- <div class="modal fade" id="proImportModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-pro-dialog">
        <div class="modal-content modal-pro-content modal-confirm-content">
            <div class="modal-header modal-espace-pro-header">
                <div class="container-fluid modal-pro-header-contain">
                    <h5 class="modal-title" id="exampleModalLabel"><?php //echo $modalTitle ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                                <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                            </svg>
                        </span>
                    </button>
                </div>

            </div>
            <div class="modal-body mb-5">
                <div class="container-fluid">
                    <form action="" method="post">

                        <div class="form-row d-flex justify-content-between flex-direction-column">
                            <div class="form-group col-12">
                                <div class="drag-area">
                                    <header>Déposez vos fichiers pour les téléverser</header>
                                    <span>ou</span>
                                    <button class="purple-btn espace-pro-purple-btn">Sélectionnez des fichiers</button>
                                    <input type="file" id="modalFileBrowser" hidden>

                                    <input type="submit" id="modalFileSubmit" class="purple-btn espace-pro-purple-btn" value="Importer">
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<!-- MODAL SUITE A L'IMPORT POUR AJOUTER OU NON DES TESTS -->
{{-- @if(session('importer')) --}}

<div class="modal fade" id="proImportModalTest..." tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-pro-dialog">
        <div class="modal-content modal-pro-content modal-confirm-content">
            <div class="modal-header modal-espace-pro-header">
                <div class="container-fluid modal-pro-header-contain">
                    <h5 class="modal-title" id="exampleModalLabel"><?php //echo $modalTitle ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                                <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                            </svg>
                        </span>
                    </button>
                </div>
            </div> 
            <div class="modal-body mb-5">
                <div class="container-fluid">
                    <form action="" method="post">
                        <div class="form-row d-flex justify-content-between flex-direction-column">
                            <div class="form-group col-12">
                                <div class="import-invites-txt">
                                    <p>Vous venez d'importer des bénéficiaires...........</p>

                                    <p>Souhaitez-vous envoyer une invitation pour un test ?</p>
                                </div>


                                <div class="imported-invite d-flex justify-content-center my-5">
                                               {{-- <button type="button" class="purple-btn espace-pro-purple-btn" data-toggle="modal" data-target="#ajoutTest-yesMailModal">
                                       oui
                                    </button> --}}
                                    <button type="button" class="purple-btn espace-pro-purple-btn px-5 py-2 button-import-invite" >Oui</button>
                                    
                                    <button type="button" class="close px-5 import-noinvit-close" data-dismiss="modal" aria-label="Close">Non</button>
                                </div>
                            </div>
                        </div>

                        <!-- PARTIE D'ENVOI DES INVITATIONS AU TEST APRES IMPORTATION DE BENEFICIAIRES -->
                        <div class="disabled-element-import-invit hidden">
                            <h5 class="modal-title mb-3 " id="exampleModalLabel">Ajouter un bénéficiaire</h5>
                            <div class="form-row d-flex justify-content-between flex-direction-column">
                                <div class="form-group col-12 col-md-9 col-lg-9 mb-5">
                                    <label for="inputTest" class="mb-3">Choisissez le test à attribuer au bénéficiaire :</label>
                                    <select class="custom-select custom-select-auth form-control" id="inputTest">
                                        <option>Choisir le test</option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="form-group col-12 col-md-9 col-lg-9 mb-5">
                                    <label for="inputEta" class="mb-3">Choisissez l'étalonnage à appliquer au test :</label>
                                    <select class="custom-select custom-select-auth form-control" id="inputEta">
                                        <option>Choisir l'étalonnage</option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>

                            <div class="modal-footer mt-4 modal-pro-footer">
                                <input type="submit" class="btn espace-pro-purple-btn" value="Envoi de l'invitation">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @endif --}}

<!-- MODAL DE SUPPRESSION DE BENEFICIAIRE -->
{{-- <div class="modal fade" id="proDeleteBenefModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-pro-dialog">
        <div class="modal-content modal-pro-content modal-confirm-content">
            <div class="modal-header modal-espace-pro-header">
                <div class="container-fluid modal-pro-header-contain">
                    <h5 class="modal-title" id="exampleModalLabel"><?php //echo $modalTitle ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                                <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                            </svg>
                        </span>
                    </button>
                </div>

            </div>
            <div class="modal-body mb-5">
                <div class="container-fluid">
                    <form action="" method="post">

                        <div class="form-row d-flex justify-content-between flex-direction-column">
                            <div class="form-group col-12">
                                <div class="import-invites-txt">
                                    <p>Attention : vous allez supprimer des bénéficiaires.</p>

                                    <p>Êtes-vous sûr(e) ? </p>
                                </div>


                                <div class="imported-invite d-flex justify-content-center mt-5">
                                    <input type="submit" class="purple-btn espace-pro-purple-btn px-5 py-2 button-delete-modal " value="Oui">
                                    <button type="button" class="close px-5" data-dismiss="modal" aria-label="Close">Non</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<!-- MODAL DE TELECHARGEMENT DE RESULTATS -->

<div class="modal fade" id="downloadResultsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-pro-dialog">
        <div class="modal-content modal-pro-content">
            <div class="modal-header modal-espace-pro-header">
                <div class="container-fluid modal-pro-header-contain">
                    <h5 class="modal-title" id="exampleModalLabel">Télécharger les résultats</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                                <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                            </svg>
                        </span>
                    </button>
                </div>

            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="" method="post">

                        <div class="form-row d-flex justify-content-between flex-direction-column">
                            <div class="form-group col-12 col-md-9 col-lg-9 mb-5">
                                <label for="inputTest" class="mb-3">Choisissez l'étalonnage à appliquer</label>
                                <select class="custom-select custom-select-auth form-control" id="inputTest">
                                    <option>Choisir le test</option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>

                        <div class="modal-footer mt-4 modal-pro-footer">
                            <input type="submit" class="btn espace-pro-purple-btn TestResults-Btn" value="Télécharger">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL D'ENVOI DE RESULTATS -->

<div class="modal fade" id="senddResultsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-pro-dialog">
        <div class="modal-content modal-pro-content">
            <div class="modal-header modal-espace-pro-header">
                <div class="container-fluid modal-pro-header-contain">
                    <h5 class="modal-title" id="exampleModalLabel">Envoi les résultats</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                                <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                            </svg>
                        </span>
                    </button>
                </div>

            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="" method="post">

                        <div class="form-row d-flex justify-content-between flex-direction-column">
                            <div class="form-group col-12 col-md-9 col-lg-9 mb-5">
                                <label for="inputTest" class="mb-3">Choisissez l'étalonnage à appliquer</label>
                                <select class="custom-select custom-select-auth form-control" id="inputTest">
                                    <option>Choisir le test</option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>

                        <div class="modal-footer mt-4 modal-pro-footer">
                            <input type="submit" class="btn espace-pro-purple-btn TestResults-Btn" value="Envoyer">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL DE CONFIRMATION -->
<div class="modal fade" id="proConfirmModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-pro-dialog">
        <div class="modal-content modal-pro-content modal-confirm-content">
            <div class="modal-header modal-espace-pro-header">
                <div class="container-fluid modal-pro-header-contain">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo $modalTitle ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                                <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                            </svg>
                        </span>
                    </button>
                </div>

            </div>
            <div class="modal-body mb-5">
                <div class="container-fluid">
                    <div class="pro-ModalConfirm-Content d-flex flex-column align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86" viewBox="0 0 86 86">
                            <g id="Groupe_300" data-name="Groupe 300" transform="translate(-917 -670)">
                                <circle id="Ellipse_2" data-name="Ellipse 2" cx="43" cy="43" r="43" transform="translate(917 670)" fill="#4c3f91"/>
                                <path id="Tracé_35" data-name="Tracé 35" d="M-14758.146-9835.143l17,11.9,23.8-28.055" transform="translate(15697.746 10550.268)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="4"/>
                            </g>
                        </svg>

                        <p><?php echo $confirmationMessage ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

