<?php
session_start();
include 'backend/connection.php';
$pushed_errors = array(); 
if (isset($_POST['user_register'])) {
  $FullNames = $_POST['Name'];
  $Gender = $_POST['Gender'];
  $DOB = $_POST['DOB'];
  $Salary = $_POST['Salary'];
  $Mobile_No = $_POST['Mobile_No'];
  $Email_Addr = $_POST['Email_Addr'];
  $Username = ucfirst($_POST['Username']);
  $Password_One = $_POST['Password_One'];
  $Password_Two = $_POST['Password_Two'];

  if ($Password_One != $Password_Two) {
	  array_push($pushed_errors, "Make sure the two password match");
  }
  $query = mysqli_query($connection, "SELECT * FROM staff WHERE Username='$Username' OR email='$Email' LIMIT 1");
  $userExists = mysqli_fetch_assoc($query);

  if ($userExists) {
    if ($userExists['Username'] === $Username) {
      array_push($pushed_errors, "Username is unavailable");
    }

    if ($userExists['Email'] === $Email_Addr) {
      array_push($pushed_errors, "Email already registered");
    }
  }
  if (count($pushed_errors) == 0) {
    $q = "INSERT INTO staff (Name, Gender, DOB, Salary, Mobile_No, Email_Addr, Username, Staff_Password) 
          VALUES('$FullNames', '$Gender', '$DOB', '$Salary', '$Mobile_No', '$Email_Addr', '$Username', '$Password_One')";
  	mysqli_query($connection, $q);
  	$_SESSION['username'] = $Username;
  	header('location: index.php');
  }
}
?>