<?php

namespace Xoptov\PaymentSystemBundle\Model;

abstract class Credential
{
    /** @var mixed */
    protected $id;

    /** @var AccountInterface */
    protected $account;

    /** @var PaymentSystemInterface */
    protected $paymentSystem;

    /** @var string */
    protected $login;

    /** @var string */
    protected $password;

    /** @var string */
    protected $token;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param AccountInterface $account
     * @return Credential
     */
    public function setAccount(AccountInterface $account)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * @return AccountInterface
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param PaymentSystemInterface $paymentSystem
     * @return Credential
     */
    public function setPaymentSystem(PaymentSystemInterface $paymentSystem)
    {
        $this->paymentSystem = $paymentSystem;

        return $this;
    }

    /**
     * @return PaymentSystemInterface
     */
    public function getPaymentSystem()
    {
        return $this->paymentSystem;
    }

    /**
     * @param string $login
     * @return Credential
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param string $password
     * @return Credential
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $token
     * @return Credential
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }
}