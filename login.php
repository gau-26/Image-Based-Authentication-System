<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body class="container">
  <div class="header">
  	<h2>Login Page</h2>
  </div>

  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<center><label>Username</label></center>
  		<center><input type="text" name="username" ></center>
  	</div>
  	<div class="input-group">
  		<center><label>Password</label></center>
  		<center><input type="password" name="password"></center>
  	</div>
	<div>
	<br>
	<br>
<center>
<table>
<tr>
<label>
<input type="radio" name="radio" value="00"><img src="1.jpg"alt="1" width="200" height="120">
</label>

<label>
<input type="radio" name="radio" value="01"><img src="2.jpg"alt="2" width="200" height="120">
</label>

<label>
<input type="radio" name="radio" value="10"><img src="3.jpg"alt="3" width="200" height="120">
</label>

<label>
<input type="radio" name="radio" value="11"><img src="4.jpg"alt="4" width="200" height="120">
</label>

<label>
<input type="radio" name="radio" value="12"><img src="5.jpg"alt="5" width="200" height="120">
</label>

<label>
<input type="radio" name="radio" value="13"><img src="6.jpg"alt="6" width="200" height="120">
</label>

<label>
<input type="radio" name="radio" value="14"><img src="7.jpg"alt="7" width="200" height="120">
</label>

<label>
<input type="radio" name="radio" value="15"><img src="8.jpg"alt="8" width="200" height="120">
</label>

<label>
<input type="radio" name="radio" value="16"><img src="9.jpg"alt="9" width="200" height="120">
</label>

<label>
<input type="radio" name="radio" value="17"><img src="10.jpg"alt="10" width="200" height="120">
</label>

<label>
<input type="radio" name="radio" value="18"><img src="11.jpg"alt="11" width="200" height="120">
</label>

<label>
<input type="radio" name="radio" value="19"><img src="12.jpg"alt="12" width="200" height="120">
</label>

<label>
<input type="radio" name="radio" value="20"><img src="13.jpg"alt="13" width="200" height="120">
</label>

<label>
<input type="radio" name="radio" value="21"><img src="14.jpg"alt="14" width="200" height="120">
</label>

<label>
<input type="radio" name="radio" value="22"><img src="15.jpg"alt="15" width="200" height="120">
</label>

<label>
<input type="radio" name="radio" value="23"><img src="16.jpg"alt="16" width="200" height="120">
</label>

</tr>
</table>
</center>
	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Craete an account  <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>
