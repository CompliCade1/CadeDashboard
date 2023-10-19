<?php  ini_set('display_errors', 1);
error_reporting(~0);
session_start();
if ($_SESSION['loggedin'] == FALSE or $_SESSION['id'] > 1){
    header('Location: login.php');
};?>
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
    $query = "SELECT * FROM links WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if(mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        // Display the edit form with the existing record's data
?>
<form method="post" action="update-m.php">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
<label for="link">Link:</label>
<input type="text" id="link" name="link" value="<?php echo $row['link']; ?>"><br><br>
<label for="link">Description:</label>
<input type="text" id="description" name="description" value="<?php echo $row['description']; ?>"><br><br>
<label for="image">Image:</label>
<input type="text" id="image" name="image" value="<?php echo $row['image']; ?>"><br><br>
<label for="altimg">Alt Name:</label>
<textarea id="altimg" name="altimg"><?php echo $row['altimg']; ?></textarea><br><br>
<input type="submit" value="Update">
</form>

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