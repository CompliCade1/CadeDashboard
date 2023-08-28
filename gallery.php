<!DOCTYPE html>
<html lang="en">
<head>
<title>Monitoring Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=a">
<link href="css/gallerystyle.css" rel="stylesheet" type="text/css">
<link href="css/fixedstyle.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="wrapper">
<?php include 'navbar.php';?>
<div class="header">
<h1>Dashboard Gallery Page</h1>
</div>
<div class="row">
    <div class="gallery">
  <a target="_blank" href="https://hub.esphq.com/login">
    <img src="getImage.php?id=1" alt="ESP.nz" width="600" height="400">
  </a>
  <div class="desc"><b>
      ESP.nz (Electricity + Water Usage)</b></div>
</div>
    <div class="gallery">
  <a target="_blank" href="https://www.semsportal.com/home/login">
    <img src="getImage.php?id=2" alt="Goodwe" width="600" height="400">
  </a>
        <div class="desc"><b>Goodwe (Solar Power Generation)</b></div>
</div>
        <div class="gallery">
  <a target="_blank" href="http://cloud.trinabess.com/TrinabestAgent/login.html">
    <img src="getImage.php?id=3" alt="Trinabess" width="600" height="400">
  </a>
            <div class="desc"><b>Trinabess (South Solar Power Generation)</b></div>
</div>
        <div class="gallery">
  <a target="_blank" href="http://cloud.trinabess.com/TrinabestAgent/login.html">
    <img src="getImage.php?id=4" alt="Trinabess" width="600" height="400">
  </a>
            <div class="desc"><b>Trinabess (North Solar Power Generation)</b></div>
</div>
        <div class="gallery">
  <a target="_blank" href=https://www.apsystemsema.com/ema/intoDemoUser.action?id=0b2848875901cacc0159089d04e11447&locale=en_US>
    <img src="getImage.php?id=5" alt="Apsystems" width="600" height="400">
  </a>
            <div class="desc"><b>Apsystems (Solar Power Generation)</b></div>
</div>
</div>
<div class="footer">
    <?php include 'footer.php';?>
</div>
</div>
</body>
</html>