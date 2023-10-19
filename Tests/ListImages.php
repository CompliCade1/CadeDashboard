<?php
require_once 'setup.php';
$sql = "SELECT id FROM tbl_image ORDER BY id DESC";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
?>
<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
    <?php ?>
		<img src="getImage.php?id=<?php echo $row["id"];?>">
<?php
    }
}
?>