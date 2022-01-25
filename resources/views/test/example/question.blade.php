<div class="col-12 col-lg-6 bc-question" style="background-image: url({{ \Illuminate\Support\Facades\Storage::url('/questions/'.$question->getImage()) }});"></div>
<form class="col-12 col-lg-6 bc-response form-question" id="form-question-example" method="POST" action="{{ route('participation.example.store', [$participation->token]) }}">
    <input type="hidden" name="number" value="{{ $response->retry_times == 2 ? $number->id : "" }}">
    <input type="hidden" name="color" value="{{ $response->retry_times == 2 ? $color->id : "" }}">
    <div class="header">
        <h1>Question {{ $question->pivot->order > 9 ? $question->pivot->order : "0" . $question->pivot->order }} / {{ $count_questions > 9 ? $count_questions : "0" . $count_questions }}</h1>
    </div>
    <div class="body mt-5">
        <div class="number">
            <p class="title">VALEUR</p>
            <div class="number-row">
                @foreach ($numbers as $value)
                    <div>
                        <button type="button" class="btn-choice btn-choice-number {{ $response->retry_times == 2 && $number->id == $value->id ? "active" : "" }}" data-id="{{ $value->id }}" {{ $response->retry_times == 2 ? "disabled" : "" }}>{{ $value->value }}</button>
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
                        <button type="button" class="btn-choice btn-choice-color color-icon-{{ $value->value }} {{ $response->retry_times == 2 && $color->id == $value->id ? "active" : "" }}" data-id="{{ $value->id }}" {{ $response->retry_times == 2 ? "disabled" : "" }}>{{ $value->icon }}</button>
                    </div>
                @endforeach
            </div>
            <p class="form-message-error message-error-color m-0 text-danger"></p>
        </div>
    </div>
    <div class="footer row">
        <div class="col-12 d-flex justify-content-between">
            @if ($response->retry_times == 2)
                <p class="m-0">
                    Vous n'avez plus d'essaie.
                    <br>
                    Voici la bonne réponse.
                </p>
                <button class="btn-next">Question suivante <i class="fas fa-chevron-right"></i></button>
            @else
                <p class="m-0 form-message-error message-error-result text-danger"></p>
                <button class="btn-next">Valider</button>
            @endif
        </div>
    </div>
    <div class="footer row">
        <div class="col-12">
            <button type="button" class="btn-fullscreen float-right" data-fullscreen="body .question .content"><i class="fas fa-expand-arrows-alt"></i></button>
        </div>
    </div>
</form>
