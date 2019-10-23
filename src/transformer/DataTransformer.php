<?php
namespace concepture\php\data\core\transformer;

use concepture\php\core\base\Component;

/**
 * Class DataTransformer
 * @package concepture\php\logic\core\web\content
 * @author Olzhas Kulzhambekov <exgamer@live.ru>
 */
abstract class DataTransformer extends Component implements DataTransformerInterface
{
    /**
     * @var object
     */
    protected $owner;

    /**
     * @var mixed
     */
    protected $data;

    /**
     * @return object
     */
    public function getOwner() : object
    {
        return $this->owner;
    }

    /**
     * @param object $owner
     */
    public function setOwner(object $owner)
    {
        $this->owner = $owner;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }
}