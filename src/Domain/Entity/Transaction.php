<?php
/**
 * File Transaction.php
 * 
 * PHP version 7
 */

 namespace SrPeaton\PerFin\Domain\Entity;

/**
 * Class Transaction
 * This class represents a single transaction between accounts belonging to a 
 * person, or from an account belonging to a person to an account belonging
 * to a different entity.
 * 
 * @category PHP 
 */
class Transaction extends AbstractEntity
{
    private $date;
    private $amount;
    private $accountFrom;
    private $accountTo = null;

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
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
     * @param float $amount
     * 
     * 
     */
    public function setAmount(float $amount = 0.0)
    {
        $this->amount = $amount;
        return $this;
    }
}