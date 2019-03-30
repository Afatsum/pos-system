<?php

namespace PosSystem\system\archiDelivery;

use PosSystem\IAuthData;
use PosSystem\IPosSystem;
use PosSystem\INomenclature;
use PosSystem\IOrderResponse;

/**
 * Class ArchiDelivery
 * @package PosSystem\system\archiDelivery
 *
 * @property string $login
 * @property string $pass
 * @property string $orgId
 */
class ArchiDelivery implements IPosSystem
{

    public function __construct(IAuthData $authData)
    {
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