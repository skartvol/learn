<html>
    <head>
        <title>Lesson #6</title>
    </head>
    <body>
    <a href="index.php">MAIN MENU</a><hr>

    <form action="lesson6.php" method="get">
        <input type="number" name="num">
        <input type="submit" value="OK">
    </form>
    </body>
</html>
<?php
    if(isset($_GET['num']) and is_numeric($_GET['num'])) {
        $day = $_GET['num'];
        echo "Day = $day, ";
        
        switch($day) {            
            case 1:
                echo "Monday";
            break;

            case 2:
                echo "Tuesday";
            break;

            case 3:
                echo "Wednesday";
            break;

            case 4:
                echo "Thursday";
            break;

            case 5:
                echo "Friday";
            break;

            case 6: case 7:
                echo "Weekend";
            break;
            default:
                echo "There is no such day";
            break;
        }

    } else {
        echo "No number. Please, set your number!";
    }
?>