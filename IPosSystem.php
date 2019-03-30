<?php

namespace PosSystem;

interface IPosSystem {
    public function __construct(IAuthData $authData);

    function auth(): bool;

    public function getBaseUrl(): string;
    public function getNomenclature(): INomenclature;
    public function sendOrder(): IOrderResponse;
}