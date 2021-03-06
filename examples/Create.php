<?php

namespace denbora\R_T_G_Services\examples;

use denbora\R_T_G_Services\casino\Casino;
use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class Create
{
    public static function printForm()
    {
        echo file_get_contents('form/form.html');
    }

    /**
     * @param $data
     * @param Casino $casino
     * @throws R_T_G_ServiceException
     */
    public static function savePlayer($data, Casino $casino)
    {
        if ($data["Password"] === $data["Password-repeat"]) {
            unset($data["Password-repeat"]);
        } else {
            echo "error";
        }

        $createData = array(
            'Player' => $data,
            'ThirdPartyDataSync' => false,
            'UserID' => 0,
            'MapToAffID' => false,
            'CalledFromCasino' => false
        );

        $playerService = $casino->getService('Player');

        $result = $playerService->call('savePlayer', $createData);

        echo "<pre>";
        var_dump($result);
    }

    /**
     * @return CasinoRestV2
     * @throws R_T_G_ServiceException
     */
    public static function createCasinoRESTv2(): CasinoRestV2
    {
        $credsPath = __DIR__ . '/../experiments/config_project/creds/';
        $config = json_decode(file_get_contents(__DIR__ . '/../experiments/config_project/links/config.json'), true);

        //TODO: create variables for creating object

        $restBaseUrl = $config['url.rest'];
        $certificate =  $credsPath . $config['crt'];
        $key = $credsPath . $config['key'];
        $password = $config['pass'];

        return new CasinoRestV2($restBaseUrl, $certificate, $key, $password);
    }
}
