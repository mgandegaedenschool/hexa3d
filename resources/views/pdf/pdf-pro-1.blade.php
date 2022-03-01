@extends('app')

@section('content')

<main>

    <section class="text-center d-flex flex-column align-items-center justify-content-center pdf-content-container">
        <div class="container pdf-logo-container mb-5">
            <img src="{{asset('img/irmr3-logo-v2_300ppp.png')}}" class="img-fluid" alt="logo IRMR 3">
        </div>
        <h2 class="pdf-big-title mb-5">RAPPORT</h2>
        <h3 class="pdf-medium-title my-5 font-weight-bold">PRENOM NOM</h3>
        <p class="pdf-title my-5 font-weight-bold">JJ/MM/AAAA</p>
    </section>
    <p class="text-center pdf-title pdf-last-text">Les données contenus dans ce rapport sont confidentielles</p>
</main>

@include('pdf.pdf-footer-inc')
@endsection