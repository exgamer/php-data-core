<?php
namespace concepture\php\data\core\contract\db;

use concepture\php\data\core\data\DataReadInterface as Base;

/**
 * Interface DataReadInterface
 * @package concepture\php\core\contract\data
 * @author Olzhas Kulzhambekov <exgamer@live.ru>
 */
interface DataReadInterface extends Base
{
    public function oneById(int $id, array $condition = null) : array ;
    public function oneByCondition(array $condition) : array;
    public function allByIds(array $ids, array $condition = null) : array;
    public function allByCondition(array $condition) : array;
}
