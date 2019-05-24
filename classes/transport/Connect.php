<?php
namespace classes\transport;


class Connect
{
    private  $URL;

    /**
     * Connect constructor.
     */
    public function __construct()
    {
       $this->URL = "https://vrdemo.virtreg.ru/vr-api?method=";
    }


    public function makeConnect($method, $params){
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $this->getURL().$method."&params=".$params,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
        ]);
        $response = curl_exec($curl);
        curl_close($curl);
        if ($response){
            return json_decode($response);
        }else{
            return curl_error($curl);
        }


    }


    /**
     * @return string
     */
    public function getURL()
    {
        return $this->URL;
    }

    /**
     * @param string $URL
     */
    public function setURL($URL)
    {
        $this->URL = $URL;
    }

}