			<?php include 'backend/connection.php'?>	
				<div class="dashboard">
					<div class="containers">
						<div class="container" style="background-color: #8AF2F2">
							<h1><?php echo $connection->query("SELECT * FROM parcel")->num_rows; ?></h1>
							<span>Total Orders</span>
						</div>
						<div class="container" style="background-color: #FFB6C0">
							<h1><?php echo $connection->query("SELECT * FROM parcel WHERE Status='Off to Head Office'")->num_rows; ?></h1>
							<span>Total Off to Head Office</span>
						</div>
						<div class="container" style="background-color: #FFB6EE">
							<h1><?php echo $connection->query("SELECT * FROM parcel WHERE Status='Assigned to Rider'")->num_rows; ?></h1>
							<span>Total Assigned to Rider</span>
						</div>
						<div class="container" style="background-color: #AA99FF">
							<h1><?php echo $connection->query("SELECT * FROM parcel WHERE Checkout='Not Paid'")->num_rows; ?></h1>
							<span>Total Pending Orders</span>
						</div>
						<div class="container" style="background-color: #99CCFF">
							<h1><?php echo $connection->query("SELECT * FROM parcel WHERE Checkout='Paid'")->num_rows; ?></h1>
							<span>Total Processed Orders</span>
						</div>
						<div class="container" style="background-color: #99FFD3">
							<h1><?php echo $connection->query("SELECT * FROM parcel WHERE Status='Delivered'")->num_rows; ?></h1>
							<span>Total Delivered Orders</span>
						</div>
						<div class="container" style="background-color: #F4FFBF">
							<h1><?php echo $connection->query("SELECT * FROM parcel WHERE Status='Returned'")->num_rows; ?></h1>
							<span>Total Returned Orders</span>
						</div>
						<div class="container" style="background-color: #FFDDBF">
							<h1><?php echo $connection->query("SELECT * FROM parcel WHERE Status='Cancelled'")->num_rows; ?></h1>
							<span>Total Cancelled Orders</span>
						</div>
						<div class="container" style="background-color: #DEE1F5">
							<a href="index.php?page=track deliveries"><span>Track Orders</span></a>
						</div>
						<div class="container" style="background-color: #E4E4E4">
							<a href="index.php?page=delivery list"><span>View Deliveries</span></a>
						</div>
					</div>
				</div>