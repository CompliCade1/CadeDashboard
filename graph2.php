<!DOCTYPE html>
<?php  ini_set('display_errors', 1);
error_reporting(~0); ?> 
<html lang="en">
<head>
<title>Monitoring Website-Contact</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=a">
<link href="css/fixedstyle.css" rel="stylesheet" type="text/css">
<script>src="https://cdn.jsdelivr.net/npm/chart.js"</script> 
</head>
<body>
<div class="wrapper">
<?php include 'navbar.php';?>  
<div class="header">
<h1>Contact Page</h1>
</div>
<div class="row">
    <div class="main"> 
            <?php
            session_start();
            require_once('setup.php');
            ?>
            <?php
            $id = 1;//$_SESSION['id'];
            $sql = "SELECT date, kWh FROM electricitydata";
//print $sql;
            $result = mysqli_query($conn, $sql);
                foreach ($result as $row) {
                    $reading_value[] = [
                        'x' => $row["date"],
                        'y' => $row["kWh"]
                    ];
                }
    //print_r($reading_value);
            ?>
            <div style="width: 50%;" class="diagram_div">
                <canvas id="myChart"></canvas>
            </div>
            <!--todo=============== script ===============-->
            <script>
            const data = {
                datasets: [{
                    label: 'Time',
                    backgroundColor: '#20e0307a',
                    borderColor: '#04aa1a',
                    data: <?= json_encode($reading_value) ?>,
                    borderWidth: 1,
                }]
            };
                var chartEl = document.getElementById("myChart");
                chartEl.height = 100;
                chartEl.width = 300;
                const config = {
                    type: 'line',
                    data: data,
                    options: {
                        plugins: {
                            title: {
                                display: true,
                                text: 'Electricity Usage:'
                            },
                            legend: {
                                display: true,
                                position: 'bottom'
                            }
                        }
                    }
                };
            </script>
 <script>
                const myChart = new Chart(
                    document.getElementById('myChart'),
                    config
                );
            </script>
</div>
</div>
<div class="footer">
    <?php include 'footer.php';?>
</div>
</div>
</body>
</html>