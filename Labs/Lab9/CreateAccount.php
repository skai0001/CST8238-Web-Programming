<?php
session_start ();
require 'MySQLConnectionInfo.php';
if (isset ( $_POST ['first_name'] ) && isset ( $_POST ['last_name'] ) && isset ( $_POST ['email'] ) && isset ( $_POST ['number'] ) && isset ( $_POST ['sin'] ) && isset ( $_POST ['pass'] )) {
	$connect = mysqli_connect ( $host, $username, $password );
	if (! $connect)
		die ( "Could not connect: " . mysqli_error () );
	mysqli_select_db ( $connect, "skai0001" );
	$userFirstName = $_POST ["first_name"];
	$userLastName = $_POST ["last_name"];
	$userEmailAddress = $_POST ["email"];
	$userTeleNumber = $_POST ["number"];
	$userSin = $_POST ["sin"];
	$userPassword = $_POST ["pass"];
	$query = "INSERT INTO employee (FirstName, LastName, EmailAddress, TelephoneNumber, SocialInsuranceNumber, Password) VALUES ('$userFirstName', '$userLastName', '$userEmailAddress', '$userTeleNumber', '$userSin', '$userPassword')";
	mysqli_query($connect, $query);
	mysqli_close ( $connect );
	$_SESSION ['first_name'] = $_POST ['first_name'];
	$_SESSION ['last_name'] = $_POST ['last_name'];
	$_SESSION ['email'] = $_POST ['email'];
	$_SESSION ['number'] = $_POST ['number'];
	$_SESSION ['sin'] = $_POST ['sin'];
	$_SESSION ['pass'] = $_POST ['pass'];
	header ( "Location: ViewAllEmployees.php" );
}
?>
<html>
<title>Create Account</title>
<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
	<?php
	include 'Header.php';
	include 'Menu.php';
	
	echo "<div id=\"content\">";
	echo "<h1>Create your new account</h1><br/>";
	echo "Please fill in all your information<br/>";
	echo "<form method=\"post\">";
	echo "First Name<input type=\"text\" name=\"first_name\"><br/>";
	echo "Last Name<input type=\"text\" name=\"last_name\"><br/>";
	echo "Email Address<input type=\"text\" name=\"email\"><br/>";
	echo "Phone Number<input type=\"text\" name=\"number\"><br/>";
	echo "SIN<input type=\"text\" name=\"sin\"><br/>";
	echo "Password<input type=\"password\" name=\"pass\"><br/>";
	echo "<input type=\"submit\" value=\"Submit Information\">";
	echo "</form>";
	echo "</div>";
	
	include 'Footer.php';
	?>
</html>