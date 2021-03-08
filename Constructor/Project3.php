<!DOCTYPE html>
<html>
<head>
	<title>Project3</title>
</head>
<body>
<?php

	class student{
		 public $name;
		 public $age;
		 public $course;

		 function __construct($n, $a, $c){
		 	$this->name = $n;
		 	$this->age = $a;
		 	$this->course = $c;
		 }

		 function show() {
		 	echo $this->name . PHP_EOL;
		 	//echo "<br>";
		 	echo "Your course is : " .$this->course. "\n" ;
		 	echo "<br>";
		 	echo "Your age is : " .$this->age. "\n" ;

		 }
	}

	$s1 = new student('Abhilash', 23, 'CSE');
	$s1->show();

?>

</body>
</html>