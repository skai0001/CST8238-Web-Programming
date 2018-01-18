<!DOCTYPE>
<html>
<head>
<title>Session2</title>
<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
</head>

<body>
		
		<?php include "Header.php"; ?>
		<?php include "Menu.php"; ?>

	<div id="content">
		
		<?php
		
		
		session_start ();
		
		$_SESSION ['firstName'] = $_POST ['firstNameTextBox'];
		$_SESSION ['lastName'] = $_POST ['lastNameTextBox'];
		$_SESSION ['phoneNum'] = $_POST ['phoneNumber'];
		$_SESSION ["category"] = $_POST ["category"];
		$_SESSION ["ComputerGames"] = $_POST ["ComputerGames"];
		
		if (isset ( $_SESSION ["firstName"] )) {
			echo "<b>First Name: </b>" . $_SESSION ['firstName'];
			echo "<br />";
		} 
		if (isset ( $_SESSION ["lastName"] )) {
			echo "<b>Last Name: </b>" . $_SESSION ['lastName'];
			echo "<br />";
		} 
		if (isset ( $_SESSION ["phoneNum"] )) {
			echo "<b>Phone Number : </b>" . $_SESSION ['phoneNum'];
			echo "<br />";
		} 
		if (isset ( $_POST ["category"] )) {
			echo "<b>Type: </b>" . $_SESSION ['category'];
			echo "<br />";
		} 
		
			if (isset ( $_POST ["ComputerGames"] )) {
				echo "<b>Game: </b>" . $_SESSION ['ComputerGames'];
				echo "<br />";
			}
			
		?>
		
		</div>
		 <?php include "Footer.php"; ?>  
	</body>
</html>