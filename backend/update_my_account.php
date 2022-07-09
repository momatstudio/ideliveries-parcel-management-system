<?php
    $pushed_errors = array(); 
    include 'connection.php';
    if (isset($_POST['update_my_account'])) {
        $Name = $_POST['Name'];
        $Gender = $_POST['Gender'];
        $DOB = $_POST['DOB'];
        $Salary = $_POST['Salary'];
        $Mobile_No = $_POST['Mobile_No'];
        $Email_Addr = $_POST['Email_Addr'];
        $Username = $_POST['Username'];
        $Staff_Password = $_POST['Staff_Password'];
        $Staff_Id = $_POST['Staff_Id'];

        if (count($pushed_errors) == 0) {
            $q = "UPDATE staff
                      SET Name ='$Name',
                      Gender ='$Gender',
                      DOB ='$DOB',
                      Salary ='$Salary',
                      Mobile_No ='$Mobile_No',
                      Email_Addr ='$Email_Addr',
                      Username ='$Username',
                      Staff_Password ='$Staff_Password'
                      WHERE Staff_Id ='$Staff_Id'";
            mysqli_query($connection, $q);
            header ("location: ../index.php?page=my account&username=$Username");
        }
    }
?>