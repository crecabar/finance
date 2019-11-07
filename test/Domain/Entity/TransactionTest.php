<?php
/**
 * @file   TransactionTest.php
 * @author crecabarren
 * @date   08-11-2016
 * @time   15:47
 */

/**
 * Class TransactionTest
 * @package SrPeaton\PerFin\Domain\Entity
 * @author crecabarren
 */
namespace Test\PerFin\Domain\Entity;

use PHPUnit\Framework\TestCase;
use SrPeaton\PerFin\Domain\Entity\Transaction;

class TransactionTest extends TestCase
{
    public function testTrue()
    {
        $transaction = new Transaction();
        $this->assertTrue(true);  
    }
}
