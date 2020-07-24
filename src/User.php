<?php


namespace Spuyt;


class User
{
    private $user = [];

    public function __construct(
        string $displayName = null,
        string $email = null
    ) {

    }

    public function getUser()
    {

    }

    public function setDisplayName(string $name)
    {
        $this->user['name'] = $name;
    }

    public function getDisplayName()
    {
        return $this->user['name'];
    }

    public function setEmail(string $email)
    {
        $this->user['email'] = $email;
    }

    public function getEmail()
    {
        return $this->user['email'];
    }


}
