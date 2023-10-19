<?php
// Include the setup.php file to establish database connection
require_once 'setup.php';
// Check if the form is submitted
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if all required form fields are filled
    if(isset($_POST['id'], $_POST['link'], $_POST['description'], $_POST['image'], $_POST['altimg'])) {
        $id = $_POST['id'];
        $link = $_POST['link'];
        $description = $_POST['description'];
        $image = $_POST['image'];
        $altimg = $_POST['altimg'];
        // Update the record in the "contacts" table
        $query = "UPDATE links SET link = ?, description = ?, image = ?, altimg = ? WHERE id = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "ssssi", $link, $description, $image, $altimg, $id);
        if(mysqli_stmt_execute($stmt)) {
            echo 'Record updated successfully.';
        } else {
            echo 'Error updating record: ' . mysqli_stmt_error($stmt);
        }
        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo 'All form fields are required.';
    }
} else {
    echo 'Invalid request.';
}

// Close the database connection
mysqli_close($conn);
header('Location: admin-m.php');
?>