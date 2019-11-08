<?php
/**
 * File TransactionService.php
 *
 * PHP version 7
 *
 * @category PHP
 * @package  SrPeaton\PerFin\Domain\Service
 * @author   Cristian Recabarren <cristian.recabarren@srpeaton.cl>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://www.srpeaton.cl
 */

namespace SrPeaton\PerFin\Domain\Service;

use SrPeaton\PerFin\Domain\Repository\AccountRepositoryInterface;

/**
 * Class TransactionService
 *
 * PHP version 7
 *
 * @category PHP
 * @package  SrPeaton\PerFin\Domain\Service
 * @author   Cristian Recabarren <cristian.recabarren@srpeaton.cl>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://www.srpeaton.cl
 */
class TransactionService
{
    protected $accountRepository;

    /**
     * TransactionService constructor.
     *
     * @param AccountRepositoryInterface $accountRepository ""
     */
    public function __construct(
        AccountRepositoryInterface $accountRepository
    ) {
        $this->accountRepository = $accountRepository;
    }
}
