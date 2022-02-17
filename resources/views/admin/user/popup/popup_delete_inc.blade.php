
<!-- Modal -->

    <div class="modal fade" id="proDeleteBenefModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-pro-dialog">
            <div class="modal-content modal-pro-content modal-confirm-content">
                <div class="modal-header modal-espace-pro-header">
                    <div class="container-fluid modal-pro-header-contain">
                        <h5 class="modal-title" id="exampleModalLabel"><?php// echo $modalTitle ?></h5>
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
                        <form action="{{route('pro.index')}}" method="get">
                        @csrf
                            <div class="form-row d-flex justify-content-between flex-direction-column">
                                <div class="form-group col-12">
                                    <div class="import-invites-txt">
                                        <p>Attention : vous allez supprimer des bénéficiaires.</p>
    
                                        <p>Êtes-vous sûr(e) ? </p>
                                    </div>
    
                                    <div class="imported-invite d-flex justify-content-center mt-5">
                                        <input type="submit" class="purple-btn espace-pro-purple-btn px-5 py-2 button-delete-modal" name="choix" value="oui">
                                        <button type="button" class="close px-5" data-dismiss="modal" aria-label="Close">Non</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>