<?php include 'backend/select_branches.php'?>
<div class="branches">
    <a href="index.php?page=new branch"><button>New Branch</button></a>
    <div class="containers">
            <?php if($response) : ?>
                <?php while($data = mysqli_fetch_array($response)) : ?>
                    <div class="container">
                        <div class="info">
                            <h2>Branch Code:</h2>
                            <span><?php echo $data['Branch_id']?></span>
                        </div>
                        <div class="info">
                            <h2>Address</h2>
                            <span><?php echo $data['Address']?></span>
                        </div>
                        <div class="info">
                            <h2>Tell No:</h2>
                            <span>0<?php echo $data['Contact']?></span>
                        </div>
                        <div class="info">
                            <h2>E-mail:</h2>
                            <span><?php echo $data['Email']?></span>
                        </div>
                        <div class="info">
                            <a style="color: red;"href="delete.php?delete_branch=<?php echo $data['Branch_id']?>">Delete</a>
                        </div>
                    </div>
                <?php endwhile?>
            <?php endif?>
    </div>
</div>