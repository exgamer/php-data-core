<?php
namespace concepture\php\data\core\db\mysql;

use concepture\php\data\core\db\ModifyQueryBuilderInterface;
use concepture\php\data\core\db\mysql\read\QueryBuilder as ReadQueryBuilder;
use concepture\php\data\core\db\mysql\modify\QueryBuilder as ModifyQueryBuilder;
use concepture\php\data\core\db\ReadQueryBuilderInterface;
use concepture\php\data\core\db\Storage as Base;

/**
 * Class Storage
 * @package concepture\php\data\core\db
 * @author Olzhas Kulzhambekov <exgamer@live.ru>
 */
abstract class Storage extends Base
{
    /**
     * @return ReadQueryBuilderInterface
     */
    public function getReadQueryBuilder(): ReadQueryBuilderInterface
    {
        return new ReadQueryBuilder();
    }

    /**
     * @return ModifyQueryBuilderInterface
     */
    public function getModifyQueryBuilder(): ModifyQueryBuilderInterface
    {
        return new ModifyQueryBuilder();
    }
}