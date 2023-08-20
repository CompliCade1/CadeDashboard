<?php//  ini_set('display_errors', 1);
error_reporting(E_ALL & E_STRICT);
ini_set('display_errors', '1');
ini_set('log_errors', '0');
ini_set('error_log', './');
//error_reporting(~0); 
?> 
<script src="path/to/chartjs/dist/chart.umd.js"></script>
<div class="main"> 
            <?php
            session_start();
            require_once('setup.php');
            ?>
            <?php
            $id = 1;//$_SESSION['id'];
            $sql = "SELECT date, kWh FROM electricitydata WHERE 
            id = $id";
//print $sql;
            $result = mysqli_query($conn, $sql);
                foreach ($result as $row) {
                    $reading_value[] = [
                        'x' => $row["date"],
                        'y' => $row["kWh"]
                    ];
                }
    print_r($reading_value);
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
                    type: 'bar',
                    data: data,
                    options: {
                        plugins: {
                            title: {
                                display: true,
                                text: 'Electricity Usage:',
                            },
                            legend: {
                                display: true,
                                position: 'Date',
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