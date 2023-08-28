<?php
include("setup.php");
// Create connection

$sql = "SELECT date, kWh FROM monthlydata";
$result = $conn->query($sql);

$data = array(); //initializing an array called data  
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($data);
?>