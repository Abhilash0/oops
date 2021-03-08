<!DOCTYPE html>
<html>
<head>
	<title>Project3</title>
</head>
<body>

	<?php
class person{

	public $name;

	function show(){
		echo "The name you print is: " .$this->name;
	}
}

$person = new person;

$person->name = 'abhi';

$person->show();


?>

</body>
</html>