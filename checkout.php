<?php include 'backend/select_checked_out_order.php';?>
<div class="checkout">
    <div class="containers">
        <?php if($response) :?>
            <?php while($data = mysqli_fetch_array($response)) : ?>
                <div class="container">
                    <?php if($data['Checkout'] == 'Paid') echo '<h3><b style="color: green">R'.$data['Price'].'</b> was successfully paid into our account</h3>';?>
                    <span>Order Ref - <?php echo $data['Track_Id']?></span>
                    <span>Go to <a href="index.php?page=payments"><b style="color: green">Payments</b></a> or <a href="index.php"><b style="color: green">Home</b></a></span>
                </div>
            <?php endwhile?>
        <?php endif?>
    </div>
</div>