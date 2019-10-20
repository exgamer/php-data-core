<?php
namespace concepture\php\data\core\provider;

use concepture\php\core\base\Component;

/**
 * Class DataReceiver
 * @package concepture\php\data\core\data
 * @author Olzhas Kulzhambekov <exgamer@live.ru>
 */
abstract class DataReceiver extends Component implements DataReceiverInterface
{
    /**
     * @var DataProviderInterface
     */
   protected $dataProvider;
    /**
     * @var string
     */
   private $filterClass;

    /**
     * @return string
     */
    public function getFilterClass():string
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
     * @return DataProviderInterface
     */
    protected function getDataProvider(): DataProviderInterface
    {
        return $this->dataProvider;
    }

    /**
     * @param DataProviderInterface $dataProvider
     */
    protected function setDataProvider(DataProviderInterface $dataProvider)
    {
        $this->dataProvider = $dataProvider;
    }
}