    <div class="side_bar">
		<h2>Parnel Admin</h2>
		<nav>
			<ul>
			<?php  $page = isset($_GET['page']) ? $_GET['page']: null ?>
				<a href="index.php"><li style="<?php if($page == null) echo 'background-color: rgb(9, 6, 120); color: white;'; ?>"><div id="icon"></div>Dashboard</li></a>
				<a href="index.php?page=delivery list"><li style="<?php if($page == 'delivery list' || $page == 'single delivery' || $page == 'new order' ) echo 'background-color: rgb(9, 6, 120); color: white;'; ?>"><div id="icon"></div>Delivery List</li></a>
				<a href="index.php?page=payments"><li style="<?php if($page == 'payments') echo 'background-color: rgb(9, 6, 120); color: white;'; ?>"><div id="icon"></div>Payments</li></a>
				<a href="index.php?page=track deliveries"><li style="<?php if($page == 'track deliveries') echo 'background-color: rgb(9, 6, 120); color: white;'; ?>"><div id="icon"></div>Track Deliveries</li></a>
				<a href="index.php?page=branch list"><li style="<?php if($page == 'branch list' ||$page == 'new branch') echo 'background-color: rgb(9, 6, 120); color: white;'; ?>"><div id="icon"></div>Branch List</li></a>
				<a href="index.php?page=dealers list"><li style="<?php if($page == 'dealers list' || $page == 'new dealership') echo 'background-color: rgb(9, 6, 120); color: white;'; ?>"><div id="icon"></div>Dealerships</li></a>
			</ul>
		</nav>
	</div>