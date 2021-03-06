<?php

namespace denbora\R_T_G_Services\examples\SOAP\Security;

use denbora\R_T_G_Services\casino\Casino;

class CreateGameRestrictedTokenByApp
{
    /**
     * CreateGameRestrictedTokenByApp constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, Casino $casino)
    {
        try {
            $playerService = $casino->getService($service);

            $data = array(
                'PID' => '10025624',
                'ApplicationName' => 'Web Cashier'
            );

            $result = $playerService->call($method, $data);
            echo "<pre>";
            var_dump($result);
            echo "</pre>";
        } catch (\Exception $e) {
            echo "<pre>";
            var_dump($e);
            echo "</pre>";
        }
    }
}
