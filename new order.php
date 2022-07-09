    <div class="new_order">
        <form action="backend/new_order.php" method="POST">
            <div class="container">
                <label>Sender Name</label>
                <input type="text" name="S_Name" placeholder="Sender name" required/>
            </div>
            <div class="container">
                <label>Sender Address</label>
                <input type="text" name="S_Addr" placeholder="Sender address" required/>
            </div>
            <div class="container">
                <label>Sender Contact</label>
                <input type="number" name="S_Contact" placeholder="Sender contact" required/>
            </div>
            <div class="container">
                <label>Receiver Name</label>
                <input type="text" name="R_Name" placeholder="Receiver name" required/>
            </div>
            <div class="container">
                <label>Receiver Address</label>
                <input type="text" name="R_Addr" placeholder="Receiver address" required/>
            </div>
            <div class="container">
                <label>Receiver Contact</label>
                <input type="number" name="R_Contact" placeholder="Receiver contact" required/>
            </div>
            <div class="container">
                <label>Parcel Type</label>
               <select name="Parcel_type" id="" required>
                    <option value="">Select</option>
                    <option value="Box">Box</option>
                    <option value="Container">Container</option>
                    <option value="Envelope">Envelope</option>
                    <option value="Plastic">Plastic</option>
                    <option value="Gadget">Gadget</option>
                    <option value="Furniture">Furniture</option>
                    <option value="Other">Other</option>
               </select>
            </div>
            <div class="container">
                <label>Order Weight</label>
                <input type="number" name="Weight_kg" placeholder="Order weight" required/>
            </div>
            <div class="container">
                <label>From Branch</label>
                <select name="From_branch" required>
                    <option value="">Select</option>
                    <?php require 'backend/select_branches.php'; ?>
                    <?php if($response) :?>
                        <?php while($data = mysqli_fetch_array($response)): ?>
                            <option value="<?php echo $data['Address']?>"><?php echo $data['Address']?></option>
                        <?php endwhile?>
                    <?php endif?>
                </select>
            </div>
            <div class="container">
                <label>To Branch</label>
                <select name="To_branch" required>
                    <option value="">Select</option>
                    <?php require 'backend/select_branches.php'; ?>
                    <?php if($response) :?>
                        <?php while($data = mysqli_fetch_array($response)): ?>
                            <option value="<?php echo $data['Address']?>"><?php echo $data['Address']?></option>
                        <?php endwhile?>
                    <?php endif?>
                </select>
            </div>
            <div class="container">
                <label>Current Location</label>
                <select name="Current_Location" required>
                    <option value="">Select</option>
                    <?php require 'backend/select_branches.php'; ?>
                    <?php if($response) :?>
                        <?php while($data = mysqli_fetch_array($response)): ?>
                            <option value="<?php echo $data['Address']?>"><?php echo $data['Address']?></option>
                        <?php endwhile?>
                    <?php endif?>
                </select>
            </div>
            <div class="container">
                <label>Current Status</label>
                <select name="Status" required>
                    <option value="">Select</option>
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
            <div class="container">
                <label>Price</label>
                <input type="number" name="Price" placeholder="Price" required/>
                <input type="text" name="Checkout" value="Not Paid" hidden/>
            </div>
            <div class="container">
                <button name="submit_order" name="1">Submit Order</button>
            </div>
        </form>
    </div>