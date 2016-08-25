<?php

namespace Xoptov\PaymentSystemBundle\Model;

abstract class Transaction
{
    /** @var mixed */
    protected $id;

    /** @var AccountInterface */
    protected $source;

    /** @var AccountInterface */
    protected $destination;

    /** @var float */
    protected $amount;

    /** @var int */
    protected $status;

    /** @var \DateTime */
    protected $createdAt;

    /** @var \DateTime */
    protected $updatedAt;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param AccountInterface $source
     * @return Transaction
     */
    public function setSource(AccountInterface $source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @return AccountInterface
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param AccountInterface $destination
     * @return Transaction
     */
    public function setDestination(AccountInterface $destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * @return AccountInterface
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param float $amount
     * @return Transaction
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int $status
     * @return Transaction
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}