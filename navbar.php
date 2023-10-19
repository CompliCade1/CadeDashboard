<div class="navbar">
    <a href="index.php">Sustainability</a>
    <a href="gallery.php">Monitoring</a>
    <a href="contact.php">Contact Me</a>
    <?php if ($_SESSION['loggedin'] == FALSE){
    if ($_SESSION['id'] === 1){
        echo "<a href='admin.php'>Admin</a>";
};
    echo "<a href='login.php'>Login</a>"
    ;
}
    else{
        echo "<a href='logout.php'>Logout</a>";};?>
</div>