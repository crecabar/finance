<?php
/**
 * File Account.php
 *
 * PHP version 7
 */

namespace SrPeaton\PerFin\Domain\Entity;

/**
 * Class Account
 * @category PHP
 */
class Account extends AbstractEntity
{
    private $accountType;

    public function getAccountTyoe()
    {
        return $this->accountType;
    }

    public function setAccountType(AccountType $accountType)
    {
        $this->accountType = $accountType;
        return $this;
    }
}
