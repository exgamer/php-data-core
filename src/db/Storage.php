<?php
namespace concepture\php\data\core\db;

use concepture\php\core\base\Component;
use concepture\php\data\core\data\StorageInterface;
use concepture\php\data\core\db\traits\StorageModifyMethodsTrait;
use concepture\php\data\core\db\traits\StorageReadMethodsTrait;

/**
 * Class Storage
 * @package concepture\php\data\core\db
 * @author Olzhas Kulzhambekov <exgamer@live.ru>
 */
class Storage extends Component implements StorageInterface, StorageQueryBuilderInterface, DataModifyInterface, DataReadInterface
{
    use StorageModifyMethodsTrait;
    use StorageReadMethodsTrait;

    public function getReadQueryBuilder(): ReadQueryBuilderInterface
    {
        // TODO: Implement getReadQueryBuilder() method.
    }

    public function getModifyQueryBuilder(): ModifyQueryBuilderInterface
    {
        // TODO: Implement getModifyQueryBuilder() method.
    }
}