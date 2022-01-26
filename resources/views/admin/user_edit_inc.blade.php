<div class="modal fade" id="userEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier un membre</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="" method="post">
                        {{-- first part of the form --}}
             

                        <h6 class="text-center form-title">Identité</h6>
                        <div class="form-row d-flex justify-content-between">
                            <div class="form-group col-12">
                                <label for="InputId">Identifiant ou adresse mail</label>
                                <input type="text" class="form-control" id="InputId" placeholder="identifiant ou adresse mail">
                            </div>
                        </div>

                        <div class="form-row d-flex justify-content-between">
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="inputName">Nom</label>
                                <input type="text" class="form-control" id="inputName" placeholder="nom">
                            </div>
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="inputFirstName">Prénom</label>
                                <input type="text" class="form-control" id="inputFirstName" placeholder="prénom">
                            </div>
                        </div>

                        <div class="form-row d-flex justify-content-between end-form">
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="inputAge">Âge</label>
                                <input type="number" class="form-control" id="inputAge" placeholder="âge">
                            </div>
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="inputSexe">Sexe</label>
                                <select class="form-control" id="inputSexe">
                                    <option>--Sexe--</option>
                                    <option value="homme">Homme</option>
                                    <option value="femme">Femme</option>
                                    <option value="autre">autre</option>
                                </select>
                            </div>
                        </div>

                        {{-- second part of the form --}}

                        <h6 class="text-center form-title mt-4 pt-3 start-form">Scolarité</h6>
                        <div class="form-row">
                            <div class="form-group col-12 col-md-5 col-lg-5 py-3">
                                <label for="InputStudies">Niveau d'études</label>
                                <input type="text" class="form-control" id="InputStudies" placeholder="niveau d'études">
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-between hidden-field p-3 mb-2">
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <div class="form-check d-flex align-items-center flex-wrap schol">
                                    <label for="inlineRadio4" class="mr-3 mb-0">Êtes-vous scholarisé(e) ?</label>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input radioSch" type="radio" name="inlineRadioOptions2" id="inlineRadio3" value="yes">
                                        <label class="form-check-label" for="inlineRadio3">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input radioSch" type="radio" name="inlineRadioOptions2" id="inlineRadio4" value="no" checked>
                                        <label class="form-check-label" for="inlineRadio4">Non</label>
                                    </div>
                                </div>

                                <label for="InputStudies" class="hidden disabled-element-sch">Classe</label>
                                <input type="text" class="form-control disabled-element-sch hidden" id="InputClass" placeholder="classe">
                                <label for="InputStudies" class="hidden disabled-element-sch">Établissement</label>
                                <input type="text" class="form-control disabled-element-sch hidden" id="InputSchool" placeholder="établissement">
                                <label for="InputStudies" class="hidden disabled-element-sch">Section</label>
                                <input type="text" class="form-control disabled-element-sch hidden" id="InputSection" placeholder="section">
                            </div>
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <div class="form-check d-flex align-items-center flex-wrap salary">
                                    <label for="inputScholarized" class="mb-0 mr-3">Êtes-vous salarié(e) ?</label>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input radioSal" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="yes">
                                        <label class="form-check-label" for="inlineRadio1">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input radioSal" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="no" checked>
                                        <label class="form-check-label" for="inlineRadio2">Non</label>
                                    </div>
                                </div>
                                <label for="InputStudies" class="hidden disabled-element-sal">État</label>
                                <input type="text" class="form-control disabled-element-sal hidden" id="InputStatus" placeholder="état">
                            </div>
                        </div>

                        {{-- third part of the form --}}

                        <h6 class="text-center form-title mt-4 pt-3 start-form">Professionel</h6>
                        <div class="form-row d-flex justify-content-between">
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="inputJob">Emploi actuel</label>
                                <input type="text" class="form-control" id="inputJob" placeholder="emploi actuel">
                            </div>
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="inputWantedJob">Emploi envisagé</label>
                                <input type="text" class="form-control" id="inputWantedJob" placeholder="enploi envisagé">
                            </div>
                        </div>
                        <div class="form-row d-flex">
                            <div class="form-group col-12">
                                <label for="inputSpe">Spécialité</label>
                                <input type="text" class="form-control" id="inputSpe" placeholder="spécialité">
                            </div>
                        </div>

                        <div class="modal-footer mt-4">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <input type="submit" class="btn btn-primary" value="Modifier le membre">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>