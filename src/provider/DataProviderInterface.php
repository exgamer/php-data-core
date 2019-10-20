<?php
namespace concepture\php\data\core\provider;

/**
 * Interface DataProviderInterface
 * @package concepture\php\data\core\provider
 * @author citizenzet <exgamer@live.ru>
 */
interface DataProviderInterface
{
    public function getFilterClass();
    public function setFilterClass(string $filterClass);
    public function getDataReceiverConfig(): array;
    public function setDataReceiverConfig(array $dataReceiverConfig);
    public function setTotalCount(int $value);
    public function getTotalCount() : int;
    public function getPage(): int;
    public function setPage(int $page);
    public function getPageSize(): int;
    public function setPageSize(int $pageSize);
    public function setData(array $data);
    public function getQueryParams() : array;
    public function setQueryParams(array $queryParams);
    public function getData(): array;
}