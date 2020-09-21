<?php

class Person {
    protected $name = 45;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Business {
    protected $staff;

    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    // add person to the staff collection
    public function hire(Person $person)
    {
        $this->staff->add($person);         // sending messages to the staff class
    }

    public function getStaffMembers()
    {
        return $this->staff->members();
    }
}

class Staff {
    protected $members = [];

    public function __construct($members = [])
    {
        $this->members = $members;
    }

    public function add(Person $person)
    {
        $this->members[] = $person;
    }

    public function members()
    {
        return $this->members;
    }
}

$kazeem = new Person('Kazeem');
$bimpe = new Person('bimpe');
$staff = new Staff([$kazeem, $bimpe]);
$laracast = new Business($staff);
// $laracast->hire($kazeem);
// $laracast->hire(new Person('jane doe'));

var_dump($laracast->getStaffMembers());

// echo $kazeem->name;