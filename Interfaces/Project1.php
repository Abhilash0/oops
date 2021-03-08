<!DOCTYPE html>
<html>
<head>
	<title>Project1</title>
</head>
<body>
<?php

	interface project1{
		function calc($a, $b);
	}
	interface project2{
		function sub($c, $d);
	}

	class childClass implements project1, project2{
		public function calc($a, $b){
			echo $a + $b;
		}
		public function sub($c, $d){
			echo $c - $d;
		}
	}

	$test = new childClass;
	$test->calc(10,20);
	echo "</br>";
	$test->sub(10,4);

?>
</body>
</html>