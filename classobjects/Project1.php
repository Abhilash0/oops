<!DOCTYPE html>
<html>
<head>
	<title>Project </title>
</head>
<body>
<?php

class Mobile{

	var $model;

	function showModel($number){
		global $model;
		$model = $number;
		echo "The model is: $model";
	}
}

$samsung = new Mobile;
$samsung->showModel('A6');

?>
</body>
</html>