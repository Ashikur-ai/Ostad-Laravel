<?php
class Person{
    private $Name, $Email;

    function __construct($name, $email){
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

echo $person->getName().PHP_EOL;

echo $person->getEmail();