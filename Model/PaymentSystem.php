<?php

namespace Xoptov\PaymentSystemBundle\Model;

abstract class PaymentSystem implements PaymentSystemInterface
{
    /** @var mixed */
    protected $id;

    /** @var string */
    protected $name;

    /** @var string */
    protected $url;

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function setUrl($url)
    {
        $this->$url = $url;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl()
    {
        return $this->url;
    }
}