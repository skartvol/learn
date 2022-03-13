<html>
    <head>
        <title>Lesson #5</title>
    </head>
    <body>
    <a href="index.php">MAIN MENU</a><hr>

    <form action="lesson5.php" method="get">
        <input type="number" name="num">
        <input type="submit" value="OK">
    </form>
    </body>
</html>
<?php
    if(isset($_GET['num']) and is_numeric($_GET['num'])) {
        $num = $_GET['num'];
        echo "Thanks. Your number is: ".$num;
        if(($num%2) == 0)
            echo "<br>It is an even number!";
        else
            echo "<br>This is not an even number!";

        if($num < 0) {
            echo "<br> Negative number";
        } elseif($num > 0) {
            echo "<br> Positive number";
        } else {
            echo "<br> Nubmer is null";
        }

        echo $num % 3 == 0 ? "<br> Divided by 3 without remainder" : "<br>Not divisible by 3 without remainder";

    } else {
        echo "No number. Please, set your number!";
    }
?>