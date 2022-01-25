@extends('app')

@section('content')
    <div class="container blc-top-start d-flex align-items-center">
        <div class="blc-start">
            <div class="row">
                <form class="col-12" action="{{ route('participation.update', [$participation->token]) }}" method="post">
                    @csrf
                    @if ($participation->status->name == "new")
                        <div class="header">
                            <div>
                                <img src="{{ asset('img/Logo_RCC.png') }}" alt="">
                            </div>
                        </div>
                        <div class="body explanation">
                            <p class="bold-text">
                                Bonjour {{ $participation->patient->firstname }} {{ $participation->patient->lastname }},
                            </p>
                            <p class="bold-text">
                                Vous êtes sur le point de passer une session de test RCC.
                            </p>
                            <p>
                                Cette épreuve vise à évaluer vos capacités de raisonnement logique à partir de la situation d'un jeu de cartes. Si vous ne connaissez pas le principe de jeu de cartes, merci d'en informer le professionnel.
                            </p>
                            <p class="bold-text">
                                La majorité des personnes n'arrive pas à terminer l'ensemble des exercices, ne vous inquiétez pas mais faites du mieux que vous pouvez.
                            </p>
                            <div>
                                <i class="far fa-smile"></i>
                            </div>
                            <p>
                                Bonne session !
                            </p>
                        </div>
                        <div class="footer">
                            <button class="btn-main">Suivant</button>
                        </div>
                    @elseif ($participation->status->name == "course")
                        <div class="header">
                            <div>
                                <img src="{{ asset('img/Logo_RCC.png') }}" alt="">
                            </div>
                            <h1>Le déroulement du test</h1>
                        </div>
                        <div class="body explanation">
                            <p class="bold-text">
                                Cette épreuve utilise des cartes à jouer. Il faut trouver la valeur de la carte qui est retournée afin qu'elle continue la suite proposée.
                            </p>
                            <p>
                                Pour trouver les caractéristiques de la carte retournée (chiffre et famille), vous devez bien observer toutes les cartes présentées et essayer de comprendre comment elles sont reliées les unes aux autres. La carte retournée devra obéir aux mêmes règles.
                            </p>
                            <div>
                                <p>
                                    Prenons un exemple :
                                </p>
                                <img src="{{ asset('img/test/preview1.svg') }}" alt="preview 1">
                            </div>
                            <div>
                                <p>
                                    Pour compléter la suite, voici la carte manquante :
                                </p>
                                <img src="{{ asset('img/test/preview2.svg') }}" alt="preview 2">
                            </div>

                        </div>
                        <div class="footer">
                            <button class="btn-main">Suivant</button>
                        </div>
                    @elseif ($participation->status->name == "instruction")
                        <div class="header">
                            <div>
                                <img src="{{ asset('img/Logo_RCC.png') }}" alt="">
                            </div>
                            <h1>Les consignes</h1>
                        </div>
                        <div class="body rules">
                            <div class="list">
                                <img src="{{ asset('img/clock.svg') }}" alt="">
                                <div class="body-list">
                                    <ul>
                                        <li class="bold">La durée du test est limitée 20 minutes.</li>
                                        <li>5 minutes avant la fin vous recevrez un signal.</li>
                                        <li class="pink bold">Assurez-vous d'avoir le temps nécessaire et d'être dans un endroit calme et isolé.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="list">
                                <img src="{{ asset('img/parameter.svg') }}" alt="">
                                <div class="body-list">
                                    <ul>
                                        <li>Pour valider votre réponse, il faut</li>
                                        <li><span>- sélectionner un chiffre :</span> entre 0 et 10.</li>
                                        <li><span>- sélectionner une famille :</span> trèfle ♣, cœur ♥, carreau ♦ ou pique ♠.</li>
                                        @if ($participation->test->name == "C")
                                            <li class="bold">Attention : pour les planches 42 et 43, vous devrez identifier deux réponses.</li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="list">
                                <img src="{{ asset('img/info.svg') }}" alt="">
                                <div class="body-list">
                                    <ul>
                                        <li><span>Vous pouvez passer d'une planche à l'autre sans forcément y répondre.</span></li>
                                        <li class="text-center"><a><i class="fas fa-chevron-left"></i>Question précédente</a> <a>Question suivante <i class="fas fa-chevron-right"></i></a></li>
                                        <li>S'il vous reste du temps en fin de passation, n'hésitez pas à revenir sur les questions laissées sans réponse.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <button class="btn-main">Suivant</button>
                        </div>
                    @elseif ($participation->status->name == "accept")
                        <div class="header">
                            <div>
                                <img src="{{ asset('img/Logo_RCC.png') }}" alt="">
                            </div>
                        </div>
                        <div class="body valid">
                            <p>
                                Avant de commencer, assurons-nous que le professionnel vous a bien expliqué les objectifs de cette évaluation et les modalités de vos réponses. Est-ce le cas ?
                            </p>
                            <div>
                                <input class="form-check-input @error('understand') is-invalid @enderror" type="checkbox" id="understand" name="understand" {{ old('understand') ? 'checked' : '' }}>
                                <label class="form-check-label" for="understand">Oui, tout est clair</label>
                                @error('understand')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <p>
                                Vous êtes volontaire pour passer cette épreuve ?
                            </p>
                            <div>
                                <input class="form-check-input @error('voluntary') is-invalid @enderror" type="checkbox" id="voluntary" name="voluntary" {{ old('voluntary') ? 'checked' : '' }}>
                                <label class="form-check-label" for="voluntary">Oui, je suis volontaire.</label>
                                @error('voluntary')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                        </div>
                        <div class="footer">
                            <button class="btn-main">C'est parti !</button>
                        </div>
                    @elseif ($participation->status->name == "example_start")
                        <div class="header">
                            <div>
                                <img src="{{ asset('img/Logo_RCC.png') }}" alt="">
                            </div>
                            <h1>Quelques exemples avant de commencer</h1>
                        </div>
                        <div class="body example">
                            <p>
                                Pour accéder au test RCC, vous devez répondre à quatre exemples.
                            </p>
                            <p class="bold-text">
                                Attention : il vous faudra au moins 3 bonnes réponses pour lancer le test.
                            </p>
                            <div class="list">
                                <i class="far fa-question-circle"></i>
                                <div class="body-list">
                                    <ul>
                                        <li><span>Moins de 3 réponses justes ?</span><br> Pas de panique ! Le test s'arrêtera et vous devrez contacter votre praticien.</li>
                                        <li><span>Un problème pendant le test ?</span><br> Rapprocher vous de votre praticien pour lui expliquer la situation.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <button class="btn-main">J'ai compris</button>
                        </div>
                    @elseif ($participation->status->name == "example_result")
                        <div class="header">
                            <div>
                                <img src="{{ asset('img/Logo_RCC.png') }}" alt="">
                            </div>
                        </div>
                        <div class="body result">
                            <p>
                                Vous venez de passer les quatre exemples.
                            </p>
                            <p>
                                Votre note est de :
                            </p>
                            <p class="note">
                                {{ $count_example_correct }}/{{ $count_example }}
                            </p>
                            @if ($count_example_correct > 2)
                                <p>Vous pouvez continuer le test RCC. Êtes-vous prêt ?</p>
                            @else
                                <p>Malheureusement, vous ne pouvez continuer le test RCC. Veuillez contacter votre praticien.</p>
                            @endif
                        </div>
                        <div class="footer">
                            @if ($count_example_correct > 2)
                                <button class="btn-main">Je suis prêt !</button>
                                <button type="button" class="btn-main btn-main--cancel">Non, je ne suis pas prêt</button>
                            @else
                                <button class="btn-main">Quitter l'espace test</button>
                            @endif
                        </div>
                    @elseif ($participation->status->name == "test_end")
                        <div class="header">
                            <div>
                                <img src="{{ asset('img/Logo_RCC.png') }}" alt="">
                            </div>
                        </div>
                        <div class="body finish">
                            @if ($timer)
                                <div>
                                    <i class="far fa-clock"></i>
                                </div>
                                <p>
                                    Le temps est écoulé !
                                </p>
                                <p class="bold-text">
                                    Votre test RCC est terminé.
                                </p>
                                <p>
                                    Votre praticien reviendra vers vous au plus vite afin de vous transmettre vos résultats.
                                </p>

                            @else
                                <div>
                                    <i class="far fa-check-circle"></i>
                                </div>
                                <p>
                                    Vous avez réussi à répondre à toutes les questions !
                                </p>
                                <p class="bold-text">
                                    Votre test RCC est terminé.
                                </p>
                                <p>
                                    Votre praticien reviendra vers vous au plus vite afin de vous transmettre vos résultats.
                                </p>
                            @endif
                        </div>
                        <div class="footer">
                            <button class="btn-main">Quitter l'espace test</button>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>

@endsection

@section('script')
@endsection
