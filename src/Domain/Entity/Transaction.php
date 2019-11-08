<?php
/**
 * File Transaction.php
 *
 * PHP version 7
 *
 * @category PHP
 * @package  SrPeaton\PerFin\Domain\Entity
 * @author   Cristian Recabarren <cristian.recabarren@srpeaton.cl>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://www.srpeaton.cl
 */

namespace SrPeaton\PerFin\Domain\Entity;

use DateTime;

/**
 * Class Transaction
 * This class represents a single transaction between accounts belonging to a
 * person, or from an account belonging to a person to an account belonging
 * to a different entity.
 *
 * @category PHP
 * @package  SrPeaton\PerFin\Domain\Entity
 * @author   Cristian Recabarren <cristian.recabarren@srpeaton.cl>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://www.srpeaton.cl
 */
class Transaction extends AbstractEntity
{
    private $_date;
    private $_amount;
    private $_accountFrom;
    private $_accountTo;

    /**
     * Method getAccountFrom
     *
     * @return mixed
     */
    public function getAccountFrom()
    {
        return $this->_accountFrom;
    }

    /**
     * Method setAccountFrom
     *
     * @param Account $accountFrom It defines the source account for a transaction
     *
     * @return Transaction
     */
    public function setAccountFrom(Account $accountFrom)
    {
        $this->_accountFrom = $accountFrom;
        return $this;
    }

    /**
     * Method getAccountTo
     *
     * @return null
     */
    public function getAccountTo()
    {
        return $this->_accountTo;
    }

    /**
     * Method setAccountTo
     *
     * @param Account $accountTo It defines the destination account for a transaction
     *
     * @return Transaction
     */
    public function setAccountTo(Account $accountTo = null)
    {
        $this->_accountTo = $accountTo;
        return $this;
    }

    /**
     * Method getDate
     *
     * @return DateTime
     */
    public function getDate()
    {
        return $this->_date;
    }

    /**
     * Method setDate
     *
     * @param DateTime $_date It defines the date and time when a transaction occurs
     *
     * @return Transaction
     */
    public function setDate(DateTime $_date)
    {
        $this->_date = $_date;
        return $this;
    }

    /**
     * Method getAmount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->_amount;
    }

    /**
     * Method setAmount
     *
     * @param float $_amount It defines the amount in a transaction
     *
     * @return Transaction
     */
    public function setAmount(float $_amount = 0.0)
    {
        $this->_amount = $_amount;
        return $this;
    }
}
