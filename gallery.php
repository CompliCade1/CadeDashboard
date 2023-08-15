<!DOCTYPE html>
<html lang="en">
<head>
<title>Monitoring Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=a">
<style>
div.gallery {
  margin: 8px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
  flex:30%;
}
//div.header {
    border-top-style: none;
    border-bottom-style: none;
    border-left-style: solid;
    border-right-style: solid;
    border-width: 4px;
    border-color: #FFFFFF;
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
  font-size:80%;
  word-wrap: break-word;
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
  <div class="desc"><b>
      ESP.nz (Electricity + Water Usage)<br>Username:dobbind@trident.school.nz<br>Password:Dd202002</b></div>
</div>
    <div class="gallery">
  <a target="_blank" href="https://www.semsportal.com/home/login">
    <img src="images/goodwe.png" alt="Goodwe" width="600" height="400">
  </a>
        <div class="desc"><b>Goodwe (Solar Power Generation)<br>Username:dobbind@trident.school.nz<br>Password:Trident2015</b></div>
</div>
        <div class="gallery">
  <a target="_blank" href="http://cloud.trinabess.com/TrinabestAgent/login.html">
    <img src="images/trinabess.png" alt="Trinabess" width="600" height="400">
  </a>
            <div class="desc"><b>Trinabess (South Solar Power Generation)<br>Username:TridentHighAUDS<br>Password: qr16F</b></div>
</div>
        <div class="gallery">
  <a target="_blank" href="http://cloud.trinabess.com/TrinabestAgent/login.html">
    <img src="images/trinabess2.png" alt="Trinabess" width="600" height="400">
  </a>
            <div class="desc"><b>Trinabess (North Solar Power Generation)<br>Username:TridentHighAUDN<br>Password: qr16F</b></div>
</div>
        <div class="gallery">
  <a target="_blank" href="https://www.apsystemsema.com/ema/index.action?locale=en_US">
    <img src="images/apsystems.png" alt="Apsystems" width="600" height="400">
  </a>
            <div class="desc"><b>Apsystems (Solar Power Generation)<br>Username: Trident High AUDITORIUM<br>Password: Trident2016</b></div>
</div>
</div>
<div class="footer">
    <?php include 'footer.php';?>
</div>
</div>
</body>
</html>