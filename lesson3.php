<a href="index.php">MAIN MENU</a><hr>
<?php
    $a = 5;
    $b = 7;

    echo "a = $a (integer), b = $b (integer)<br>";


    echo "$a == $b : ";
    var_dump($a == $b); // false

    echo "<br>$a <> != $b : ";
    var_dump($a <> $b); // true

    echo "<br>$a < $b : ";
    var_dump($a < $b); // true

    echo "<br>$a > $b : ";
    var_dump($a > $b); // false

    echo "<br>$a >= $b : ";
    var_dump($a >= $b); // false

    echo "<br>$a <= $b : ";
    var_dump($a <= $b); // false

    $a = 5;
    $b = "5";
    echo "<hr> a = $a (integer), b = $b (string)";
    echo "<br> $a === $b : ";
    var_dump($a === $b); // false
    echo "<br> $a !== $b : ";
    var_dump($a !== $b); // true
    echo "<br> $a == $b : ";
    var_dump($a == $b); // true
?>