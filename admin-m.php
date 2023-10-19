<?php  ini_set('display_errors', 1);
error_reporting(~0);
session_start();
if ($_SESSION['loggedin'] == FALSE or $_SESSION['id'] > 1){
    header('Location: login.php');
};?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Monitoring Website-Admin</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=a">
<link href="css/fixedstyle.css" rel="stylesheet" type="text/css">
<style>
        table {
            width: 100%;
            border-collapse: collapse;
            background-color:#ffffff;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
<div class="wrapper">
<?php include 'navbar.php';?>  
<div class="header">
<h1>Admin Page</h1>
</div>
<div>
<?php  require_once 'setup.php';
$sql = "SELECT * FROM links";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
if (mysqli_num_rows($result) > 0) {
    echo '<table>';
    //print ($sql);
    echo '<tr><th>Link</th><th>Description</th><th>Image</th><th>AltName</th><th>Actions</th></tr>';
    
    while($row = $result->fetch_assoc()) {
        //print_r ($row);
        echo '<tr>';
        echo '<td>' . $row['link'] . '</td>';
        echo '<td>' . $row['description'] . '</td>';
        echo '<td>' . $row['image'] . '</td>';
        echo '<td>' . $row['altimg'] . '</td>';
        echo '<td><a href="edit-m.php?id=' . $row['id'] . ' ">Edit</a> | <a href="delete-m.php?id=' . $row['id'] .'">Delete</a></td>';
        echo '</tr>';
        }
    echo '<tr>';
    echo '<td><a href="addlink.php">Add Page</a></td>';
    echo '</tr>';
    echo '</table>';
     } 
else {
    echo 'No records found.';
    }
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
</div>
<div class="row">
</div>
<div class="footer">
    <?php include 'footer.php';?>
</div>
</div>
</body>
</html>