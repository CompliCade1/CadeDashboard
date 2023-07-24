<!DOCTYPE html>
<html lang="en">
<head>
<title>Monitoring Website-Gallery</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=a">
<style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery img:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 10px;
  text-align: center;
    font-size:60%
}
</style>
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
    <img src="images/esp.nz.png" alt="ESP.nz" width="600" height="400">
  </a>
  <div class="desc">
      ESP.nz (Electricity + Water Usage)<br>Username:dobbind@trident.school.nz<br>Password:Dd202002</div>
</div>
    <div class="gallery">
  <a target="_blank" href="https://www.semsportal.com/home/login">
    <img src="images/goodwe.png" alt="Goodwe" width="600" height="400">
  </a>
  <div class="desc">Goodwe (Solar Power Generation)<br>Username:dobbind@trident.school.nz<br>Password:Trident2015</div>
</div>
        <div class="gallery">
  <a target="_blank" href="http://cloud.trinabess.com/TrinabestAgent/login.html">
    <img src="images/trinabess.png" alt="Trinabess" width="600" height="400">
  </a>
  <div class="desc">Trinabess<br>Username:TridentHighAUDS<br>Password: qr16F</div>
</div>
        <div class="gallery">
  <a target="_blank" href="http://cloud.trinabess.com/TrinabestAgent/login.html">
    <img src="images/trinabess2.png" alt="Trinabess" width="600" height="400">
  </a>
  <div class="desc">Trinabess<br>Username:TridentHighAUDN<br>Password: qr16F</div>
</div>
        <div class="gallery">
  <a target="_blank" href="https://www.apsystemsema.com/ema/index.action?locale=en_US">
    <img src="images/apsystems.png" alt="Apsystems" width="600" height="400">
  </a>
  <div class="desc">Apsystems<br>Username: Trident High AUDITORIUM<br>Password: Trident2016</div>
</div>
        <div class="gallery">
  <a target="_blank" href="http://172.16.8.254/">
    <img src="images/accontrol.png" alt="Line Graph" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
</div>
<div class="footer">
    <?php include 'footer.php';?>
</div>
</div>
</body>
</html>