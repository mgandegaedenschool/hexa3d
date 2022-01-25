@extends('app')

@section('content')
    <div class="container-fluid question setting theme-{{ $participation->theme }}">
        <div class="row">
            <div class="col-12 col-md-6 bc-question" style="background-image: url('/img/PLANCHE_59.svg');"></div>
            <form class="col-12 col-md-6 bc-response" action="{{ route('participation.update', [$participation->token]) }}" method="POST">
                @csrf
                <div class="body">
                    <h1>Un dernier réglage</h1>
                    <p>
                        Un mode clair / obscur est proposé pour plus de concentration.
                    </p>
                    <p class="bold-text">
                        Prenez le temps de tester les deux modes, et choisissez celui avec lequel vous êtes le plus à l'aise.
                    </p>
                    <p>
                        Une fois votre choix valider, le test débutera !
                    </p>
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="theme">
                            <input type="checkbox" name="theme" id="theme" {{ $participation->theme == "dark" ? "checked" : "" }}/>
                            <div class="slider round"></div>
                        </label>
                    </div>
                    <p class="m-0">Clair/Sombre</p>
                </div>
                <p>Tout est bon ?</p>
                <div class="footer">
                    <button class="btn-main">Commencer le test</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script src="/js/app/test/question.js"></script>
    <script>
        $('body').on('click','.theme-switch input[type="checkbox"]', function (e) {
            var el = $('.question');

            if (e.target.checked){
                el.removeClass('theme-light').addClass('theme-dark');
            } else {
                el.removeClass('theme-dark').addClass('theme-light');
            }
        });
    </script>
@endsection
