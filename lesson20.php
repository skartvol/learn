<?php
class Person {

    public $name;
    public $age;

    public function __construct() {
        echo "Hello world!<br>";
    }

    public function getPersonInfo() {
        return "Name: ".$this->name.";<br> Age: ".$this->age."<br><br>";
    }
}

class Military extends Person {
    public $weapon;
    public $rank;

    public function __construct() {
        parent::__construct();
        echo "Ser, yes ser!<br><br>";
    }

    public function getPersonInfo() {
        return "Name: ".$this->name.";<br>Age: ".$this->age.";<br> Rank: ".$this->rank.";<br> Weapon: ".$this->weapon."<br><br>";
    }
}



class Teacher extends Person {
    public $book;
    public $classRoom;
    
    public function __construct() {
        echo "I will teach you<br><br>";
    }

    public function getPersonInfo() {
        return "Name: ".$this->name.";<br>Age: ".$this->age.";<br> Class Room: ".$this->classRoom.";<br> Book: ".$this->book."<br><br>";
    }
}

$personOne = new Person();
$personOne->name = 'Artem';
$personOne->age = 31;

$personTwo = new Military();
$personTwo->name = 'Sofiia';
$personTwo->age = 25;
$personTwo->rank = 'Sergeant';
$personTwo->weapon = 'Glock';

$personThree = new Teacher();
$personThree->name = 'Bogdan';
$personThree->age = 28;
$personThree->classRoom = 4;
$personThree->book = 'Mathematic';
?>

<html>
    <head>
        <title>Lesson #20</title>
    </head>
    <body>
    <a href="index.php">MAIN MENU</a><hr>

    <h3>Extends</h3>
    <?php
        echo $personOne->getPersonInfo();
        echo $personTwo->getPersonInfo();
        echo $personThree->getPersonInfo();
    ?>
    </body>
</html>
