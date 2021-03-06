<?php

namespace denbora\R_T_G_Services\responses;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class PlayerResponse extends BaseResponse implements SoapResponseInterface
{
    /**
     * @param $response
     * @return mixed
     */
    public function rawResponse($response)
    {
        return $response;
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getPlayer($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return bool
     * @throws R_T_G_ServiceException
     */
    public function activatePlayer($response)
    {
        return $this->validate($response, 'Activate Player Error');
    }

    /**
     * @param $response
     * @return bool
     * @throws R_T_G_ServiceException
     */
    public function banPlayer($response)
    {
        return $this->validate($response, 'Ban Player Error');
    }

    public function changePasswordWithToken($response)
    {
        return $response;
    }

    /**
     * @param $response
     * @return bool
     * @throws R_T_G_ServiceException
     */
    public function changePlayerClass($response)
    {
        return $this->validate($response, 'Change Player Class Error');
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function createPlayer($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function createPlayerAndToken($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return bool
     * @throws R_T_G_ServiceException
     */
    public function deactivatePlayer($response)
    {
        return $this->validate($response, 'Error in deactivatePlayer');
    }

    /**
     * @param $response
     * @return bool
     * @throws R_T_G_ServiceException
     */
    public function deactivateAndLogoutPlayer($response)
    {
        return $this->validate($response, 'Error in deactivateAndLogoutPlayer');
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function forgotPassword($response)
    {
        return $this->getMessage($response);
    }

    /**
     * @param $response
     * @return mixed
     */
    public function forgotUsername($response)
    {
        return $response;
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getAdjustedNetWinbyPID($response)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        return $this->getDataFields($response, 'decimal', $errorPrefix);
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getNonCashTotalbyPID($response)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        return $this->getDataFields($response, 'decimal', $errorPrefix);
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getNonCashTotalbyPIDandDate($response)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        return $this->getDataFields($response, 'decimal', $errorPrefix);
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getPID($response)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        return $this->getDataFields($response, 'string', $errorPrefix);
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getPlayerClass($response)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        return $this->getDataFields($response, 'PlayerClass', $errorPrefix);
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getPlayers($response)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        return $this->getDataFields($response, 'Player', $errorPrefix);
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getPlayersActiveSessions($response)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        return $this->getDataFields($response, 'PlayerActiveSession', $errorPrefix);
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getPlayersDelta($response)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        return $this->getDataFields($response, 'Player', $errorPrefix);
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getPlayerPasscode($response)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        return $this->getDataFields($response, 'string', $errorPrefix);
    }

    /**
     * @param $response
     * @return bool
     * @throws R_T_G_ServiceException
     */
    public function resetPassword($response)
    {
        return $this->validate($response, 'Reset Password Error');
    }

    /**
     * @param $response
     * @return bool
     * @throws R_T_G_ServiceException
     */
    public function unBanPlayer($response)
    {
        return $this->validate($response, 'Unban Player Error');
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function updatePlayer($response)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        return $this->getDataFields($response, 'Player', $errorPrefix);
    }

    /**
     * @param $response
     * @return bool
     * @throws R_T_G_ServiceException
     */
    public function validateCredentials($response)
    {
        return $this->validate($response, 'Validate Credentials Error');
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getLedgerInformation($response)
    {
        return $response;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getAuditTrailReport($response)
    {
        return $response;
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function savePlayer($response)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        return $this->getDataFields($response, 'string', $errorPrefix);
    }

    public function logout($response)
    {
        return $response;
    }
}
