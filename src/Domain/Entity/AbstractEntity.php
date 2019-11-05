<?php
/**
 * File AbstractEntity.php
 * 
 * PHP version 7
 */

 namespace SrPeaton\PerFin\Domain\Entity;

/**
 * Class AbstractEntity
 * 
 * @category PHP
 */
abstract class AbstractEntity
{
    protected $id;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}