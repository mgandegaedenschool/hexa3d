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

            <div class="pdf-container-medium d-flex poles-interets-generaux justify-content-between">
                <section class="canvas-container">
                    <canvas class="chart-view" id="pdf-pro-chart-1" width="551" height="551"></canvas>
                </section>
                <section class="pdf-pro-result-pole">
                    <div class="result-header">
                        <span class="result-empty-space"></span>
                        <p class="note-brute">Note brute</p>
                        <p class="note-etalonnee">Note étalonnée</p>
                    </div>
                    <div class="result-poles-line">
                        <p class="pole">Réaliste</p>
                        <p class="note-brute">11</p>
                        <p class="note-etalonnee">4</p>
                    </div>
                    <div class="result-poles-line">
                        <p class="pole">Investigateur</p>
                        <p class="note-brute">8</p>
                        <p class="note-etalonnee">3</p>
                    </div>
                    <div class="result-poles-line">
                        <p class="pole">Artistique</p>
                        <p class="note-brute">9</p>
                        <p class="note-etalonnee">3</p>
                    </div>
                    <div class="result-poles-line">
                        <p class="pole">Social</p>
                        <p class="note-brute">2</p>
                        <p class="note-etalonnee">2</p>
                    </div>
                    <div class="result-poles-line">
                        <p class="pole">Entreprenant</p>
                        <p class="note-brute">2</p>
                        <p class="note-etalonnee">2</p>
                    </div>
                    <div class="result-poles-line">
                        <p class="pole">Conventionnel</p>
                        <p class="note-brute">2</p>
                        <p class="note-etalonnee">2</p>
                    </div>
                    <div class="result-status">
                        <span class="result-empty-space"></span>
                        <div>
                            <p class="note-brute">Profil</p>
                            <p class="note-brute">intra-individuel</p>
                            <p class="profil-type">RAI</p>
                        </div>
                        <div>
                            <p class="note-etalonnee">Profil</p>
                            <p class="note-etalonnee">intra-individuel</p>
                            <p class="profil-type">RAI</p>
                        </div>

                    </div>
                </section>
            </div>
        </div>
        <div class="pdf-interets-pro-specifique">
            <div class="pdf-line-container">
                <div class="pdf-rounded-section">
                    <h3 class="pdf-title">Intérêts professionnels spécifique</h3>
                </div>
                <hr>
            </div>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.js"></script>
    <script>
        let ctx = document.getElementById('pdf-pro-chart-1').getContext('2d');
        Chart.defaults.font.size = 25;
        const labels = ['Réaliste', 'Investigateur', 'Artistique', 'Social', 'Entreprenant', 'Conventionnel'];
        const data = {
            labels: labels,
            datasets: [
                {
                    label: '',
                    data: [1, 2, 3, 5, 2, 3],
                    borderColor: 'rgb(101, 95, 0)',
                    backgroundColor: 'transparent',
                    pointRadius: 8,
                    pointHoverRadius: 8,
                    pointBackgroundColor: 'rgb(101, 95, 0)',
                    pointBorderColor: 'rgb(101, 95, 0)',
                    pointHoverBackgroundColor: 'rgb(101, 95, 0)',
                    pointHoverBorderColor: 'rgb(101, 95, 0)'
                }
            ]
        };
        const config = {
            type: 'radar',
            data: data,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    r: {
                        min: 0,
                        max: 5,
                        ticks: {
                            beginAtZero: true,
                            stepSize: 1,
                            color: '#000000',
                            display: false,
                        },
                        pointLabels: {
                            display: true,
                            font: {
                                size: 25,
                                weight: 'bold'
                            }
                        }
                    }
                },
                plugins:{
                    legend: {
                        display: false
                    }
                }
            }
        };
        const chart1 = new Chart(ctx, config)
        chart1.width = 551;
        chart1.height = 551;
    </script>
    @include('pdf.pdf-footer-inc')
@endsection