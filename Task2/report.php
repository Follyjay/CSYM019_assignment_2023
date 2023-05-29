
<!DOCTYPE html>
<html>
    <head>
        <title>My Report</title>
        <link rel="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="layout.css"/>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    </head>
    <body>
        <header>
            <a href="index.php">
                <img src="image/weblogo.png" alt="School logo" class="weblogo">
            </a>
        </header>

        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="reportpage.php">Report</a></li>
            </ul>
        </nav>

        <main class="addcourse">

            <h3>Report</h3></a>

            <form action="selected.php" method="post">

                <div class="mytable">
                    <table>
                        <tr>
                            <th>Title</th>
                            <th>Higlights</th>
                            <th>Details</th>
                            <th>Fees</th>
                        </tr>
                        <!------including the php file for populating the table ----------->
                        <?php include('selected.php'); ?>
                    </table>
                </div>

            </form>

            <div id="mycanvas">
                <canvas id="myChart"></canvas>
            </div>

        </main>

        <footer><p>&copy; CSYM019 2023</p></footer>
    
    <!------code snippet from chartjs.org documentation ----------->
    <script>
        // Retrieving the PHP variables
        const chartType = '<?= $type ?>';
        const datasets = <?= $datasets ?>;
        const labels = <?= $labels ?>;

        // Setting the colors for each bar
        const barColors = [
         'rgb(255, 99, 132)',
         'rgb(54, 162, 235)',
         'rgb(255, 205, 86)',
         'rgb(128, 0, 0)',
         'rgb(0, 255, 255)'
        ];

        // Create the chart data object
        const data = {
            labels: labels,
            datasets: datasets.map((dataset, index) => {
                return {
                ...dataset,
                backgroundColor: barColors[index % barColors.length] // Assigning color from the array based on the index
                };
            })
        };

        // Creating the chart configuration
        const config = {
            type: chartType,
            data: data,
            options: {
                responsive: true,
                scales: {
                    x: {
                        stacked: false
                    },
                    y: {
                        stacked: false,
                        beginAtZero: true
                    }
                }
            }
        };

        // Rendering the chart into an html element by referencing the "id"
        const myChart = new Chart(
            document.getElementById('myChart'), 
            config
        );
    </script>
    </body>
</html>