<?php  ini_set('display_errors', 1);
error_reporting(~0); ?>
<?php  require_once 'setup.php';
$sql = "SELECT * FROM monthlydata";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $loop = 1;
    while ($row = mysqli_fetch_assoc($result)) {
    $x[$loop] = $row['date'];
    $y[$loop] = $row['kWh'];
    $loop += 1;
        }
     } 
else {
    echo 'No records found.';
    }
$x_values = implode(' , ',$x);
//echo ($x_values);
mysqli_close($conn);
$rows = count($x)
?>
<?php for($i = 1; $i < $rows + 1; $i++){
    echo $x[$i];
    if ($i < $rows) {
        echo ",";}}?>
<canvas id="line-chart"></canvas>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.0.1/dist/chart.umd.min.js"></script>
<script>
	new Chart(document.getElementById("line-chart"), {
		type : 'line',
		data : {
			labels : [<?php for($i = 1; $i < $rows + 1; $i++){
                                echo $x[$i];
                                if ($i < $rows) {
                                    echo ',';}}?>]
			datasets : [
					{
						data : [ <?php print $y[1];?>, 12746],
						label : "Imported Electricity",
						borderColor : "#3cba9f",
						fill : false
					}]
		},
		options : {
			title : {
				display : true,
				text : 'Chart JS Line Chart Example'
			}
		}
	});
</script>
 