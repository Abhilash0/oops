<!DOCTYPE html>
<html>
<head>
	<title>Project1</title>
</head>
<body>
<?php

	class employee{
		public $name;
		public $age;
		public $salary;

		function __construct($n, $a, $s){
			$this->name=$n;
			$this->age=$a;
			$this->salary=$s;
		}

		function show(){
			echo "<h3>Employee Description<h3>";
			echo "Employee Name: " . $this->name . "</br>";
			echo "Employee age: " . $this->age . "</br>";
			echo "Employee salary: " . $this->salary . "</br>";
		}
	}

	class manager extends employee{
		public $ts = 1000;
		public $ta = 300;
		public $totalsalry;

		function show(){
			$this->totalsalry = $this->salary + $this->ts + $this->ta;
			echo "<h3>Manager Description<h3>";
			echo "Employee Name: " . $this->name . "</br>";
			echo "Employee age: " . $this->age . "</br>";
			echo "Employee salary: " . $this->totalsalry . "</br>";
		}
	}

	$e1 = new employee('abhi', 20, 2000);
	$e2 = new manager('abhilash', 25, 200);
	$e1->show();
	$e2->show();

?>
</body>
</html>