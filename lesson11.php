<html>
    <head>
        <title>Lesson #11</title>
    </head>
    <body>
    <a href="index.php">MAIN MENU</a><hr>

    <h3>Include & Require</h3>

    <?php
        include "hello.php";        //include
        include_once "hello.php";   //will not include because the above is already include
        require_once "hello.php";   //require 
        require "hello.php";        //will not require because the above is already include
    ?>

    </body>
</html>