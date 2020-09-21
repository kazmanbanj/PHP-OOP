<?php
// require 'src/User/Person.php';
// require 'src/Business.php';
// require 'src/Staff.php';

use Testing\Staff;
use Testing\Business;
use Testing\User\Person;

$kazeem = new Person('Kazeem banj');
$staff = new Staff([$kazeem]);
$laracasts = new Business($staff);

$laracasts->hire(new Person('Jane Doe'));
var_dump($laracasts->getStaffMembers()); 