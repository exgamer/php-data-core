<?php
namespace concepture\php\data\core\db;

/**
 * Interface ModifyQueryBuilderInterface
 * @package concepture\php\data\core\db
 */
interface ModifyQueryBuilderInterface
{
    public function makeInsertSql();
    public function makeUpdateSql();
    public function makeDeleteSql();
    public function makeCreateTableSql();
    public function makeDropTableSql();
    public function makeTruncateTableSql();
    public function makeRenameTableSql($name);
    public function makeAddColumnSql($name, $type, $options = "");
    public function makeDropColumnSql($name);
    public function makeRenameColumnSql($name, $new_name);
    public function makeModifyColumnSql($name, $type);
    public function makeRenameAndModifyColumnSql($name, $new_name, $type);
    public function makeCreateIndexSql($name, $columns, $type = "");
    public function makeDropIndexSql($name);
}
