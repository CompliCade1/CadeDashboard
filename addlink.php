<?php  //ini_set('display_errors', 1);
//error_reporting(~0);
session_start();
if ($_SESSION['loggedin'] == FALSE or $_SESSION['id'] > 1){
    header('Location: login.php');
};?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Monitoring Website-Contact</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=a">
<link href="css/fixedstyle.css" rel="stylesheet" type="text/css">
<style>
</style>
</head>
<body>
<div class="wrapper">
<?php include 'navbar.php';?>  
<div class="header">
<h1>Link Adding Page</h1>
</div>
<div class="row">
    <div class="main">
<h2>Add Link</h2>
<p>If the image is too big (max allowed bytes) then you can use the image compressor below to make it smaller.</p>
<a href="https://compressor.io" target = "_blank">Compressor.io</a>
<p><span class="error">* required field</span></p>
<form method="post" enctype="multipart/form-data" action="updatelink.php">
  Link: <input type="text" name="link" value="<?php echo $link;?>">
  <span class="error">* <?php echo $linkErr;?></span>
  <br><br>
  Description: <input type="text" name="description" value="<?php echo $description;?>">
  <span class="error">* <?php echo $descriptionErr;?></span>
  <br><br>
  <input type="file" class="full-width" name="img" value = "<?php echo $img;?>">
  <span class="error">* <?php echo $imgErr;?></span>
  <br><br>
  Image: <input type="text" name="image" value="<?php echo $image;?>">
  <span class="error">* <?php echo $imageErr;?></span>
  <br><br>
  AltName: <textarea name="altname" rows="5" cols="40"><?php echo $altname;?></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
    </div>
</div>
<div class="footer">
    <?php include 'footer.php';?>
</div>
</div>
</body>
</html>
