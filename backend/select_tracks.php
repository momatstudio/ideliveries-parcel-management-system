<?php
    require 'backend/connection.php';
    isset($_GET['track_order']) ? $id = $_GET['track_order_id']: null;
        $response = @mysqli_query($connection, "SELECT * FROM track WHERE Track_Id='$id'");
?>