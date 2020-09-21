<?php

class Task {
    public $description;
    public $description2;
    public $completed = false;
    public $variedic;

    public function __construct($description, $description2, ...$variedic)
    {
        $this->description = $description;
        $this->description2 = $description2;
        $this->variedic = $variedic;
    }

    public function complete()
    {
        $this->completed = true;
    }

}

$task  = new Task('Learn new', 'The teacher', 'is a good man', 'mannequinn');
$task2 = new Task('good', 'boy');

var_dump($task);

// $task->complete();
// var_dump($task->completed);
// echo $task;
