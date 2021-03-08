<!DOCTYPE html>
<html>
<head>
	<title>Project2</title>
</head>
<body>
<?php

	interface animal{
		public function sounds();
	}

	class cat implements animal{
		public function sounds(){
			echo 'meow';
		}
	}

	class dog implements animal{
		public function sounds(){
			echo 'bark';
		}
	}

	$test = new cat;

	$test->sounds();

	$test1 = new dog;

	$test1->sounds();

?>
</body>
</html>