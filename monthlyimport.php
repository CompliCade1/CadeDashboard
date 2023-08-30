<?php  ini_set('display_errors', 1);
error_reporting(~0); ?>
<?php  require_once 'setup.php';
mysqli_close($conn);
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.0.1/dist/chart.umd.min.js"></script>
<div style="width: 80%; margin: auto;">
        <canvas id="lineChart"></canvas>
</div>
 <script>
        // Function to fetch data from PHP script
        function fetchData() {
            fetch('fetch_data.php')
                .then(response => response.json())
                .then(data => {
                    const dateData = data.map(item => item.date);
                    const kWhData = data.map(item => item.kWh);
                    // Create a line chart
                    const ctx = document.getElementById('lineChart').getContext('2d');
                    new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: dateData,
                            datasets: [{
                                label: 'Electricity Usage',
                                data: kWhData,
                                borderColor: 'blue',
                                borderWidth: 2,
                                fill: false
                            }]
                        },
                        options: {
                            scales: {
                                x: {
                                    title: {
                                        display: true,
                                        text: 'Month'
                                    }
                                },
                                y: {
                                    title: {
                                        display: true,
                                        text: 'kWh Usage'
                                    }
                                }
                            }
                        }
                    });
                })
                .catch(error => console.error('Error fetching data:', error));
        }
        // Call the fetchData function when the page loads
        window.onload = fetchData;
    </script>