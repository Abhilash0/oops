<!DOCTYPE html>
<html>
<head>
	<title>Project2</title>
</head>
<body>
	<?php

	class abhi{

		protected $name;

		function setName($n){
			$this->name = $n;
		}
		function getName(){
			echo $this->name;
		}
	}

	$obj = new abhi;
	$obj->setName('abhi');
	$obj->getName();

	?>

</body>
</html>