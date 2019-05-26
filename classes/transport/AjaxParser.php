<?php
namespace classes\transport;
use classes\main\AuthUser;
use classes\main\Client;
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
            case 'newDomain':
                parse_str($data['data'], $res);

                $queryClient = [
                    "auth" => ["token" => $_SESSION['userToken']],
                    "client" => [
                        "legal" => $res['legal'],
                        "nameLocal" => $res['nameLocal'],
                        "birthday" => $res['birthday'],
                        "identity" => [
                            "type" => $res['type'],
                            "series" => $res['series'],
                            "number" => $res['number'],
                            "issuer" => $res['issuer'],
                            "issued" => $res['issued'],
                        ],
                        "emails" => [$res['emails']],
                        "phones" => [$res['phones']],
                        "addressLocal" => [
                            "index" => $res['index'],
                            "country" => $res['country'],
                            "city" => $res['city'],
                            "street" => $res['street'],
                        ]
                    ]
                ];
                $client = new Client();
                $clientId = $client->registerClient(json_encode((object)$queryClient));
                if (isset($clientId->error)) {
                    return json_encode($clientId);
                }

                $queryDomain = [
                    "auth" => ["token" => $_SESSION['userToken']],
                    "clientId" => $clientId,
                    "domain" => [
                        "name" => $res['name'],
                        "comment" => $res['comment']
                    ]
                ];
                $domain = new Domain();

                $newDomain = $domain->domainCreate($queryDomain);
                if (isset($newDomain->error)) {
                    return json_encode($newDomain);
                }else
                    return true;


        }
    }
}
?>