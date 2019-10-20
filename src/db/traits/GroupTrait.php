<?php
namespace concepture\php\data\core\db\traits;

/**
 * Trait GroupTrait
 * @package concepture\php\query\traits
 * @author Olzhas Kulzhambekov <exgamer@live.ru>
 */
trait GroupTrait
{
    protected $group = null;

    /**
     * @return string
     */
    public function getGroup() : string
    {
        return $this->group;
    }

    /**
     * @param string $group
     */
    public function group(string $group)
    {
        $this->group = $group;
    }
}

