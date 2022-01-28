
<div class="modal modal--add-test fade" id="modal-add-test" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form class="modal-content" action="{{ route('participation.store', [$patient->id]) }}" method="POST">
            @csrf
            <div class="modal-header">
                <h2 class="modal-title">Ajouter un Test</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <p class="title-form-group">Version du RCC : <i class="btn-tooltip far fa-question-circle" data-toggle="tooltip" data-placement="top" data-html="true" title="<div class='mb-2'>RCC forme A/B : 40 items</div><div>RCC forme C : 45 items</div>"></i></p>
                    @foreach ($tests as $test)
                        <div class="form-check">
                            <input class="" type="radio" name="test" id="rcc-{{ $test->id }}" value="{{ $test->id }}">
                            <label class="form-check-label" for="rcc-{{ $test->id }}">RCC forme {{ $test->name }}</label>
                        </div>
                    @endforeach
                    @error('test')
                        <p class="form-message-error">{{ $message }}</p>
                    @enderror
                </div>
                {{--<div class="form-group">
                    <p class="title-form-group">Modalité de passation : <i class="btn-tooltip far fa-question-circle" data-toggle="tooltip" data-placement="top" data-html="true" title="<div class='mb-2'>Passation standard : 4 exemples</div><div>Passation avec entrainement : 8 questions d'entrainement</div>"></i></p>
                    @foreach ($participationTestTypes as $participationTestType)
                        @if ($participationTestType->name == "standard")
                            <div class="form-check">
                                <input class="" type="radio" name="type" id="type-{{ $participationTestType->id }}" value="{{ $participationTestType->id }}" required>
                                <label class="form-check-label" for="type-{{ $participationTestType->id }}">Passation standard</label>
                            </div>
                        @elseif($participationTestType->name == "training")
                            <div class="form-check">
                                <input class="" type="radio" name="type" id="type-{{ $participationTestType->id }}" value="{{ $participationTestType->id }}" required>
                                <label class="form-check-label" for="type-{{ $participationTestType->id }}">Passation avec entrainement</label>
                            </div>
                        @endif
                    @endforeach
                    @error('type')
                    <p class="form-message-error">{{ $message }}</p>
                    @enderror
                </div>
                --}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-close" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn-send">Ajouter test RCC</button>
            </div>
        </form>
    </div>
</div>
