<?php
namespace concepture\php\data\core\db;

use concepture\php\core\base\Component;
use concepture\php\data\core\data\StorageInterface;
use concepture\php\data\core\db\traits\StorageModifyMethodsTrait;
use concepture\php\data\core\db\traits\StorageReadMethodsTrait;
use PDO;

/**
 * Class Storage
 * @package concepture\php\data\core\db
 * @author Olzhas Kulzhambekov <exgamer@live.ru>
 */
abstract class Storage extends Component implements StorageInterface, StorageQueryBuilderInterface, DataModifyInterface, DataReadInterface
{
    use StorageModifyMethodsTrait;
    use StorageReadMethodsTrait;

    /**
     * @var PDO
     */
    protected $connection;

    /**
     * @return PDO
     * @throws Exception
     */
    protected function getConnection() : PDO
    {
        if (! $this->connection){
            throw new Exception("Please set Db Connection");
        }
        return $this->connection;
    }

    /**
     * @return string
     */
    protected abstract function getTableName() : string ;
}