<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="validate.js"></script>
</head>
<script type="text/javascript" src="validate.js"></script>
<body>
	<div class="form">
<form name="login" method="post" action="index.php" onsubmit="return validateform()">
	username:<input type="text" name="username"><br>
	password:<input type="password" name="password"><br>
	<input type="submit" name="login"><br>
	<p><b><em>Not yet a member? <a href="registration.php">Register</a></em></b></p>
	<div id="home">
		<a href="index.php"><em style="color: blue">back to homepage</em></a>
	</div>
</div>
</form>
</body>
</html>