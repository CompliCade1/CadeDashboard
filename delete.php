<!DOCTYPE html>
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
    $query = "SELECT * FROM contacts WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if(mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        // Display the edit form with the existing record's data
?>
<div class="row">
</div>
<div class="footer">
    <?php include 'footer.php';?>
</div>
</div>
</body>
</html>
<?php
}
else {
echo 'No record found with the provided ID.';
}
 // Close the statement
    mysqli_stmt_close($stmt);
} 
else {
    echo 'ID parameter not provided.';
}// Close the database connection
mysqli_close($conn);
?>