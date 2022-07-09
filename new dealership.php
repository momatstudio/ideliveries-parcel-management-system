<div class="new_order">
    <form action="backend/new_dealership.php" method="POST">
        <div class="container">
            <label>Dealership Name</label>
            <input type="text" name="D_name" placeholder="Dealership Name" required/>
        </div>

        <div class="container">
            <label>E-Mail</label>
            <input type="text" name="D_email" placeholder="E-Mail Address" required/>
        </div>
        <div class="container">
            <label>Tel Number</label>
            <input type="number" name="D_tell_no" placeholder="Tell Number" required/>
        </div>
        <div class="container">
            <label>Username</label>
            <input type="text" name="Username" placeholder="Username" required/>
        </div>
        <div class="container">
            <label>Password</label>
            <input type="text" name="Password" placeholder="*******" required/>
        </div>
        <div class="container">
            <input type="text" name="Requests" value="Accepted" hidden required/>
            <button name="new_branch" name="1">Submit Order</button>
        </div>
    </form>
</div>