<?php require 'backend/signup_func.php'?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sign up | Parcel Management System</title>
		<link rel="stylesheet" type="text/css" href="styles/style.css">
		<link rel="stylesheet" type="text/css" href="styles/signin_and_signup.css">
	</head>
<body>
	<div class="wrap">
		<div class="sign_in_up" style="height: auto;">
			<div class="title">
				<br>
				<br>
				<h1>iDeliveries</h1>
				<br>
				<h3>Parcel Management System</h3>
			</div>
			<div class="login_title">
				<h2>Sign Up</h2>
			</div>

			<form action="signup.php" method="POST">
				<?php include 'backend/pushed_errors.php'; ?>
				<div class="text_input">
					<label>Name and Surname</label>
					<input type="text" name="Name" placeholder="Name and Surname" value="" required>
				</div>

				<div class="text_input">
					<label>Gender</label>
					<select name="Gender" required>
						<option value="">Select</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>

				<div class="text_input">
					<label>Date of Birth</label>
					<input type="date" name="DOB" value="" required/>
				</div>

				<div class="text_input">
					<label>Salary</label>
					<input type="number" name="Salary" placeholder="Salary" required/>
				</div>

				<div class="text_input">
					<label>Mobile Number</label>
					<input type="number" minlength ="10" maxlength="10" placeholder="Mobile Number" name="Mobile_No" required/>
				</div>

				<div class="text_input">
					<label>Email Address</label>
					<input type="text" placeholder="Email Address" name="Email_Addr" required/>
				</div>

				<div class="text_input">
					<label>Username</label>
					<input type="text" placeholder="Username" name="Username" required/>
				</div>

				<div class="text_input">
					<label>Password</label>
					<input type="password" placeholder="Password" name="Password_One" required/>
				</div>

				<div class="text_input">
					<label>Password</label>
					<input type="password" placeholder="Password" name="Password_Two" required/>
				</div>

				<div class="text_input">
					<button type="submit" class="btn" name="user_register" value="1">Register</button>
				</div>

				<div class="text_input">
					<p>Are you already a Parcel Admin? <br>
					<a href="signin.php">Sign in here</a></p>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
