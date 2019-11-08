<?php
/**
 * File Account.php
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

/**
 * Class Account
 *
 * @category PHP
 * @package  SrPeaton\PerFin\Domain\Entity
 * @author   Cristian Recabarren <cristian.recabarren@srpeaton.cl>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://www.srpeaton.cl
 */
class Account extends AbstractEntity
{
    private $_accountType;

    /**
     * Method getAccountType
     *
     * @return mixed
     */
    public function getAccountType()
    {
        return $this->_accountType;
    }

    /**
     * Method setAccountType
     *
     * @param AccountType $_accountType Defines the type of account
     *
     * @return $this
     */
    public function setAccountType(AccountType $_accountType)
    {
        $this->_accountType = $_accountType;
        return $this;
    }
}
