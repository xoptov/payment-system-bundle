<?php

namespace Xoptov\PaymentSystemBundle\Model;

trait ExternalAccountTrait
{
    /** @var string */
    protected $wallet;

    /** @var PaymentSystemInterface */
    protected $paymentSystem;

    /**
     * @param string $wallet
     * @return ExternalAccountTrait
     */
    public function setWallet($wallet)
    {
        $this->wallet = $wallet;

        return $this;
    }

    /**
     * @return string
     */
    public function getWallet()
    {
        return $this->wallet;
    }

    /**
     * @param PaymentSystemInterface $paymentSystem
     * @return ExternalAccountTrait
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
}