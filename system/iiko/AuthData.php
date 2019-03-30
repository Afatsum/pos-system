<?php

namespace PosSystem\system\iiko;

use PosSystem\IAuthData;

class AuthData implements IAuthData
{
    private $login = '';
    private $pass = '';
    private $orgId = '';

    public function __construct(string $login, string $pass, string $orgId)
    {
        $this->setLogin($login);
        $this->setPass($pass);
        $this->setOrgId($orgId);
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     */
    public function setLogin(string $login): void
    {
        $this->login = $login;
    }

    /**
     * @return string
     */
    public function getPass(): string
    {
        return $this->pass;
    }

    /**
     * @param string $pass
     */
    public function setPass(string $pass): void
    {
        $this->pass = $pass;
    }

    /**
     * @return string
     */
    public function getOrgId(): string
    {
        return $this->orgId;
    }

    /**
     * @param string $orgId
     */
    public function setOrgId(string $orgId): void
    {
        $this->orgId = $orgId;
    }
}