<!DOCTYPE html>
<html>
<head>
	<title>Project2</title>
</head>
<body>

	<?php
	class employee{

		public $name;
		public $position;

		function __construct($name, $position){
			$this->name = $name;
			$this->position = $position;
		}

		function show_details(){
			echo $this->name. " : ";
			echo "Your Position in company is ".$this->position.	 "\n";
		}
	}

	$p1 = new employee('abhilash', "developer");
	$p1->show_details();

	$p2 = new employee('Guru', 'Designer');
	$p2->show_details();

	?>

</body>
</html>