<?php
if(!isset($_SESSION))
    session_start();
?>
<html>
    <head>
        <title>Lesson #17</title>
    </head>
    <body>
    <a href="index.php">MAIN MENU</a><hr>

    <h3>Robota z plikami</h3>
    <table>
        <tr>
            <td>
                <form action="lesson17.php" method="POST">
                    <p>Imię: <input type="text" name="name"></p>
                    <input type="submit" value="Set">
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <p>Imiona</p>
                <?php
                if(isset($_POST['name']) and is_string($_POST['name'])) {
                    $file = fopen('core/names.txt','a');
                    fwrite($file, $_POST['name'] . "\n");
                    fclose($file);
                }
                if(file_exists('core/names.txt')) {
                    $file = file('core/names.txt');
                    foreach($file as $name) {
                        echo $name."<br>";
                    }
                }
                ?>
            </td>
        </tr>
        </table>
    </body>
</html>