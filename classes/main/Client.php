<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 26.05.2019
 * Time: 18:55
 */

namespace classes\main;


use classes\transport\Connect;

class Client extends Connect
{
    private $clientId;
    public function registerClient($data){
        $request = $this->makeConnect("clientCreate", $data);
        if (isset($request->error)){
            return $request;
        }else{
            $_SESSION['clientID'] = $this->clientId = $request->result->token;
            return $this->clientId;
        }
    }
}