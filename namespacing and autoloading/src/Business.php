<?php

namespace Testing;

use Testing\Staff;
use Testing\User\Person;

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
