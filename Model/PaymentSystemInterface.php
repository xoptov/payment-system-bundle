<?php

namespace Xoptov\PaymentSystemBundle\Model;

interface PaymentSystemInterface
{
    /**
     * @return mixed
     */
    public function getId();

    /**
     * @param string $name
     * @return PaymentSystemInterface
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $url
     * @return PaymentSystemInterface
     */
    public function setUrl($url);

    /**
     * @return string
     */
    public function getUrl();
}