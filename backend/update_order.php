<?php
require 'connection.php';
$pushed_errors = array(); 
if (isset($_POST['update_order'])) {
  $Parcel_Id = $_POST['Parcel_Id'];
  $S_Name = $_POST['S_Name'];
  $S_Addr = $_POST['S_Addr'];
  $S_Contact = $_POST['S_Contact'];
  $R_Name = $_POST['R_Name'];
  $R_Addr = $_POST['R_Addr'];
  $R_Contact = $_POST['R_Contact'];
  $Weight_kg = $_POST['Weight_kg'];
  $From_branch = $_POST['From_branch'];
  $To_branch = $_POST['To_branch'];
  $Price = $_POST['Price'];
  $Parcel_type = $_POST['Parcel_type'];
  $Track_Id = $_POST['Track_Id'];
  $Status = $_POST['Status'];
  $Current_Location = $_POST['Current_Location'];

  	$q ="UPDATE parcel 
         SET S_Name ='$S_Name', 
             S_Addr ='$S_Addr', 
             S_Contact ='$S_Contact', 
             R_Name ='$R_Name',
             R_Addr ='$R_Addr',
             R_Contact ='$R_Contact',
             Parcel_type ='$Parcel_type',
             Weight_kg ='$Weight_kg',
             From_branch ='$From_branch',
             To_branch ='$To_branch', 
             Price ='$Price',
             Status ='$Status',
             Current_Location ='$Current_Location'
             WHERE Parcel_Id ='$Parcel_Id'";

  	mysqli_query($connection, $q);

    $insert_q = "INSERT INTO track (Track_Id, Status, Current_Location)
                 VALUES ('$Track_Id', '$Status', '$Current_Location')";
    @mysqli_query($connection, $insert_q);
  header("location: ../index.php?page=delivery list&id=$Parcel_Id");
}
else if (isset($_POST['checkout_order'])) {
    $Parcel_Id = $_POST['Parcel_Id'];
    $Checkout = $_POST['Checkout'];

    $q ="UPDATE parcel 
         SET Checkout ='$Checkout' 
             WHERE Parcel_Id ='$Parcel_Id'";

  	mysqli_query($connection, $q);

    header("location: ../index.php?page=checkout&order_id=$Parcel_Id");
}
