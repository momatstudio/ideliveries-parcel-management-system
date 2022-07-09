<?php
    include 'backend/connection.php';
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    $response = @mysqli_query($connection, "SELECT * FROM parcel WHERE Parcel_Id='$id'");
?>