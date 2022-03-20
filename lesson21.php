<?php
abstract class Person {

    public $name;
    public $age;

    public function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    abstract public function getPersonInfo();
}

interface WorkInterface {
    function goToWork();
    function goToHome();
}

interface FireInterface {
    function startFire();
    function stopFire();
}

class Military extends Person implements FireInterface{
    public $weapon;
    public $rank;
    private $status = "Do not shoot!";

    public function __construct($name,$age) {
        parent::__construct($name, $age);
        echo "Ser, yes ser!<br><br>";
    }

    public function getPersonInfo() {
        return "Name: ".$this->name.";<br>Age: ".$this->age.";<br> Rank: ".$this->rank.";<br> Weapon: ".$this->weapon."<br>The last command: " . $this->getStatus() . "<br><br>";
    }

    public function getStatus() {
        return $this->status;
    }

    public function startFire() {
        $this->status = 'Fire!!!';
    }

    public function stopFire() {
        $this->status = "Do not shoot!";
    }
}



class Teacher extends Person implements WorkInterface {
    public $book;
    public $classRoom;
    private $whereIAm = "I'm at home<br>";
    
    public function __construct($name, $age) {
        parent::__construct($name, $age);
        echo "I will teach you<br><br>";
    }

    public function getPersonInfo() {
        return "Name: ".$this->name.";<br>Age: ".$this->age.";<br> Class Room: ".$this->classRoom.";<br> Book: ".$this->book."<br>" . $this->getMyLocation() . "<br>";
    }

    public function goToWork() {
        $this->whereIAm = "I'm at work<br>";
    }

    public function goToHome() {
        $this->whereIAm = "I'm at home<br>";
    }

    public function getMyLocation() {
        return "My location now: " . $this->whereIAm;
    }
}

$personTwo = new Military('Stephan',25);
$personTwo->rank = 'Sergeant';
$personTwo->weapon = 'Glock';

$personThree = new Teacher('Bogdan',33);
$personThree->classRoom = 4;
$personThree->book = 'Mathematic';
$personThree->goToWork();
?>

<html>
    <head>
        <title>Lesson #20</title>
    </head>
    <body>
    <a href="index.php">MAIN MENU</a><hr>

    <h3>Extends</h3>
    <?php
        echo $personTwo->getPersonInfo();
        echo $personThree->getPersonInfo();
    ?>
    </body>
</html>
