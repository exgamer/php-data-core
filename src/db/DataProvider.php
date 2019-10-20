<?php
namespace concepture\php\data\core\db;

use concepture\php\data\core\provider\DataProvider as Base;
use Exception;

/**
 * Class DataProvider
 * @package concepture\php\data\core\db
 * @author Olzhas Kulzhambekov <exgamer@live.ru>
 */
class DataProvider extends Base
{
    /**
     * @return Storage
     */
    public function getStorage()
    {
        throw new Exception("realize to get storage from logic");
    }

    /**
     * @return string
     */
    protected function getDataReceiverClass(): string
    {
        return DataReceiver::class;
    }
}