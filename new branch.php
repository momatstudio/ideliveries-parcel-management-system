<div class="new_order">
    <form action="backend/new_Branch.php" method="POST">
        <div class="container">
            <label>Branch Address</label>
            <input type="text" name="Address" placeholder="Branch Address" required/>
        </div>

        <div class="container">
            <label>Zip Code</label>
            <input type="number" name="Zip_code" placeholder="Zip Code" required/>
        </div>
        <div class="container">
            <label>Tel Number</label>
            <input type="number" name="Contact" placeholder="Tell Number" required/>
        </div>
        <div class="container">
            <label>E-Mail Address</label>
            <input type="text" name="Email" placeholder="E-Mail Address" required/>
        </div>
        <div class="container">
            <button name="new_branch" name="1">Submit Order</button>
        </div>
    </form>
</div>