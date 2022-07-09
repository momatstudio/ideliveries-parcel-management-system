<?php
include 'connection.php';
$pushed_errors = array(); 
if (isset($_POST['new_branch'])) {
  $D_name = $_POST['D_name'];
  $D_email = $_POST['D_email'];
  $D_tell_no = $_POST['D_tell_no'];
  $Username = $_POST['Username'];
  $Password = $_POST['Password'];
  $Requests = $_POST['Requests'];

  if (count($pushed_errors) == 0) {
  	$q ="INSERT INTO dealerships (D_name, D_email, D_tell_no, Username, Password, Requests) 
  		 VALUES('$D_name', '$D_email', '$D_tell_no', '$Username', '$Password', '$Requests')";

  	mysqli_query($connection, $q);
  	
  header("location: ../index.php?page=dealers list");
  }

}else {
    echo 'error';
}

?>