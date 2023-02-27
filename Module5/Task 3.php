<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

</body>
</html>

<?php
class Person{
    private $Name, $Email;

    function __construct($name="", $email=""){
        $this->Name = $name;
        $this->Email = $email;
    }

    function setName($name){
        $this->Name = $name;
    }

    function setEmail($email){
        $this->Email = $email;
    }

    function getName(){
        return $this->Name;
    }

    function getEmail(){
        return $this->Email;
    }
}

$person = new Person("Ashikur", "ashikur1602@gmail.com");

$person2 = new Person();

$person2->setName($_POST["name"]);
$person2->setEmail($_POST["email"]);

echo $person2->getName().PHP_EOL;
echo $person2->getEmail();