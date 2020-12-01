<?php

// this is an interface, contract or abstract
interface ConnectionInterface
{
    public function connect();
}

// low level module(DbConnection) depends on an interface/abstraction(ConnectionInterface)
class DbConnection implements ConnectionInterface
{
    public function connect()
    {
        # code...
    }
}

// high level module(PasswordReminder) depends upon the abstraction(ConnectionInterface)
class PasswordReminder      // High level modules
{
    private $dbConnection;
    public function __construct(ConnectionInterface $dbConnection)      // MYSQLConnection is low level modules
    {
        $this->dbConnection = $dbConnection;
    }
};


