<?php session_start(); 
  require('backend/check_user_season.php')
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="styles/index.css">
	<link rel="stylesheet" type="text/css" href="styles/top_header.css">
	<link rel="stylesheet" type="text/css" href="styles/header.css">
	<link rel="stylesheet" type="text/css" href="styles/side_bar.css">
	<link rel="stylesheet" type="text/css" href="styles/sub_main.css">

	<!-- screens -->
	<link rel="stylesheet" type="text/css" href="styles/dashboard.css">
	<link rel="stylesheet" type="text/css" href="styles/order_list.css">
	<link rel="stylesheet" type="text/css" href="styles/payments.css">
	<link rel="stylesheet" type="text/css" href="styles/track_deliveries.css">
	<link rel="stylesheet" type="text/css" href="styles/branches.css">
	<link rel="stylesheet" type="text/css" href="styles/new_order.css">
	<link rel="stylesheet" type="text/css" href="styles/dealerships.css">
	<link rel="stylesheet" type="text/css" href="styles/single_delivery.css">
	<link rel="stylesheet" type="text/css" href="styles/checkout.css">
	<link rel="stylesheet" type="text/css" href="styles/my_account.css">

</head>
<body>
	<!-- <main>
		<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
	</main> -->
	<?php include 'includes/top_header.php'?>

	<?php include 'includes/header.php'?>

	<main>
		<?php include 'includes/side_bar.php'?>

		<div class="sub_main">
			<div class="wrap">
				<div class="title">
					<?php include 'dynamics/title.php'?>
				</div>
				
				<!-- pages here -->
				<?php 
					$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
					if(!file_exists($page.".php")) include '404.php';
					else include $page.'.php';
				?>
			</div>
		</div>
	</main>
</body>
</html>