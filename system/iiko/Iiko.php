<?php

namespace PosSystem\system\iiko;

use PosSystem\IAuthData;
use PosSystem\INomenclature;
use PosSystem\IOrderResponse;
use PosSystem\IPosSystem;


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

    /**
     * Iiko constructor.
     * @param IAuthData $authData
     */
    public function __construct(IAuthData $authData)
    {
        $this->login = $authData->getLogin();
        $this->pass = $authData->getPass();
        $this->orgId = $authData->getOrgId();

        $this->auth();
    }

    function auth(): bool
    {

    }

    public function getBaseUrl(): string
    {

    }

    public function getNomenclature(): INomenclature
    {

    }

    public function sendOrder(): IOrderResponse
    {

    }
}