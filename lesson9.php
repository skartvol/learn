<html>
    <head>
        <title>Lesson #9</title>
    </head>
    <body>
    <a href="index.php">MAIN MENU</a><hr>

    <?php
        $tabs = ['Adam','Artem','Bogdan','Jakub'];
        foreach ($tabs as $tab) {
            echo $tab.'<br>';
        }
        foreach ($tabs as $key => $tab) {
            echo $key.' => '.$tab.'<br>';
        }
    ?>

    </body>
</html>