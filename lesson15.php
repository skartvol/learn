<html>
    <head>
        <title>Lesson #15</title>
    </head>
    <body>
    <a href="index.php">MAIN MENU</a><hr>

    <h3>COOKIE</h3>
    <table>
        <tr>
            <td>
                <form action="lesson15.php" method="POST">
                    <h3>Cookies</h3>
                    <p>Set coockie: <input type="text" name="cooka"></p>
                    <input type="submit" value="Set">
                </form>
            </td>
        </tr>
    </table>
    <?php
    if(isset($_POST['cooka'])){
        setcookie('myCookies',$_POST['cooka'], time()+3600);
    }
    ?>
    <div>
        <p>Your cookie: <?=isset($_COOKIE['myCookies'])?$_COOKIE['myCookies']:null?></p>
        <p><a href="/core/delete-cookies.php">Delete Cookies</a></p>
    </div>
    </body>
</html>