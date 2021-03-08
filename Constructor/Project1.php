<!DOCTYPE html>
<html>
<head>
	<title>Project1</title>
</head>
<body>

	<?php

		class person{

			public $name;
			public $b;

			function __construct($n, $b){

				$this->name=$n;
				$this->b=$b;
			}

			function show(){
				echo "the name is :" .$this->name .' ' .$this->b;
				
			}
		}

		$p1 = new person('abhilash', 'sharma');
		$p1->show();

	?>

</body>
</html>