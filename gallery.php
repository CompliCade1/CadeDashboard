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

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 10px;
  text-align: center;
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
    <div class="side">
        <p>These are the graphs if you could not see, but if you can't see then you can't read this, oh well.</p>
    </div>
<div class="row">
    <div class="gallery">
  <a target="_blank" href="power.php">
    <img src="images/webgraph.png" alt="Bar Graph" width="600" height="400">
  </a>
  <div class="desc">Click to go to Electricity Usage of Trident High School</div>
</div>
    <div class="gallery">
  <a target="_blank" href="water.php">
    <img src="images/graphimage2.png" alt="Line Graph" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
        <div class="gallery">
  <a target="_blank" href="images/graphimage3.png">
    <img src="images/graphimage1.png" alt="Bar Graph" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
        <div class="gallery">
  <a target="_blank" href="images/graphimage4.png">
    <img src="images/graphimage4.png" alt="Bar Graph" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
        <div class="gallery">
  <a target="_blank" href="images/graphimage5.png">
    <img src="images/graphimage5.png" alt="Line Graph" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
</div>
</div>
<div class="footer">
    <?php include 'footer.php';?>
</div>
</div>
</body>
</html>