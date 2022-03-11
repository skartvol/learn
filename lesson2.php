<?php
$a = 11;
$b = 8;
echo "a = $a<br>";
echo "b = $b<br>";
echo "Dodawanie = ".($a + $b)."<br>";
echo "Odejmowanie = ".($a - $b)."<br>";
echo "Umnozenie = ".($a * $b)."<br>";
echo "Dzielenie = ".($a / $b)."<br>";
echo "Reszta od dzielenia = ".($a % $b)."<br>";

echo "Okruglenie :". round($a / $b,2)."<br>";


$a = $a + $a; //22
echo $a."<br>";
$a += $a; //44
echo $a."<br>";
$a -= 10; //34
echo $a."<br>";
$a *= 10; //340
echo $a."<br>";
$a /= 2; //170
echo $a."<br>";
$a++;  //postincrimination 171
echo $a."<br>";
++$a; // preincrimination 172
echo $a."<br><br><br>";

echo pow(5, 3)."<br>"; //5*5*5

echo sqrt(144); //square root of a number
?>