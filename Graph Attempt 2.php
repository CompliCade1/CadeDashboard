 <div class="main"> 
            <?php
            session_start();
            require_once('setup.php');
            ?>

            <?php
            $id = 1;//$_SESSION['id'];
            $sql = "SELECT reading, kW FROM electricitydata WHERE user_id = $id";
//print $sql;
            $result = mysqli_query($conn, $sql);
                foreach ($result as $row) {
                    $reading_value[] = [
                        'x' => $row["reading"],
                        'y' => $row["kW"]
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