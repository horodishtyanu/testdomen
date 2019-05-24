<?php
namespace classes\main;

use classes\transport\Connect;

class AuthUser
{
    private $token;

    /**
     * @return mixed
     */
    public function getToken($userData)
    {
        $connect = new Connect();
        $this->token = $connect->makeConnect("authLogin", $userData)->result->token;
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