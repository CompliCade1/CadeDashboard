<!DOCTYPE html>
<html lang="en">
<head>
<title>Sustainability - Electricity Usage</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=a">
</head>
<link href="css/fixedstyle.css" rel="stylesheet" type="text/css">
<body>
<div class="wrapper">
<?php include 'navbar.php';?>
<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['June', 'July', 'August', 'Semptember', 'October', 'Novermber', 'December', 'January', 'February', 'March', 'April', 'May'],
      datasets: [{
        label: 'kWh Used',
        data: [36093, 23703, 33825, 26384, 10898, 12746, 4761, 4838, 13835, 16098, 10117, 28154],
        borderWidth: 4
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
<div class="footer">
    <?php include 'footer.php';?>
</div>
</div>
</body>