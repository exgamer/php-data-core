<?php
namespace concepture\php\data\core\db;

use concepture\php\data\core\provider\DataProvider as Base;

/**
 * Class DataProvider
 * @package concepture\php\data\core\db
 * @author Olzhas Kulzhambekov <exgamer@live.ru>
 */
class DataProvider extends Base
{
    /**
     * @return string
     */
    protected function getDataReceiverClass(): string
    {
        return DataReceiver::class;
    }
}