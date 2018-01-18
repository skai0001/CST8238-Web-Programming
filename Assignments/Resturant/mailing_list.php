<?php
include "header.php";
require "db_config.php";
$error = "";
?>

<div id="content" class="clearfix">

	<div class="main">
	<?php
	
	$connection = mysqli_connect ( $servername, $username, $password, $dbname );
	if (mysqli_connect_errno ()) {
		die ( "Failed to connect to the database." );
	}
	
	$query = "SELECT * FROM mailingList;";
	$result = mysqli_query ( $connection, $query );
	
	echo "<h1>Mailing List</h1><br/>";
	echo "<table align='center' cellspacing ='0' border ='2' cellpadding=5 width='100%'>";
	echo "<tr>";
	echo "<th>Full Name</th>";
	echo "<th>Email Address</th>";
	echo "<th>Phone Number</th>";
	echo "<th>User Name</th>";
	echo "<th>Referrer</th>";
	echo "</tr>";
	
	if (mysqli_num_rows ( $result ) > 0) {
		
		while ( $row = mysqli_fetch_assoc ( $result ) ) {
			echo "<tr>";
			echo "<td>" . $row ["firstName"] . " " . $row ["lastName"] . "</td>";
			
			echo "<td>" . $row ["emailAddress"] . "</td>";
			
			echo "<td>" . $row ["phoneNumber"] . "</td>";
			
			echo "<td>" . $row ["username"] . "</td>";
			
			echo "<td>" . $row ["referrer"] . "</td>";
			echo "</tr>";
		}
	}
	echo "</table>";
	mysqli_close ( $connection );
	
	?>
	
	</div>

</div>

<?php include ("footer.php")?>