<?php
namespace concepture\core\base;


use concepture\php\core\base\Component;
use concepture\php\data\core\traits\GroupTrait;
use concepture\php\data\core\traits\JoinTrait;
use concepture\php\data\core\traits\LimitOffsetTrait;
use concepture\php\data\core\traits\OrderTrait;
use concepture\php\data\core\traits\SelectionTrait;
use concepture\php\data\core\traits\WhereTrait;

/**
 * Класс для управления запросом
 *
 * ReadQuery
 *
 * @author citizenzer <exgamer@live.ru>
 */
class ReadCondition extends Component
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