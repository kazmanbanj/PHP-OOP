<?php
class Math
{
    // public function sum()
    // {
        // return array_sum(func_get_args());       // new way is ...nums below
    // }

    public static function add(...$nums)        // using static doesn't require calling an instance
    {
        return array_sum($nums);
    }
}

// $math = new Math;
// var_dump($math->add(1,2,3,8,76));
// var_dump($math->sum(1,2,3,8,76));

//or

// var_dump(Math::add(1,2,34,5,6,8));
// echo Math::add(1,2,34,5,6,8);







// how static breaks encapsulation
class Person
{
    // public static $age = 1;
    public $age = 1;
    public function haveBirthday()
    {
        // static::$age += 1;
        $this->age += 1;
    }

    public function age()
    {
        return $this->age;
    }
}

$joe = new Person;
$joe->haveBirthday();
$joe->haveBirthday();
// echo Person::$age;
// echo $joe->age();

// static breaks encapsulation/enclosure here
$jane = new Person;
$jane->haveBirthday();
// echo Person::$age;           // instead we do this
// echo $jane->age();


// constant in place of static
class BankAccount
{
    // private static $tax = .09;           use const to make it unchangeable
    const TAX = .09;
}

// echo BankAccount::$tax;              //for the static method
echo BankAccount::TAX;