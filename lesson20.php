<?php
class Person {

    public $name;
    public $age;

    public function getPersonInfo() {
        return "Name: ".$this->name.", age: ".$this->age;
    }

}

$personOne = new Person();
$personOne->name = 'Artem';
$personOne->age = 31;

$personTwo = new Person();
$personTwo->name = 'Sofiia';
$personTwo->age = 25;

$personThree = new Person();
$personThree->name = 'Bogdan';
$personThree->age = 28;
?>

<html>
    <head>
        <title>Lesson #20</title>
    </head>
    <body>
    <a href="index.php">MAIN MENU</a><hr>

    <h3>Class, OOP</h3>
    <?php
    echo $personOne->getPersonInfo()."<br>";
    echo $personTwo->getPersonInfo()."<br>";
    echo $personThree->getPersonInfo();
    ?>
    </body>
</html>
