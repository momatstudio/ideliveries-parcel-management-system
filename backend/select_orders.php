<?php
    include 'backend/connection.php';
    if(isset($_GET['search_id'])){
        $id = $_GET['search_id'];
        $response = @mysqli_query($connection, "SELECT * FROM parcel WHERE Track_Id='$id'");
    } else {
        $response = @mysqli_query($connection, "SELECT * FROM parcel");
    }
?>