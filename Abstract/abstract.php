<?php

abstract class Provider
{
    abstract protected function getAuthorizationUrl();
}

class FacebookProvider extends Provider
{
    public function getAuthorizationUrl()
    {
        return 'Facebook';
    }
}

class GithubProvider extends Provider
{
    public function getAuthorizationUrl()
    {
        return 'Github';
    }
}

var_dump((new FacebookProvider())->getAuthorizationUrl());