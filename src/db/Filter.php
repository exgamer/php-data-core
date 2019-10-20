<?php
namespace concepture\php\data\core\db;

use concepture\php\data\core\provider\Filter as Base;

/**
 * Class Filter
 * @package concepture\php\data\core\data
 * @author Olzhas Kulzhambekov <exgamer@live.ru>
 */
abstract class Filter extends Base
{
    /**
     * @var ReadCondition
     */
    private $readCondition;
    /**
     * @var array
     */
    private $params;

    public function init()
    {
        parent::init();
        $this->readCondition = new ReadCondition();
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
     * @return ReadCondition
     */
    public function getReadCondition() : ReadCondition
    {
        return $this->readCondition;
    }

    /**
     * Метод для настройки фильтра
     *
     * @param array $params
     * @param ReadCondition $readCondition
     * @return mixed
     */
    protected abstract function apply(array $params, ReadCondition $readCondition);
}