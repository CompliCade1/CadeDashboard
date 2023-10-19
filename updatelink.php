<?php  ini_set('display_errors', 1);
error_reporting(~0);
session_start();
if ($_SESSION['loggedin'] == FALSE or $_SESSION['id'] > 1){
    header('Location: login.php');
};?>
<html>
<body>
<?php //print_r($_POST);
if (count($_FILES) > 0) {
    if (is_uploaded_file($_FILES['img']['tmp_name'])) {
        $img = file_get_contents($_FILES['img']['tmp_name']);
        $imgType = $_FILES['img']['type'];
    }
}
$link = $_POST['link'];
$description = $_POST['description'];
$image = $_POST['image'];
$altimg = $_POST['altname'];
include "setup.php";
$sql = "INSERT INTO links (link, img, altimg, description, image) VALUES (?, ?, ?, ?, ?)";
$statement = $conn->prepare($sql);
$statement->bind_param('sssss', $link, $img, $altimg, $description, $image);
$current_id = $statement->execute() or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_connect_error());
header('Location: admin-m.php');
$conn->close();
?>
</body>
</html>