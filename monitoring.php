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
            <button>Progress Tracker</button>
        </a>
        <!--<a target = "_blank" href="usernamesdoc">
            <button>Usernames</button>
        </a>-->
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
    <img src="getImage.php?id=3" alt="Trinabess SE" width="600" height="400">
  </a>
            <div class="desc"><b>Solar Power (South East Side Auditorium)</b></div>
</div>
        <div class="gallery">
  <a target="_blank" href="http://cloud.trinabess.com/TrinabestAgent/login.html">
    <img src="getImage.php?id=4" alt="Trinabess NE" width="600" height="400">
  </a>
            <div class="desc"><b>Solar Power (North East Side Auditorium)</b></div>
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
  <a target="_blank" href=https://www.wunderground.com/dashboard/pws/IWHAKATA18/graph/2021-09-1/2021-09-1/daily>
    <img src="images/wunderground.png" alt="Wunderground Weather" width="600" height="400">
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