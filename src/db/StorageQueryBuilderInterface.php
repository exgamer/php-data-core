<?php
namespace concepture\php\data\core\db;

/**
 * Interface ReadQueryBuilderInterface
 * @package concepture\php\data\core\db
 * @author Olzhas Kulzhambekov <exgamer@live.ru>
 */
interface StorageQueryBuilderInterface
{
    public function getReadQueryBuilder() : ReadQueryBuilderInterface;
    public function getModifyQueryBuilder() : ModifyQueryBuilderInterface;
}
