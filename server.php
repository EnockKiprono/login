<?php
include('config.php');
session_start();
$servername = "localhost:3306";
$username = "root";
$password = "root";
$database = "curious";
$connection = mysqli_connect('localhost' ,'root','root', 'curious');
if (isset($_POST['register'])) {
	$username = mysqli_real_escape_string($database, $_POST['username']);
	$email = mysqli_real_escape_string($database, $_POST['email']);
	$password = mysqli_real_escape_string($database, $_POST['password']);
}
if (empty($username)) {
	array_push($errors, "username is required");
}
if (empty($email)) {
	array_push($errors, "email is required");
}
if (empty($password)) {
	array_push($errors, "password is required");
}
$user_check_query = "SELECT * FROM curious WHERE username='$username' OR email='$email' LIMIT=1";
$result = mysqli_query($sql, $user_check_query);
$user = mysqli_fetch_assoc($result);
if ($user) {
	if ($user['username'] == $username) {
		array_push($errors, "username already exists");
	}
	if ($user['email'] == $email){
		array_push($errors, "email already exists");
	}
}
if (count($errors) == 0) {
	$password = md5($password);
	$query = "INSERT INTO users(username,email,password) VALUES ('$username', '$email', '$password')";
	mysqli_query($sql, $query);
$_SESSION['username'] = $username;
$_SESSION['success'] = "you are now logged in";
header('location : index.html');
}

if (isset($_POST['login'])) {
	$username = mysqli_real_escape_string($database, $_POST['username']);
	$password = mysqli_real_escape_string($database, $_POST['password']);
}
if (empty($username)) {
	array_push($errors, "username is required");
}
if (empty($password)) {
	array_push($errors, "password is required");
}
if (count($errors) == 0) {
	$password = md5($password);
	$query = "SELECT * FROM coders WHERE username='$username' AND password='$password'";
	mysqli_query($database, $query);
	if (mysqli_num_rows($result) == 1) {
$_SESSION['username'] = $username;
$_SESSION['success'] = "you are now logged in";
header('location: index.php');
}
else {
	array_push($errors, "wrong username/password combination");
?>
