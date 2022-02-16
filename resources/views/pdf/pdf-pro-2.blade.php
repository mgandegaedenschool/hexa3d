@extends('app')

@section('content')
    @include('pdf.pdf-header-inc')
    <main>
        <div class="pdf-infos pdf-container-medium">
            <p><span class="text-kaki text-kaki-info">Date de passation : </span><span class="text-info-grey">JJ/MM/AAAA</span></p>
            <p><span class="text-kaki text-kaki-info">Temps de passation : </span><span class="text-info-grey">x h x min</span></p>
            <p><span class="text-kaki text-kaki-info">Etalonnage : </span> <span class="text-info-grey">Etalonnage choisi</span></p>
            <p><span class="text-kaki text-kaki-info">Interruptions : </span><span class="text-info-grey">x fois</span></p>
        </div>
        <div class="pdf-interets-generaux">
            <div class="pdf-line-container">
                <div class="pdf-rounded-section">
                    <h3 class="pdf-title">Pôles d'Intérêts généraux</h3>
                </div>
                <hr>
            </div>

        </div>


        <canvas class="chart-view" width="500" height="500"></canvas>

    </main>
    @include('pdf.pdf-footer-inc')
@endsection