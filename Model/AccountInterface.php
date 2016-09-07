<?php

namespace Xoptov\PaymentSystemBundle\Model;

interface AccountInterface
{
    /**
     * @return mixed
     */
    public function getId();

    /**
     * @param OwnerInterface $owner
     * @return AccountInterface
     */
    public function setOwner(OwnerInterface $owner);

    /**
     * @return OwnerInterface
     */
    public function getOwner();

    /**
     * @param float $balance
     * @return AccountInterface
     */
    public function setBalance($balance);

    /**
     * @return float
     */
    public function getBalance();

    /**
     * @return \DateTime
     */
    public function getCreatedAt();

    /**
     * @return \DateTime
     */
    public function getUpdatedAt();
}