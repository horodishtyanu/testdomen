<?php
namespace classes\main;

use classes\transport\Connect;

class AuthUser extends Connect
{
    private $token;

    /**
     * @return mixed
     */
    public function getToken($userData)
    {
        $this->token = $this->makeConnect("authLogin", $userData)->result->token;
        return $this->token;
    }

    /**
     * @param mixed $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }


}