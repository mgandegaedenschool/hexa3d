
<!-- Modal -->
<div class="modal fade" id="invitationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter un bénéficiaire</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    {{-- <form action="" method="post"> --}}
                    <form method="POST" action="{{ route('pro.store') }}"> 
                            @csrf 
                        {{-- first part of the form --}}
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
                                <label for="inputEta">choisissez l'etalonnage à appliquer au test</label>
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

                        <div class="modal-footer mt-4">
                            <input type="submit" class="btn btn-primary" value="Envoi de l'invitation">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>  