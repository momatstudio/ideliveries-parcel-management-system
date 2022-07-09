<?php include 'backend/connection.php';
    $id = $_GET['order_id'];
    $response = @mysqli_query($connection, "SELECT * FROM parcel WHERE Parcel_Id='$id'");
?>