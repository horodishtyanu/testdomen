<?php
namespace classes\transport;
use classes\main\AuthUser;
use classes\main\Domain;

class AjaxParser
{

    /**
     * AjaxParser constructor.
     */
    public static function parser($data){
        switch ($data['event']){
            case 'login':
                parse_str($data['data'], $res);
                $authUser = new AuthUser();
                $result = $authUser->getToken(json_encode((object)$res));
                if (isset($result->error)) {
                    return json_encode($result);
                }
                else {
                    return true;
                }
        }
    }
}
?>