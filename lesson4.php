<a href="index.php">MAIN MENU</a><hr>

<?php
$a = true;
$b = false;

echo "a = ";
var_dump($a);
echo " b = ";
var_dump($b);

echo "<hr>";

echo "OR : ";
var_dump($a or $b);
echo "<br>";



echo "AND : ";
var_dump($a and $b);
echo "<br>";



echo "OR || : ";
var_dump($a || $b);
echo "<br>";



echo "AND && : ";
var_dump($a && $b);
echo "<br>";



echo "XOR : ";
var_dump($a xor $b);
echo "<br>";



echo "NOT : ";
var_dump(!$a);
echo "<hr>";

echo "Result (true or false and false) : ";
var_dump(true or false and false);
echo "<br>";
var_dump(true || false and false);
echo "<br>";
?>