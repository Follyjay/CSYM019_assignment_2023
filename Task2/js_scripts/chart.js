

function myLoadFunction() {
    const ctx = document.getElementById('myChart').getContext('2d');
    const units = '<?php echo $units; ?>';
    console.log(units);
    var myChartConfig = {
        type: 'scatter',
        data: {
            labels: ['Nigeria', 'Ghana', 'Togo', 'South Africa', 'Kenya'],
            /* The two datasets are given below as twi items in an array of json objects, i.e. [{}, {}]*/
            datasets: [
            {
                type: 'bar',
                label: 'Population Dataset',
                data: units,
                backgroundColor: [
                    "red",
                    "blue",
                    "yellow",
                    "green",
                    "purpple"
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }     
        ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    };
    const myChart = new Chart(ctx, myChartConfig);
}

document.addEventListener('DOMContentLoaded', myLoadFunction);