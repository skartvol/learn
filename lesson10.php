<html>
    <head>
        <title>Lesson #10</title>
    </head>
    <body>
        <a href="index.php">MAIN MENU</a><hr>
        <h3>Arithmetic mean</h3>
        <p>Please enter your numbers through a comma.</p>
        
        <form action="lesson10.php" method="get">
            <input type="text" name="nums">
            <input type="submit" value="OK">
        </form>
        <?php
        if(isset($_GET['nums']) AND !empty($_GET['nums'])) {
            $nums = explode(',',$_GET['nums']);
            $numsCount = 0;
            $result = null;
            foreach($nums as $num) {
                if(is_numeric($num)){
                    $result += $num;
                    $numsCount++;
                }
            }
            echo 'Your result: '.$result/$numsCount;
        } else {
            echo 'Please, enter info.';
        }
        ?>

    </body>
</html>