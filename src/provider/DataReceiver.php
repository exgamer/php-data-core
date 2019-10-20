<?php
namespace concepture\php\data\core\provider;

use concepture\php\core\base\Component;

/**
 * Class DataReceiver
 * @package concepture\php\data\core\data
 * @author Olzhas Kulzhambekov <exgamer@live.ru>
 */
abstract class DataReceiver extends Component
{
    /**
     * @var DataProvider
     */
   protected $dataProvider;
    /**
     * @var string
     */
   private $filterClass;

    /**
     * @return string
     */
    public function getFilterClass()
    {
        return $this->filterClass;
    }

    /**
     * @param string $filterClass
     */
    public function setFilterClass(string $filterClass)
    {
        $this->filterClass = $filterClass;
    }

    /**
     * @return DataProvider
     */
    protected function getDataProvider(): DataProvider
    {
        return $this->dataProvider;
    }

    /**
     * @param DataProvider $dataProvider
     */
    protected function setDataProvider(DataProvider $dataProvider)
    {
        $this->dataProvider = $dataProvider;
    }
   
    /**
     * Возвращает массив данных
     *
     * @return array
     */
    public abstract function receiveData() : array ;
}