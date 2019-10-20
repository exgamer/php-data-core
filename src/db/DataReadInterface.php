<?php
namespace concepture\php\data\core\db;

use concepture\php\data\core\data\DataReadInterface as Base;

/**
 * Interface DataReadInterface
 * @package concepture\php\core\contract\data
 * @author Olzhas Kulzhambekov <exgamer@live.ru>
 */
interface DataReadInterface extends Base
{
    public function oneById(int $id, $condition = null) : array ;
    public function oneByCondition($condition) : array;
    public function allByIds(array $ids, $condition = null) : array;
    public function allByCondition($condition) : array;
}
