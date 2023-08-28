<?php

$link = mysqli_connect("localhost", "root", "", "tridentpowerusage");
$sql = "SELECT img FROM links WHERE id=?";
$result = mysqli_execute_query($link, $sql, [$_GET['id']]);
$image = mysqli_fetch_column($result);

header("Content-type: image/jpeg");
echo $image;
?>