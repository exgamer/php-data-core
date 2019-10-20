<?php
namespace concepture\php\data\core\db;

/**
 * Interface ReadQueryBuilderInterface
 * @package concepture\php\data\core\db
 */
interface ReadQueryBuilderInterface  extends QueryBuilderInterface
{
    public function makeSelectSql();
}
