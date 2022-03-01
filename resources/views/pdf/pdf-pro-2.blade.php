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

        <div class="canvas-container">
            <canvas class="chart-view" id="myChart" width="551" height="551"></canvas>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.js"></script>
    <script>
        let ctx = document.getElementById('myChart').getContext('2d');
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
                            stepSize: 1,
                            display: false
                        },
                        pointLabels: {
                            display: true,
                            font: {
                                size: 25
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
        const chart = new Chart(ctx, config)

        console.log(chart);
    </script>
    @include('pdf.pdf-footer-inc')
@endsection