@extends('app')

@section('content')
    @include('test.header_irmr3_inc')

    <div class="container main-div irmr3-start-test-main">
        <div class="icon-container-irmr3 mx-auto">
            <div class="icon-container-size-irmr3">
                <i class="fas fa-cog"></i>
            </div>

        </div>
        <h1 class="irmr3-title-start">Voici les consignes pour le questionnaire IRMR3.</h1>

        <div class="mb-5 consignes-div">
            <p class="text-left text-wrap">Vous trouverez, dans les écrans qui vont vous être présentés, <span>des listes de métiers groupés par séries de 12.</span> Parmi ces métiers, il est possible que vous en aimiez certains, un peu moins d'autres et pas du tout quelques-uns. Ce questionnaire est destiné à connaitre vos prérérences pour ces métiers. Pour cela, nous vous demandons de <span>choisir les quatres métiers que vous préférez et les quatre que vous aimez le moins.</span></p>
            <p class="consignes-list-title">Pour chaque liste de métiers, vous donnerez :</p>
            <p class="text-left consignes-list">
                <span>- la note 2 aux quatre métiers que vous préférez</span>
                <span>- la note 0 aux quatre métiers que vous aimez le moins ou que cous rejetez</span>
                <span>- la note 1 aux métiers restants pour indiquer que vous ne les avez ni choisis ni rejetés</span>
            </p>
            <div class="previous-or-next-container">
                <div class="text-center irmr-3-test-ready-btn">
                    <a href="test_irmr3_conditions" class=""><i class="fas fa-chevron-left"></i>Précédent</a>
                    <a class="" href="test_irmr3_formulaire?step=3&part=1">Suivant<i class="fas fa-chevron-right"></i></a>
                </div>
            </div>


        </div>

    </div>

@endsection
