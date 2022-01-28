
<div class="modal modal--test-timer fade" id="modalTimer" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-right modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body countdown" data-time="{{ $timer }}">
                <i class="far fa-clock"></i>
                <p class="text-center">Plus que <span>5 minutes</span> restantes !</p>
                <button type="button" class="btn-close close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>
