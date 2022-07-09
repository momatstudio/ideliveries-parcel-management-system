<?php 
    require 'backend/connection.php';
    $response = @mysqli_query($connection, "SELECT * FROM Branches");
?>