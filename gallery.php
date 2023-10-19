<?php  ini_set('display_errors', 1);
error_reporting(~0);
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Monitoring Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=a">
<link href="css/fixedstyle.css" rel="stylesheet" type="text/css">
<link href="css/gallerystyle.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="wrapper">
<?php include 'navbar.php';?>
<div class="header">
<h1>Monitoring</h1>
</div>
<div class="row">
    <div class = "side">
        <a target = "_blank" href="images/sustanabilityhelpers.png">
            <button>Sponsers</button>
        </a>
    </div>
    <div class = "main">
        <a target = "_blank" href="https://docs.google.com/document/d/1EXHkPyW7GP1wlr9XMEIlj_wwrHK0MpUo/edit?usp=sharing&ouid=110318059403209332591&rtpof=true&sd=true">
            <button>Improvements</button>
        </a>
    </div>
</div>
<div class="row">
<?php  require_once 'setup.php';
$sql = "SELECT * FROM links";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
if (mysqli_num_rows($result) > 0) {
     while($row = $result->fetch_assoc()) {
         $id = $row['id'];
         $link = $row['link'];
         $altimg = $row['altimg'];
         $desc = $row['description'];
         $image = $row['image'];
?>
    <div class="gallery">
  <a target="_blank" href="<?php echo $link;?>">
    <img src="getImage.php?id=<?php echo $id;?>" alt="<?php echo $altimg;?>" width="90%">
  </a>
  <div class="desc"><b>
      <?php echo $desc;?></b></div>
</div>
    <?php
     }}
?>
        <div class="gallery">
  <a target="_blank" href=http://172.16.8.254>
    <img src="images/accontrol.png" alt="Heat Pumps" width="600" height="400">
  </a>
            <div class="desc"><b>Heat Pumps</b></div>
</div>
        <div class="gallery">
  <a target="_blank" href=http://drdaikin.com>
    <img src="images/errorfixer.png" alt="Error Reader" width="600" height="400">
  </a>
            <div class="desc"><b>Error Reader for Heat Pumps</b></div>
</div>
<div class="gallery">
  <a target="_blank" href=electricity.php>
    <img src="images/tridentelectricityusage.png" alt="Electricity Usage" width="600" height="400">
  </a>
            <div class="desc"><b>Electricity Usage</b></div>
</div>
</div>
<div class="footer">
    <?php include 'footer.php';?>
</div>
</div>
</body>
</html>