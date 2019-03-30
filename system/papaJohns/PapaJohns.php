<?php

namespace PosSystem\system\papaJohns;

use PosSystem\IAuthData;
use PosSystem\IPosSystem;
use PosSystem\INomenclature;
use PosSystem\IOrderResponse;

/**
 * Class PapaJohns
 * @package PosSystem\system\papaJohns
 */
class PapaJohns implements IPosSystem
{

    public function __construct(IAuthData $authData)
    {
        $this->auth();
    }

    function auth(): bool
    {
        return true;
    }

    public function getBaseUrl(): string
    {
        return '';
    }

    public function getNomenclature(): INomenclature
    {
        
    }

    public function sendOrder(): IOrderResponse
    {

    }
}