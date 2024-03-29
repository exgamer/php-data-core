<?php
namespace concepture\php\data\core\db\traits;

/**
 * Trait LimitOffsetTrait
 * @package concepture\php\data\core\traits
 * @author Olzhas Kulzhambekov <exgamer@live.ru>
 */
trait LimitOffsetTrait
{
    protected $limit = "";
    protected $offset = "";

    public function limit($limit)
    {
        $this->limit = (int) $limit;

        return $this;
    }

    public function offset($offset)
    {
        $this->offset = (int) $offset;

        return $this;
    }

    /**
     * @return null
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @return null
     */
    public function getOffset()
    {
        return $this->offset;
    }
}

