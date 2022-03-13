<html>
    <head>
        <title>Lesson #7</title>
    </head>
    <body>
    <a href="index.php">MAIN MENU</a><hr>

    <form action="lesson7.php" method="get">
        <input type="number" name="num">
        <input type="submit" value="OK">
    </form>

    <?php
    if(isset($_GET['num']) AND is_numeric($_GET['num'])) {
        echo "<table><tr><th>WHILE</th><th>DO WHILE</th><th>FOR</th></tr>";
        echo "<tr>";
        echo "<td>";

        $num = $_GET['num'];

        while ($num > 0) {
            echo $num."</br>";
            $num--;
        }

        echo "</td>";
        echo "<td>";

        $num = $_GET['num'];

        do {
            echo $num."<br>";
            $num--;
        } while ($num > 0);

        echo "</td>";
        echo "<td>";

        $num = $_GET['num'];

        for($num; $num > 0; $num--) {
            echo $num."<br>";
        }

        echo "</td>";
        echo "</tr>";
        echo "</table>";

    } else {
        echo "No number. Please, set your number!";
    }
    ?>

    </body>
</html>