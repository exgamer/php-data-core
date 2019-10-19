<?php
namespace concepture\php\data\core\db;

use concepture\php\core\base\Component;

/**
 * Class QueryBuilder
 * @package concepture\core\base
 * @author Olzhas Kulzhambekov <exgamer@live.ru>
 */
class QueryBuilder extends Component implements QueryBuilderInterface
{
    /**
     * @var string
     */
    protected $sql;

    /**
     * @var array
     */
    protected $params = [];

    /**
     * @param $sql
     * @return string
     */
    public function setSql($sql) : string
    {
        $this->sql = $sql;
    }

    /**
     * @param $params
     * @return array
     */
    public function setParams($params) : array
    {
        $this->params = $params;
    }

    /**
     * @return string
     */
    public function getSql() : string
    {
        return $this->sql;
    }

    /**
     * @return array
     */
    public function getParams() : array
    {
        return $this->params;
    }
}
