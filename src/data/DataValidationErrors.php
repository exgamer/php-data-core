<?php
namespace concepture\php\data\core\data;

use concepture\php\core\base\BaseObject;

/**
 * Class DataValidationErrors
 * @package concepture\php\data\core\data
 * @author Olzhas Kulzhambekov <exgamer@live.ru>
 */
class DataValidationErrors extends BaseObject
{
    private $_errors = [];

    /**
     * @return array
     */
    public function getErrors()
    {
        return $this->_errors;
    }

    /**
     * @param array $errors
     */
    public function setErrors($errors)
    {
        $this->_errors = $errors;
    }


}
