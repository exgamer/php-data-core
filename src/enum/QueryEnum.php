<?php

namespace concepture\php\data\core\enum;

use concepture\php\core\enum\Enum;

/**
 * Class QueryEnum
 * @package concepture\php\query\enum
 * @author Olzhas Kulzhambekov <exgamer@live.ru>
 */
class QueryEnum extends Enum
{
    const JOIN = 'JOIN';
    const LEFT_JOIN = 'LEFT JOIN';
    const RIGHT_JOIN = 'RIGHT JOIN';
    const INNER_JOIN = 'INNER JOIN';
    const OUTER_JOIN = 'OUTER JOIN';

    const OPERATOR_AND = 'AND';
    const OPERATOR_OR = 'OR';
}
