<?php require 'backend/select_order.php'?>
    <?php if($response) : ?>
        <?php while($data = @mysqli_fetch_array($response)) :?>
            <div class="single_delivery">
                <form action="backend/update_order.php" method="POST">
                    <div class="container">
                        <label>Ref Number:</label>
                        <label style="font-weight: normal; font-size: 14px;padding-top: 10px;"><?php echo $data['Track_Id']?></label>
                    </div>
                    <div class="container">
                        <label>Sender Name:</label>
                        <input type="text" name="S_Name" value="<?php echo $data['S_Name']?>" placeholder="Sender name" required/>
                    </div>
                    <div class="container">
                        <label>Sender Address:</label>
                        <input type="text" name="S_Addr" value="<?php echo $data['S_Addr']?>" placeholder="Sender address" required/>
                    </div>
                    <div class="container">
                        <label>Sender Contact:</label>
                        <input type="number" name="S_Contact" value="0<?php echo $data['S_Contact']?>" placeholder="Sender contact" required/>
                    </div>
                    <div class="container">
                        <label>Receiver Name:</label>
                        <input type="text" name="R_Name" value="<?php echo $data['R_Name']?>" placeholder="Receiver name" required/>
                    </div>
                    <div class="container">
                        <label>Receiver Address:</label>
                        <input type="text" name="R_Addr" value="<?php echo $data['R_Addr']?>" placeholder="Receiver address" required/>
                    </div>
                    <div class="container">
                        <label>Receiver Contact:</label>
                        <input type="number" name="R_Contact" value="0<?php echo $data['R_Contact']?>" placeholder="Receiver contact" required/>
                    </div>
                    <div class="container">
                        <label>Parcel Type:</label>
                        <input type="text" name="Parcel_type" value="<?php echo $data['Parcel_type']?>" placeholder="Parcel type" required/>
                    </div>
                    <div class="container">
                        <label>Order Weight:</label>
                        <input type="number" name="Weight_kg" value="<?php echo $data['Weight_kg']?>" placeholder="Order Weight" required/>
                    </div>
                    <div class="container">
                        <label>From Branch:</label>
                        <!-- <input type="text" name="From_branch" value="<?php echo $data['From_branch']?>" placeholder="From branch" required/> -->
                        <select name="From_branch" required>
                            <option value="<?php echo $data['From_branch']?>"><?php echo $data['From_branch']?></option>
                            <?php require 'backend/select_branches.php'; ?>
                            <?php if($response) :?>
                                <?php while($b_data = mysqli_fetch_array($response)): ?>
                                    <option value="<?php echo $data['Address']?>"><?php echo $b_data['Address']?></option>
                                <?php endwhile?>
                            <?php endif?>
                        </select>
                    </div>
                    <div class="container">
                        <label>To Branch:</label>
                        <!-- <input type="text" name="To_branch" value="<?php echo $data['To_branch']?>" placeholder="To branch" required/> -->
                        <select name="To_branch" required>
                            <option value="<?php echo $data['To_branch']?>"><?php echo $data['To_branch']?></option>
                            <?php require 'backend/select_branches.php'; ?>
                            <?php if($response) :?>
                                <?php while($b_data = mysqli_fetch_array($response)): ?>
                                    <option value="<?php echo $data['Address']?>"><?php echo $b_data['Address']?></option>
                                <?php endwhile?>
                            <?php endif?>
                        </select>
                    </div>
                    <div class="container">
                        <label>Current Location:</label>
                        <!-- <input type="text" name="Current_Location" value="<?php echo $data['Current_Location']?>" placeholder="Current Branch" required/> -->
                        <select name="Current_Location" required>
                            <option value="<?php echo $data['Current_Location']?>"><?php echo $data['Current_Location']?></option>
                            <?php require 'backend/select_branches.php'; ?>
                            <?php if($response) :?>
                                <?php while($b_data = mysqli_fetch_array($response)): ?>
                                    <option value="<?php echo $data['Address']?>"><?php echo $b_data['Address']?></option>
                                <?php endwhile?>
                            <?php endif?>
                        </select>
                    </div>
                    <div class="container">
                        <label>Price:</label>
                        <input type="number" name="Price" value="<?php echo $data['Price']?>" placeholder="Price" required/>
                        <input type="number" name="Parcel_Id" value="<?php echo $data['Parcel_Id']?>" placeholder="Price" hidden/>
                        <input type="text" name="Checkout" value="Paid" placeholder="Price" hidden/>
                        <input type="text" name="Track_Id" value="<?php echo $data['Track_Id']?>" placeholder="Price" hidden/>
                    </div>
                    <div class="container" <?php if($data['Checkout'] == 'Not Paid') echo 'style="color: red;"';?>>
                        <label>Payment:</label>
                        <input type="text" value="<?php echo $data['Checkout']?>" placeholder="Payment" required <?php if($data['Checkout'] == 'Not Paid') echo 'style="color: red;"';?>/>
                    </div>
                    
                    <div class="container">
                        <label>Current Status:</label>
                        <select name="Status" required>
                            <option value="<?php echo $data['Status']?>" placeholder="Order Status"><?php echo $data['Status']?></option>
                            <option value="Order is Shipped">Order is Shipped</option>
                            <option value="Off to Head Office">At Head Office</option>
                            <option value="Assigned to Rider">Assigned to Rider</option>
                            <option value="Delivered">Delivered</option>
                            <option value="Ready to be Collected">Ready to be Collected</option>
                            <option value="Collected">Collected</option>
                            <option value="Returned">Returned</option>
                            <option value="Cancelled">Cancelled</option>
                        </select>
                    </div>
                    <div class="buttons">
                        <div class="button">
                            <button name="update_order" value="1">Update Order</button>
                        </div>
                        <?php if($data['Checkout'] == 'Not Paid') : ?>
                            <div class="button">
                                <button name="checkout_order" value="1" style=" background-color: rgb(36, 246, 78);">Proceed to Check Out ></button>
                            </div>
                        <?php endif?>
                    </div>
                </form>
                <a href="delete.php?delete_order=<?php echo $data['Parcel_Id']?>"><button style=" height: 30px; width: 120px; padding: 0; background-color: red;">Delete Order</button></a>
            </div>
        <?php endwhile?>
    <?php endif?>