
<div class="modal modal--add-test fade" id="modal-add-patient" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form class="modal-content" action="{{ route('patient.store') }}" method="POST">
            @csrf
            <div class="modal-header">
                <h2 class="modal-title">Ajouter un Patient</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="form-check">
                        <label for="firstname">Prénom</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Prénom" required>
                        @error('firstname')
                        <p class="form-message-error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-check">
                        <label for="lastname">Nom</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Nom" required>
                        @error('lastname')
                        <p class="form-message-error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-check">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                        @error('email')
                        <p class="form-message-error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-close" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn-send">Ajouter un Patient</button>
            </div>
        </form>
    </div>
</div>
