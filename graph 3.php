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
        }
     } 
else {
    echo 'No records found.';
    }
mysqli_close($conn);
?>
<canvas id="line-chart"></canvas>
<script
    src="https://cdn.jsdelivr.net/npm/chart.js@4.0.1/dist/chart.umd.min.js"></script>
<script>
	new Chart(document.getElementById("line-chart"), {
		type : 'line',
		data : {
			labels : [ "<?php print $x[1];?>", "<?php print $x[2];?>", "Mar", 'Apr', 'May', 'June',
					'July', 'Aug', 'Sep', 'Oct' ],
			datasets : [
					{
						data : [ <?php print $y[1];?>, <?php print $y[2];?>, 12746, 4761, 4838,
								13835, 16098, 10117, 28154, 33390 ],
						label : "America",
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
 