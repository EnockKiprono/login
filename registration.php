<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="validate.js"></script>
</head>
<body>
	<div class="form">
<form name="registration" method="post" action="server.php">
	username:<input type="text" name="username"><br>
	email:<input type="email" name="email">
	password:<input type="password" name="password"><br>
	<input type="submit" name="register"><br>
	<p><b><em>Already a member? <a href="login.php">sign in</a></em></b></p>
	<div id="home">
		<a href="index.php"><em style="color: blue">back to homepage</em></a>
	</div>
</div>
</form>
</body>
</html>