<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>

  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
    <div class="input-group">
  	  <label>First Name</label>
  	  <input type="text" name="First Name" value="" pattern="[A-Za-z]{50}">
  	</div>
    <div class="input-group">
  	  <label>Last Name</label>
  	  <input type="text" name="Last Name" value="">
  	</div>
    <div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="">
  	</div>
    <div class="input-group">
  	  <label>Contact Number</label>
  	  <input type="tel" id="phone" name="Contact Number"
            <select name="country code" id="">
              <option data-countryCode="ZA" value="27">South Africa(+27)</option>
          </select>
  	</div>



    <div class="input-group">
      <label>ID Number</label>
      <input type="text" minlength = "13" maxlength="13"  name="idnumber" placeholder="" onkeyup="numbersOnly(this)"/>

    </div>

  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>


  </form>
</body>
</html>
