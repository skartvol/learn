<a href="index.php">MAIN MENU</a><hr>
<?php
	define("MY_TITLE", "Hello ");
	$myTitle = "World";
	echo MY_TITLE.$myTitle;
	echo "<br>";
	$text = "ABCD";
	$int = 123;
	$float = 23.45;
	$bool = true;

	echo "$text, $int, $float, $bool";
	echo "<br>";
	var_dump($bool);
	echo "<br>";

	//is_int() - the variable is integet type
	//is_numeric() - the variable can be converted to integer

	$textNum = "45";
	var_dump(is_int($textNum));
	echo "<br>";
	var_dump(is_numeric($textNum));
	echo "<br>";
?>
