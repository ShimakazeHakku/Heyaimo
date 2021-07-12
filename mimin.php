<?php
// start the session
session_start();

// empty variabel for store error message
$form_error = '';

// check the submit button
if (isset($_POST['submit'])) {
	
	// store data from post method to each variabel
	$username = $_POST['username'];
	$password = $_POST['password'];

	// true/false login validation
	if ($username == 'Senpai' AND $password == 'senpai') {
		
		// if true, username will be stored in session and redirected
		$_SESSION['username'] = $username;
		header("Location: senpai.php");
	} else {
		
		// if false, form_error variabel filled with below
		$form_error = '<p>You are not my Senpai!!<p>';
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<link rel="icon" href="img/chara-ico/chara03.png">
	<title>MIMIN.PHP</title>
	<link rel="stylesheet" type="text/css" href="style-a.css">


</head>

<body>

	<form class="box" method="post" action="mimin.php">
		<h1>SENPAI.PHP</h1>
		<input type="text" name="username" 
		       placeholder="Username" pattern="[A-Za-z ]+" 
		       required>
		<input type="password" name="password" 
		       placeholder="Password" pattern="[A-Za-z ]+" 
		       required>
		<input type="submit" name="submit"value="Login">
	</form>

</body>
</html>
