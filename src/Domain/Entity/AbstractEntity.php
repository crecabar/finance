<?php
/**
 * File AbstractEntity.php
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
 * Class AbstractEntity
 *
 * @category PHP
 * @package  SrPeaton\PerFin\Domain\Entity
 * @author   Cristian Recabarren <cristian.recabarren@srpeaton.cl>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://www.srpeaton.cl
 */
abstract class AbstractEntity
{
    protected $id;

    /**
     * Method getId
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Method setId
     *
     * @param mixed $id It defines the id of an entity
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}
