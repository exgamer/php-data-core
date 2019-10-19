<?php
namespace concepture\php\data\core\db;

use concepture\php\data\core\data\DataModifyInterface as Base;
/**
 * Interface DataModifyInterface
 * @package concepture\php\core\contract\data
 * @author Olzhas Kulzhambekov <exgamer@live.ru>
 */
interface DataModifyInterface extends Base
{
    public function insert($data) : int ;
    public function update(array $condition, array  $data) : bool ;
    public function remove(array $id) : bool ;
}