<?php
class Person {

    public $name;
    public $age;

    public function __construct($name = 'Anonim', $age = 0) {
        $this->name = $name;
        $this->age = $age;
    }

    public function __destruct() {
        echo "<hr><br>Goodbye ".$this->name;
    }

    public function getPersonInfo() {
        return "Name: ".$this->name.", age: ".$this->age;
    }
}

$personOne = new Person();
$personOne->name = 'Artem';
$personOne->age = 31;

$personTwo = new Person();
$personTwo->name = 'Sofiia';

$personThree = new Person();
?>

<html>
    <head>
        <title>Lesson #19</title>
    </head>
    <body>
    <a href="index.php">MAIN MENU</a><hr>

    <h3>Construct, destruct</h3>
    <?php
    echo $personOne->getPersonInfo()."<br>";
    echo $personTwo->getPersonInfo()."<br>";
    echo $personThree->getPersonInfo();
    ?>
    </body>
</html>
