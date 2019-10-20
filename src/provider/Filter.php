<?php
namespace concepture\php\data\core\provider;

use concepture\core\base\ReadCondition;
use concepture\php\core\base\Component;
use concepture\php\data\core\data\ReadConditionInterface;

/**
 * Class Filter
 * @package concepture\php\data\core\data
 * @author Olzhas Kulzhambekov <exgamer@live.ru>
 */
abstract class Filter extends Component implements FilterInterface
{
    /**
     * @var ReadConditionInterface
     */
    private $readCondition;
    /**
     * @var array
     */
    private $params;

    public function init()
    {
        parent::init();
        $this->apply($this->getParams(), $this->readCondition);
    }

    /**
     * Возвращает параметры запроса
     *
     * @return array
     */
    protected function getParams() : array
    {
        return $this->params;
    }

    /**
     * Устанавливает параметры запроса
     *
     * @param array $params
     */
    protected function setParams(array $params)
    {
        $this->params = $params;
    }

    /**
     * Возвращает условия выборки
     *
     * @return ReadConditionInterface
     */
    public function getReadCondition() : ReadConditionInterface
    {
        return$this->readCondition;
    }

    /**
     * @param ReadConditionInterface $readCondition
     */
    public function setReadCondition(ReadConditionInterface $readCondition)
    {
        $this->readCondition = $readCondition;
    }

    /**
     * Метод для настройки фильтра
     *
     * @param array $params
     * @param ReadConditionInterface $readCondition
     * @return mixed
     */
    protected abstract function apply(array $params, ReadConditionInterface $readCondition);
}