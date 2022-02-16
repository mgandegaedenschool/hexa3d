@extends('app')

@section('content')
    @include('pdf.pdf-irmr3-header_inc')
    <div class="irmr-3-results-container">
        <section class="irmr3-statistics">
            <p>Date de passation :<span>JJ/MM/AAAA</span></p>
            <p>Temps de passation :<span>x h x min</span></p>
            <p>Etalonnage :<span>Etalonnage choisi</span></p>
            <p>Interruption(s) :<span>x fois</span></p>
        </section>
        <section>
            <h3>Pôles d'intérêts généraux</h3>
            <div class="riasec-graph">
                
            </div>
            <div class="riasec-score">

            </div>
        </section>
        <section>
            <h3>Intérêts professionnels spécifiques</h3>
        </section>
    </div>



    @include('pdf.pdf-footer_inc')
@endsection