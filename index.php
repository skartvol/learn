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


$a = $a + $a;
echo $a."<br>";
$a += $a;
echo $a."<br>";
$a -= 10;
echo $a."<br>";
$a *= 10;
echo $a."<br>";
$a /= 2;
echo $a."<br>";
$a++;
echo $a."<br>";
++$a;
echo $a."<br><br><br>";

echo pow(5, 3)."<br>";

echo sqrt(144);
?>