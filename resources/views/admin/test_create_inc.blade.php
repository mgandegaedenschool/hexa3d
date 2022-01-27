<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#userModal">
    Ajouter un test
</button>

<!-- Modal -->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter un test</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="" method="post">
                        {{-- first part of the form --}}

                        <h6 class="text-center form-title">Test</h6>
                        <div class="form-row d-flex justify-content-between">
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="InputLib">Libellé du test</label>
                                <input type="text" class="form-control" id="InputLib" placeholder="libellé du test">
                            </div>
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="InputType">Type</label>
                                <select name="" id="inputType" class="form-control">
                                    <option value="">--Type--</option>
                                </select>
                            </div>
                        </div>

                        <div class="modal-footer mt-4">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <input type="submit" class="btn btn-primary" value="Ajouter le test">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
