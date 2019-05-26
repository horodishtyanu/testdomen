<?php
namespace classes\main;

use classes\transport\Connect;

class Domain extends Connect
{

    private $domainId;

    public function domainCreate($data){
        $request = $this->makeConnect("domainCreate", $data);
        if (isset($request->error)){
            return $request;
        }else{
            $this->domainId = $request->result->token;
            return $this->domainId;
        }
    }

}