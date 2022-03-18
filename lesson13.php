<html>
    <head>
        <title>Lesson #13</title>
    </head>
    <body>
    <a href="index.php">MAIN MENU</a><hr>

    <h3>GET & POST</h3>

    <table>
        <tr>
            <td>
                <form action="lesson13.php" method="GET">
                    <h3>GET</h3>
                    <p>Login: <input type="text" name="login"></p>
                    <p>Pasword: <input type="password" name="pass"></p>
                    <input type="submit" value="login">
                </form>
            </td>
            <td>
                <form action="lesson13.php" method="POST">
                    <h3>POST</h3>
                    <p>Login: <input type="text" name="login"></p>
                    <p>Pasword: <input type="password" name="pass"></p>
                    <input type="submit" value="login">
                </form>
            </td>
        </tr>
    </table>

    <?php
    function loginPass ($login, $pass) {
        echo 'Login : '.$login.'<br>';
        echo 'Password : '.$pass.'<br>';
    }

    if(isset($_GET['login']) && isset($_GET['pass'])) {
        echo 'Method GET<br>';
        loginPass($_GET['login'],$_GET['pass']);
    } elseif(isset($_POST['login']) && isset($_POST['pass'])) {
        echo 'Method POST<br>';
        loginPass($_POST['login'],$_POST['pass']);
    } else {
        echo 'Please, put your login and password.';
    }

    
    ?>

    </body>
</html>