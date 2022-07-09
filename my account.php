<?php require 'backend/select_my_account.php';?>
<?php if($response) :?>
    <?php while($data = mysqli_fetch_array($response)) : ?>
        <div class="my_account">
            <div class="containers">
                <form action="backend/update_my_account.php" method="POST">
                    <div class="container">
                        <label for="">Name</label>
                        <input type="text" name="Name" value="<?php echo $data['Name']?>" placeholder="Full names"/>
                    </div>
                    <div class="container">
                        <label for="">Gender</label>
                        <select name="Gender">
                            <option value="<?php echo $data['Gender']?>" ><?php echo $data['Gender']?></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="container">
                        <label for="">Date of Birth</label>
                        <input type="date" name="DOB" value="<?php echo $data['DOB']?>" placeholder="Date of birth"/>
                    </div>
                    <div class="container">
                        <label for="">Salary</label>
                        <input type="text" name="Salary" value="<?php echo $data['Salary']?>" placeholder="Salary"/>
                    </div>
                    <div class="container">
                        <label for="">Mobile Number</label>
                        <input type="number" name="Mobile_No" value="0<?php echo $data['Mobile_No']?>" placeholder="Mobile number"/>
                    </div>
                    <div class="container">
                        <label for="">E-Mail Address</label>
                        <input type="text" name="Email_Addr" value="<?php echo $data['Email_Addr']?>" placeholder="E-Mail address"/>
                    </div>
                    <div class="container">
                        <label for="">Username</label>
                        <input type="text" name="Username" value="<?php echo $data['Username']?>" placeholder="E-Mail address"/>
                        <input type="text" name="Staff_Id" value="<?php echo $data['Staff_Id']?>" hidden/>
                    </div>
                    <div class="container">
                        <label for="">Password</label>
                        <input type="password" name="Staff_Password" value="<?php echo $data['Staff_Password']?>" placeholder="E-Mail address"/>
                    </div>
                    <button name="update_my_account" value="1">Update</button>
                </form>
            </div>
        </div>
    <?php endwhile?>
<?php endif?>