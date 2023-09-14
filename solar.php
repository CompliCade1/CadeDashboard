<!DOCTYPE html>
<html lang="en">
<head>
<title>Trident High School - Sustainability</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=a">
<link href="css/fixedstyle.css" rel="stylesheet" type="text/css">
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.0.1/dist/chart.umd.min.js"></script>
<style>
.main {   
  flex: 90%;
  padding: 5px; 
}
</style>
<?php  ini_set('display_errors', 1);
error_reporting(~0);
require_once 'setup.php'; 
$sql = "SELECT * FROM pages";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $title[] = $row['title'];
    $text[] = $row['text'];
    $img[] = $row['img'];
}
mysqli_close($conn);
    ?>
</head>
<body>
<div class="wrapper">
<?php include 'navbar.php';?>
<div class="header">
<h1>Solar Power Generation</h1>
</div>
<div class="row">
    <div class="side">
        <p>..</p>
    </div>
    <div class="main">
        <div style="width: 80%; margin: auto;">
        <canvas id="lineChart"></canvas>
</div>
 <script>
        // Function to fetch data from PHP script
        function fetchData() {
            fetch('fetch_solar.php')
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
                                label: 'Solar Power Generation (kWh)',
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
                                        text: 'kWh Generation'
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
    </div>
</div>
<div class="footer">
    <?php include 'footer.php';?>
</div>
</div>
</body>
</html>