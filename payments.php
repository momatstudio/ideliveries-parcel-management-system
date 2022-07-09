<?php include 'backend/select_orders.php'?>
<?php if($response): ?>
    <?php while($data = mysqli_fetch_array($response)): ?>
        <div class="payments">
            <div class="containers">
                <a href="index.php?page=single delivery&id=<?php echo $data['Parcel_Id']?>">
                    <div class="container <?php ($data['Checkout']=='Paid') ? paid : not_paid ?>">
                        <div class="info">
                            <h3>Order Ref:</h3>
                            <span><?php echo $data['Track_Id']?></span>
                        </div>
                        <div class="info">
                            <h3>Price:</h3>
                            <span>R<?php echo $data['Price']?></span>
                            <span>(<?php echo $data['Checkout']?>)</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    <?php endwhile?>
<?php endif?>