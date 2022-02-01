@extends('app')

@section('content')
    @include('test.header_irmr3_inc')

    <div class="container main-div irmr3-start-test-main">
        <h1 class="irmr3-title-start">Vous vous apprêtez à passer le questionnaire d'intérêts professionels IRMR3.</h1>

        <div class="mb-5 form-start-irmr3-test">
            <p class="">Les consignes vont vous être expliquées.</p>
            <p class="">Êtes-vous prêts ?</p>
            <div class="text-center irmr-3-test-ready-btn">
                <a href="test_irmr3_consignes?step=2" class="irmr3-btn-kaki btn py-3">Oui, je le suis</a>
                <a class="irmr3-continue-later py-3" href="">Non, je continuerai plus tard</a>
            </div>

        </div>

    </div>

@endsection