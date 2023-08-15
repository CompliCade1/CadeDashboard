<!DOCTYPE html>
<html lang="en">
<head>
<title>Trident High School - Sustainability</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=a">
<link href="css/fixedstyle.css" rel="stylesheet" type="text/css">
<?php 
require_once 'setup.php';
$sql = "SELECT * FROM pages where id = 1";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $title1 = $row['title1'];
    $text1 = $row['text1'];
    $img1 = $row['img1'];
}
    ?>
</head>
<body>
<div class="wrapper">
<?php include 'navbar.php';?>
<div class="header">
<h1>Sustainability</h1>
</div>
<div class="row">
    <div class="side">
        <p><img src = "images/<?php print $img1; ?>"></p>
    </div>
    <div class="main">
        <h2><?php print $title1; ?></h2>
        <p><?php print $text1; ?></p>
    </div>
</div>
<div class="end">
<p>...</p>
</div>
<div class="footer">
    <?php include 'footer.php';?>
</div>
</div>
</body>
</html>