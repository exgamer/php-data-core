<?php
namespace concepture\php\data\core\provider;

use concepture\php\core\base\Component;

/**
 * Базовый класс для постраничного получения данных из хранилища
 *
 * Class DataProvider
 * @author citizenzet <exgamer@live.ru>
 */
abstract class DataProvider extends Component
{
    /**
     * @var array
     */
    private $data = [];
    /**
     * @var int
     */
    private $totalCount = 0;
    /**
     * @var int
     */
    private $page = 1;
    /**
     * @var int
     */
    private $pageSize = 10;
    /**
     * @var array
     */
    private $queryParams = [];
    /**
     * @var array
     */
    protected $dataReceiverConfig = [];
    /**
     * @var string
     */
    private $filterClass = "";

    public function init()
    {
        parent::init();
        $this->execute();
    }

    /**
     * executes data provider
     */
    protected function execute()
    {
        $data = $this->receiveData();
        $this->setData($data);
    }

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
     * @return array
     */
    public function getDataReceiverConfig(): array
    {
        return $this->dataReceiverConfig;
    }

    /**
     * @param array $dataReceiverConfig
     */
    public function setDataReceiverConfig(array $dataReceiverConfig)
    {
        $this->dataReceiverConfig = $dataReceiverConfig;
    }

    /**
     * Устанавливаем кол-во элементов
     *
     * @param integer $value
     */
    public function setTotalCount(int $value)
    {
        $this->totalCount = $value;
    }

    /**
     * Возвращает текущую страницу
     *
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * Устанавливает текущую старницу
     *
     * @param int $page
     */
    public function setPage(int $page)
    {
        $this->page = $page;
    }

    /**
     * Возвращает количество элементов на странице
     *
     * @return int
     */
    public function getPageSize(): int
    {
        return $this->pageSize;
    }

    /**
     * Устанавливает колчесвто элементов на странице
     *
     * @param int $pageSize
     */
    public function setPageSize(int $pageSize)
    {
        $this->pageSize = $pageSize;
    }

    /**
     * Устанавливает данные
     *
     * @param array $data
     */
    public function setData(array $data)
    {
        $this->data = $data;
    }

    /**
     * @return array
     */
    public function getQueryParams() : array
    {
        return $this->queryParams;
    }

    /**
     * @param array $queryParams
     */
    public function setQueryParams(array $queryParams): void
    {
        $this->queryParams = $queryParams;
    }

    /**
     * Возвращает данные
     *
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * returns total rows count
     *
     * @return integer
     */
    public function getTotalCount() : int
    {
        return $this->totalCount;
    }

    /**
     * Возвращает массив данных из хранилища
     *
     * @return array
     */
    protected abstract function receiveData() : array;

    /**
     * @return string
     */
    protected abstract function getDataReceiverClass() : string;

    /**
     * Возвращает DataReceiver
     *
     * @return DataReceiver
     */
    protected function getDataReceiver() : DataReceiver
    {
        $dataReceiverClass = $this->getDataReceiverClass();
        $dataReceiverConfig = $this->getDataReceiverConfig();
        if (! empty($dataReceiverConfig) && isset($dataReceiverConfig['class'])){
            $dataReceiverClass = $dataReceiverConfig['class'];
            unset($dataReceiverConfig['class']);
        }

        return new $dataReceiverClass([
            "dataProvider" => $this,
            "filterClass" => $this->getFilterClass(),
        ]);
    }
}