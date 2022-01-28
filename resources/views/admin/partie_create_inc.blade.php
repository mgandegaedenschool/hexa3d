<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#userModal">
    Ajouter une partie
</button>

<!-- Modal -->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter une partie</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="" method="post">
                        {{-- first part of the form --}}

                        <h6 class="text-center form-title">Partie</h6>
                        <div class="form-row d-flex justify-content-between">
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="InputNum">Numero de la partie</label>
                                <input type="number" class="form-control" id="InputNum" placeholder="Numero de la partie">
                            </div>
                            <div class="form-group col-12 col-md-5 col-lg-5">
                                <label for="InputLib">Libellé de la partie</label>
                                <input type="text" class="form-control" id="InputLib" placeholder="Libellé de la partie">
                            </div>
                        </div>

                        <div class="modal-footer mt-4">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <input type="submit" class="btn btn-primary" value="Ajouter la partie">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
