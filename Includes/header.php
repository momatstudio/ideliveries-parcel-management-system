<?php  $page = isset($_GET['page']) ? $_GET['page']: null ?>
	<div class="header">
		<div class="wrap">
        <a href="index.php"><h2>iDeliveries</h2></a>
			<ul>
                <a href="index.php"><li style="<?php if($page == null) echo 'background-color: rgb(9, 6, 120); color: white;'; ?>">Home</li></a>
				<a href="index.php?page=track deliveries"><li style="<?php if($page == 'track deliveries') echo 'background-color: rgb(9, 6, 120); color: white;'; ?>">Tracking</li></a>
				<a href="index.php?page=my account&username=<?php echo $_SESSION['username']?>"><li style="<?php if($page == 'my account') echo 'background-color: rgb(9, 6, 120); color: white;'; ?>">My Account(<?php echo $_SESSION['username']?>)</li></a>
				<a href="index.php?logout='2'" class="logout">Logout</a>
			</ul>
		</div>
	</div>