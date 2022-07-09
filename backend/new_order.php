<?php
include 'connection.php';
$pushed_errors = array(); 
if (isset($_POST['submit_order'])) {
  $Track_Id = rand();
  $S_Name = $_POST['S_Name'];
  $S_Addr = $_POST['S_Addr'];
  $S_Contact = $_POST['S_Contact'];
  $R_Name = $_POST['R_Name'];
  $R_Addr = $_POST['R_Addr'];
  $R_Contact = $_POST['R_Contact'];
  $Parcel_type = $_POST['Parcel_type'];
  $Weight_kg = $_POST['Weight_kg'];
  $From_branch = $_POST['From_branch'];
  $To_branch = $_POST['To_branch'];
  $Current_Location = $_POST['Current_Location'];
  $Status = $_POST['Status'];
  $Price = $_POST['Price'];
  $Checkout = $_POST['Checkout'];
 

  if (count($pushed_errors) == 0) {
  	$q ="INSERT INTO parcel (Track_Id, S_Name, S_Addr, S_Contact, R_Name, R_Addr, R_Contact, Parcel_type, Weight_kg, From_branch, To_branch, Current_Location, Status, Price, Checkout) 
  			  VALUES('$Track_Id', '$S_Name', '$S_Addr', '$S_Contact', '$R_Name', '$R_Addr', '$R_Contact', '$Parcel_type', '$Weight_kg', '$From_branch', '$To_branch', '$Current_Location', '$Status', '$Price', '$Checkout')";

  	mysqli_query($connection, $q);

    $insert_q = "INSERT INTO track (Track_Id, Status, Current_Location)
                 VALUES ('$Track_Id', '$Status', '$Current_Location')";
    mysqli_query($connection, $insert_q);
  
  header("location: ../index.php?page=payments");
  }
}
?>