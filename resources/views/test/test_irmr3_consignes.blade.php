@extends('app')

@section('content')
    @include('test.header_irmr3_inc')

    <div class="container main-div irmr3-start-test-main">
        <div class="icon-container-irmr3 mx-auto">
            <div class="icon-container-size-irmr3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-gear check-test-end" viewBox="0 0 16 16">
                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                </svg>
            </div>
        </div>
        <h1 class="irmr3-title-start">Voici les consignes pour le questionnaire IRMR3.</h1>

        <div class="mb-5 consignes-div">
            <p class="text-left text-wrap text-consignes-irmr3">Vous trouverez, dans les écrans qui vont vous être présentés, <span>des listes de métiers groupés par séries de 12.</span> Parmi ces métiers, il est possible que vous en aimiez certains, un peu moins d'autres et pas du tout quelques-uns. Ce questionnaire est destiné à connaitre vos prérérences pour ces métiers. Pour cela, nous vous demandons de <span>choisir les quatres métiers que vous préférez et les quatre que vous aimez le moins.</span></p>
            <p class="consignes-list-title pt-4">Pour chaque liste de métiers, vous donnerez :</p>
            <p class="text-left consignes-list">
                <span>- la note 2 aux quatre métiers que vous préférez</span>
                <span>- la note 0 aux quatre métiers que vous aimez le moins ou que vous rejetez</span>
                <span>- la note 1 aux métiers restants pour indiquer que vous ne les avez ni choisis ni rejetés</span>
            </p>
            <div class="d-flex justify-content-center justify-content-md-end justify-content-lg-end align-items-center py-4">
                <a href="{{route('test.test_irmr3_conditions')}}" class="next-btn next-btn-irmr3 d-inline-block mx-4 my-0"><i class='fas fa-chevron-left mr-3'></i> Précédent</a>
                <a href="{{route('test.test_irmr3_formulaire')}}?step=3&part=1" class="next-btn next-btn-irmr3 d-inline-block mx-4 my-0">Suivant <i class='fas fa-chevron-right ml-3'></i></a>
            </div>


        </div>

    </div>

@endsection