<?php

namespace Xoptov\PaymentSystemBundle\Model;

abstract class Account implements AccountInterface
{
    /** @var mixed */
    protected $id;

    /** @var OwnerInterface */
    protected $owner;

    /** @var float */
    protected $balance;

    /** @var \DateTime */
    protected $createdAt;

    /** @var \DateTime */
    protected $updatedAt;

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
    public function setOwner(OwnerInterface $owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * {@inheritdoc}
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * {@inheritdoc}
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * {@inheritdoc}
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}