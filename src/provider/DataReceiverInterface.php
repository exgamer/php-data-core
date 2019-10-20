<?php
namespace concepture\php\data\core\provider;


interface DataReceiverInterface
{
    public function getFilterClass() : string;
    public function setFilterClass(string $filterClass);
    public function receiveData() : array ;
}