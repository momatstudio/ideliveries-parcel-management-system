<?php include 'backend/signin_func.php'?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sign in | Parcel Management System</title>
		<link rel="stylesheet" type="text/css" href="styles/style.css">
		<link rel="stylesheet" type="text/css" href="styles/signin_and_signup.css">
	</head>
<body>
	<div class="wrap">
		<div class="sign_in_up" style="height: 100vh;">
			<div class="title">
				<h1>iDeliveries</h1>
				<br>
				<h3>Parcel Management System</h3>
			</div>
			<?php if(isset($_GET['loggedout'])) { echo '
				<div class="login_title">
					<h2 style="color: red;">You were logged out!</h2>
					<h2>Sign in again.</h2>
				</div>';}
				 else { echo '
				<div class="login_title">
					<h2>Sign In</h2>
				</div>
				';}
			
			?>
			<form method="post" action="signin.php">
				<?php include('backend/pushed_errors.php'); ?>
				<div class="text_input">
					<label>Username</label>
					<input type="text" name="username" placeholder="Username" required >
				</div>
				<div class="text_input">
					<label>Password</label>
					<input type="password" name="password" placeholder="Password" required>
				</div>
				<div class="text_input">
					<button type="submit" name="signin" value="1">Sign In</button>
				</div>
				<div class="text_input">
					<p>Are you a new parcel admin? <br>
					<a href="signup.php">Open an account</a></p>
				</div>
			</form>
		</div>
	</div>
</body>
</html>