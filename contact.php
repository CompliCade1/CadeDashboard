<!DOCTYPE html>
<html lang="en">
<head>
<title>Monitoring Website-Contact</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=a">
<link href="css/fixedstyle.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="wrapper">
<?php include 'navbar.php';?>  
<div class="header">
<h1>Contact Page</h1>
</div>
<div class="row">
    <div class="side">
        <p>This is me for now, might add a picture of me.<br>You can contact me thorugh my gmail,<br>cade20247@student.trident.school.nz</p>
    </div>
    <div class="main">
<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="actionpage.php">  
  First Name: <input type="text" name="fname" value="<?php echo $fname;?>">
  <span class="error">* <?php echo $fnameErr;?></span>
  <br><br>
  Last Name: <input type="text" name="lname" value="<?php echo $lname;?>">
  <span class="error">* <?php echo $lnameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

    </div>
</div>
<div class="footer">
    <?php include 'footer.php';?>
</div>
</div>
</body>
</html>
