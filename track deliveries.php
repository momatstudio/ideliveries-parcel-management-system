<?php require 'backend/select_tracks.php';?>
<div class="track_deliveries">
    <div class="search">
        <form action="index.php" method="GET">
            <input type="number" name="track_order_id" placeholder="Tracking Number" value="<?php echo isset($_GET['track_order_id']) ? $_GET['track_order_id'] : null?>">
            <input type="submit" name="track_order" value="submit" hidden>
            <input type="text" name="page" value="track deliveries" hidden>
        </form>
    </div>

    <div class="tracking">

        <?php if($response):?>
            <?php while($data = mysqli_fetch_array($response)):?>
                <div class="container">
                    <span>Currently at <?php echo $data['Current_Location'];?> - <?php echo $data['Status'];?></span>
                    <span><?php echo $data['Dated']?></span>
                </div>
            <?php endwhile?>
        <?php endif?>
    </div>
</div>