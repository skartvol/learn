<?php
if(!isset($_SESSION))
    session_start();
?>
<html>
    <head>
        <title>Lesson #16</title>
    </head>
    <body>
    <a href="index.php">MAIN MENU</a><hr>

    <h3>GAME - guess the number from 1 to 10</h3>
    <table>
        <tr>
            <td>
                <form action="lesson16.php" method="POST">
                    <p>Set number: <input type="number" name="num"></p>
                    <input type="submit" value="Set">
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                if(isset($_POST['num']) and is_numeric($_POST['num'])) {
                    if(isset($_SESSION['i']))
                        $_SESSION['i']++;
                    else
                        $_SESSION['i'] = 1;
                    
                    if(!isset($_SESSION['secret-num']))
                        $_SESSION['secret-num'] = random_int(1,10);

                    if($_POST['num']>$_SESSION['secret-num'])
                        echo 'Your number is more than the secret number. Please, try again.';
                    elseif($_POST['num']<$_SESSION['secret-num'])
                        echo 'Your number is smaller than the secret number. Please, try again.';
                    else {
                        echo 'Congratulations, you guessed the secret number - '.$_SESSION['secret-num'].' on the '.$_SESSION['i'].' try';
                        session_destroy();
                    }
                }
                ?>
            </td>
        </tr>
    </table>
    <?php
    ?>
    </body>
</html>