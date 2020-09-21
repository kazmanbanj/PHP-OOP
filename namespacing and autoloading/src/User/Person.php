<?php

namespace Testing\User;

class Person {
    protected $name = 45;

    public function __construct($name)
    {
        $this->name = $name;
    }
}