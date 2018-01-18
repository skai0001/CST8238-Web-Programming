<html>
<title>Login</title>
<link rel="StyleSheet" type="text/css" href="StyleSheet.css" />

	<?php include_once 'Header.php'?>
	<?php include_once 'Menu.php'?>

<div id='content'>


<?php
session_start ();
require 'MySQLConnectionInfo.php';
if (isset ( $_POST ['email'] ) && isset ( $_POST ['pass'] )) {
	if (! empty ( $_POST ['email'] ) && ! empty ( $_POST ['pass'] )) {
		$connect = mysqli_connect ( $host, $username, $password  );
		if (! $connect)
			die ( "Could not connect: " . mysqli_error () );
		mysqli_select_db (  $connect ,"skai0001");
		$emp = mysqli_query ($connect , "SELECT * FROM employee" );
		for($i = 0; $i < mysqli_num_rows ( $emp ); $i ++) {
			$row = mysqli_fetch_row ( $emp );
			if (strcmp ( $_POST ['email'], $row [3] ) == 0 && strcmp ( $_POST ['pass'], $row [6] ) == 0) {
				$_SESSION ['first_name'] = $row [1];
				$_SESSION ['last_name'] = $row [2];
				$_SESSION ['email'] = $row [3];
				$_SESSION ['number'] = $row [4];
				$_SESSION ['sin'] = $row [5];
				$_SESSION ['pass'] = $row [6];
				header ( "Location: ViewAllEmployees.php" );
			}
		}
		
		echo " <font color='purple'><h3> This ID doesn't exist, please try again </h3></font>";
	}
}
?>
<?php

echo "<h1>Login</h1><br/>";
echo "<form method=\"post\">";
echo "Email Address<input type=\"text\" name=\"email\"><br/>";
echo "Password<input type=\"password\" name=\"pass\"><br/>";
echo "<input type=\"submit\" value=\"Login\">";
echo "</form>";

?> 
	</div>
	<?php 	include_once 'Footer.php';?>
</html>