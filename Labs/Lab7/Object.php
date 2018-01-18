<!DOCTYPE html>
<html>
<head>
<title>Object.php</title>
<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
</head>

<body>

<?php include "Header.php" ?>
<?php include "Menu.php"?>



<?php
echo "<div id=\"content\" align =left>";
class Vehicle {
	protected $make;
	protected $model;
	protected $year;
	protected $price;
	function __construct($make, $model, $year, $price) {
		$this->make =  $make;
		$this->model = $model;
		$this->year =  $year;
		$this->price = $price;
	}
	public function displayObject() {
		return "Make: " . $this->make . ", Model: " . $this->model . ", Year: " . $this->year . ", Price " . $this->price;
	}
}
class LandVehicle extends Vehicle {
	private $maxSpeed;
	function __construct($make, $model, $year, $price, $maxSpeed) {
		parent::__construct ( $make, $model, $year, $price );
		$this->maxSpeed = $maxSpeed;
	}
	public function displayObject() {
		return parent::displayObject () . ", Speed Limit: " . $this->maxSpeed . "<br/>";
	}
}
echo "<br/>";
echo "<br/>";
echo"<h2>Land Vehicle</h2></br>";
$land = new LandVehicle ( "Toyota", "Camry", 1992, 2000, 180 );
echo $land->displayObject ();
$land = new LandVehicle ( "Honda", "Accord", 2002, 6000, 200 );
echo $land->displayObject ();
$land = new LandVehicle ( "Chevrollet", "Camaro", 2016, 10000, 750 );
echo $land->displayObject ();
echo "<br/>";
echo "<br/>";
class WaterVehicle extends Vehicle {
	private $boatCapacity;
	function __construct($make, $model, $year, $price, $boatCapacity) {
		parent::__construct ( $make, $model, $year, $price );
		$this->boatCapacity = $boatCapacity;
	}
	public function displayObject() {
		return parent::displayObject () . ", Boat Capacity: " . $this->boatCapacity . "<br/>";
	}
}
echo"<h2>Water Vehicle</h2></br>";
$water = new WaterVehicle ( "Mitsubishi", "Turbo", 1999, 20000, 18 );
echo $water->displayObject ();
$water = new WaterVehicle ( "Hyundai", "XT", 2012, 26000, 8 );
echo $water->displayObject ();
$water = new WaterVehicle ( "Buggati", "Vyron", 2012, 75000, 2000000 );
echo $water->displayObject ();
echo "</div>";
?>


<?php include "Footer.php" ?>

</body>

</html>
