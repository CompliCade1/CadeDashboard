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
    <div class="gallery">
  <a target="_blank" href="https://hub.esphq.com/login">
    <img src="getImage.php?id=1" alt="ESP.nz" width="600" height="400">
  </a>
  <div class="desc"><b>
      Electricity + Water Usage</b></div>
</div>
    <div class="gallery">
  <a target="_blank" href="https://www.semsportal.com/home/login">
    <img src="getImage.php?id=2" alt="Goodwe" width="600" height="400">
  </a>
        <div class="desc"><b>Solar Power (Main Office)</b></div>
</div>
        <div class="gallery">
  <a target="_blank" href="http://cloud.trinabess.com/TrinabestAgent/login.html">
    <img src="getImage.php?id=3" alt="Trinabess" width="600" height="400">
  </a>
            <div class="desc"><b>Solar Power (South Side Auditorium)</b></div>
</div>
        <div class="gallery">
  <a target="_blank" href="http://cloud.trinabess.com/TrinabestAgent/login.html">
    <img src="getImage.php?id=4" alt="Trinabess" width="600" height="400">
  </a>
            <div class="desc"><b>Solar Power (North Side Auditorium)</b></div>
</div>
        <div class="gallery">
  <a target="_blank" href=https://www.apsystemsema.com/ema/intoDemoUser.action?id=0b2848875901cacc0159089d04e11447&locale=en_US>
    <img src="getImage.php?id=5" alt="Apsystems" width="600" height="400">
  </a>
            <div class="desc"><b>Solar Power (West Side Auditorium)</b></div>
</div>
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
    <img src="getImage.php?id=6" alt="Electricity Usage" width="600" height="400">
  </a>
            <div class="desc"><b>Electricity Usage</b></div>
</div>
<div class="gallery">
  <a target="_blank" href=electricity.php>
    <img src="getImage.php?id=6" alt="Solar Power Generation" width="600" height="400">
  </a>
            <div class="desc"><b>Solar Power Generation</b></div>
</div>
</div>
<div class="footer">
    <?php include 'footer.php';?>
</div>
</div>
</body>
</html>