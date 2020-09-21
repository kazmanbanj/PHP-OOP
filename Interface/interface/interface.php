<?php

interface Animal
{
    public function communicate();
}

class Dog implements Animal
{
    public function communicate()
    {
        echo 'bark';
    }
}

class Cat implements Animal
{
    public function communicate()
    {
        return 'meow';
    }
}

$animal = new Dog;
echo $animal->communicate();