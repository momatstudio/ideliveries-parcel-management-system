<?php
session_start();
$pushed_errors = array(); 
include('backend/connection.php');
if (isset($_POST['signin'])) {
	$username = ucfirst($_POST['username']);
    $password = $_POST['password'];
  if (count($pushed_errors) == 0) {
  	$results = mysqli_query($connection, "SELECT * FROM staff WHERE Username='$username' AND Staff_Password='$password'");
  	if (mysqli_num_rows($results) == 1) {
	  while($data = mysqli_fetch_assoc($results)) $_SESSION['username'] = $data['Username'];
  	  header('location: index.php');
  	}
	else array_push($pushed_errors, "Incorrect username or password");
  }
}

?>