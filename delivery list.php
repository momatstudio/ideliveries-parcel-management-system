
        <div class="order_list">
        <a href="index.php?page=new order"><button>New Order</button></a>
            <div class="containers">
                <?php require 'backend/select_orders.php'?>
                <?php if($response) : ?>
                    <?php while($data = @mysqli_fetch_array($response)) :?>
                        <a href="index.php?page=single delivery&id=<?php echo $data['Parcel_Id']?>">
                            <div class="container">
                                <div class="info">
                                    <h2>Ref:</h2>
                                    <span><?php echo $data['Track_Id']?></span>
                                </div>
                                <div class="info">
                                    <h2>Type:</h2>
                                    <span><?php echo $data['Parcel_type']?></span>
                                </div>
                                <div class="info">
                                    <h2>Amount:</h2>
                                    <span>R<?php echo $data['Price']?>.00</span>
                                </div>
                                <div class="info">
                                    <span class="<?php ($data['Checkout']=='Paid') ? paid : not_paid ?>">(<?php echo $data['Checkout']?>)</span>
                                </div>
                            </div>
                        </a>
                    <?php endwhile?>
                <?php endif?>

            </div>
        </div>