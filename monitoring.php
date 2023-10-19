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
<div class="title">
<h1>Trident High School</h1>
</div>
<?php include 'fakenavbar.php';?>
<div class="header">
<h1>Monitoring</h1>
</div>
    <div class = button>
        <a target = "_blank" href="https://www.trident.school.nz/sustainability-at-trident">
        Sustainability
        </a>
        <a target = "_blank" href="images/sustanabilityhelpers.png">
        Sponsers
        </a>
        <a target = "_blank" href="https://docs.google.com/document/d/1EXHkPyW7GP1wlr9XMEIlj_wwrHK0MpUo/edit?usp=sharing&ouid=110318059403209332591&rtpof=true&sd=true">
        Progress Tracker
        </a>
        <p>Usernames</p>
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
    <img src="images/accontrol.png" alt="Heat Pumps">
  </a>
            <div class="desc"><b>Heat Pumps Controller</b></div>
</div>
        <div class="gallery">
  <a target="_blank" href=http://drdaikin.com>
    <img src="images/errorfixer.png" alt="Error Reader">
  </a>
            <div class="desc"><b>Error Reader for Heat Pumps</b></div>
</div>
<div class="gallery">
  <a target="_blank" href=https://www.wunderground.com/dashboard/pws/IWHAKATA18/graph/2021-09-1/2021-09-1/daily>
    <img src="images/wunderground.png" alt="Wunderground Weather">
  </a>
            <div class="desc"><b>Trident Weather Station</b></div>
</div>
</div>
<div class="footer">
    <?php include 'footer.php';?>
</div>
</div>
</body>
</html>