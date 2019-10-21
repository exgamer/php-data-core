<?php
namespace concepture\php\data\core\db;

/**
 * Interface QueryBuilderInterface
 * @package concepture\php\core\contract\data
 * @author Olzhas Kulzhambekov <exgamer@live.ru>
 */
interface QueryBuilderInterface
{
    public function setSql(string $sql);
    public function setParams(array $params) ;
    public function getSql() : string;
    public function getParams() : array;
}
