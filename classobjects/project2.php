<!DOCTYPE html>
<html>
<head>
	<title>Project2</title>
</head>
<body>
<?php

class Books{

	var $price;
	var $title;

	function setPrice($par){
		$this->price = $par;
	}

	function getPrice(){
		echo $this->price."<br>";
	}

	function setTitle($tit){
		$this->title = $tit;
	}

	function getTitle(){
		echo $this->title."<br>";
	}
}

$maths = new Books;

$maths->setTitle( "Algebra" );
$maths->setPrice( 7 );

$maths->getTitle();
$maths->getPrice();



$science = new Books;

$science->setTitle('chemistry');
$science->setPrice(89);

$science->getPrice();
$science->getTitle();


?>
</body>
</html>