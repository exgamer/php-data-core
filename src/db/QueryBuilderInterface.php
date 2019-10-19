<?php
namespace concepture\php\data\core\db;

/**
 * Interface QueryBuilderInterface
 * @package concepture\php\core\contract\data
 * @author Olzhas Kulzhambekov <exgamer@live.ru>
 */
interface QueryBuilderInterface
{
    public function setSql($sql) : string;
    public function setParams($params) : array;
    public function getSql() : string;
    public function getParams() : array;
}
