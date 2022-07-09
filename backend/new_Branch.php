<?php
include 'connection.php';
$pushed_errors = array(); 
if (isset($_POST['new_branch'])) {
  $Address = $_POST['Address'];
  $Zip_code = $_POST['Zip_code'];
  $Contact = $_POST['Contact'];
  $Email = $_POST['Email'];

  if (count($pushed_errors) == 0) {
  	$q ="INSERT INTO branches (Address, Zip_code, Contact, Email) 
  		VALUES('$Address', '$Zip_code', '$Contact', '$Email')";

  	mysqli_query($connection, $q);
  	
  header("location: ../index.php?page=branch list");
  }

}else {
    echo 'error';
}

?>