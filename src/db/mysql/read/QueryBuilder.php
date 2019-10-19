<?php
namespace concepture\php\data\core\db\mysql\read;

use concepture\php\data\core\db\QueryBuilder as Base;
use concepture\php\data\core\traits\GroupTrait;
use concepture\php\data\core\traits\JoinTrait;
use concepture\php\data\core\traits\LimitOffsetTrait;
use concepture\php\data\core\traits\OrderTrait;
use concepture\php\data\core\traits\SelectionTrait;
use concepture\php\data\core\traits\WhereTrait;

/**
 * Class QueryBuilder
 * @package concepture\php\query\base\read
 * @author Olzhas Kulzhambekov <exgamer@live.ru>
 */
class QueryBuilder extends Base
{
    use WhereTrait;
    use JoinTrait;
    use SelectionTrait;
    use OrderTrait;
    use LimitOffsetTrait;
    use GroupTrait;

    protected $calcRows = false;

    public function makeSelectSql()
    {
        $sql = "SELECT ";
        if ($this->calcRows){
            $sql .= " SQL_CALC_FOUND_ROWS ";
        }
        if (empty($this->select)){
            $sql .= "*";
        }else{
            $sql .= implode(",", $this->select);
        }
        $sql .= " FROM " . $this->table;
        if ($this->tableAlias){
            $sql .= " " . $this->tableAlias;
        }
        $sql .= " ". $this->makeJoinSql();
        $sql .= " ".$this->makeWhereSql();
        if ($this->group){
            $sql .= " GROUP BY ". $this->group;
        }
        if ($this->order){
            $sql .= " ORDER BY ". $this->order;
        }
        if ($this->limit){
            $sql .= " LIMIT ". $this->limit;
        }
        if ($this->offset){
            $sql .= " OFFSET ". $this->offset;
        }
        $this->sql = $sql;

        return $this;
    }

//    /**
//     * загружает ReadQuery
//     *
//     * @param ReadCondition $readQuery
//     */
//    public function applyReadQuery(ReadCondition $readQuery)
//    {
//        if (! empty($readQuery->getSelect())){
//            $this->select = $readQuery->getSelect();
//        }
//        if (! empty($readQuery->getJoin())){
//            $this->join = $readQuery->getJoin();
//        }
//        if (! empty($readQuery->getOrder())){
//            $this->order = $readQuery->getOrder();
//        }
//        if (! empty($readQuery->getTable())){
//            $this->table = $readQuery->getTable();
//        }
//        if (! empty($readQuery->getTableAlias())){
//            $this->tableAlias = $readQuery->getTableAlias();
//        }
//        if (! empty($readQuery->getWhere())){
//            $this->where = $readQuery->getWhere();
//        }
//        if (! empty($readQuery->getLimit())){
//            $this->limit = $readQuery->getLimit();
//        }
//        if (! empty($readQuery->getOffset())){
//            $this->offset = $readQuery->getOffset();
//        }
//        if (! empty($readQuery->getOrder())){
//            $this->order = $readQuery->getOrder();
//        }
//        if (! empty($readQuery->getGroup())){
//            $this->group = $readQuery->getGroup();
//        }
//        if (! empty($readQuery->getParams())){
//            $this->params = $readQuery->getParams();
//        }
//    }
}
