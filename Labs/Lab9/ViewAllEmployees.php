<?php
session_start ();
require 'MySQLConnectionInfo.php';
if (! isset ( $_SESSION ['email'] ) && ! isset ( $_SESSION ['pass'] ))
	header ( "Location: Login.php" );
?>
<html>
<title>View All Employees</title>
<link rel="stylesheet" type="text/css" href="StyleSheet.css" />

<body>
 <?php include "Header.php"; ?>
<?php include "Menu.php"; ?>
<div id="content">
<?php

	echo "<div class=\"top\">";
	echo " <font color='purple'><h1>Session State Data  </h1></font>";
	echo "First name: " . $_SESSION ['first_name'] . "<br/>";
	echo "Last_name: " . $_SESSION ['last_name'] . "<br/>";
	echo "Email: " . $_SESSION ['email'] . "<br/>";
	echo "Phone Number: " . $_SESSION ['number'] . "<br/>";
	echo "SIN: " . $_SESSION ['sin'] . "<br/>";
	echo "Password: " . $_SESSION ['pass'];
	
	$connect = mysqli_connect ( $host, $username, $password );
	if (! $connect)
		die ( "Could not connect: " . mysqli_error () );
	mysqli_select_db (  $connect,"skai0001" );
	$employees = mysqli_query ( $connect ,"SELECT * FROM  employee" );
	$rows = mysqli_num_rows ( $employees );
	echo "</div>";
	echo "<div class=\"bottom\">";
	echo " <font color='purple'><h1 align='left'> DataBase Data </h1></font>";
	echo "<table width='100%' border='2'>";
	echo "<tr>";
	echo "<th>First Name</th>";
	echo "<th>Last Name</th>";
	echo "<th>Email Address</th>";
	echo "<th>Phone Number</th>";
	echo "<th>SIN</th>";
	echo "<th>Password</th>";
	echo "</tr>";
	for($i = 0; $i < $rows; ++ $i) {
		$row = mysqli_fetch_row ( $employees );
		echo "<tr>";
		echo "<td>" . $row [1] . "</td>";
		echo "<td>" . $row [2] . "</td>";
		echo "<td>" . $row [3] . "</td>";
		echo "<td>" . $row [4] . "</td>";
		echo "<td>" . $row [5] . "</td>";
		echo "<td>" . $row [6] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "</div>";
	?>
	</div>
	<?php include "Footer.php"; ?>
	</body>
</html>