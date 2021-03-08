<!DOCTYPE html>
<html>
<head>
	<title>Project1</title>
</head>
<body>

	<?php

	class employee{
		protected $name;
		protected $salary;
		protected $age;

		 function __construct($n, $s, $a){
			$this->name = $n;
			$this->salary = $s;
			$this->age = $a;
		}

		protected function show(){
			echo "<h3>Employee</h3>";
			echo "Name" . $this->name. "</br>";
			echo "salary" . $this->salary . "<br>";
			echo "Age" . $this->age ."<br>";
		}
	}

	class manager extends employee{
		public $ta = 500;
		public $tc = 600;
		public $totalsalry;


		function show(){
			$this->totalsalry = $this->salary + $this->ta + $this->tc;
			echo "<h3>Manager</h3>";
			echo "Name : " . $this->name. "</br>";
			echo "salary : " . $this->totalsalry . "<br>";
			echo "Age : " . $this->age ."<br>";
		}
	}

	// $e1 = new employee;
	// $e1->__construct('abhi');
	// $e1->show();

	$e2 = new manager('sharma', 200, 25);
	$e2-> show();

	?>

</body>
</html>