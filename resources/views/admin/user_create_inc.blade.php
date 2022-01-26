<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#userModal">
    Ajouter un membre
</button>

<!-- Modal -->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter un membre</h5>
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
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="InputId">Votre identifiant ou adresse mail</label>
                                <input type="text" class="form-control" id="InputId" placeholder="Votre identifiant ou adresse mail">
                            </div>
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="InputPassword1">Votre mot de passe</label>
                                <input type="password" class="form-control" id="InputPassword1" placeholder="Votre mot de passe">
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-between">
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="inputName">Votre nom</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Votre nom">
                            </div>
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="inputFirstName">Votre prénom</label>
                                <input type="text" class="form-control" id="inputFirstName" placeholder="Votre prénom">
                            </div>
                        </div>

                        <div class="form-row d-flex justify-content-between end-form">
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="inputAge">Votre âge</label>
                                <input type="number" class="form-control" id="inputAge" placeholder="Votre âge">
                            </div>
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="inputSexe">Votre sexe</label>
                                <select class="form-control" id="inputSexe">
                                    <option>--Votre sexe--</option>
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
                                <label for="InputStudies">Votre niveau d'études</label>
                                <input type="text" class="form-control" id="InputStudies" placeholder="Votre niveau d'études">
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

                                <label for="InputStudies" class="hidden disabled-element-sch">Votre classe</label>
                                <input type="text" class="form-control disabled-element-sch hidden" id="InputClass" placeholder="Votre classe">
                                <label for="InputStudies" class="hidden disabled-element-sch">Votre établissement</label>
                                <input type="text" class="form-control disabled-element-sch hidden" id="InputSchool" placeholder="Votre établissement">
                                <label for="InputStudies" class="hidden disabled-element-sch">Votre section</label>
                                <input type="text" class="form-control disabled-element-sch hidden" id="InputSection" placeholder="Votre section">
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
                                <label for="InputStudies" class="hidden disabled-element-sal">Votre état</label>
                                <input type="text" class="form-control disabled-element-sal hidden" id="InputStatus" placeholder="Votre état">
                            </div>
                        </div>

                        {{-- third part of the form --}}

                        <h6 class="text-center form-title mt-4 pt-3 start-form">Professionel</h6>
                        <div class="form-row d-flex justify-content-between">
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="inputJob">Votre emploi actuel</label>
                                <input type="text" class="form-control" id="inputJob" placeholder="Votre emploi actuel">
                            </div>
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="inputWantedJob">Votre emploi envisagé</label>
                                <input type="text" class="form-control" id="inputWantedJob" placeholder="Votre enploi envisagé">
                            </div>
                        </div>
                        <div class="form-row d-flex">
                            <div class="form-group col-12">
                                <label for="inputSpe">Votre spécialité</label>
                                <input type="text" class="form-control" id="inputSpe" placeholder="Votre spécialité">
                            </div>
                        </div>

                        <div class="modal-footer mt-4">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <input type="submit" class="btn btn-primary" value="Ajouter le membre">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
