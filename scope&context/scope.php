<?php

interface RespondsToUserRegistration {
    public function userRegisteredSuccessfully();
    public function userRegisteredFailed();
    public function userRegisteredPending();
}

class RegisterUser
{
    public function execute(array $data, RespondsToUserRegistration $listener)
    {
        var_dump('Registering the user');

        $listener->userRegisteredSuccessfully();
        $listener->userRegisteredFailed();
        $listener->userRegisteredPending();
    }
}

class AuthController implements RespondsToUserRegistration
{
    protected $registration;
    public function __construct(RegisterUser $registration)   // constructor injection
    {
        $this->registration = $registration;
    }

// for method injection: public function register(RegisterUser $registration) -if d obj is referenced in a single controller method
    public function register()
    {
        $this->registration->execute([], $this);
    }

    public function userRegisteredSuccessfully()
    {
        var_dump('created successfully, redirect somewhere');
    }

    public function userRegisteredFailed()
    {
        var_dump('created unsuccessfully, redirect back');
    }

    public function userRegisteredPending()
    {
        var_dump('registration pending');
    }
}

// this is used to access the constructor injection
$register = new RegisterUser;
$auth = new AuthController($register);
$auth->register();             


// this is used to access the method injection
// (new AuthController)->register(new AuthController);