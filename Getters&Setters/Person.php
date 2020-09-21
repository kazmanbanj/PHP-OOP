<?php

class Person {
    private $name;
    private $age;
    
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age * 365;
    }

    public function setAge($age)
    {
        if ($age < 18) {
            throw new Exception("Persons under age 18 is not allowed");
        }
        $this->age = $age;
    }
}

$john = new Person('John Doe');
$john->setAge(30);
// $john->age = 4;   // leveraged encapsulation to overtook this
var_dump('john is ' . $john->getAge() . ' days old');