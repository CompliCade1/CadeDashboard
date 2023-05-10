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
  padding: 15px;
  text-align: center;
}
</style>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="wrapper">
<?php include 'navbar.php';?>
<div class="header">
<h1>Dashboard Gallery Page</h1>
    <p>A website created by me.</p>
</div>
<div class="row">
    <div class="side">
        <p>These are graphs if you could not see, but if you can't see then you can't read this, oh well.</p>
    </div>
    <div class="main">
        <div class="gallery">
  <a target="_blank" href="graphimage1.png">
    <img src="images/graphimage1.png" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
    <div class="gallery">
  <a target="_blank" href="graphimage2.png">
    <img src="images/graphimage2.png" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
        <div class="gallery">
  <a target="_blank" href="graphimage3.png">
    <img src="images/graphimage3.png" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
        <div class="gallery">
  <a target="_blank" href="graphimage4.png">
    <img src="images/graphimage4.png" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
        <div class="gallery">
  <a target="_blank" href="graphimage5.png">
    <img src="images/graphimage5.png" alt="Cinque Terre" width="600" height="400">
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