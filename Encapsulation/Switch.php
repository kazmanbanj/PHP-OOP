<?php

class LightSwitch {
    private $name = 'switch it on';
    public function on()
    {
        # code...
    }

    public function off()
    {
        # code...
    }

    public function connect()
    {
        return $this->name;
    }

    private function activate()
    {
        # code...
    }
}

class Off extends LightSwitch
{
    public function getArea()
    {
        # code...
    }
}


// $person = new LightSwitch();
// var_dump($person->connect());
// var_dump($person->name);

$person2 = new Off();
var_dump($person2->connect());

?>