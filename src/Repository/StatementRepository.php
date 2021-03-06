<?php

/*
 * This file is part of the xAPI package.
 *
 * (c) Christian Flothmann <christian.flothmann@xabbuh.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace XApi\Repository\Doctrine\Repository;

use XApi\Repository\Api\StatementRepository as BaseStatementRepository;
use XApi\Repository\Api\Mapping\MappedStatement;

/**
 * Doctrine based {@link Statement} repository.
 *
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
class StatementRepository extends BaseStatementRepository
{
    /**
     * @var MappedStatementRepository The statement repository
     */
    private $repository;

    public function __construct(MappedStatementRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * {@inheritDoc}
     */
    protected function findMappedStatement(array $criteria)
    {
        return $this->repository->findMappedStatement($criteria);
    }

    /**
     * {@inheritDoc}
     */
    protected function findMappedStatements(array $criteria)
    {
        return $this->repository->findMappedStatements($criteria);
    }

    /**
     * {@inheritDoc}
     */
    protected function storeMappedStatement(MappedStatement $mappedStatement, $flush)
    {
        $this->repository->storeMappedStatement($mappedStatement, $flush);
    }
}
