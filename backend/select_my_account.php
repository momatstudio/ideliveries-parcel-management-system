<?php
    require 'backend/connection.php';
    isset($_GET['username']) ? $username = $_GET['username'] : null;
    $response = @mysqli_query($connection, "SELECT * FROM staff WHERE Username='$username'");
?>