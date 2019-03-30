<?php

namespace PosSystem\system\rKeeper;

use PosSystem\IAuthData;
use PosSystem\IPosSystem;
use PosSystem\INomenclature;
use PosSystem\IOrderResponse;

/**
 * Class RKeeper
 * @package PosSystem\system\rKeeper
 */
class RKeeper implements IPosSystem
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