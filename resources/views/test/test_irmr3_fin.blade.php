@extends('app')

@section('content')
@include('test.header_irmr3_inc')

<div class="container main-div irmr3-start-test-main">
    <h1 class="irmr3-title-start irmr3-title-end">Fin du test</h1>
    <div class="icon-container-irmr3 icon-irmr3-end mx-auto">
        <div class="icon-container-size-irmr3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2 check-test-end" viewBox="0 0 16 16">
                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
            </svg>
        </div>

    </div>
    <div class="mb-5 irmr3-test-end">
        <p class="">Vous avez répondu à toutes les questions !</p>
        <p class="font-weight-bold">Votre test est terminé.</p>
        <p class="">Votre practicien reviendra vers vous au plus vite afin de vous transmettre vos résultats.</p>
        <div class="text-center irmr-3-test-ready-btn mt-5">
            <a href="" class="irmr3-btn-kaki btn-test-end btn py-3">Quitter mon espace test</a>
        </div>

    </div>

</div>

@endsection