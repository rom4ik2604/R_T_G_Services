<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Settings;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetAccountFieldsCreationGET extends RestExample
{
    /**
     * GetAccountFieldsCreationGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $result = $casino->SettingsService->getAccountFieldsCreationGET();

            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
