<?php
namespace concepture\php\data\core\db;

use concepture\php\core\base\Component;
use concepture\php\data\core\data\ReadConditionInterface;
use concepture\php\data\core\db\traits\GroupTrait;
use concepture\php\data\core\db\traits\JoinTrait;
use concepture\php\data\core\db\traits\LimitOffsetTrait;
use concepture\php\data\core\db\traits\OrderTrait;
use concepture\php\data\core\db\traits\SelectionTrait;
use concepture\php\data\core\db\traits\WhereTrait;

/**
 * Class ReadCondition
 * @package concepture\php\data\core\db
 * @author Olzhas Kulzhambekov <exgamer@live.ru>
 */
class ReadCondition extends Component implements ReadConditionInterface
{
    protected $params = [];

    use WhereTrait;
    use JoinTrait;
    use SelectionTrait;
    use OrderTrait;
    use LimitOffsetTrait;
    use GroupTrait;

    /**
     * @return array
     */
    public function getParams(): array
    {
        return $this->params;
    }
}