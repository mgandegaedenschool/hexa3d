<!-- Button trigger modal -->
<?php
$modalTitle = "Ajouter un test";
$confirmationMessage = "Le test a bien été ajouté.";
?>

<!-- Modal -->
<div class="modal fade" id="proAjoutTestModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable model-pro-dialog">
        <div class="modal-content modal-pro-content">
            <div class="modal-header modal-espace-pro-header">
                <div class="container-fluid modal-pro-header-contain">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo $modalTitle; ?></h5>
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
                                <select class="custom-select custom-select-auth form-control" id="inputTest" name="test">
                                    <option>Choisir le test</option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="form-group col-12 col-md-9 col-lg-9 mb-5">
                                <label for="inputEta" class="mb-3">Choisissez l'étalonnage à appliquer au test :</label>
                                <select class="custom-select custom-select-auth form-control" id="inputEta" name="etalonnage">
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@include('espace_pro.espace_pro_confirm')