import("/hexa3d/public/js/lib/chart.js/auto/auto");



const generateLabels = () => {
    return Utils.months({count: inputs.count});
};

const generateData = () => {
    const values = Utils.numbers(inputs);
    inputs.from = values;
    return values;
};

const data = {
    datasets: [
        {fill: 'origin'}
    ]

};

const config = {
    type: 'radar',
    data: data,
    options: {
        plugins: {
            filler: {
                propagate: false
            },
            'samples-filler-analyser': {
                target: 'chart-analyser'
            }
        },
        interaction: {
            intersect: false
        }
    }
};

const inputs = {
    min: 8,
    max: 16,
    count: 5,
    decimals: 2,
    continuity: 1
};





let canva = document.querySelector('.chart-view');
let ctx = canva.getContext('2d');
let chart = new Chart(ctx, config);