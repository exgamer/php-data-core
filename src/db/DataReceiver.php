<?php
namespace concepture\php\data\core\db;

use concepture\php\data\core\provider\DataReceiver as Base;

/**
 * Class DataReceiver
 * @package concepture\php\data\core\db
 * @author Olzhas Kulzhambekov <exgamer@live.ru>
 */
class DataReceiver extends Base
{
    /**
     * @param ReadCondition $readCondition
     * @return array
     */
    protected function callLogic(ReadCondition $readCondition) : array
    {

    }

    /**
     * @param $readCondition
     * @return array
     */
    protected function getDataTotalCount( ReadCondition $readCondition) : array
    {
        /*
         * Получаем общее количество записей
         */
        $readCondition->select(["COUNT(*) as total"]);

        return $this->callLogic($readCondition);
    }

    /**
     * @param $readCondition
     * @return array
     */
    protected function getData(ReadCondition $readCondition) : array
    {
        /*
         * Возвращает select выборки и запрашиваем данные с учетом ограничений
         */
        $readCondition->limit($this->getDataProvider()->getPageSize());
        $pageSize = $this->getDataProvider()->getPageSize();
        $page = $this->getDataProvider()->getPage();
        $offset = $pageSize * (int) ($page-1);
        $readCondition->offset($offset);

        return $this->callLogic($readCondition);
    }

    /**
     * Возвращает массив данных
     *
     * @return array
     */
    public function receiveData() : array
    {
        $readCondition = $this->getReadCondition();
        $totalCountReadCondition = clone $readCondition;
        $totalCount = $this->getDataTotalCount($totalCountReadCondition);
        $this->getDataProvider()->setTotalCount($totalCount[0]['total']);

        return $this->getData($readCondition);
    }

    /**
     * Возвращает условие выборки
     *
     * @return ReadCondition
     */
    protected function getReadCondition()
    {
        $filterClass = $this->getFilterClass();
        if (! $filterClass) {
            return new ReadCondition();
        }

        $filter = $this->getFilter($filterClass);

        return $filter->getReadCondition();
    }

    /**
     * @param $filterClass
     * @return Filter
     */
    protected function getFilter($filterClass): Filter
    {
        return new $filterClass(['params' => $this->getDataProvider()->getQueryParams()]);
    }
}