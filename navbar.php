<div class="navbar">
    <a href="index.php">Sustainability</a>
    <a href="gallery.php">Monitoring</a>
    <a href="contact.php">Contact Me</a>
    <a href="admin.php">Admin</a>
    <?php if ($_SESSION['loggedin'] == FALSE){
    echo "<a href='login.php'>Login</a>";
}
    else{
        echo "<a href='logout.php'>Logout</a>";};?>
</div>