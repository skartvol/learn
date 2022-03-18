<?php
session_start();
if(isset($_POST['login']) && isset($_POST['pass'])){
    $_SESSION['user'] = $_POST['login'];
}
?>
<html>
    <head>
        <title>Lesson #14</title>
    </head>
    <body>
    <a href="index.php">MAIN MENU</a><hr>

    <h3>SESSION</h3>

    <?php
    if(isset($_SESSION['user'])) {
        echo "Congratulation: ".$_SESSION['user']."<br>";
        echo "<a href='core/logout.php'>Logout</a>";
    } else {
    ?>
    <table>
        <tr>
            <td>
                <form action="lesson14.php" method="POST">
                    <h3>POST</h3>
                    <p>Login: <input type="text" name="login"></p>
                    <p>Pasword: <input type="password" name="pass"></p>
                    <input type="submit" value="login">
                </form>
            </td>
        </tr>
    </table>
    <?php
        echo 'Please, put your login and password.';
    }    
    ?>
    </body>
</html>