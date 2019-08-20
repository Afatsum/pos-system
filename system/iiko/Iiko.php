<?php

namespace PosSystem\system\iiko;

use PosSystem\Command;
use PosSystem\IAuthData;
use PosSystem\INomenclature;
use PosSystem\IOrderResponse;
use PosSystem\IPosSystem;
use PosSystem\PosSystemException;


/**
 * Class Iiko
 * @package PosSystem\system\iiko
 *
 * @property string $login
 * @property string $pass
 * @property string $orgId
 */
class Iiko implements IPosSystem
{
    private $login;
    private $pass;
    private $orgId;

    private $token;

    /**
     * Iiko constructor.
     * @param AuthData $authData
     * @throws PosSystemException
     */
    public function __construct(IAuthData $authData)
    {
        $this->login = $authData->getLogin();
        $this->pass = $authData->getPass();
        $this->orgId = $authData->getOrgId();

        $this->auth();
    }

    /**
     * @return bool
     * @throws PosSystemException
     */
    function auth(): bool
    {
        $command = new Command($this);
        $response = $command->curl_get('/auth/access_token', ['user_id' => $this->login, 'user_secret' => $this->pass]);
        $json = json_decode($response);
        if(isset($json->httpStatusCode) && $json->httpStatusCode != 200) {
            throw new PosSystemException('Ошибка авторизации', PosSystemException::AUTH_FAILED);
        }
        $this->token = $response;

        return true;
    }

    public function getBaseUrl(): string
    {
        return 'https://iiko.biz:9900/api/0';
    }

    /**
     * @return INomenclature
     * @throws PosSystemException
     */
    public function getNomenclature(): INomenclature
    {
        $revision = null; // когда тестил, она не работала

        $nomenclature = new Nomenclature();

        $command = new Command($this);
        $result = $command->curl_get('/nomenclature/' . $this->orgId, ['access_token' => $this->token, 'revision' => $revision]);
        $result = json_decode($result);
        if(isset($result->httpStatusCode)) {
            throw new PosSystemException('Не удалось загрузить номенклатуру', PosSystemException::NOMENCLATURE_FAILED);
        } else {
            $nomenclature->load($result);
        }

        return $nomenclature;
    }

    public function sendOrder(): IOrderResponse
    {

    }
}