
<!DOCTYPE html>
<html>
<head>
<title>Array1.php</title>
<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
</head>

<body>

<?php include "Header.php"?>

<?php include "Menu.php"?>



<?php
echo "<div id=\"content\" align =left>";

$march = array (
		"Monday" => array (
				'1st' => 3,
				'2nd' => 10,
				'3rd' => 17,
				'4th' => 24,
				'5th' => 31 
		),
		"Tuesday" => array (
				'1st' => 4,
				'2nd' => 14,
				'3rd' => 21,
				'4th' => 28 
		),
		"Wednesday" => array (
				'1st' => 8,
				'2nd' => 15,
				'3rd' => 22,
				'4th' => 29 
		),
		"Thursday" => array (
				'1st' => 9,
				'2nd' => 16,
				'3rd' => 23,
				'4th' => 30 
		),
		"Friday" => array (
				'1st' => 3,
				'2nd' => 10,
				'3rd' => 17,
				'4th' => 24,
				'5th' => 31 
		),
		"Saturday" => array (
				'1st' => 4,
				'2nd' => 11,
				'3rd' => 18,
				'4th' => 25 
		),
		"Sunday" => array (
				'1st' => 5,
				'2nd' => 12,
				'3rd' => 19,
				'4th' => 26 
		) 
);
echo "<h2></h2>";
echo "<h2>Output-1</h2><br/>";
print_r ( $march );
echo "<h2>Output-2</h2>";
$keys = array_keys ( $march );
for($i = 0; $i < count ( $march ); $i ++) {
	
	foreach ( $march [$keys [$i]] as $key => $value ) {
		
		echo $value . " is the " . $key . " " . $keys [$i] . " in March. <br/>";
	}
}
echo "<h2>Output-3</h2>";
print_r ( array_reverse ( $march ) );
echo "<h2>Output-4</h2>";
array_multisort ( $march, SORT_DESC );
print_r ( $march );
echo "<h2>Output-5</h2>";
$march ['Saturday'] ["5th"] = "32";
print_r ( $march );

echo "</div>";
?>



<?php include "Footer.php"?>

</body>

</html>

