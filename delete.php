<?php
    include 'backend/connection.php';
    if (isset($_GET['delete_order'])) {
        $Parcel_Id = $_GET['delete_order'];
    
        $q ="DELETE FROM parcel WHERE Parcel_Id ='$Parcel_Id'";
    
          @mysqli_query($connection, $q);
    
        header("location: index.php?page=delivery list");
        }
    if (isset($_GET['delete_branch'])) {
        $Branch_Id = $_GET['delete_branch'];
    
        $q ="DELETE FROM branches WHERE Branch_id ='$Branch_Id'";
    
          @mysqli_query($connection, $q);
    
        header("location: index.php?page=branch list");
    }
?>