<?php  ini_set('display_errors', 1);
error_reporting(~0); ?>
<html>
<body>
    <?php print_r($_POST); ?>

Welcome  <?php echo $_POST["fname"]; ?><br>
Your email address is: <?php echo $_POST["email"]; 

$fname = $_POST['fname'];
$lname = $_POST['lname'];

$email = $_POST['email'];
$comment = $_POST['comment'];

include "setup.php";
$sql = "INSERT INTO `contacts` (`id`, `fname`, `lname`, `email`, `comment`) VALUES (NULL, '$fname', '$lname', '$email', '$comment')";
print $sql;
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>