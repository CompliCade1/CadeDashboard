<!DOCTYPE html>
<html lang="en">
<head>
<title>Monitoring Website-Contact</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=a">
<link href="css/fixedstyle.css" rel="stylesheet" type="text/css">
<style>
        table {
            width: 100%;
            border-collapse: collapse;
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
<?php  require_once 'setup.php';
$sql = "SELECT * FROM contacts";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    echo '<table>';
    echo '<tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Comment</th><th>Actions</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['fname'] . '</td>';
        echo '<td>' . $row['lname'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['comment'] . '</td>';
        echo '<td><a href="edit.php?id=' . $row['id'] . ' ">Edit</a> | <a href="delete.php?id=' . $row['id'] .'”>Delete</a></td>';
        echo '</tr>';
        }
    echo '</table>';
     } 
else {
    echo 'No records found.';
    }
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
<div class="wrapper">
<?php include 'navbar.php';?>  
<div class="header">
<h1>Contact Page</h1>
</div>
<div class="row">
</div>
<div class="footer">
    <?php include 'footer.php';?>
</div>
</div>
</body>
</html>