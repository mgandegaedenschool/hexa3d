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
