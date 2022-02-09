<!-- Button trigger modal -->
<?php
$modalTitle = "Importation";
$confirmationMessage = "Le bénéficiaire a bien été ajouté."

?>

<button type="button" class="purple-btn espace-pro-purple-btn" data-toggle="modal" data-target="#proImportModal">
    Nouveau client
</button>

<!-- Modal -->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable model-pro-dialog">
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
                    <form action="" method="post">

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
                        <div class="form-row d-flex justify-content-between">
                            <div class="form-group col-12 col-md-9 col-lg-9 mb-3">
                                <label for="inputMail" class="mb-3">Entrer l'adresse mail du bénéficiaire :</label>
                                <input type="text" class="form-control" id="inputMail" placeholder="Adresse mail">
                            </div>
                        </div>

                        <div class="modal-footer mt-4 modal-pro-footer">
                            <input type="submit" class="btn espace-pro-purple-btn" value="Envoi de l'invitation">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="proImportModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable model-pro-dialog">
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
                    <form action="" method="post">

                        <div class="form-row d-flex justify-content-between flex-direction-column">
                            <div class="form-group col-12 col-md-9 col-lg-9 mb-5">
                                <div class="drag-area">
                                    <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                    <header>Drag & Drop to Upload File</header>
                                    <span>OR</span>
                                    <button>Browse File</button>
                                    <input type="file" id="modalFileBrowser" hidden>
                                </div>
                            </div>
                        </div>
                        <input type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





<div class="modal fade" id="proConfirmModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable model-pro-dialog">
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