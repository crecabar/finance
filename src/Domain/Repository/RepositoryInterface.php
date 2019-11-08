<?php
/**
 * File RepositoryInterface.php
 *
 * PHP version 7
 *
 * @category PHP
 * @package  SrPeaton\PerFin\Domain\Repository
 * @author   Cristian Recabarren <cristian.recabarren@srpeaton.cl>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://www.srpeaton.cl
 */

namespace SrPeaton\PerFin\Domain\Repository;

use SrPeaton\PerFin\Domain\Entity\AbstractEntity;

/**
 * Interface RepositoryInterface
 *
 * @category PHP
 * @package  SrPeaton\PerFin\Domain\Repository
 * @author   Cristian Recabarren <cristian.recabarren@srpeaton.cl>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://www.srpeaton.cl
 */
interface RepositoryInterface
{
    /**
     * Method getById
     *
     * @param mixed $id It defines the to search for
     *
     * @return mixed
     */
    public function getById($id);

    /**
     * Method getAll
     *
     * @return mixed
     */
    public function getAll();

    /**
     * Method persist
     *
     * @param AbstractEntity $entity It defines the entity to persist
     *
     * @return mixed
     */
    public function persist(AbstractEntity $entity);

    /**
     * Method begin
     *
     * @return mixed
     */
    public function begin();

    /**
     * Method commit
     *
     * @return mixed
     */
    public function commit();
}
