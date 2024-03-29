<?php
namespace concepture\php\data\core\db\traits;

/**
 * Trait OrderTrait
 * @package concepture\php\query\traits
 * @author Olzhas Kulzhambekov <exgamer@live.ru>
 */
trait OrderTrait
{
    protected $order = "";

    /**
     * @param $order
     * @return $this
     */
    public function order($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrder() : string
    {
        return $this->order;
    }
}

