<?php

namespace denbora\R_T_G_Services\examples\REST\Casino;

use denbora\R_T_G_Services\casino\CasinoRest;

class GetSkins
{
    public function __construct(CasinoRest $casino)
    {
        try {
            $query = '';
            $result = $casino->casino->getSkins($query);

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
