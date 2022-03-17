<html>
    <head>
        <title>Lesson #12</title>
    </head>
    <body>
    <a href="index.php">MAIN MENU</a><hr>

    <h3>Function and return</h3>

    <?php
        require_once "core/helper.php";

        echo sendMyMessage('Hi All');
        echo '<br>4 + 6 = '.sumOfNumbers(4,6);
    ?>

    </body>
</html>