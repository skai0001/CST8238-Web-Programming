<html>

<head>
<title>Input.php</title>
<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
</head>
<body>



<?php include "Header.php"; ?>
<?php include "Menu.php"; ?>




<div id="content">
		<div class="left">

			<form method="post">

				First Name <input type="text" name="firstNameTextBox" value="" /><br />
				Last Name <input type="text" name="lastNameTextBox" value="" /><br />
				Phone Number <input type="text" name="phoneNumber" value="" /> <br />
				Staff <input type="radio" name="Category" value="Staff">
				Student<input type="radio" name="Category" value="Student">
				Faculty <input type="radio" name="Category" value="Faculty"> <br/>
				Games:<select name="ComputerGames">
								<option value="Nothing Selected">Please Select</option>
								<option value="BattleField">Battle Field</option>
								<option value="Paragon">Paragon</option>
								<option value="Delta Force">Delta Force</option>
								<option value="Fifa 2017">Fifa 2017</option>
						</select><br/>
				
				<input type="submit" />
			</form>
		</div>



	

				<?php
				
				if (isset ( $_POST ["firstNameTextBox"] ))
					$firstName = $_POST ["firstNameTextBox"];
				else
					$firstName = "";
				
				if (isset ( $_POST ["lastNameTextBox"] ))
					$lastName = $_POST ["lastNameTextBox"];
				else
					$lastName = "";
				
				if (isset ( $_POST ["phoneNumber"] ))
					$telephoneNumber = $_POST ["phoneNumber"];
				else
					$telephoneNumber = "";
				
				if (isset ( $_POST ["Category"] ))
					$School = $_POST ["Category"];
				else
					$School = "";
				
				if (isset ( $_POST ["ComputerGames"] ))
					$computerGames = $_POST ["ComputerGames"];
				else
					$computerGames = "";
				?>
	
		<div class="right" >
		<?php
		echo "<table align='left' height='60%'>";
		echo "<tr><td>First Name: " . $firstName . "</td></tr>";
		echo "<tr><td>Last Name: " . $lastName . "</td></tr><br/>";
		echo "<tr><td>Telephone Number: " . $telephoneNumber . "</td></tr>";
		echo "<tr><td>Status: " . $School. "</td></tr>";
		echo "<tr><td>Games: " . $computerGames . "</td></tr>";
		echo "</table>";
		?>
		</div>
</div>
	


<?php include "Footer.php"; ?>
</body>



</html>