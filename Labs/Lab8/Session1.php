		
		
			<?php
			session_start ();
			
			if (isset ( $_POST ["submit"] )) {
				
				$_SESSION ["firstName"] = $_POST ["firstNameTextBox"];
				$_SESSION ["lastName"] = $_POST ["lastNameTextBox"];
				$_SESSION ["phoneNum"] = $_POST ["phoneNumber"];
				$_SESSION ["category"] = $_POST ["category"];
				$_SESSION ["ComputerGames"] = $_POST ["ComputerGames"];
				
				header ( "Location:Session2.php" );
				exit;
			}
			
			?>

<html>

<head>
<title>Input.php</title>
<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
</head>
<body>

<?php include "Header.php"; ?>
<?php include "Menu.php"; ?>


<div id="content">
		<div class="middle">

			<form method="post" action="Session2.php">
				First Name <input type="text" name="firstNameTextBox" value="" /><br />
				Last Name <input type="text" name="lastNameTextBox" value="" /><br />
				Phone Number <input type="text" name="phoneNumber" value="" /> <br />
				Staff <input type="radio" name="category" value="Staff">
				Student<input type="radio" name="category" value="Student">
				Faculty <input type="radio" name="category" value="Faculty"> <br/>
				Games:<select name="ComputerGames">
								<option value="Nothing Selected">Please Select</option>
								<option value="BattleField">Battle Field</option>
								<option value="Paragon">Paragon</option>
								<option value="Delta Force">Delta Force</option>
								<option value="Fifa 2017">Fifa 2017</option>
						</select><br/>
				
				<input type="submit" value ="Submit Information" />
			</form>
		</div>
	</div>

<?php include "Footer.php"; ?>
</body>

</html>