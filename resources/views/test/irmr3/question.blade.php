<div class="col-12 col-lg-6 bc-question" style="background-image: url({{ \Illuminate\Support\Facades\Storage::url('/questions/'.$question->getImage()) }});"></div>
<form class="col-12 col-lg-6 bc-response form-question" id="form-question-test" method="POST" action="{{ route('participation.test.update', [$participation->token]) }}">
    <input type="hidden" name="number" value="{{ $number ? $number->id : "" }}">
    <input type="hidden" name="color" value="{{ $color ? $color->id : "" }}">
    <input type="hidden" name="action" value="">

    <div class="header">
        <h1>
            @if ($multiple)
                Multiple
            @endif
            Question {{ $question->pivot->order > 9 ? $question->pivot->order : "0" . $question->pivot->order }} / {{ $count_questions > 9 ? $count_questions : "0" . $count_questions }}
        </h1>
    </div>
    <div class="body mt-5">
        @if ($multiple)
            Multiple
        @else
            <div class="number">
                <p class="title">VALEUR</p>
                <div class="number-row">
                    @foreach ($numbers as $value)
                        <div>
                            <button type="button" class="btn-choice btn-choice-number {{ $number ? ($number->id == $value->id ? "active" : "") : "" }}" data-id="{{ $value->id }}">{{ $value->value }}</button>
                        </div>
                    @endforeach
                </div>
                <p class="form-message-error message-error-number m-0 text-danger"></p>
            </div>
            <div class="color">
                <p class="title">FAMILLE</p>
                <div class="color-row">
                    @foreach ($colors as $value)
                        <div>
                            <button type="button" class="btn-choice btn-choice-color color-icon-{{ $value->value }} {{ $color ? ($color->id == $value->id ? "active" : "") : "" }}" data-id="{{ $value->id }}">{{ $value->icon }}</button>
                        </div>
                    @endforeach
                </div>
                <p class="form-message-error message-error-color m-0 text-danger"></p>
            </div>
        @endif
    </div>
    <div class="footer row">
        <div class="col-12 col-sm-6">
            @if ($prev_response)
                <button class="btn-prev" data-action="prev"><i class="fas fa-chevron-left"></i> Question précédente</button>
            @endif
        </div>
        <div class="col-12 col-sm-6">
            @if ($next_response)
                <button class="float-right btn-next" data-action="next">Question suivante <i class="fas fa-chevron-right"></i></button>
            @endif
        </div>
    </div>
    <div class="footer row">
        <div class="col-10">
            <button type="button" class="btn btn-main btn-main--white-dark" data-toggle="modal" data-target="#modalEnd">Terminer mon test</button>
        </div>
        <div class="col-2">
            <button type="button" class="btn-fullscreen float-right" data-fullscreen="body"><i class="fas fa-expand-arrows-alt"></i></button>
        </div>
    </div>
    
    @include("utils.modal.test.end")
</form>