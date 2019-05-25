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
        $request = $this->makeConnect("authLogin", $userData);
        if (isset($request->error)){
            return $request;
        }else{
            $_SESSION['userToken'] = $this->token = $request->result->token;
            return $this->token;
        }
    }

    /**
     * @param mixed $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }


}