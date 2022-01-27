<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#userModal">
    Ajouter une question
</button>

<!-- Modal -->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter une question</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="" method="post">
                        {{-- first part of the form --}}

                        <h6 class="text-center form-title">Question</h6>
                        <div class="form-row d-flex justify-content-between">
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="InputItem">Item hexa3D</label>
                                <select name="" id="inputItem" class="form-control">
                                    <option value="">--Item hexa3D--</option>
                                </select>
                            </div>
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="InputTest">Test</label>
                                <select name="" id="inputTest" class="form-control">
                                    <option value="">--Test--</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-between">
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="InputPart">Partie</label>
                                <select name="" id="inputPart" class="form-control">
                                    <option value="">--Partie--</option>
                                </select>
                            </div>
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="InputDom">Domaine</label>
                                <select name="" id="inputDom" class="form-control">
                                    <option value="">--Domaine--</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-between">
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="InputOrdre">Ordre</label>
                                <input type="number" class="form-control" id="InputOrdre" placeholder="Ordre">
                            </div>
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="InputType">Type RIASEC</label>
                                <select name="" id="inputType" class="form-control">
                                    <option value="">--Type RIASEC--</option>
                                    <option value="r">R</option>
                                    <option value="i">I</option>
                                    <option value="a">A</option>
                                    <option value="s">S</option>
                                    <option value="e">E</option>
                                    <option value="c">C</option>
                                </select>
                            </div>
                        </div>

                        <div class="modal-footer mt-4">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <input type="submit" class="btn btn-primary" value="Ajouter la question">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
