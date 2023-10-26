<div class="navbar">
    <a href="index.php">Sustainability</a>
    <a href="gallery.php">Monitoring</a>
    <a href="contact.php">Contact Me</a>
    <?php if ($_SESSION['loggedin'] == NULL or $_SESSION['loggedin'] == FALSE){
    echo "<a href='login.php'>Login</a>";
}
    else{
        if ($_SESSION['id'] == 1){
            echo "<a href='admin-m.php'>Admin</a>";
        }
        echo "<a href='logout.php'>Logout</a>";
}?>
</div>