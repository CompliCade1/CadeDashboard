<!DOCTYPE html>
<?php  ini_set('display_errors', 1);
error_reporting(~0);
session_start();
if ($_SESSION['loggedin'] == FALSE or $_SESSION['id'] > 1){
    header('Location: login.php');
};?>
<html lang="en">
<head>
<title>Monitoring Website-Edit</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=a">
<link href="css/fixedstyle.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="wrapper">
<?php include 'navbar.php';?>  
<div class="header">
<h1>Edit Page</h1>
</div>
<?php
require_once 'setup.php';
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM links WHERE id=$id";
    echo $id;
}
else {
    echo 'ID parameter not provided.';
}
echo $id;
if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
echo $id;
?>
</div>
</body>
</html>
<?php
mysqli_close($conn);
header('Location: admin-m.php');
?>