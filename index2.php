<!DOCTYPE html>
<html lang="en">
<head>
<title>Monitoring Website</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=a">
<style>
* {
  box-sizing: border-box;
}
body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
    background-color: #f1f1f1;
}
.header {
    padding: 40px;
    text-align: center;
    background-color: limegreen;
    color:white;
    }

.header h1 {
    font-size: 35px;
    }
.navbar {
    overflow:hidden;
    background-color: #333
}
.navbar p {
    float:left;
    display: block;
    color: white;
    text-align: center;
    padding: 0px 20px;
    text-decoration: none;
    }
.navbar a {
    float:left;
    display: block;
    color: white;
    text-align: center;
    padding: 16px 20px;
    text-decoration: none;
    }
.navbar a.right{
    float: right;
    }
.navbar a:hover{
    background-color: #ddd;
    color: black;
    }
.row {  
  display: flex;
  flex-wrap: wrap;
}
.side {
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}
.main {   
  flex: 70%;
  background-color: #f1f1f1;
  padding: 20px;
}
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}
.end {
    background-color: #f1f1f1;
    text-align: center;
    width: 100%;
}
.footer {
    padding:20px;
    width:100%;
    background-color: #f1f1f1;
    text-align: center;
    display:block;
}
.footer a {
    text-decoration: none;
    color: black;
    padding:14px 20px;
}
.footer a:hover{
    background-color: #ddd;
    color: black;
    }
@media screen and (max-width: 400px) {
  .row {   
    flex-direction: column;
  }
@media screen and (max-width: 600px) {
  .navbar a {
    float: none;
    width:100%;
  }
}
</style>
</head>
<body>
    
<div class="navbar">
    <p>Monitoring Website</p>
    <a href="#">Contact Me</a>
    <a href="#">Dashboard</a>
    <a href="#" class="right">Login</a>
</div>
    
<div class="header">
<h1>My Website</h1>
    <p>A website created by me.</p>
</div>
<div class="row">
    <div class="side">
        <p>This is a description of Graph Image</p>
    </div>
    <div class="main">
        <div class="fakeimg"style="height:60px;">Graph Image</div>
    </div>
</div>
<div class="end">
    <p>This website can be used by you to keep track of how much power and water you are using up in your buidling. With this knowledge you would be able to make changes to your building to make it more energy and water efficient. (This is a description of this website)</p>
</div>
<div class="footer">
    <a href="#">Contact Link</a>
</div>
</body>
</html>